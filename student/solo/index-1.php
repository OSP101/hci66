<?php
include('../../route/route_student_solo.php');

$email = $_SESSION['email'];
$userid = $_SESSION['username'];
$section = $_SESSION['section'];
$image = $_SESSION['image'];
$fname = $_SESSION['fname'];

include('../../database/conn.php');

$sql = "SELECT * FROM `file` WHERE userid = '$userid'";
$result = $conn->query($sql);
$sql2 = "SELECT * FROM `file` WHERE userid = '$userid'";
$result2 = $conn->query($sql2);

$sql3 = "SELECT * FROM `status` WHERE id = '2'";
$result3 = $conn->query($sql3);

$sql7 = "SELECT * FROM `status` WHERE id = '2'";
$result7 = $conn->query($sql7);

$sql6 = "SELECT * FROM `file` WHERE userid = '$userid'";
$result6 = $conn->query($sql6);

$sql4 = "SELECT * FROM `file` WHERE userid = '$userid'";
$result4 = $conn->query($sql4);


?>
<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="../../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <title>งานเดี่ยว - HCI66</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">

    <script defer src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script defer src="./script.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link href="../../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            width: 100%;
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            height: 100vh;
            padding: 1rem;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .btn-bd-primary {
            --bd-violet-bg: #712cf9;
            --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

            --bs-btn-font-weight: 600;
            --bs-btn-color: var(--bs-white);
            --bs-btn-bg: var(--bd-violet-bg);
            --bs-btn-border-color: var(--bd-violet-bg);
            --bs-btn-hover-color: var(--bs-white);
            --bs-btn-hover-bg: #6528e0;
            --bs-btn-hover-border-color: #6528e0;
            --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
            --bs-btn-active-color: var(--bs-btn-hover-color);
            --bs-btn-active-bg: #5a23c8;
            --bs-btn-active-border-color: #5a23c8;
        }

        .bd-mode-toggle {
            z-index: 1500;
        }

        .bd-mode-toggle .dropdown-menu .active .bi {
            display: block !important;
        }

        #tableflow {
            overflow-y: auto;
            margin: auto;
            height: 100%;
        }

        .progress {
            display: none;
        }
      
    </style>


    <!-- Custom styles for this template -->
    <link href="sidebars.css" rel="stylesheet">
</head>

