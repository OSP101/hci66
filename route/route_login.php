<?php
session_start();

// ตรวจสอบว่า session ถูกต้องหรือไม่
if(isset($_SESSION['rold'])) {
    if($_SESSION['rold'] == 1) {
        echo "<script>location.replace('/hci66/admin/group');</script>";
    } elseif($_SESSION['rold'] == 2) {
        echo "<script>location.replace('/hci66/student/group');</script>";
    } elseif($_SESSION['rold'] == 3) {
        echo "<script>location.replace('/hci66/student/solo');</script>";
    } else {
        // session ไม่ถูกต้องหรือไม่ได้กำหนดค่าให้
        echo "Session ไม่ถูกต้อง";
    }
} else {
}

?>