<?php
    include('../../database/conn.php');

            $username = $_POST['std'];
            $fname = $_POST['fname'];
            $email = $_POST['email'];
            $key = $_POST['key'];
            $section = $_POST['section'];
            $selech = $_POST['selech'];

            if($selech == 1){
                $sql = "INSERT INTO users (`username`, `fname`, `email`, `section`, `passkey`, `rold`) VALUES ('$username','$fname','$email','$section','$key','1')";

                if ($conn->query($sql) === TRUE) {
                    echo "เพิ่มข้อมูลเรียบร้อยแล้ว";
                } else {
                    echo "ผิดพลาดในการเพิ่มข้อมูล: " . $conn->error;
                }
                
                $conn->close();
            }


?>