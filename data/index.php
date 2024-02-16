<?php
    session_start();

if($_SESSION['rold'] == 1){
echo '<script>window.location.href = "/hci66/admin/solo/";</script>';
}else if($_SESSION['rold'] == 2){
    echo '<script>window.location.href = "/hci66/student/group/";</script>';
}
else if($_SESSION['rold'] == 3){
    echo '<script>window.location.href = "/hci66/student/solo/";</script>';
}
?>


