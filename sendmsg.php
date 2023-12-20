<?php
$content = file_get_contents("php://input");
$data = json_decode($content);


if (json_last_error() === JSON_ERROR_NONE) {
    var_dump($data);
    echo $data->message;
    echo $data->id;  
}


$message = $data->message;
$id = $data->id;


$conn = mysqli_connect('localhost','root','','briefaftercolab');
mysqli_query($conn,"INSERT INTO comments (ticket_id,message) VALUES ('$id','$message')");