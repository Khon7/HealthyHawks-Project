<?php
    session_start();

?>
<?php
    // getting all values from the HTML form
    if(isset($_POST['submit']))
    {
        $email = $_POST['email'];
        $wickIt = $_POST['password'];


        // database details
        $host = "localhost";
        $username = "root";
        $password = "";
        $dbname = "instructorprofile";

        // creating a connection to the XAMPP database
        $con = mysqli_connect($host, $username, $password, $dbname);

        // to ensure that the connection is made
        if (!$con)
        {
            die("Connection failed!" . mysqli_connect_error());
        }

        // using sql to create a data entry query
        $fullName = $fname . " " . $lname;
        $sql = "SELECT id, wickIt FROM profile WHERE email = '$email'";
        echo "SQL Query: " . $sql . "<br>";

        // Send the query to the database
        $rs = mysqli_query($con, $sql);

        // Check if the query was successful and if a row was returned
        if ($rs && mysqli_num_rows($rs) > 0) {
            // Fetch the wickIt value from the result set
            $row = mysqli_fetch_assoc($rs);
            $retrievedID = $row['id'];
            $retrievedWickIt = $row['wickIt'];


            // Compare the retrieved wickIt value with the submitted password
            if ($retrievedWickIt == $wickIt) {
                // Close the database connection
                mysqli_close($con);

                // initialize session variables

                $_SESSION['loggedIn'] = true;
                $_SESSION['userID'] = $retrievedID;
                $_SESSION['userEmail'] = $email;

                // access session variables
                //echo $_SESSION['userEmail'];

                header('Location: profile.php');
                exit;

            } else {
                echo "Entries added but wickIt does not match!" . "<br>";
                // Close the database connection
                mysqli_close($con);

                header('Location: login.php');
                exit;
            }
        } else {
            echo "No matching entries found!" . "<br>";
            // Close the database connection
            mysqli_close($con);

            header('Location: login.php');
            exit;
        }


    }

?>