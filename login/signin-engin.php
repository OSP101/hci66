<?php
include("../database/conn.php");

// รับข้อมูลจากฟอร์ม
$username = $_POST['username'];
$passkey = $_POST['passkey'];

// ค้นหาในฐานข้อมูล
$sql = "SELECT * FROM users WHERE username='$username' AND passkey='$passkey'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // ถ้าพบข้อมูลผู้ใช้ในฐานข้อมูล
    session_start();

    while ($row = $result->fetch_assoc()) {
        $_SESSION['email'] = $row["email"];
        $_SESSION['username'] = $row["username"];
        $_SESSION['section'] = $row["section"];
        $_SESSION['fname'] = $row["fname"];
        $_SESSION['image'] = $row['image'];

        // ดึง User-Agent จากคำขอ HTTP
        // $user_agent = $_SERVER['HTTP_USER_AGENT'];

        // // ตรวจสอบระบบปฏิบัติการ
        // if (strpos($user_agent, 'Windows') !== false) {
        //     $os = 'Windows';
        // } elseif (strpos($user_agent, 'Macintosh') !== false) {
        //     $os = 'Macintosh';
        // } elseif (strpos($user_agent, 'Linux') !== false) {
        //     $os = 'Linux';
        // } elseif (strpos($user_agent, 'Android') !== false) {
        //     $os = 'Android';
        // }elseif (strpos($user_agent, 'iPhone') !== false) {
        //     $os = 'iPhone';
        // }elseif (strpos($user_agent, 'iPad') !== false) {
        //     $os = 'iPad';
        // }else {
        //     $os = 'ไม่สามารถระบุได้';
        // }

        // // ตรวจสอบเบราว์เซอร์
        // if (strpos($user_agent, 'Chrome') !== false) {
        //     $browser = 'Google Chrome';
        // } elseif (strpos($user_agent, 'Firefox') !== false) {
        //     $browser = 'Mozilla Firefox';
        // } elseif (strpos($user_agent, 'Safari') !== false) {
        //     $browser = 'Safari';
        // } else {
        //     $browser = 'ไม่สามารถระบุได้';
        // }

        $user_agent = $_SERVER['HTTP_USER_AGENT'];

        function parseUserAgent($user_agent) {
            $os = '';
            $browser = '';
            $browser_version = '';
        
            // ตรวจสอบระบบปฏิบัติการ
            if (preg_match('/\((.*?)\)/', $user_agent, $matches)) {
                $os = $matches[1];
            }
        
            // ตรวจสอบเบราว์เซอร์
            if (strpos($user_agent, 'Edge') !== false) {
                $browser = 'Edge';
                if (preg_match('/Edge\/([\d\.]+)/', $user_agent, $matches)) {
                    $browser_version = $matches[1];
                }
            } elseif (strpos($user_agent, 'Chrome') !== false) {
                $browser = 'Chrome';
                if (preg_match('/Chrome\/([\d\.]+)/', $user_agent, $matches)) {
                    $browser_version = $matches[1];
                }
            } elseif (strpos($user_agent, 'Safari') !== false && strpos($user_agent, 'Version') !== false) {
                $browser = 'Safari';
                if (preg_match('/Version\/([\d\.]+)/', $user_agent, $matches)) {
                    $browser_version = $matches[1];
                }
            } elseif (strpos($user_agent, 'Firefox') !== false) {
                $browser = 'Firefox';
                if (preg_match('/Firefox\/([\d\.]+)/', $user_agent, $matches)) {
                    $browser_version = $matches[1];
                }
            } else {
                $browser = 'Unknown';
            }
        
            return array(
                'osv' => $os,
                'browser' => $browser,
                'browser_versions' => $browser_version
            );
        }
        
        $user_info = parseUserAgent($user_agent);
        $os = $user_info['osv'];
        $Brow = $user_info['browser'];
        $Vers = $user_info['browser_versions'];
        
        $detail = "OS: $os | Browser: $Brow $Vers";
        $user_ip = $_SERVER['REMOTE_ADDR'];
        
        $sqllog = "INSERT INTO `log`(`userid`, `type`, `ip`, `detail`) VALUES ('$username','Authentication','$user_ip','$detail')";
        $conn->query($sqllog);
        
        // ตรวจสอบก่อนเข้าถึงดัชนีของอาร์เรย์
        if (isset($row['rold'])) {
            // ส่งไปยังหน้า group.php โดยขึ้นอยู่กับค่า 'rold'
            if ($row['rold'] == 1) {
                $_SESSION['rold'] = 1;
                header("Location: /hci66/admin/group");
                exit();
            } else if ($row['rold'] == 2) {
                $_SESSION['rold'] = 2;
                header("Location: /hci66/student/group");
                exit();
            } else {
                $_SESSION['rold'] = 3;
                header("Location: /hci66/student/solo");
                exit();
            }
        } else {
            // ถ้าไม่มีค่า 'rold' ในอาร์เรย์ $row
            echo '<script>alert("ข้อมูลผู้ใช้ไม่ถูกต้อง");</script>';
            echo '<script>window.location.href = "/hci66/login";</script>';
        }
    }
} else {
    // ถ้าไม่พบข้อมูลผู้ใช้
    echo '<script>alert("ไม่พบข้อมูลผู้ใช้นี้");</script>';
    echo '<script>window.location.href = "/hci66/login";</script>';
}


$conn->close();
?>