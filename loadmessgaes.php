<?php
$id = $_GET['id'];

$conn = mysqli_connect('localhost','root','','briefaftercolab');
$result = mysqli_query($conn,"SELECT * from comments WHERE ticket_id = '$id'");
$output = '';
$x = 1;
while($row = mysqli_fetch_assoc($result)){
    $output .= '<div class="bg-white p-4 rounded-md shadow-md mb-4">
        <p class="text-gray-600">Message '. $x .' : '. $row['message'] .'</p>
    </div>';
   $x++;
}
echo $output;