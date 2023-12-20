<?php
$id = $_GET['id'];
echo $id;
$conn = mysqli_connect('localhost', 'root', '', 'briefaftercolab');

$result = mysqli_query($conn, "SELECT * FROM tickets WHERE ticket_id = {$id}");

$output = "";

if ($row = mysqli_fetch_assoc($result)) {
    $output .= '         <div class="bg-white p-6 rounded-md shadow-md">
                            <h2 class="text-2xl font-semibold mb-4">' . $row['title'] . '</h2>
                            <div class="changeperm"  style="float: right;"><button onclick="clickme();" class="button">
                            Mark Done
                          </button></div>
                            <p class="text-gray-600 mb-2">Status: ' . $row['status'] . '</p>
                            <p class="text-gray-600 mb-2">Priority: ' . $row['priority'] . '</p>
                            <p class="text-gray-600 mb-4">Tag: ' . $row['tag'] . '</p>
                
                            <!-- Description -->
                            <div class="border-t border-gray-300 pt-4">
                                <h3 class="text-xl font-semibold mb-2">Description</h3>
                                <p class="text-gray-600">' . $row['description'] . '</p>
                            </div>
                        </div>';
}


echo $output;
?>
