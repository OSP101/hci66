<?php
session_start();
if(!isset($_SESSION['rold']) || $_SESSION['rold'] != 1){
    echo "<script>location.replace('/hci66/login/');</script>";
}

?>