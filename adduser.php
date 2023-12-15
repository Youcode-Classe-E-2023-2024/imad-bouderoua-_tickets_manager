<?php

$jsonData = file_get_contents("php://input");

$data = json_decode($jsonData, true);

if ($data === null) {
    echo json_encode(array('error' => 'Invalid JSON data'));
} else {
    $username = $data['username'];
    $email = $data['email'];
    $password = $data['password'];

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $conn = mysqli_connect("localhost", "root", "", "briefaftercolab");

    if (!$conn) {
        echo json_encode(array('error' => 'Database connection error: ' . mysqli_connect_error()));
    } else {

        $stmt = mysqli_prepare($conn, "INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
        mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPassword);

        if (mysqli_stmt_execute($stmt)) {
            echo json_encode(array('success' => true, 'message' => 'Data received and inserted successfully'));
        } else {
            echo json_encode(array('error' => 'Error inserting data: ' . mysqli_error($conn)));
        }

        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }
}

?>
