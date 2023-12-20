<?php
$conn = mysqli_connect('localhost', 'root', '', 'briefaftercolab');
$output = "";

$result = mysqli_query($conn, "SELECT * FROM tickets");

while ($row = mysqli_fetch_assoc($result)) {
    $output .= '<div onclick="setid(this,0)" key="' . $row['ticket_id'] . '" class="border border-gray-300 rounded-md p-4 mb-4 bg-white flex flex-col justify-between transition duration-300 ease-in-out transform hover:shadow-lg hover:border-blue-500 hover:bg-blue-50 cursor-pointer">
    
    <h2 class="text-lg font-semibold text-gray-800 my-2">' . $row['title'] . '</h2>
    <p class="text-sm text-gray-600 mb-2">Status: ' . $row['status'] . '</p>
    <p class="text-sm text-gray-600 mb-2">Priority: ' . $row['priority'] . '</p>
    <p class="text-sm text-gray-600 mb-2">Tag: ' . $row['tag'] . '</p>
</div>';

}

echo $output;
mysqli_close($conn);
?>
