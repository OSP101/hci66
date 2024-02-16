<?php
include('../../database/conn.php');

$sql3 = "SELECT * FROM `status` WHERE id = '2'";
$result3 = $conn->query($sql3);

while ($row3 = $result3->fetch_assoc()) {
    if ($row3['statustype'] != "1") {
        $db_datetime2 = new DateTime($row3["datetime"]);
        if ($row3['type'] == "2") {
            echo json_encode(array('success' => true));
        } elseif ($row3['type'] == "3") {
            $db_datetime = new DateTime($row3["datetime"]);
            $current_datetime = new DateTime();
            $current_datetime->setTimezone(new DateTimeZone('Asia/Bangkok'));

            $interval = $db_datetime->diff($current_datetime);

            $remaining_hours = $interval->days * 24 + $interval->h;

            $db_datetime = new DateTime($row3["datetime"], new DateTimeZone('Asia/Bangkok'));
            $current_datetime = new DateTime('now', new DateTimeZone('Asia/Bangkok'));

            $interval = $db_datetime->diff($current_datetime);

            if ($db_datetime > $current_datetime) {
                echo json_encode(array('success' => true));
            } elseif ($db_datetime <= $current_datetime) {
                echo json_encode(array('success' => false));
            }
        }
    } else {
        echo json_encode(array('success' => false));
    }
}

$conn->close();

?>