<body>

    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
        <symbol id="bootstrap" viewBox="0 0 118 94">
            <title>Bootstrap</title>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z">
            </path>
        </symbol>
        <symbol id="home" viewBox="0 0 16 16">
            <path
                d="M0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6zM2 3a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11A.5.5 0 0 0 2 3m2-2a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7A.5.5 0 0 0 4 1" />
        </symbol>
        <symbol id="speedometer2" viewBox="0 0 16 16">
            <path
                d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z" />
            <path fill-rule="evenodd"
                d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z" />
        </symbol>
        <symbol id="table" viewBox="0 0 16 16">
            <path
                d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z" />
        </symbol>
        <symbol id="people-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
            <path fill-rule="evenodd"
                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
        </symbol>
        <symbol id="grid" viewBox="0 0 16 16">
            <path
                d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
        </symbol>
    </svg>

    <main class="d-flex flex-nowrap">
        <h1 class="visually-hidden">Sidebars examples</h1>

        <div class="d-flex flex-column flex-shrink-0 p-3 border-end" style="width: 280px;">
            <a href="#"
                class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <svg class="bi pe-none me-2" width="40" height="32">
                    <use xlink:href="#bootstrap" />
                </svg>
                <span class="fs-4">HCI66</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">

                <li>
                    <a href="#" class="nav-link text-white active">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#people-circle" />
                        </svg>
                        งานเดี่ยว
                    </a>
                </li>

            </ul>
            <p class="mt-3 mb-3 fs-6 fw-light text-body-secondary">Copyright 2024 © HCI66 BY <a
                    href='https://github.com/OSP101' target='_blank'><u>OSP101</u></a></p>
            <hr>
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo $image; ?>" alt="" width="32" height="32" class="rounded-circle me-2">
                    <strong>
                        <?php echo $fname ?>
                    </strong>
                </a>
                <ul class="dropdown-menu text-small shadow">
                    <li><a class="dropdown-item" href="/hci66/logout/logout-engin.php">Sign out</a></li>
                </ul>
            </div>
        </div>

        <div class="container" style="height: 100vh;padding: 1rem;">
            <div>
                <p class="fs-2 fw-semibold">งานเดี่ยว</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end align-items-center">

                </div>
                <table class="table table-borderless table-sm">

                    <thead>
                        <tr>
                            <td scope="col" width="20%"><small>Username: </small></td>
                            <td scope="col"><small>
                                    <?php echo $userid; ?>
                                </small></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="col"><small>ชื่อ - นามสกุล: </small></td>
                            <td><small>
                                    <?php echo $fname; ?>
                                </small></td>
                        </tr>
                        <td scope="col"><small>Email: </small></td>
                        <td><small>
                                <?php echo $email; ?>
                            </small></td>
                        </tr>
                        <tr>
                            <td scope="col"><small>Section: </small></td>
                            <td><small>
                                    <?php echo $section; ?>
                                </small>
                            </td>
                        </tr>
                        <tr>
                    </tbody>
                </table>

                <?php
                while ($row3 = $result3->fetch_assoc()) {
                    if ($row3['statustype'] != "1") {
                        $db_datetime2 = new DateTime($row3["datetime"]);
                        if ($row3['type'] == "2") {
                            ?>
                            <form method="post" enctype="multipart/form-data">
                                <hr>
                                <h3 class="mt-1">อัปโหลดเอกสาร</h3>
                                <font color="red">*อัปโหลดได้เฉพาะ .pdf เท่านั้น </font>
                                <div class="row d-flex align-items-center">
                                    <div class="col-md-8 d-flex align-items-center">
                                        <input type="file" name="doc_file[]" required class="form-control" multiple="multiple"
                                            accept="application/pdf"> <br>
                                    </div>
                                    <div class="col-md-4 d-flex align-items-center">
                                        <button type="button" class="btn btn-primary upload">Upload</button>
                                        <div class="w-100 mx-2">
                                            <div class="progress" role="progressbar" aria-label="Animated striped example"
                                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                                <div
                                                    class="progress-bar progress-bar-striped overflow-visible progress-bar-animated">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <?php
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
                                $thai_days = array(
                                    'Sunday' => 'วันอาทิตย์',
                                    'Monday' => 'วันจันทร์',
                                    'Tuesday' => 'วันอังคาร',
                                    'Wednesday' => 'วันพุธ',
                                    'Thursday' => 'วันพฤหัสบดี',
                                    'Friday' => 'วันศุกร์',
                                    'Saturday' => 'วันเสาร์'
                                );
                                
                                $thai_months = array(
                                    'January' => 'มกราคม',
                                    'February' => 'กุมภาพันธ์',
                                    'March' => 'มีนาคม',
                                    'April' => 'เมษายน',
                                    'May' => 'พฤษภาคม',
                                    'June' => 'มิถุนายน',
                                    'July' => 'กรกฎาคม',
                                    'August' => 'สิงหาคม',
                                    'September' => 'กันยายน',
                                    'October' => 'ตุลาคม',
                                    'November' => 'พฤศจิกายน',
                                    'December' => 'ธันวาคม'
                                );
                                
                                $date = strtotime($row4["datetime"]);
                                $day = $thai_days[date('l', $date)];
                                $month = $thai_months[date('F', $date)];
                                $year = date('Y', $date)+543;
                                $time = date('H:i:s', $date);
                                ?>
                                <form method="post" enctype="multipart/form-data">
                                    <hr>
                                    <h3 class="mt-1">อัปโหลดเอกสาร </h3>
                                    <font color="red">*อัปโหลดได้เฉพาะ .pdf เท่านั้น <u>หมดเขตส่ง
                                            <?php echo "$day ที่ " . date('d')-2 . " $month $year เวลา $time"; ?>
                                        </u></font>
                                    <div class="row d-flex align-items-center">
                                        <div class="col-md-8 d-flex align-items-center">
                                            <input type="file" name="doc_file[]" required class="form-control" multiple="multiple"
                                                accept="application/pdf"> <br>
                                        </div>
                                        <div class="col-md-4 d-flex align-items-center">
                                            <button type="button" class="btn btn-primary upload">Upload</button>
                                            <div class="w-100 mx-2">
                                                <div class="progress" role="progressbar" aria-label="Animated striped example"
                                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                                    <div
                                                        class="progress-bar progress-bar-striped overflow-visible progress-bar-animated">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <?php
                            } elseif ($db_datetime <= $current_datetime) {
                                ?>
                                <form action="" method="post" enctype="multipart/form-data">
                                    <hr>
                                    <h3 class="mt-1">อัปโหลดเอกสาร </h3>
                                    <font color="red">*เลยเวลาที่กำหนด ไม่สามารถอัปโหลดได้</font>
                                </form>
                                <?php
                            }
                        }
                    } else {
                        ?>
                        <form action="" method="post" enctype="multipart/form-data">
                            <hr>
                            <h3 class="mt-1">อัปโหลดเอกสาร </h3>
                            <font color="red">*เลยเวลาที่กำหนด ไม่สามารถอัปโหลดได้</font>
                        </form>
                        <?php
                    }
                }
                ?>


                <hr>
                <h3 class="mt-1">รายการเอกสาร </h3>
            </div>


            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="sec1-tab" data-bs-toggle="tab" data-bs-target="#sec1-tab-pane"
                        type="button" role="tab" aria-controls="sec1-tab-pane"
                        aria-selected="true">เอกสารที่ส่ง</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="sec2-tab" data-bs-toggle="tab" data-bs-target="#sec2-tab-pane"
                        type="button" role="tab" aria-controls="sec2-tab-pane"
                        aria-selected="false">เอกสารที่ลบ</button>
                </li>
            </ul>


            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="sec1-tab-pane" role="tabpanel" aria-labelledby="sec1-tab"
                    tabindex="0">
                    <div id="tableflow" class="overflow-y-scroll mt-3">

                        <table class="table table-hover align-middle" id="myTable2">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Timestamp</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <?php
                                if ($result->num_rows > 0) {

                                    $count = 1;
                                    while ($row = $result->fetch_assoc()) {
                                        if ($row['delete_at'] == "") {
                                            ?>
                                            <tr>
                                                <td>
                                                    <?php echo $count ?>
                                                </td>
                                                <td><a href="/hci66/data/<?php echo $userid ?>/<?php echo $row['hash'] ?>"
                                                        target="_blank">
                                                        <?php echo $row['orginal'] ?>
                                                    </a></td>
                                                <td>
                                                    <?php echo $row['create_at'] ?>
                                                </td>
                                                <td>
                                                    <div class="d-md-flex justify-content-md-end">
                                                        <button type="button" class="btn btn-danger me-2" data-bs-toggle="modal"
                                                            data-bs-target="#delete_<?php echo $row['id']; ?>">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5" />
                                                            </svg> Delete</button>
                                                    </div>
                                                </td>
                                            </tr>


                                            <?php
                                            $count++;
                                        }
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>

                </div>

                <div class="tab-pane fade show" id="sec2-tab-pane" role="tabpanel" aria-labelledby="sec2-tab"
                    tabindex="0">

                    <div id="tableflow" class="overflow-y-scroll mt-3">

                        <table class="table table-hover align-middle" id="myTable3">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Timestamp ที่ลบ</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <?php
                                $count5 = 1;
                                while ($row6 = $result6->fetch_assoc()) {
                                    if ($row6['delete_at'] != "") {
                                        ?>
                                        <tr>
                                            <td>
                                                <?php echo $count5 ?>
                                            </td>
                                            <td><a href="/hci66/data/<?php echo $id ?>/<?php echo $row6['hash'] ?>"
                                                    target="_blank">
                                                    <?php echo $row6['orginal'] ?>
                                                </a></td>
                                            <td>
                                                <?php echo $row6['delete_at'] ?>
                                            </td>
                                            <td>
                                                <div class="d-md-flex justify-content-md-end">
                                                    <button type="button" class="btn btn-warning me-2" data-bs-toggle="modal"
                                                        data-bs-target="#new_<?php echo $row6['id']; ?>">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-arrow-clockwise"
                                                            viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd"
                                                                d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2z" />
                                                            <path
                                                                d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466" />
                                                        </svg> กู้คืน</button>
                                                </div>
                                            </td>
                                        </tr>


                                        <?php
                                        $count5++;
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

        <?php
        while ($row2 = $result2->fetch_assoc()) {
            ?>
            <div class="modal fade" id="delete_<?php echo $row2['id'] ?>" tabindex="-1" aria-labelledby="delete"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="delete">Delete file</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            คุณแน่ใจที่จะลบเอกสาร <b>
                                <?php echo $row2['orginal'] ?>
                            </b> หรือไม่?
                        </div>
                        <div class="modal-footer">
                            <form action="/hci66/student/solo/" method="post">
                                <input type="hidden" name="delete" value="<?php echo $row2['id'] ?>">
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>

            <?php

        }
        ?>

        <?php
        while ($row4 = $result4->fetch_assoc()) {
            ?>

            <div class="modal fade" id="new_<?php echo $row4['id'] ?>" tabindex="-1" aria-labelledby="delete"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="delete">กู้คืนเอกสาร</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            คุณแน่ใจที่จะกู้คืนเอกสาร <b>
                                <?php echo $row4['orginal'] ?>
                            </b> หรือไม่?
                        </div>
                        <div class="modal-footer">
                            <form action="/hci66/student/solo/" method="post">
                                <input type="hidden" name="new" value="<?php echo $row4['id'] ?>">
                                <button type="submit" class="btn btn-warning">กู้คืน</button>
                            </form>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>

                        </div>
                    </div>
                </div>
            </div>

            <?php

        }
        ?>

    </main>
    <script src="../../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="sidebars.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="api_solo.js"></script>

</body>

</html>

<?php



if (isset($_SESSION['statuserr']) && $_SESSION['statuserr'] == 1) {
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
        icon: "error",
        title: "เกิดข้อผิดพลาด"
      });</script>';
    $_SESSION['statuserr'] = 0;
}

// if (isset($_FILES['doc_file'])) {
//     $date1 = date("Ymd_His");
//     $numrand = mt_rand();

//     foreach ($_FILES['doc_file']['tmp_name'] as $key => $val) {
//         $typefile = strrchr($_FILES['doc_file']['name'][$key], ".");
//         $upload = $_FILES['doc_file']['name'][$key];
//         $path = "../../data/" . $userid . "/";
//         $newname = 'doc_' . $numrand . $date1 . "_" . $upload;
//         $path_copy = $path . $newname;
//         move_uploaded_file($_FILES['doc_file']['tmp_name'][$key], $path_copy);
//         $sql2 = "INSERT INTO `file`(`userid`, `orginal`, `hash`) VALUES ('$userid','$upload','$newname')";
//         $conn->query($sql2);
//     }
//     $datetime = new DateTime();
//     $datetime->setTimezone(new DateTimeZone('Asia/Bangkok'));
//     $datetime_str = $datetime->format('Y-m-d H:i:s');
//     $sql3 = "UPDATE `users` SET `update_at`= '$datetime_str' WHERE `username` = '$userid'";
//     if ($conn->query($sql3) === TRUE) {
//         $_SESSION['statusadd'] = 1;
//         echo '<script>window.location.href = "/hci66/student/solo/";</script>';
//     } else {
//         $_SESSION['statuserr'] = 1;
//         echo '<script>window.location.href = "/hci66/student/solo/";</script>';
//     }




    // if ($upload != '') {
    //     $typefile = strrchr($_FILES['doc_file']['name'], ".");
    //     if ($typefile == '.pdf') {
    //         $path = "../../data/" . $userid . "/";
    //         $newname = 'doc_' . $numrand . $date1 . $typefile;
    //         $path_copy = $path . $newname;
    //         if (move_uploaded_file($_FILES['doc_file']['tmp_name'], $path_copy)) {
    //             $sql2 = "INSERT INTO `file`(`userid`, `orginal`, `hash`) VALUES ('$userid','$upload','$newname')";
    //             $datetime = new DateTime();
    //             $datetime->setTimezone(new DateTimeZone('Asia/Bangkok'));
    //             $datetime_str = $datetime->format('Y-m-d H:i:s');
    //             $sql3 = "UPDATE `users` SET `update_at`= '$datetime_str' WHERE `username` = '$userid'";
    //             $conn->query($sql3);
    //             if ($conn->query($sql2) === TRUE) {
    //                 $_SESSION['statusadd'] = 1;
    //                 echo '<script>window.location.href = "/hci66/student/solo/";</script>';
    //             } else {
    //                 $_SESSION['statuserr'] = 1;
    //                 echo '<script>window.location.href = "/hci66/student/solo/";</script>';
    //             } // else ของ if result
    //         } else {
    //             $_SESSION['statuserr'] = 1;
    //             echo '<script>window.location.href = "/hci66/student/solo/";</script>';
    //         }
    //     } else { // ถ้าไฟล์ที่อัพโหลดไม่ตรงตามที่กำหนด
    //         echo '<script>
    //             setTimeout(function() {
    //                 swal({
    //                     title: "คุณอัพโหลดไฟล์ไม่ถูกต้อง",
    //                     type: "error"
    //                 }, function() {
    //                     window.location = "hci66/student/solo/"; //หน้าที่ต้องการให้กระโดดไป
    //                 });
    //             }, 1000);
    //         </script>';
    //     } // else ของเช็คนามสกุลไฟล์
    // } // if($upload !='') {
//} // isset

if (isset($_SESSION['statusdelete']) && $_SESSION['statusdelete'] == 1) {
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
        title: "ลบไฟล์สำเร็จ"
      });</script>';
    $_SESSION['statusdelete'] = 0;
} else if (isset($_SESSION['statusnew']) && $_SESSION['statusnew'] == 1) {
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
        title: "กู้คืนไฟล์สำเร็จ"
      });</script>';
    $_SESSION['statusnew'] = 0;
} else if (isset($_POST['delete']) && !empty($_POST['delete'])) {
    $fileid = $_POST['delete'];
    $datetime = new DateTime();
    $datetime->setTimezone(new DateTimeZone('Asia/Bangkok'));
    $datetime_str = $datetime->format('Y-m-d H:i:s');
    $sqldelete = "UPDATE `file` SET `delete_at`='$datetime_str' WHERE id = '$fileid'";
    $user_ip = $_SERVER['REMOTE_ADDR'];
        
    $sqllog = "INSERT INTO `log`(`userid`, `type`, `ip`, `detail`) VALUES ('$username','File','$user_ip','Delete File => $fileid')";
    $conn->query($sqllog);
    if ($conn->query($sqldelete) === TRUE) {
        $_SESSION['statusdelete'] = 1;
        echo '<script>window.location.href = "/hci66/student/solo/";</script>';
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
} else if (isset($_POST['new']) && !empty($_POST['new'])) {
    $fileid = $_POST['new'];
    $datetime = new DateTime();
    $datetime->setTimezone(new DateTimeZone('Asia/Bangkok'));
    $datetime_str = $datetime->format('Y-m-d H:i:s');
    $sqldelete = "UPDATE `file` SET `delete_at`= Null WHERE id = '$fileid'";
    $user_ip = $_SERVER['REMOTE_ADDR'];
        
    $sqllog = "INSERT INTO `log`(`userid`, `type`, `ip`, `detail`) VALUES ('$username','File','$user_ip','Recover File => $fileid')";
    $conn->query($sqllog);
    if ($conn->query($sqldelete) === TRUE) {
        $_SESSION['statusnew'] = 1;
        echo '<script>window.location.href = "/hci66/student/solo/";</script>';
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
}
?>