<?php
    session_start();

// ล้างข้อมูล session ทั้งหมด
session_unset();

// ทำลาย session โดยการลบ session ID จากเครื่องลูกของผู้ใช้
// session_destroy();

echo '<script>window.location.href = "/hci66/login";</script>';


?>