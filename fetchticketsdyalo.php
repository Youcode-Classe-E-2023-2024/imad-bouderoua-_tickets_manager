<?php
$id = $_GET['id'];
echo $id;
$conn = mysqli_connect('localhost', 'root', '', 'briefaftercolab');
$output = "";

$result = mysqli_query($conn, "SELECT * FROM tickets WHERE molchi = {$id}");

while ($row = mysqli_fetch_assoc($result)) {
    $output .= '<div class="border border-gray-400 items-center rounded-md p-4 mb-4 bg-white flex justify-between p-5 transition duration-300 ease-in-out hover:shadow-lg">
    <img onclick="deleteelement(this)" key="'.$row['ticket_id'] .'" width="20" height="20" src="https://img.icons8.com/color/20/close-window.png" alt="close-window"/>
    <h2 class="text-xl font-semibold text-gray-800 mb-2">' . $row['title'] . '</h2>
    <p class="text-sm text-gray-600">Status: ' . $row['status'] . '</p>
    <p class="text-sm text-gray-600">Priority: ' . $row['priority'] . '</p>
    <p class="text-sm text-gray-600">Tag: ' . $row['tag'] . '</p>
</div>';
}

echo $output;
mysqli_close($conn);
?>