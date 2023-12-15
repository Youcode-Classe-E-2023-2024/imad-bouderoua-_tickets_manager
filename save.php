<?php

$jsonData = file_get_contents("php://input");
$data = json_decode($jsonData, true);


if ($data === null) {
    echo json_encode(array('error' => 'Invalid JSON data'));
} else {

    $title = $data['title'];
    $tag = $data['Tag'];
    $priority = $data['Priority'];
    $status = $data['Status'];
    $molchi = $data['molchi'];
    $assigned = json_decode($data['assigned'], true);

    $conn = mysqli_connect('localhost', 'root', '', 'briefaftercolab');
    $query = "INSERT INTO tickets (title, tag, priority, status,molchi) VALUES ('$title', '$tag', '$priority', '$status','$molchi')";
    mysqli_query($conn, $query);

    $ticketId = mysqli_insert_id($conn);

    foreach ($assigned as $userId) {
        $query = "INSERT INTO user_ticket_assignments (user_id, ticket_id) VALUES ($userId, $ticketId)";
        mysqli_query($conn, $query);
        echo "User ID: $userId\n";
    }


    echo json_encode(array('success' => true, 'message' => 'Data received and inserted successfully'));
    

    mysqli_close($conn);
}

?>
