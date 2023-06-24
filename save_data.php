<?php
    // Retrieve the column, data type, and value from the AJAX request
    $column = $_POST['column'];
    $dataType = $_POST['dataType'];
    $value = $_POST['value'];

    // Database connection configuration
    $servername = "localhost";
    $username = "admin"; 
    $password = "fitness"; 
    $dbname = "instructorProfile";

    // Create a new database connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Update the database based on the data type
    // Text, Blob, LongBlob
    if ($dataType === 1 || $dataType === 2 || $dataType === 4) {
        // Text or email data type
        $stmt = $conn->prepare("UPDATE Profile SET $column = ? WHERE id = 1"); // Assuming id=1 for the instructor profile
        $stmt->bind_param("s", $value);
        $stmt->execute();
        $stmt->close();
    } else if ($dataType === 3) {
        // Bio (BLOB) data type
            $stmt = $conn->prepare("UPDATE Profile SET bio = ? WHERE id = 1"); // Assuming id=1 for the instructor profile
        $stmt->bind_param("s", $value);
        $stmt->execute();
        $stmt->close();
    } else if ($dataType === 5) {
        // Availability (TEXT) data type
        $stmt = $conn->prepare("UPDATE Profile SET availability = ? WHERE id = 1"); // Assuming id=1 for the instructor profile
        $stmt->bind_param("s", $value);
        $stmt->execute();
        $stmt->close();
    } else if ($dataType === 6) {
        // Picture data type
        $stmt = $conn->prepare("UPDATE Profile SET picture = ? WHERE id = 1"); // Assuming id=1 for the instructor profile
        $stmt->bind_param("s", $value);
        $stmt->execute();
        $stmt->close();
    }

    // Close the database connection
    $conn->close();
?>