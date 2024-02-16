<?php
include('../../route/route_admin.php');
header("Content-Type: text/html; charset=UTF-8");
$email = $_SESSION['email'];
$username = $_SESSION['username'];
$section = $_SESSION['section'];
$image = $_SESSION['image'];
$fname = $_SESSION['fname'];

include('../../database/conn.php');

$sql = "SELECT * FROM users WHERE rold = 3";
$result = $conn->query($sql);

$result2 = $conn->query($sql);

$result3 = $conn->query($sql);

$result4 = $conn->query($sql);

$result5 = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
    data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>นักศึกษาทั้งหมด - hci66</title>

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


                    <li class="menu-item  ">
                        <a href="../solo/" class="menu-link">

                            <div data-i18n="Analytics">งานเดี่ยว</div>
                        </a>
                    </li>
                    <li class="menu-item active ">
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
                        <h4>นักศึกษาทั้งหมด</h4>
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

                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="sec1-tab" data-bs-toggle="tab"
                                    data-bs-target="#sec1-tab-pane" type="button" role="tab"
                                    aria-controls="sec1-tab-pane" aria-selected="true">Section 1 <span class="badge badge-center rounded-pill bg-label-primary">37</span></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="sec2-tab" data-bs-toggle="tab"
                                    data-bs-target="#sec2-tab-pane" type="button" role="tab"
                                    aria-controls="sec2-tab-pane" aria-selected="false">Section 2  <span class="badge badge-center rounded-pill bg-label-primary">34</span></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="sec3-tab" data-bs-toggle="tab"
                                    data-bs-target="#sec3-tab-pane" type="button" role="tab"
                                    aria-controls="sec3-tab-pane" aria-selected="false">Section 3  <span class="badge badge-center rounded-pill bg-label-primary">40</span></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="sec4-tab" data-bs-toggle="tab"
                                    data-bs-target="#sec4-tab-pane" type="button" role="tab"
                                    aria-controls="sec4-tab-pane" aria-selected="false">Section 4  <span class="badge badge-center rounded-pill bg-label-primary">30</span></button>
                            </li>
                        </ul>



                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="sec1-tab-pane" role="tabpanel"
                                aria-labelledby="sec1-tab" tabindex="0">

                                <div id="tableflow" class="overflow-y-scroll mt-3">
                                    <table class="table table-striped table-hover align-middle" id="myTable">
                                        <thead>
                                            <tr>
                                            <th scope="col" >#</th>
                                    <th scope="col" ></th>
                                    <th scope="col" >รหัสนักศึกษา</th>
                                    <th scope="col" >ชื่อ - นามสกุล</th>
                                    <th scope="col" >Email</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-group-divider">
                                        <?php
                                if ($result->num_rows > 0) {
                                    // ถ้าพบข้อมูลผู้ใช้ในฐานข้อมูล
                                    $count1 = 1;
                                    while ($row = $result->fetch_assoc()) {
                                        if ($row['section'] == 1) {
                                            ?>
                                            <tr>
                                                <th scope="row">
                                                    <?php echo $count1 ?>
                                                </th>
                                                <td ><img src="<?php echo $row['image']; ?>" alt="image profile" width="32"
                                                        height="32" class="rounded-circle me-2"></td>
                                                <td>
                                                    <?php echo $row['username'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['fname']; ?>
                                                </td>
                                                <td  >
                                                    <?php echo $row['email'] ?>
                                                </td>
                                            </tr>
                                            <?php
                                            $count1++;
                                        }
                                    }
                                }
                                ?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                            <div class="tab-pane fade" id="sec2-tab-pane" role="tabpanel" aria-labelledby="sec2-tab"
                                tabindex="0">

                                <div id="tableflow" class="overflow-y-scroll mt-3">





                                    <table class="table table-striped table-hover align-middle" id="myTable1">
                                    <thead>
                                <tr>
                                <th scope="col">#</th>
                                    <th scope="col" ></th>
                                    <th scope="col" >รหัสนักศึกษา</th>
                                    <th scope="col" >ชื่อ - นามสกุล</th>
                                    <th scope="col" >Email</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">

                                <?php
                                if ($result3->num_rows > 0) {
                                    // ถ้าพบข้อมูลผู้ใช้ในฐานข้อมูล
                                    $count1 = 1;
                                    while ($row = $result3->fetch_assoc()) {
                                        if ($row['section'] == 2) {
                                            ?>
                                            <tr>
                                                <th scope="row">
                                                    <?php echo $count1 ?>
                                                </th>
                                                <td ><img src="<?php echo $row['image']; ?>" alt="image profile" width="32"
                                                        height="32" class="rounded-circle me-2"></td>
                                                <td >
                                                    <?php echo $row['username'] ?>
                                                </td>
                                                <td width="20%">
                                                    <?php echo $row['fname'] ?>
                                                </td>
                                                <td  >
                                                    <?php echo $row['email'] ?>
                                                </td>
                                                
                                            </tr>
                                            <?php
                                            $count1++;
                                        }
                                    }
                                }
                                ?>
                            </tbody>
                                    </table>
                                </div>


                            </div>


                            <div class="tab-pane fade" id="sec3-tab-pane" role="tabpanel" aria-labelledby="sec3-tab"
                                tabindex="0">

                                <div id="tableflow" class="overflow-y-scroll mt-3">




                                    <table class="table table-striped table-hover align-middle" id="myTable2">
                                    <thead>
                                <tr>
                                <th scope="col">#</th>
                                    <th scope="col" ></th>
                                    <th scope="col" >รหัสนักศึกษา</th>
                                    <th scope="col" >ชื่อ - นามสกุล</th>
                                    <th scope="col" >Email</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">

                                <?php
                                if ($result4->num_rows > 0) {
                                    // ถ้าพบข้อมูลผู้ใช้ในฐานข้อมูล
                                    $count1 = 1;
                                    while ($row = $result4->fetch_assoc()) {
                                        if ($row['section'] == 3) {
                                            ?>
                                            <tr>
                                                <th scope="row">
                                                    <?php echo $count1 ?>
                                                </th>
                                                <td ><img src="<?php echo $row['image']; ?>" alt="image profile" width="32"
                                                        height="32" class="rounded-circle me-2"></td>
                                                <td >
                                                    <?php echo $row['username'] ?>
                                                </td>
                                                <td width="20%">
                                                    <?php echo $row['fname'] ?>
                                                </td>
                                                <td  >
                                                    <?php echo $row['email'] ?>
                                                </td>
                                                
                                            </tr>
                                            <?php
                                            $count1++;
                                        }
                                    }
                                }
                                ?>
                            </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="sec4-tab-pane" role="tabpanel" aria-labelledby="sec4-tab"
                                tabindex="0">

                                <div id="tableflow" class="overflow-y-scroll mt-3">



                                    <table class="table table-striped table-hover align-middle" id="myTable3">
                                    <thead>
                                <tr>
                                <th scope="col">#</th>
                                    <th scope="col"></th>
                                    <th scope="col" >รหัสนักศึกษา</th>
                                    <th scope="col" >ชื่อ - นามสกุล</th>
                                    <th scope="col" >Email</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">

                                <?php
                                if ($result5->num_rows > 0) {
                                    // ถ้าพบข้อมูลผู้ใช้ในฐานข้อมูล
                                    $count1 = 1;
                                    while ($row = $result5->fetch_assoc()) {
                                        if ($row['section'] == 4) {
                                            ?>
                                            <tr>
                                                <th scope="row">
                                                    <?php echo $count1 ?>
                                                </th>
                                                <td><img src="<?php echo $row['image']; ?>" alt="image profile" width="32"
                                                        height="32" class="rounded-circle me-2"></td>
                                                <td >
                                                    <?php echo $row['username'] ?>
                                                </td>
                                                <td width="20%">
                                                    <?php echo $row['fname'] ?>
                                                </td>
                                                <td  >
                                                    <?php echo $row['email'] ?>
                                                </td>
                                            </tr>
                                            <?php
                                            $count1++;
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
            
        <!-- / Content -->




        <!-- Core JS -->
        <!-- build:js assets/vendor/js/core.js -->
        <script src="../../assets/vendor/libs/jquery/jquery.js"></script>
        <script src="../../assets/vendor/libs/popper/popper.js"></script>
        <script src="../../assets/vendor/js/bootstrap.js"></script>
        <script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

        <script src="../../assets/vendor/js/menu.js"></script>
        <!-- endbuild -->

        <!-- Vendors JS -->
        <script src="../../assets/vendor/libs/apex-charts/apexcharts.js"></script>

        <!-- Main JS -->
        <script src="../../assets/js/main.js"></script>

        <!-- Page JS -->
        <script src="../../assets/js/dashboards-analytics.js"></script>


</body>

</html>