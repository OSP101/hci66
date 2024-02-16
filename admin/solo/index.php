<?php
include('../../route/route_admin.php');

$email = $_SESSION['email'];
$username = $_SESSION['username'];
$section = $_SESSION['section'];
$fname = $_SESSION['fname'];
$image = $_SESSION['image'];

include('../../database/conn.php');

$sql = "SELECT * FROM users WHERE rold = 3";
$result = $conn->query($sql);

$sql2 = "SELECT * FROM users WHERE rold = 3";
$result2 = $conn->query($sql);

$sql1 = "SELECT * FROM `status` WHERE id = '2'";
$result1 = $conn->query($sql1);
?>
<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
    data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>งานเดี่ยว - hci66</title>

    <meta name="description" content="" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />


    <link rel="stylesheet" href="../../assets/vendor/fonts/boxicons.css" />


    <link rel="stylesheet" href="../../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />


    <link rel="stylesheet" href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="../../assets/vendor/libs/apex-charts/apex-charts.css" />


    <script src="../../assets/vendor/js/helpers.js"></script>
    <script src="../../assets/js/config.js"></script>


</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="index.html" class="app-brand-link">
                        <span class="app-brand-logo demo">
                        </span>
                        <span class="app-brand-text menu-text fw-bolder ms-2">HCI admin</span>
                    </a>

                    <a href="javascript:void(0);"
                        class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">

                    <li class="menu-item ">
                        <a href="../group/" class="menu-link">

                            <div data-i18n="Analytics">งานกลุ่ม</div>
                        </a>
                    </li>


                    <li class="menu-item active  ">
                        <a href="../solo/" class="menu-link">

                            <div data-i18n="Analytics">งานเดี่ยว</div>
                        </a>
                    </li>
                    <li class="menu-item ">
                        <a href="../all/" class="menu-link">

                            <div data-i18n="Analytics">นักศึกษาทั้งหมด</div>
                        </a>
                    </li>
                    <li class="menu-item ">
                        <a href="../log/" class="menu-link">

                            <div data-i18n="Analytics">บันทึกการเข้าใช้</div>
                        </a>
                    </li>

                </ul>
                <div class="m-3 text-body-secondary">
          <small>
            ©
            <script>
              document.write(new Date().getFullYear());
            </script> HCI v0.4 All Rights Reserved. <br>
            made with by <a href="http://github.com/OSP101" target="_blank">OSP101</a> and <a
              href="http://www.facebook.com/picha143" target="_blank" rel="noopener noreferrer">Aomsin</a>

          </small>
        </div>
            </aside>
            <!-- / Menu -->


            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <h4>งานเดี่ยว</h4>
                        <ul class="navbar-nav flex-row align-items-center ms-auto">

                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="<?php echo $image; ?>" alt class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">



                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="<?php echo $image; ?>" alt
                                                            class="w-px-40 h-auto rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-semibold d-block">
                                                        <?php echo $fname ?>
                                                    </span>
                                                    <small class="text-muted">Admin</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/hci66/logout/logout-engin.php">
                                            <i class="bx bx-power-off me-2"></i>
                                            <span class="align-middle">Log Out</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                </nav>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">


                    <div class="container-xxl flex-grow-1 container-p-y">

                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-primary me-2" data-bs-toggle="modal"
                                data-bs-target="#basicModal">
                                ตั้งค่าการเปิดรับ-ส่งงาน
                            </button>

                            <button class="btn btn-primary me-md-2" type="button" data-bs-toggle="modal"
                                data-bs-target="#add">เพิ่มกลุ่ม</button>
                        </div>




                        <div class="modal fade" id="add" tabindex="-1" style="display: none;" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">เพิ่มกลุ่ม</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>

                                            <div class="mb-2">
                                                <label for="recipient-name" class="col-form-label">หัวข้อ:</label>
                                                <input type="text" class="form-control" id="recipient-name"
                                                    name="topic">
                                            </div>
                                            <div class="mb-2">
                                                <label for="recipient-name" class="col-form-label">Username:</label>
                                                <input type="text" class="form-control" id="recipient-name"
                                                    name="username">
                                            </div>

                                            <div class="row g-4">
                                                <div class="col-md-6">
                                                    <label for="inputCity1" class="form-label">STDID 1:</label>
                                                    <input type="text" class="form-control" id="inputCity1" name="std1">
                                                    <div class="list-group" style="position: absolute; width: 220px;"
                                                        id="show-list1"></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="inputCity2" class="form-label">STDID 2:</label>
                                                    <input type="text" class="form-control" id="inputCity2" name="std2">
                                                    <div class="list-group" style="position: absolute; width: 220px;"
                                                        id="show-list2"></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="inputCity3" class="form-label">STDID 3:</label>
                                                    <input type="text" class="form-control" id="inputCity3" name="std3">
                                                    <div class="list-group" style="position: absolute; width: 220px;"
                                                        id="show-list3"></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="inputCity4" class="form-label">STDID 4:</label>
                                                    <input type="text" class="form-control" id="inputCity4" name="std4">
                                                    <div class="list-group" style="position: absolute; width: 220px;"
                                                        id="show-list4"></div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">ปิด</button>
                                        <button type="button" class="btn btn-primary">บันทึก</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="delete" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="delete">Delete group</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        คุณแน่ใจที่จะลบกลุ่ม ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger">Delete</button>
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>

                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="modal fade" id="basicModal" tabindex="-1" style="display: none;" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel1">ตั้งค่าการรับงาน</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form action="/hci66/admin/solo/" method="post">
                            <div class="modal-body">
                                <?php
                                    while ($row1 = $result1->fetch_assoc()) {
                                        ?>

                                <input type="hidden" name="typestatus" value="1">
                                <div class="row g-3 align-content-center justify-content-center">
                                    <div class="col">
                                        <input class="form-check-input" type="radio" name="type" id="flexRadioDefault1"
                                            value="1" <?php echo ($row1['type'] == "1") ? "checked" : ""; ?>>
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            ปิดการรับ
                                        </label>
                                    </div>
                                    <div class="col">
                                        <input class="form-check-input" type="radio" name="type" id="flexRadioDefault2"
                                            value="2" <?php echo ($row1['type'] == "2") ? "checked" : ""; ?>>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            เปิดการรับ
                                        </label>
                                    </div>
                                    <div class="col">
                                        <div class="input-group">
                                            <div class="input-group-text">
                                                <input class="form-check-input mt-0" type="radio" id="flexRadioDefault3"
                                                    name="type" value="3"
                                                    <?php echo ($row1['type'] == "3") ? "checked" : ""; ?>>
                                            </div>
                                            <input type="datetime-local" for="flexRadioDefault3" class="form-control"
                                                id="customInput" name="date"
                                                value="<?php echo ($row1['type'] == "3") ? $row1['datetime'] : ""; ?>"
                                                aria-label="Text input with radio button">
                                        </div>
                                    </div>
                                </div>

                                <?php
                                    }
                                    ?>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
                                <button type="submit" class="btn btn-primary">บันทึก</button>
                            </div>
                        </form>
                                </div>
                            </div>
                        </div>

                        <div class="nav-align-top mb-4">
                            <ul class="nav nav-tabs" role="tablist">

                                <li class="nav-item">
                                    <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                                        data-bs-target="#navs-top-home" aria-controls="navs-top-home"
                                        aria-selected="true">
                                        Section 1
                                    </button>
                                </li>
                                <li class="nav-item">
                                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                        data-bs-target="#navs-top-Section-2" aria-controls="navs-top-Section-2"
                                        aria-selected="false">
                                        Section 2
                                    </button>
                                </li>
                                <li class="nav-item">
                                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                        data-bs-target="#navs-top-Section-3" aria-controls="navs-top-Section-3"
                                        aria-selected="false">
                                        Section 3
                                    </button>
                                </li>
                                <li class="nav-item">
                                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                        data-bs-target="#navs-top-Section-4" aria-controls="navs-top-Section-4"
                                        aria-selected="false">
                                        Section 4
                                    </button>
                                </li>

                            </ul>
                            <div class="tab-content  solo">
                                <div class="tab-pane fade active show" id="navs-top-home" role="tabpanel">

                                    <h5 class="card-header">Section 1</h5>
                                    <div class="d-grid gap-2 d-md-flex align-items-center">

                                        <?php
                                        $sql5 = "SELECT COUNT(username) FROM `users` WHERE `section` = '1' and `rold` = '3'";
                                        $result5 = $conn->query($sql5);
                                        while ($row5 = $result5->fetch_assoc()) {
                                            $count5 = $row5['COUNT(username)'];
                                            ?>
                                            <div class="card bg-secondary text-white bg-opacity-75 mb-2"
                                                style="width: 14rem;">
                                                <div class="card-body">
                                                    <p class="card-title text-sm">จำนวนนักศึกษาทั้งหมด</p>
                                                    <b>
                                                        <p class="card-text">
                                                            <?php echo $count5 ?> คน
                                                        </p>
                                                    </b>
                                                </div>
                                            </div>
                                            <?php
                                        }

                                        $sql6 = "SELECT COUNT(DISTINCT file.userid) 
                                                FROM file 
                                                JOIN (
                                                    SELECT userid, COUNT(*) AS file_count
                                                    FROM file
                                                    GROUP BY userid
                                                ) AS file_counts ON file.userid = file_counts.userid 
                                                JOIN users ON file.userid = users.username 
                                                WHERE users.section = 1 AND users.rold = 3 AND file_counts.file_count >= 1;";
                                        $result6 = $conn->query($sql6);
                                        while ($row6 = $result6->fetch_assoc()) {
                                            $count6 = $row6['COUNT(DISTINCT file.userid)'];

                                            ?>

                                            <div class="card bg-success text-white bg-opacity-75 mb-2"
                                                style="width: 12rem;">
                                                <div class="card-body">
                                                    <p class="card-title text-sm">จำนวนที่ส่งงาน</p>
                                                    <b>
                                                        <p class="card-text">
                                                            <?php echo $count6 ?> คน
                                                        </p>
                                                    </b>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                        $sql6_sec1 = "SELECT COUNT(DISTINCT file.userid) 
                                        FROM file 
                                        JOIN (
                                            SELECT userid, COUNT(*) AS file_count
                                            FROM file
                                            GROUP BY userid
                                        ) AS file_counts ON file.userid = file_counts.userid 
                                        JOIN users ON file.userid = users.username 
                                        WHERE users.section = 1 AND users.rold = 3 AND file_counts.file_count >= 1;";
                                        $result6_sec1 = $conn->query($sql6_sec1);
                                        $sql7 = "SELECT COUNT(username) FROM `users` WHERE `section` = '1' AND `rold` = '3'";
                                        $result7 = $conn->query($sql7);
                                        while ($row7 = $result7->fetch_assoc()) {
                                            while ($row6_sec1 = $result6_sec1->fetch_assoc()) {
                                                $count6_sec1 = $row6_sec1['COUNT(DISTINCT file.userid)'];
                                                $count7 = $row7['COUNT(username)'];
                                                $count7_sec1 = $count7 - $count6_sec1;
                                                ?>
                                                <div class="card bg-danger text-white bg-opacity-75 mb-2" style="width: 12rem;">
                                                    <div class="card-body">
                                                        <p class="card-title text-sm">จำนวนที่ไม่ส่งงาน</p>
                                                        <b>
                                                            <p class="card-text">
                                                                <?php echo $count7_sec1 ?> คน
                                                            </p>
                                                        </b>
                                                    </div>
                                                </div>
                                                <?php

                                            }
                                        }
                                        ?>
                                    </div>
                                    <div id="tableflow" class="overflow-y-scroll mt-3">
                                        <div class="table-responsive text-nowrap">
                                            <table class="table">
                                                <thead>
                                                    <tr class="text-nowrap">
                                                        <th>#</th>
                                                        <th>ชื่อผู้ใช้งาน</th>
                                                        <th style="width: 700px;">ชื่อ - นามสกุล</th>
                                                        <th>อัปเดตล่าสุด</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php

                                                    if ($result->num_rows > 0) {
                                                        // ถ้าพบข้อมูลผู้ใช้ในฐานข้อมูล
                                                        $count1 = 1;
                                                        while ($row = $result->fetch_assoc()) {
                                                            if ($row['section'] == 1) {
                                                                $usernamedet = $row['username'];
                                                                $sql_det_sec1 = "SELECT COUNT(userid) FROM `file` WHERE `userid` = '$usernamedet'";
                                                                $result_det_sec1 = $conn->query($sql_det_sec1);
                                                                while ($row_det_sec1 = $result_det_sec1->fetch_assoc()) {
                                                                    ?>
                                                                    <tr>
                                                                        <th scope="row">
                                                                            <?php echo $count1 ?>
                                                                        </th>
                                                                        <td><a
                                                                                href="/hci66/admin/solo/upload.php?id=<?php echo $row['username'] ?>">
                                                                                <?php echo $row['username'] ?>
                                                                            </a></td>

                                                                        <td>
                                                                            <?php echo $row['fname'] ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo ($row_det_sec1['COUNT(userid)'] == 0 ? "ไม่มีการส่งงาน" : $row['update_at']) ?>
                                                                        </td>
                                                                    </tr>

                                                                    <?php

                                                                    $count1++;
                                                                }
                                                            }
                                                        }
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="navs-top-Section-2" role="tabpane2">
                                    <h5 class="card-header">Section 2</h5>
                                    <div class="d-grid gap-2 d-md-flex align-items-center">

                                        <?php
                                        $sql8 = "SELECT COUNT(username) FROM `users` WHERE `section` = '2' and `rold` = '3'";
                                        $result8 = $conn->query($sql8);
                                        while ($row8 = $result8->fetch_assoc()) {
                                            $count8 = $row8['COUNT(username)'];
                                            ?>
                                            <div class="card bg-secondary text-white bg-opacity-75 mb-2"
                                                style="width: 14rem;">
                                                <div class="card-body">
                                                    <p class="card-title text-sm">จำนวนนักศึกษาทั้งหมด</p>
                                                    <b>
                                                        <p class="card-text">
                                                            <?php echo $count8 ?> คน
                                                        </p>
                                                    </b>
                                                </div>
                                            </div>
                                            <?php
                                        }

                                        $sql9 = "SELECT COUNT(DISTINCT file.userid) 
                                        FROM file 
                                        JOIN (
                                            SELECT userid, COUNT(*) AS file_count
                                            FROM file
                                            GROUP BY userid
                                        ) AS file_counts ON file.userid = file_counts.userid 
                                        JOIN users ON file.userid = users.username 
                                        WHERE users.section = 2 AND users.rold = 3 AND file_counts.file_count >= 1;";
                                        $result9 = $conn->query($sql9);
                                        while ($row9 = $result9->fetch_assoc()) {
                                            $count9 = $row9['COUNT(DISTINCT file.userid)'];
                                            ?>
                                            <div class="card bg-success text-white bg-opacity-75 mb-2"
                                                style="width: 12rem;">
                                                <div class="card-body">
                                                    <p class="card-title text-sm">จำนวนที่ส่งงาน</p>
                                                    <b>
                                                        <p class="card-text">
                                                            <?php echo $count9 ?> คน
                                                        </p>
                                                    </b>
                                                </div>
                                            </div>
                                            <?php
                                        }

                                        $sql9_sec2 = "SELECT COUNT(DISTINCT file.userid) 
                                        FROM file 
                                        JOIN (
                                            SELECT userid, COUNT(*) AS file_count
                                            FROM file
                                            GROUP BY userid
                                        ) AS file_counts ON file.userid = file_counts.userid 
                                        JOIN users ON file.userid = users.username 
                                        WHERE users.section = 2 AND users.rold = 3 AND file_counts.file_count >= 1;";
                                        $result9_sec2 = $conn->query($sql9_sec2);
                                        $sql10 = "SELECT COUNT(username) FROM `users` WHERE `section` = '2' AND `rold` = '3'";
                                        $result10 = $conn->query($sql10);
                                        while ($row10 = $result10->fetch_assoc()) {
                                            while ($row6_sec2 = $result9_sec2->fetch_assoc()) {
                                                $count6_sec2 = $row6_sec2['COUNT(DISTINCT file.userid)'];
                                                $count10 = $row10['COUNT(username)'];
                                                $count10_sec2 = $count10 - $count6_sec2;
                                                ?>
                                                <div class="card bg-danger text-white bg-opacity-75 mb-2" style="width: 12rem;">
                                                    <div class="card-body">
                                                        <p class="card-title text-sm">จำนวนที่ไม่ส่งงาน</p>
                                                        <b>
                                                            <p class="card-text">
                                                                <?php echo $count10_sec2 ?> คน
                                                            </p>
                                                        </b>
                                                    </div>
                                                </div>
                                                <?php

                                            }
                                        }
                                        ?>
                                    </div>
                                    <div id="tableflow" class="overflow-y-scroll mt-3">
                                        <div class="table-responsive text-nowrap">
                                            <table class="table">
                                                <thead>
                                                    <tr class="text-nowrap">
                                                        <th>#</th>
                                                        <th>ชื่อผู้ใช้งาน</th>
                                                        <th style="width: 700px;">ชื่อ - นามสกุล</th>
                                                        <th>อัปเดตล่าสุด</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $sql_sec2 = "SELECT * FROM users WHERE rold = 3";
                                                    $result_sec2 = $conn->query($sql_sec2);
                                                    if ($result_sec2->num_rows > 0) {
                                                        $count1_sec2 = 1;
                                                        while ($row_sec2 = $result_sec2->fetch_assoc()) {
                                                            if ($row_sec2['section'] == 2) {
                                                                $usernamedet = $row_sec2['username'];
                                                                $sql_det_sec2 = "SELECT COUNT(userid) FROM `file` WHERE `userid` = '$usernamedet'";
                                                                $result_det_sec2 = $conn->query($sql_det_sec2);
                                                                while ($row_det_sec2 = $result_det_sec2->fetch_assoc()) {
                                                                    ?>
                                                                    <tr>
                                                                        <th scope="row">
                                                                            <?php echo $count1_sec2 ?>
                                                                        </th>
                                                                        <td><a
                                                                                href="/hci66/admin/solo/upload.php?id=<?php echo $row_sec2['username'] ?>">
                                                                                <?php echo $row_sec2['username'] ?>
                                                                            </a></td>

                                                                        <td>
                                                                            <?php echo $row_sec2['fname'] ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo ($row_det_sec2['COUNT(userid)'] == 0 ? "ไม่มีการส่งงาน" : $row_sec2['update_at']) ?>
                                                                        </td>
                                                                    </tr>
                                                                    <?php

                                                                    $count1_sec2++;
                                                                }
                                                            }
                                                        }
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="navs-top-Section-3" role="tabpanel">
                                    <h5 class="card-header">Section 3</h5>
                                    <div class="d-grid gap-2 d-md-flex align-items-center">

                                        <?php
                                        $sql8_sec3 = "SELECT COUNT(username) FROM `users` WHERE `section` = '3' and `rold` = '3'";
                                        $result8_sec3 = $conn->query($sql8_sec3);
                                        while ($row8_sec3 = $result8_sec3->fetch_assoc()) {
                                            $count8_sec3 = $row8_sec3['COUNT(username)'];
                                            ?>
                                            <div class="card bg-secondary text-white bg-opacity-75 mb-2"
                                                style="width: 14rem;">
                                                <div class="card-body">
                                                    <p class="card-title text-sm">จำนวนนักศึกษาทั้งหมด</p>
                                                    <b>
                                                        <p class="card-text">
                                                            <?php echo $count8_sec3 ?> คน
                                                        </p>
                                                    </b>
                                                </div>
                                            </div>
                                            <?php
                                        }

                                        $sql9_sec3 = "SELECT COUNT(DISTINCT file.userid) 
                          FROM file 
                          JOIN (
                              SELECT userid, COUNT(*) AS file_count
                              FROM file
                              GROUP BY userid
                          ) AS file_counts ON file.userid = file_counts.userid 
                          JOIN users ON file.userid = users.username 
                          WHERE users.section = 3 AND users.rold = 3 AND file_counts.file_count >= 1;";
                                        $result9_sec3 = $conn->query($sql9_sec3);
                                        while ($row9_sec3 = $result9_sec3->fetch_assoc()) {
                                            $count9_sec3 = $row9_sec3['COUNT(DISTINCT file.userid)'];
                                            ?>
                                            <div class="card bg-success text-white bg-opacity-75 mb-2"
                                                style="width: 12rem;">
                                                <div class="card-body">
                                                    <p class="card-title text-sm">จำนวนที่ส่งงาน</p>
                                                    <b>
                                                        <p class="card-text">
                                                            <?php echo $count9_sec3 ?> คน
                                                        </p>
                                                    </b>
                                                </div>
                                            </div>
                                            <?php
                                        }

                                        $sql_sec3 = "SELECT COUNT(DISTINCT file.userid) 
                          FROM file 
                          JOIN (
                              SELECT userid, COUNT(*) AS file_count
                              FROM file
                              GROUP BY userid
                          ) AS file_counts ON file.userid = file_counts.userid 
                          JOIN users ON file.userid = users.username 
                          WHERE users.section = 3 AND users.rold = 3 AND file_counts.file_count >= 1;";
                                        $result_sec3 = $conn->query($sql_sec3);

                                        $sql10_sec3 = "SELECT COUNT(username) FROM `users` WHERE `section` = '3' AND `rold` = '3' AND `update_at` IS NULL";
                                        $result10_sec3 = $conn->query($sql10_sec3);
                                        while ($row10_sec3 = $result10_sec3->fetch_assoc()) {
                                            $count10_sec3 = $row10_sec3['COUNT(username)'];

                                            while ($row_sec3 = $result_sec3->fetch_assoc()) {
                                                $count_sec3 = $row_sec3['COUNT(DISTINCT file.userid)'];
                                                $count_sec3_new = $count10_sec3 - $count_sec3;

                                                ?>
                                                <div class="card bg-danger text-white bg-opacity-75 mb-2" style="width: 12rem;">
                                                    <div class="card-body">
                                                        <p class="card-title text-sm">จำนวนที่ไม่ส่งงาน</p>
                                                        <b>
                                                            <p class="card-text">
                                                                <?php echo $count_sec3_new ?> คน
                                                            </p>
                                                        </b>
                                                    </div>
                                                </div>
                                                <?php

                                            }
                                        }
                                        ?>
                                    </div>
                                    <div id="tableflow" class="overflow-y-scroll mt-3">
                                        <div class="table-responsive text-nowrap">
                                            <table class="table">
                                                <thead>
                                                    <tr class="text-nowrap">
                                                        <th>#</th>
                                                        <th>ชื่อผู้ใช้งาน</th>
                                                        <th style="width: 700px;">ชื่อ - นามสกุล</th>
                                                        <th>อัปเดตล่าสุด</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $sql_sec3 = "SELECT * FROM users WHERE rold = 3";
                                                    $result_sec3 = $conn->query($sql_sec3);
                                                    if ($result_sec3->num_rows > 0) {
                                                        // ถ้าพบข้อมูลผู้ใช้ในฐานข้อมูล
                                                        $count1_sec3 = 1;
                                                        while ($row_sec3 = $result_sec3->fetch_assoc()) {
                                                            if ($row_sec3['section'] == 3) {
                                                                $usernamedet_sec3 = $row_sec3['username'];
                                                                $sql_det_sec3 = "SELECT COUNT(userid) FROM `file` WHERE `userid` = '$usernamedet_sec3'";
                                                                $result_det_sec3 = $conn->query($sql_det_sec3);
                                                                while ($row_det_sec3 = $result_det_sec3->fetch_assoc()) {
                                                                    ?>
                                                                    <tr>
                                                                        <th scope="row">
                                                                            <?php echo $count1_sec3 ?>
                                                                        </th>
                                                                        <td><a
                                                                                href="/hci66/admin/solo/upload.php?id=<?php echo $row_sec3['username'] ?>">
                                                                                <?php echo $row_sec3['username'] ?>
                                                                            </a></td>

                                                                        <td>
                                                                            <?php echo $row_sec3['fname'] ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo ($row_det_sec3['COUNT(userid)'] == 0 ? "ไม่มีการส่งงาน" : $row_sec3['update_at']) ?>
                                                                        </td>
                                                                    </tr>
                                                                    <?php

                                                                    $count1_sec3++;
                                                                }
                                                            }
                                                        }
                                                    }
                                                    ?>


                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="navs-top-Section-4" role="tabpanel">
                                    <h5 class="card-header">Section 4</h5>
                                    <div class="d-grid gap-2 d-md-flex align-items-center">

                                        <?php
                                        $sql8_sec4 = "SELECT COUNT(username) FROM `users` WHERE `section` = '4' and `rold` = '3'";
                                        $result8_sec4 = $conn->query($sql8_sec4);
                                        while ($row8_sec4 = $result8_sec4->fetch_assoc()) {
                                            $count8_sec4 = $row8_sec4['COUNT(username)'];
                                            ?>
                                            <div class="card bg-secondary text-white bg-opacity-75 mb-2"
                                                style="width: 12rem;">
                                                <div class="card-body">
                                                    <p class="card-title text-sm">จำนวนนักศึกษาทั้งหมด</p>
                                                    <b>
                                                        <p class="card-text">
                                                            <?php echo $count8_sec4 ?> คน
                                                        </p>
                                                    </b>
                                                </div>
                                            </div>
                                            <?php
                                        }

                                        $sql9_sec4 = "SELECT COUNT(DISTINCT file.userid) 
                                                    FROM file 
                                                    JOIN (
                                                        SELECT userid, COUNT(*) AS file_count
                                                        FROM file
                                                        GROUP BY userid
                                                    ) AS file_counts ON file.userid = file_counts.userid 
                                                    JOIN users ON file.userid = users.username 
                                                    WHERE users.section = 4 AND users.rold = 3 AND file_counts.file_count >= 1;";
                                        $result9_sec4 = $conn->query($sql9_sec4);
                                        while ($row9_sec4 = $result9_sec4->fetch_assoc()) {
                                            $count9_sec4 = $row9_sec4['COUNT(DISTINCT file.userid)'];
                                            ?>
                                            <div class="card bg-success text-white bg-opacity-75 mb-2"
                                                style="width: 14rem;">
                                                <div class="card-body">
                                                    <p class="card-title text-sm">จำนวนที่ส่งงาน</p>
                                                    <b>
                                                        <p class="card-text">
                                                            <?php echo $count9_sec4 ?> คน
                                                        </p>
                                                    </b>
                                                </div>
                                            </div>
                                            <?php
                                        }

                                        $sql_sec4 = "SELECT COUNT(DISTINCT file.userid) 
                                        FROM file 
                                        JOIN (
                                            SELECT userid, COUNT(*) AS file_count
                                            FROM file
                                            GROUP BY userid
                                        ) AS file_counts ON file.userid = file_counts.userid 
                                        JOIN users ON file.userid = users.username 
                                        WHERE users.section = 4 AND users.rold = 3 AND file_counts.file_count >= 1;";
                                        $result_sec4 = $conn->query($sql_sec4);

                                        $sql10_sec4 = "SELECT COUNT(username) FROM `users` WHERE `section` = '4' AND `rold` = '3'";
                                        $result10_sec4 = $conn->query($sql10_sec4);
                                        while ($row10_sec4 = $result10_sec4->fetch_assoc()) {
                                            $count10_sec4 = $row10_sec4['COUNT(username)'];

                                            while ($row_sec4 = $result_sec4->fetch_assoc()) {
                                                $count_sec4 = $row_sec4['COUNT(DISTINCT file.userid)'];
                                                $count_sec4_new = $count10_sec4 - $count_sec4;

                                                ?>
                                                <div class="card bg-danger text-white bg-opacity-75 mb-2" style="width: 12rem;">
                                                    <div class="card-body">
                                                        <p class="card-title text-sm">จำนวนที่ไม่ส่งงาน</p>
                                                        <b>
                                                            <p class="card-text">
                                                                <?php echo $count_sec4_new ?> คน
                                                            </p>
                                                        </b>
                                                    </div>
                                                </div>
                                                <?php

                                            }
                                        }
                                        ?>
                                    </div>
                                    <div id="tableflow" class="overflow-y-scroll mt-3">
                                        <div class="table-responsive text-nowrap">
                                            <table class="table">
                                                <thead>
                                                    <tr class="text-nowrap">
                                                        <th>#</th>
                                                        <th>ชื่อผู้ใช้งาน</th>
                                                        <th style="width: 700px;">ชื่อ - นามสกุล</th>
                                                        <th>อัปเดตล่าสุด</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $sql_sec4 = "SELECT * FROM users WHERE rold = 3";
                                                    $result_sec4 = $conn->query($sql_sec4);
                                                    if ($result_sec4->num_rows > 0) {
                                                        // ถ้าพบข้อมูลผู้ใช้ในฐานข้อมูล
                                                        $count1_sec4 = 1;
                                                        while ($row_sec4 = $result_sec4->fetch_assoc()) {
                                                            if ($row_sec4['section'] == 4) {
                                                                $usernamedet_sec4 = $row_sec4['username'];
                                                                $sql_det_sec4 = "SELECT COUNT(userid) FROM `file` WHERE `userid` = '$usernamedet_sec4'";
                                                                $result_det_sec4 = $conn->query($sql_det_sec4);
                                                                while ($row_det_sec4 = $result_det_sec4->fetch_assoc()) {
                                                                    ?>
                                                                    <tr>
                                                                        <th scope="row">
                                                                            <?php echo $count1_sec4 ?>
                                                                        </th>
                                                                        <td><a
                                                                                href="/hci66/admin/solo/upload.php?id=<?php echo $row_sec4['username'] ?>">
                                                                                <?php echo $row_sec4['username'] ?>
                                                                            </a></td>

                                                                        <td>
                                                                            <?php echo $row_sec4['fname'] ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo ($row_det_sec4['COUNT(userid)'] == 0 ? "ไม่มีการส่งงาน" : $row_sec4['update_at']) ?>
                                                                        </td>
                                                                    </tr>
                                                                    <?php

                                                                    $count1_sec4++;
                                                                }
                                                            }
                                                        }
                                                    }
                                                    ?>


                                                </tbody>
                                            </table>
                                        </div>
                                    </div>



                                </div>
























                            </div>

                        </div>



                    </div>
                    <!-- / Content -->

 



                    <!-- Core JS -->
                    <!-- build:js assets/vendor/js/core.js -->
                    <script src="../../assets/vendor/libs/jquery/jquery.js"></script>
                    <script src="../../assets/vendor/libs/popper/popper.js"></script>
                    <script src="../../assets/vendor/js/bootstrap.js"></script>
                    <script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

                    <script src="../../assets/vendor/js/menu.js"></script>
                    <script src="../hci66/assets/assets/vendor/js/menu.js"></script>
                    <!-- endbuild -->

                    <!-- Vendors JS -->
                    <script src="../../assets/vendor/libs/apex-charts/apexcharts.js"></script>

                    <!-- Main JS -->
                    <script src="../../assets/js/main.js"></script>

                    <!-- Page JS -->
                    <script src="../../assets/js/dashboards-analytics.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</body>

</html>


<?php
if (isset($_SESSION['statusupdate']) && $_SESSION['statusupdate'] == 1) {
    echo '<script>Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
              toast.onmouseenter = Swal.stopTimer;
              toast.onmouseleave = Swal.resumeTimer;
            }
          });
          Toast.fire({
            icon: "success",
            title: "ตั้งค่าสำเร็จ"
          });</script>';
    $_SESSION['statusupdate'] = 0;
}

