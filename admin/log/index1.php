<?php
include('../../route/route_admin.php');

$email = $_SESSION['email'];
$username = $_SESSION['username'];
$section = $_SESSION['section'];
$fname = $_SESSION['fname'];
$image = $_SESSION['image'];

include('../../database/conn.php');

$sql = "SELECT * FROM `log`";
$result = $conn->query($sql);

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

    <link href="../../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
            .flex-shrink-0{
        background-color: white !important;
    }
    body {
        background-color: #F0F1F3;
    }
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
        height: 80vh;
    }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
        <symbol id="log" viewBox="0 0 16 16">
        <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5z"/>
        </symbol>
    </svg>

    <main class="d-flex flex-nowrap">
        <h1 class="visually-hidden">Sidebars examples</h1>

        <div class="d-flex flex-column flex-shrink-0 p-3 border-end" style="width: 280px;">
            <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <svg class="bi pe-none me-2" width="40" height="32">
                    <use xlink:href="#bootstrap" />
                </svg>
                <span class="fs-4">HCI66</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="/hci66/admin/group" class="nav-link link-body-emphasis" aria-current="page">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#home" />
                        </svg>
                        งานกลุ่ม
                    </a>
                </li>
                <li>
                    <a href="/hci66/admin/solo" class="nav-link link-body-emphasis">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#people-circle" />
                        </svg>
                        งานเดี่ยว
                    </a>
                </li>
                <li>
                    <a href="/hci66/admin/all" class="nav-link link-body-emphasis">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#grid" />
                        </svg>
                        นักศึกษาทั้งหมด
                    </a>
                </li>
                <li>
                    <a href="/hci66/admin/log" class="nav-link text-white active">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#log" />
                        </svg>
                        บันทึก
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
                <p class="fs-2 fw-semibold">บันทึก</p>

            </div>


                    <div id="tableflow" class="overflow-y-scroll mt-3">

                        <table class="table table-striped table-hover align-middle" id="myTable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">ชื่อผู้ใช้งาน</th>
                                    <th scope="col">รูปแบบ</th>
                                    <th scope="col">เวลา</th>
                                    <th scope="col">IP Address</th>
                                    <th scope="col">รายละเอียด</th>

                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <?php

                                    if ($result->num_rows > 0) {
                                        // ถ้าพบข้อมูลผู้ใช้ในฐานข้อมูล
                                        $count1 = 1;
                                        while ($row = $result->fetch_assoc()) {
                                                    ?>
                                                    <tr>
                                                        <td scope="row">
                                                            <?php echo $count1 ?>
                                                        </td>
                                                        <td><?php echo $row['userid'] ?></td>
                                                        <td>
                                                            <?php echo $row['type'] ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row['create_at'] ?>
                                                        </td>
                                                        <td><?php echo $row['ip'] ?></td>
                                                        <td><?php echo $row['detail'] ?></td>
                                                    </tr>
                                                    <?php

                                                            $count1++;
                                                }
                                            
                                    }
                                    ?>
                            </tbody>
                        </table>
                    </div>

                


            </div>




            <div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Add group</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="mb-2">
                                    <label for="recipient-name" class="col-form-label">ชื่อกลุ่ม:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="namegroup">
                                </div>
                                <div class="mb-2">
                                    <label for="recipient-name" class="col-form-label">หัวข้อ:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="topic">
                                </div>
                                <div class="mb-2">
                                    <label for="recipient-name" class="col-form-label">Username:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="username">
                                </div>
                                <div class="mb-2">
                                    <label for="recipient-name" class="col-form-label">Key:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="key">
                                </div>
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <label for="inputCity1" class="form-label">STDID 1:</label>
                                        <input type="text" class="form-control" id="inputCity1" name="std1">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputCity2" class="form-label">STDID 2:</label>
                                        <input type="text" class="form-control" id="inputCity2" name="std2">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputCity3" class="form-label">STDID 3:</label>
                                        <input type="text" class="form-control" id="inputCity3" name="std3">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputCity4" class="form-label">STDID 4:</label>
                                        <input type="text" class="form-control" id="inputCity4" name="std4">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="delete" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="delete">Delete group</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            คุณแน่ใจที่จะลบกลุ่ม ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger">Delete</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade modal-lg" id="statuschanges" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">ตั้งค่าการรับงาน</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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

    </main>
    <script src="../../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="sidebars.js"></script>
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
            $_SESSION['statusupdate'] = 1;
            echo '<script>window.location.href = "/hci66/admin/solo";</script>';
        } else {
            echo "Error updating record: " . $conn->error;
        }

    } else if ($_POST['type'] == 2) {
        $sqlupdate = "UPDATE `status` SET `statustype`='2',`type`='2' WHERE id = '2'";
        if ($conn->query($sqlupdate) === TRUE) {
            $_SESSION['statusupdate'] = 1;
            echo '<script>window.location.href = "/hci66/admin/solo";</script>';
        } else {
            echo "Error updating record: " . $conn->error;
        }

    } else if ($_POST['type'] == 3) {
        $datetime = $_POST['date'];
        $sqlupdate = "UPDATE `status` SET `statustype`='2',`type`='3',`datetime`= '$datetime' WHERE id = '2'";
        if ($conn->query($sqlupdate) === TRUE) {
            $_SESSION['statusupdate'] = 1;
            echo '<script>window.location.href = "/hci66/admin/solo";</script>';
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }

    $conn->close(); // Close connection after all queries are executed
}

?>