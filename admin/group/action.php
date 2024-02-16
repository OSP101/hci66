<?php

require_once '../../database/conn.php';

if (isset($_POST['query'])) {
    $inputText = "%".$_POST['query']."%";
    $sql = "SELECT username FROM users WHERE username LIKE ? AND rold = '3'";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $inputText);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<a class="list-group-item list-group-item-action border-1">' . $row['username'] . '</a>';
        }
    } else {
        echo '<p class="list-group-item border-1">No record.</p>';
    }
}

?>
