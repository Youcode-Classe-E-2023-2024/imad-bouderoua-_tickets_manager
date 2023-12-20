<?php
$conn = mysqli_connect('localhost', 'root', '', 'briefaftercolab');


$searchValue = mysqli_real_escape_string($conn, $_GET['searchval']);

$result = mysqli_query($conn, "SELECT * FROM users WHERE name LIKE '%$searchValue%'");
$output = "";

while ($row = mysqli_fetch_assoc($result)) {
    $output .= '<div onclick="asiner(this)" key="' . $row['id'] . '" class=" border-2 border-gray-200 h-10 my-1">' . $row['name'] . '</div>';
}

echo $output;
?>
