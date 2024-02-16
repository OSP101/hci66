<?php
session_start();
if(!isset($_SESSION['rold']) || $_SESSION['rold'] != 3){
    echo "<script>location.replace('/hci66/login/');</script>";
}

?>