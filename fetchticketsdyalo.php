<?php
$id = $_GET['id'];
echo $id;
$conn = mysqli_connect('localhost', 'root', '', 'briefaftercolab');
$output = "";

$result = mysqli_query($conn, "SELECT * FROM tickets WHERE molchi = {$id}");

while ($row = mysqli_fetch_assoc($result)) {
    $output .= '<div class="border border-gray-400 rounded-md p-4 mb-4 bg-white flex flex-col justify-between transition duration-300 ease-in-out transform hover:shadow-lg">
    <img onclick="deleteelement(this)" key="'.$row['ticket_id'] .'" width="20" height="20" src="https://img.icons8.com/color/20/close-window.png" alt="close-window"/>
    <h2 class="text-xl font-semibold text-gray-800 my-2">' . $row['title'] . '</h2>
    <p class="text-sm text-gray-600 mb-2">Status: ' . $row['status'] . '</p>
    <p class="text-sm text-gray-600 mb-2">Priority: ' . $row['priority'] . '</p>
    <p class="text-sm text-gray-600 mb-2">Tag: ' . $row['tag'] . '</p>
</div>';

}

echo $output;
mysqli_close($conn);
?>