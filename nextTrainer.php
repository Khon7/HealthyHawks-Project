<?php
    session_start();

    $server = 'database-1.cvzlflgjxjpj.us-east-1.rds.amazonaws.com';
    $con = new mysqli($server, 'admin', 'HealthyHawks', 'instructorProfile', '3306');

    $id = $_SESSION['userID1'];
    $sql = "SELECT * FROM Profile";

    // Send the query to the database
    $rs = mysqli_query($con, $sql);

    if (mysqli_num_rows($rs) > $_SESSION['userID1']) {
        $id = ++$_SESSION['userID1'];

        $sql = "SELECT * FROM Profile WHERE id = $id";
        $rs = mysqli_query($con, $sql);

        // Check if the query was successful and if a row was returned
        if ($rs && mysqli_num_rows($rs) > 0) {
            $row = mysqli_fetch_assoc($rs);

            $_SESSION['default'] = true;
            $_SESSION['userID1'] = $row['id'];
            $_SESSION['fullName1'] = $row['fullName'];
            $_SESSION['bio1'] = $row['bio'];
            $_SESSION['availabiltyM1'] = $row['availabilityM'];
            $_SESSION['availabiltyA1'] = $row['availabilityA'];
            $_SESSION['availabiltyE1'] = $row['availabilityE'];
            $_SESSION['picture1'] = $row['picture'];

            echo "success";

        }

    }


    mysqli_close($con);
    //header('Location: profile.php');
?>
