<?php
$id = $_GET['id'];
echo $id;
$conn = mysqli_connect('localhost', 'root', '', 'briefaftercolab');
$output = "";

$result = mysqli_query($conn, "SELECT *
FROM tickets
JOIN user_ticket_assignments ON tickets.ticket_id = user_ticket_assignments.ticket_id
WHERE user_ticket_assignments.user_id = {$id};
");

while ($row = mysqli_fetch_assoc($result)) {
    $output .= '<div onclick="setid(this, 1)"
    key="' . $row['ticket_id'] . '" class="border border-gray-400 items-center rounded-md p-4 mb-4 bg-white flex justify-between p-5 transition duration-300 ease-in-out hover:shadow-lg">
    <h2 class="text-xl font-semibold text-gray-800 mb-2">' . $row['title'] . '</h2>
    <p class="text-sm text-gray-600">Status: ' . $row['status'] . '</p>
    <p class="text-sm text-gray-600">Priority: ' . $row['priority'] . '</p>
    <p class="text-sm text-gray-600">Tag: ' . $row['tag'] . '</p>
</div>';
}

echo $output;
mysqli_close($conn);
?>