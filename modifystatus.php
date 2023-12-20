<?php
$jsonData = file_get_contents("php://input");

$data = json_decode($jsonData, true);

$conn = mysqli_connect('localhost', 'root', '', 'briefaftercolab');

$dataId = mysqli_real_escape_string($conn, $data['id']);

$result = mysqli_query($conn, "UPDATE tickets SET status = 'closed' WHERE ticket_id = '$dataId'");
