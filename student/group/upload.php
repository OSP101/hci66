<?php
include('../../route/route_student_group.php');
$email = $_SESSION['email'];
$userid = $_SESSION['username'];
$section = $_SESSION['section'];
$image = $_SESSION['image'];
$fname = $_SESSION['fname'];
$_SESSION['statusaddd'] = 1;



include('../../database/conn.php');

    $date1 = date("Ymd_His");
    $numrand = mt_rand();
    $files_length = $_POST['files_length'];
?>
<?php
    if($files_length > 0){
        for($i = 0; $i < $files_length; $i++){
            // get file using same key name used during appending
            $file = $_FILES['file'.$i];
            $typefile = strrchr($file['name'],".");
            $upload = $file['name'];
            $path = "../../data/" . $userid . "/";
            $newname = 'doc_' . $numrand . $date1 . "_" . $i.$typefile;
            $path_copy = $path . $newname;
            $filesize = $file['size'];
    
    
            // upload file now
            move_uploaded_file($file['tmp_name'], $path_copy);
            $sql2 = "INSERT INTO `file`(`userid`, `orginal`, `hash`,`filesize`,`filetype`) VALUES ('$userid','$upload','$newname','$filesize','$typefile')";
            $conn->query($sql2);
        }


    $datetime = new DateTime();
    $datetime->setTimezone(new DateTimeZone('Asia/Bangkok'));
    $datetime_str = $datetime->format('Y-m-d H:i:s');
    $sql3 = "UPDATE `users` SET `update_at`= '$datetime_str' WHERE `username` = '$userid'";

    $user_ip = $_SERVER['REMOTE_ADDR'];
        
    $sqllog = "INSERT INTO `log`(`userid`, `type`, `ip`, `detail`) VALUES ('$userid','File','$user_ip','Upload File')";
    $conn->query($sqllog);
    if ($conn->query($sql3) == TRUE) {
        $_SESSION['statusaddd'] = 1;
        header("Location: /hci66/student/group/");
    } else {
        $_SESSION['statuserr'] = 1;
        echo '<script>window.location.href = "/hci66/student/group"</script>';
    }
    }


    $conn->close();


?>