if (isset($_POST['typestatus']) && !empty($_POST['typestatus'])) {

    if ($_POST['type'] == 1) {
        $sqlupdate = "UPDATE `status` SET `statustype`=1,`type`=1 WHERE id = '2'";
        if ($conn->query($sqlupdate) === TRUE) {
            $user_ip = $_SERVER['REMOTE_ADDR'];
        
            $sqllog = "INSERT INTO `log`(`userid`, `type`, `ip`, `detail`) VALUES ('$username','Setting','$user_ip','Set up single job reception => Close acceptance')";
            $conn->query($sqllog);
            $_SESSION['statusupdate'] = 1;
            echo '<script>window.location.href = "/hci66/admin/solo";</script>';
        } else {
            echo "Error updating record: " . $conn->error;
        }

    } else if ($_POST['type'] == 2) {
        $sqlupdate = "UPDATE `status` SET `statustype`='2',`type`='2' WHERE id = '2'";
        if ($conn->query($sqlupdate) === TRUE) {
            $user_ip = $_SERVER['REMOTE_ADDR'];
        
            $sqllog = "INSERT INTO `log`(`userid`, `type`, `ip`, `detail`) VALUES ('$username','Setting','$user_ip','Set up single job reception => Open acceptance')";
            $conn->query($sqllog);
            $_SESSION['statusupdate'] = 1;
            echo '<script>window.location.href = "/hci66/admin/solo";</script>';
        } else {
            echo "Error updating record: " . $conn->error;
        }

    } else if ($_POST['type'] == 3) {
        $datetime = $_POST['date'];
        $sqlupdate = "UPDATE `status` SET `statustype`='2',`type`='3',`datetime`= '$datetime' WHERE id = '2'";
        if ($conn->query($sqlupdate) === TRUE) {
            $user_ip = $_SERVER['REMOTE_ADDR'];
        
            $sqllog = "INSERT INTO `log`(`userid`, `type`, `ip`, `detail`) VALUES ('$username','Setting','$user_ip','Set up single job reception => set date and time as $datetime')";
            $conn->query($sqllog);
            $_SESSION['statusupdate'] = 1;
            echo '<script>window.location.href = "/hci66/admin/solo";</script>';
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }

    $conn->close(); // Close connection after all queries are executed
}

?>