<?php
    session_start();

    if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true) {
        echo $_SESSION['loggedIn'];
        echo $_SESSION['userID'];
        echo $_SESSION['userEmail'];
    }
?>
<?php
    // getting all values from the HTML form
    if(isset($_POST['submitCode']))
    {
        $code = $_POST['accessCode'];


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
        $sql = "SELECT idCode FROM accessCode";
        echo "SQL Query: " . $sql . "<br>";

        // Send the query to the database
        $rs = mysqli_query($con, $sql);

        // Check if the query was successful and if a row was returned
        if ($rs && mysqli_num_rows($rs) > 0) {
            // Fetch the wickIt value from the result set
            $row = mysqli_fetch_assoc($rs);
            $retrievedIdCode = $row['idCode'];


            // Compare the retrieved wickIt value with the submitted password
            if ($retrievedIdCode == $code) {
                // Close the database connection
                mysqli_close($con);

                header('Location: register.php');
                exit;

            } else {
                echo "Entries added but wickIt does not match!" . "<br>";
                // Close the database connection
                mysqli_close($con);

                header('Location: regCode.php');
                exit;
            }
        } else {
            echo "No matching entries found!" . "<br>";
            // Close the database connection
            mysqli_close($con);

            header('Location: regCode.php');
            exit;
        }
    }


    // getting all values from the HTML form
    if(isset($_POST['submit']))
    {
        $fname = $_POST['firstName'];
        $lname = $_POST['lastName'];
        $email = $_POST['email'];
        $wickIt = $_POST['password'];

        echo "First Name: " . $fname . "<br>";
        echo "Last Name: " . $lname . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Password: " . $wickIt . "<br>";

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
        } else {
            print 'Success';

        }

        // using sql to create a data entry query
        $fullName = $fname . " " . $lname;
        $sql = "INSERT INTO profile (fullName, wickIt, email)
                VALUES ('$fullName', $wickIt, '$email')";

        //$sql = "SELECT wickIt FROM profile WHERE fullName = '$fullName' AND email = '$email'";
        echo "SQL Query: " . $sql . "<br>";

        if ($con->query($sql) === TRUE) {

            // initialize session variables
            $_SESSION['userEmail'] = $email;


            $sql = "SELECT id FROM profile WHERE email = '$email'";

            // Send the query to the database
            $rs = mysqli_query($con, $sql);

            // Check if the query was successful and if a row was returned
            if ($rs && mysqli_num_rows($rs) > 0) {
                // Fetch the wickIt value from the result set
                $row = mysqli_fetch_assoc($rs);
                $retrievedID = $row['id'];

            }
            $_SESSION['userID'] = $retrievedID;
            $_SESSION['loggedIn'] = true;

            // access session variables
            //echo $_SESSION['userEmail'];

            header('Location: profile.php');
            exit;

        } else {
            echo "Error: " . $sql . "<br>" . $con->error;

            $con->close();
            header('Location: register.html');
            exit;

        }
    }
?>



