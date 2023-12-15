<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $loginUsername = $_POST['loginUsername'];
    $loginPassword = $_POST['loginPassword'];

    $conn = mysqli_connect("localhost", "root", "", "briefaftercolab");

    if (!$conn) {
        echo json_encode(array('error' => 'Database connection error: ' . mysqli_connect_error()));
    } else {
        $stmt = mysqli_prepare($conn, "SELECT * FROM users WHERE name = ?");
        mysqli_stmt_bind_param($stmt, "s", $loginUsername);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $row = mysqli_fetch_assoc($result);

        if ($row !== null) {

            if (password_verify($loginPassword, $row['password'])) {
                echo $row['id'];
                http_response_code(200);
            } else {
                http_response_code(300);
                echo json_encode(array('error' => 'Incorrect username or password'));
            }
        } else {
            http_response_code(300);
            echo json_encode(array('error' => 'User not found'));
        }

        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }
} else {
    echo json_encode(array('error' => 'Invalid request method'));
}

?>
