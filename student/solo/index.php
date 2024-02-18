<?php
include('../../route/route_student_solo.php');

$email = $_SESSION['email'];
$userid = $_SESSION['username'];
$section = $_SESSION['section'];
$image = $_SESSION['image'];
$fname = $_SESSION['fname'];

include('../../database/conn.php');

$sql = "SELECT * FROM `file` WHERE userid = '$userid' ORDER BY `create_at` DESC";
$result = $conn->query($sql);
$sql1 = "SELECT * FROM `file` WHERE userid = '$userid' ORDER BY `create_at` DESC";
$result1 = $conn->query($sql1);

$sql2 = "SELECT * FROM `file` WHERE userid = '$userid' ORDER BY `create_at` DESC";
$result2 = $conn->query($sql2);

$sql3 = "SELECT * FROM `status` WHERE id = '2'";
$result3 = $conn->query($sql3);

$sql7 = "SELECT * FROM `status` WHERE id = '2'";
$result7 = $conn->query($sql7);

$sql6 = "SELECT * FROM `file` WHERE userid = '$userid' ORDER BY `create_at` DESC";
$result6 = $conn->query($sql6);

$sql4 = "SELECT * FROM `file` WHERE userid = '$userid' ORDER BY `create_at` DESC";
$result4 = $conn->query($sql4);


?>
<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
  data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>
    <?php echo $userid; ?> | HCI MiniProject 2566
  </title>

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

  <style>
    .nav-bg {
      content: ' ';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 300px;
      background-image: url(bg.jpg);
      background-position: bottom;
      background-size: cover;
      z-index: -1;
    }
  </style>
</head>

<body>
  <div class="layout-wrapper layout-content-navbar layout-without-menu">
    <div class="layout-container">
      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->
        <div class="nav-bg"></div>
        <nav class="nav-without-menu" id="layout-navbar">

          <div class="navbar-nav-right d-flex align-items-center " id="navbar-collapse">
            <h4>HCI MiniProject 2566 </h4>
            <ul class="navbar-nav flex-row align-items-center ms-auto">

              <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
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
                            <img src="<?php echo $image; ?>" alt class="w-px-40 h-auto rounded-circle" />
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <span class="fw-semibold d-block">
                            <?php echo $fname ?>
                          </span>
                          <small class="text-muted">Student</small>
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
          <!-- Content -->

          <div class="container flex-grow-1 container-p-y content-file">
            <p style="font-size: 16px;" class="badge rounded-pill  bg-label-primary ">ส่งงานเดี่ยว</p>

            <h6 class="card-title">Username:
              <?php echo $userid; ?>
            </h6>
            <h6 class="card-title">ชื่อ - นามสกุล:
              <?php echo $fname; ?>
            </h6>
            <h6 class="card-title">Email:
              <?php echo $email; ?>
            </h6>
            <h6 class="card-title">Section:
              <?php echo $section; ?>
            </h6>






            <?php
            while ($row3 = $result3->fetch_assoc()) {
              if ($row3['statustype'] != "1") {
                $db_datetime2 = new DateTime($row3["datetime"]);
                if ($row3['type'] == "2") {
                  ?>
                  <form method="post" enctype="multipart/form-data">
                    <hr>
                    <div class="alert alert-success" role="alert">สามารถอัปโหลดได้จนกว่าจะถึงกำหนด</div>
                    <!-- <font color="red">*อัปโหลดได้เฉพาะ PDF, DOC, PPX เท่านั้น </font> -->
                    <div class="row d-flex align-items-center">
                      <div class="col-md-7 d-flex align-items-center">
                      <input type="file" name="doc_file[]" id="fileToUpload" required class="form-control" multiple="multiple"
                      accept=".pdf, .doc, .docx, .pptx, .ppt, application/msword, application/vnd.ms-powerpoint, application/pdf, image/*, vdo/*,.mp4, .avi, .mov, .wmv, .flv, .webm">
                          <br>
                        </div>
                        <div class="col-md-4 d-flex align-items-center" >
                          <button type="button" class="btn btn-primary upload disabled" id="uploadButton">อัปโหลดไฟล์</button>
                        <div class="w-100 mx-2">
                          <div class="progress" style="display:none;" role="progressbar" aria-label="Animated striped example" aria-valuenow="75"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar progress-bar-striped overflow-visible progress-bar-animated">
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

                    $date = strtotime($row3["datetime"]);
                    $day = $thai_days[date('l', $date)];
                    $month = $thai_months[date('F', $date)];
                    $year = date('Y', $date) + 543;
                    $time = date('H:i:s', $date);
                    ?>
                    <style>
                      .content-card {
                        display: none;
                      }
                    </style>
                    <form method="post" enctype="multipart/form-data">
                      <hr>
                      <div class="alert alert-success" role="alert">สามารถอัปโหลดได้ถึง <b><u>
                            <?php echo "$day ที่ " . date('d') . " $month $year เวลา $time"; ?></b></u></div>
                      <!-- <font color="red">*อัปโหลดได้เฉพาะ .pdf เท่านั้น <u>หมดเขตส่ง
                                            <?php echo "$day ที่ " . date('d') . " $month $year เวลา $time"; ?>
                                        </u></font> -->
                      <div class="row d-flex align-items-center">
                        <div class="col-md-8 d-flex align-items-center">
                        <input type="file" name="doc_file[]" id="fileToUpload" required class="form-control" multiple="multiple"
                        accept=".pdf, .doc, .docx, .pptx, .ppt, application/msword, application/vnd.ms-powerpoint, application/pdf, image/*, vdo/*,.mp4, .avi, .mov, .wmv, .flv, .webm">
                          <br>
                        </div>
                        <div class="col-md-4 d-flex align-items-center" >
                          <button type="button" class="btn btn-primary upload disabled" id="uploadButton">อัปโหลดไฟล์</button>
                          <div class="w-100 mx-2">
                            <div class="progress" style="display:none;" role="progressbar" aria-label="Animated striped example" aria-valuenow="75"
                              aria-valuemin="0" aria-valuemax="100">
                              <div class="progress-bar progress-bar-striped overflow-visible progress-bar-animated">
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
                      <div class="alert alert-danger" role="alert">เลยเวลาที่กำหนด ไม่สามารถอัปโหลดได้!</div>
                    </form>
                    <?php
                  }
                }
              } else {
                ?>
                <form action="" method="post" enctype="multipart/form-data">
                  <hr>
                  <div class="alert alert-danger" role="alert">เลยเวลาที่กำหนด ไม่สามารถอัปโหลดได้!</div>
                </form>
                <?php
              }
            }
            ?>





            <h5 class="card-header">รายการเอกสารที่ส่ง</h5>



            <div class="nav-align-top mb-4">
              <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                  <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                    data-bs-target="#navs-top-home" aria-controls="navs-top-home" aria-selected="true">
                    เอกสารที่ส่ง
                  </button>
                </li>
                <li class="nav-item">
                  <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                    data-bs-target="#navs-top-profile" aria-controls="navs-top-profile" aria-selected="false">
                    เอกสารที่ลบ
                  </button>
                </li>

              </ul>
              <div class="tab-content">
                <div class="tab-pane fade active show" id="navs-top-home" role="tabpanel">

                  <div class="table-responsive text-nowrap">
                    <table class="table">
                      <thead>
                        <tr class="text-nowrap">
                          <th>#</th>
                          <th></th>
                          <th style="width: 700px;">ชื่อไฟล์</th>
                          <th>ชนิด</th>
                          <th>ขนาด</th>
                          <th>อัพเดตล่าสุด</th>
                          <th style="width: 200px;"></th>

                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $count = 1;
                        while ($row1 = $result1->fetch_assoc()) {
                          if ($row1['delete_at'] == "") {
                            $file_size_MB = $row1['filesize'] / (1024 * 1024);

                            ?>
                            <tr>
                              <td scope="row">
                                <?php echo $count ?>
                              </td>
                              <td scope="row">
                                <?php
                                if ($row1['filetype'] == ".pdf") {
                                  ?>

                                  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#D32F2F"
                                    class="bi bi-filetype-pdf" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                      d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5zM1.6 11.85H0v3.999h.791v-1.342h.803q.43 0 .732-.173.305-.175.463-.474a1.4 1.4 0 0 0 .161-.677q0-.375-.158-.677a1.2 1.2 0 0 0-.46-.477q-.3-.18-.732-.179m.545 1.333a.8.8 0 0 1-.085.38.57.57 0 0 1-.238.241.8.8 0 0 1-.375.082H.788V12.48h.66q.327 0 .512.181.185.183.185.522m1.217-1.333v3.999h1.46q.602 0 .998-.237a1.45 1.45 0 0 0 .595-.689q.196-.45.196-1.084 0-.63-.196-1.075a1.43 1.43 0 0 0-.589-.68q-.396-.234-1.005-.234zm.791.645h.563q.371 0 .609.152a.9.9 0 0 1 .354.454q.118.302.118.753a2.3 2.3 0 0 1-.068.592 1.1 1.1 0 0 1-.196.422.8.8 0 0 1-.334.252 1.3 1.3 0 0 1-.483.082h-.563zm3.743 1.763v1.591h-.79V11.85h2.548v.653H7.896v1.117h1.606v.638z" />
                                  </svg>

                                  <?php
                                } else if ($row1['filetype'] == ".docx") {
                                  ?>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#2B579A"
                                      class="bi bi-filetype-docx" viewBox="0 0 16 16">
                                      <path fill-rule="evenodd"
                                        d="M14 4.5V11h-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5zm-6.839 9.688v-.522a1.5 1.5 0 0 0-.117-.641.86.86 0 0 0-.322-.387.86.86 0 0 0-.469-.129.87.87 0 0 0-.471.13.87.87 0 0 0-.32.386 1.5 1.5 0 0 0-.117.641v.522q0 .384.117.641a.87.87 0 0 0 .32.387.9.9 0 0 0 .471.126.9.9 0 0 0 .469-.126.86.86 0 0 0 .322-.386 1.55 1.55 0 0 0 .117-.642m.803-.516v.513q0 .563-.205.973a1.47 1.47 0 0 1-.589.627q-.381.216-.917.216a1.86 1.86 0 0 1-.92-.216 1.46 1.46 0 0 1-.589-.627 2.15 2.15 0 0 1-.205-.973v-.513q0-.569.205-.975.205-.411.59-.627.386-.22.92-.22.535 0 .916.22.383.219.59.63.204.406.204.972M1 15.925v-3.999h1.459q.609 0 1.005.235.396.233.589.68.196.445.196 1.074 0 .634-.196 1.084-.197.451-.595.689-.396.237-.999.237zm1.354-3.354H1.79v2.707h.563q.277 0 .483-.082a.8.8 0 0 0 .334-.252q.132-.17.196-.422a2.3 2.3 0 0 0 .068-.592q0-.45-.118-.753a.9.9 0 0 0-.354-.454q-.237-.152-.61-.152Zm6.756 1.116q0-.373.103-.633a.87.87 0 0 1 .301-.398.8.8 0 0 1 .475-.138q.225 0 .398.097a.7.7 0 0 1 .273.26.85.85 0 0 1 .12.381h.765v-.073a1.33 1.33 0 0 0-.466-.964 1.4 1.4 0 0 0-.49-.272 1.8 1.8 0 0 0-.606-.097q-.534 0-.911.223-.375.222-.571.633-.197.41-.197.978v.498q0 .568.194.976.195.406.571.627.375.216.914.216.44 0 .785-.164t.551-.454a1.27 1.27 0 0 0 .226-.674v-.076h-.765a.8.8 0 0 1-.117.364.7.7 0 0 1-.273.248.9.9 0 0 1-.401.088.85.85 0 0 1-.478-.131.83.83 0 0 1-.298-.393 1.7 1.7 0 0 1-.103-.627zm5.092-1.76h.894l-1.275 2.006 1.254 1.992h-.908l-.85-1.415h-.035l-.852 1.415h-.862l1.24-2.015-1.228-1.984h.932l.832 1.439h.035z" />
                                    </svg>

                                  <?php
                                } else if ($row1['filetype'] == ".doc") {
                                  ?>
                                      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#2B579A"
                                        class="bi bi-filetype-doc" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                          d="M14 4.5V14a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5zm-7.839 9.166v.522q0 .384-.117.641a.86.86 0 0 1-.322.387.9.9 0 0 1-.469.126.9.9 0 0 1-.471-.126.87.87 0 0 1-.32-.386 1.55 1.55 0 0 1-.117-.642v-.522q0-.386.117-.641a.87.87 0 0 1 .32-.387.87.87 0 0 1 .471-.129q.264 0 .469.13a.86.86 0 0 1 .322.386q.117.255.117.641m.803.519v-.513q0-.565-.205-.972a1.46 1.46 0 0 0-.589-.63q-.381-.22-.917-.22-.533 0-.92.22a1.44 1.44 0 0 0-.589.627q-.204.406-.205.975v.513q0 .563.205.973.205.406.59.627.386.216.92.216.535 0 .916-.216.383-.22.59-.627.204-.41.204-.973M0 11.926v4h1.459q.603 0 .999-.238a1.45 1.45 0 0 0 .595-.689q.196-.45.196-1.084 0-.63-.196-1.075a1.43 1.43 0 0 0-.59-.68q-.395-.234-1.004-.234zm.791.645h.563q.371 0 .609.152a.9.9 0 0 1 .354.454q.118.302.118.753a2.3 2.3 0 0 1-.068.592 1.1 1.1 0 0 1-.196.422.8.8 0 0 1-.334.252 1.3 1.3 0 0 1-.483.082H.79V12.57Zm7.422.483a1.7 1.7 0 0 0-.103.633v.495q0 .369.103.627a.83.83 0 0 0 .298.393.85.85 0 0 0 .478.131.9.9 0 0 0 .401-.088.7.7 0 0 0 .273-.248.8.8 0 0 0 .117-.364h.765v.076a1.27 1.27 0 0 1-.226.674q-.205.29-.55.454a1.8 1.8 0 0 1-.786.164q-.54 0-.914-.216a1.4 1.4 0 0 1-.571-.627q-.194-.408-.194-.976v-.498q0-.568.197-.978.195-.411.571-.633.378-.223.911-.223.328 0 .607.097.28.093.489.272a1.33 1.33 0 0 1 .466.964v.073H9.78a.85.85 0 0 0-.12-.38.7.7 0 0 0-.273-.261.8.8 0 0 0-.398-.097.8.8 0 0 0-.475.138.87.87 0 0 0-.301.398" />
                                      </svg>

                                  <?php
                                } else if ($row1['filetype'] == ".pptx") {
                                  ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#D24726"
                                          class="bi bi-filetype-pptx" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd"
                                            d="M14 4.5V11h-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5zM1.5 11.85h1.6q.434 0 .732.179.302.175.46.477t.158.677-.16.677q-.159.299-.464.474a1.45 1.45 0 0 1-.732.173H2.29v1.342H1.5zm2.06 1.714a.8.8 0 0 0 .085-.381q0-.34-.185-.521-.185-.182-.513-.182h-.659v1.406h.66a.8.8 0 0 0 .374-.082.57.57 0 0 0 .238-.24m1.302-1.714h1.6q.434 0 .732.179.302.175.46.477t.158.677-.16.677q-.158.299-.464.474a1.45 1.45 0 0 1-.732.173h-.803v1.342h-.79zm2.06 1.714a.8.8 0 0 0 .085-.381q0-.34-.185-.521-.184-.182-.513-.182H5.65v1.406h.66a.8.8 0 0 0 .374-.082.57.57 0 0 0 .238-.24m2.852 2.285v-3.337h1.137v-.662H7.846v.662H8.98v3.337zm3.796-3.999h.893l-1.274 2.007 1.254 1.992h-.908l-.85-1.415h-.035l-.853 1.415h-.861l1.24-2.016-1.228-1.983h.931l.832 1.439h.035z" />
                                        </svg>

                                  <?php
                                } else if ($row1['filetype'] == ".ppx") {
                                  ?>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#D24726"
                                            class="bi bi-filetype-ppt" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                              d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5zM1.6 11.85H0v3.999h.791v-1.342h.803q.43 0 .732-.173.305-.175.463-.474a1.4 1.4 0 0 0 .161-.677q0-.375-.158-.677a1.2 1.2 0 0 0-.46-.477q-.3-.18-.732-.179m.545 1.333a.8.8 0 0 1-.085.38.57.57 0 0 1-.238.241.8.8 0 0 1-.375.082H.788V12.48h.66q.327 0 .512.181.185.183.185.522m2.817-1.333h-1.6v3.999h.791v-1.342h.803q.43 0 .732-.173.305-.175.463-.474.162-.302.161-.677 0-.375-.158-.677a1.2 1.2 0 0 0-.46-.477q-.3-.18-.732-.179m.545 1.333a.8.8 0 0 1-.085.38.57.57 0 0 1-.238.241.8.8 0 0 1-.375.082H4.15V12.48h.66q.327 0 .512.181.185.183.185.522m2.767-.67v3.336H7.48v-3.337H6.346v-.662h3.065v.662z" />
                                          </svg>

                                  <?php
                                } else if ($row1['filetype'] == ".png") {
                                  ?>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#A066AA"
                                              class="bi bi-filetype-png" viewBox="0 0 16 16">
                                              <path fill-rule="evenodd"
                                                d="M14 4.5V14a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5zm-3.76 8.132q.114.23.14.492h-.776a.8.8 0 0 0-.097-.249.7.7 0 0 0-.17-.19.7.7 0 0 0-.237-.126 1 1 0 0 0-.299-.044q-.427 0-.665.302-.234.301-.234.85v.498q0 .351.097.615a.9.9 0 0 0 .304.413.87.87 0 0 0 .519.146 1 1 0 0 0 .457-.096.67.67 0 0 0 .272-.264q.09-.164.091-.363v-.255H8.82v-.59h1.576v.798q0 .29-.097.55a1.3 1.3 0 0 1-.293.458 1.4 1.4 0 0 1-.495.313q-.296.111-.697.111a2 2 0 0 1-.753-.132 1.45 1.45 0 0 1-.533-.377 1.6 1.6 0 0 1-.32-.58 2.5 2.5 0 0 1-.105-.745v-.506q0-.543.2-.95.201-.406.582-.633.384-.228.926-.228.357 0 .636.1.281.1.48.275.2.176.314.407Zm-8.64-.706H0v4h.791v-1.343h.803q.43 0 .732-.172.305-.177.463-.475a1.4 1.4 0 0 0 .161-.677q0-.374-.158-.677a1.2 1.2 0 0 0-.46-.477q-.3-.18-.732-.179m.545 1.333a.8.8 0 0 1-.085.381.57.57 0 0 1-.238.24.8.8 0 0 1-.375.082H.788v-1.406h.66q.327 0 .512.182.185.181.185.521m1.964 2.666V13.25h.032l1.761 2.675h.656v-3.999h-.75v2.66h-.032l-1.752-2.66h-.662v4z" />
                                            </svg>

                                  <?php
                                } else if ($row1['filetype'] == ".jpg" or $row1['filetype'] == ".jpeg") {
                                  ?>
                                              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#14A085"
                                                class="bi bi-filetype-jpg" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                  d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5zm-4.34 8.132q.114.23.14.492h-.776a.8.8 0 0 0-.097-.249.7.7 0 0 0-.17-.19.7.7 0 0 0-.237-.126 1 1 0 0 0-.299-.044q-.428 0-.665.302-.234.301-.234.85v.498q0 .351.097.615a.9.9 0 0 0 .304.413.87.87 0 0 0 .519.146 1 1 0 0 0 .457-.096.67.67 0 0 0 .272-.264q.09-.164.091-.363v-.255H8.24v-.59h1.576v.798q0 .29-.097.55a1.3 1.3 0 0 1-.293.458 1.4 1.4 0 0 1-.495.313q-.296.111-.697.111a2 2 0 0 1-.753-.132 1.45 1.45 0 0 1-.533-.377 1.6 1.6 0 0 1-.32-.58 2.5 2.5 0 0 1-.105-.745v-.506q0-.543.2-.95.201-.406.582-.633.384-.228.926-.228.357 0 .636.1.28.1.48.275t.314.407ZM0 14.786q0 .246.082.465.083.22.243.39.165.17.407.267.246.093.569.093.63 0 .984-.345.357-.346.358-1.005v-2.725h-.791v2.745q0 .303-.138.466t-.422.164a.5.5 0 0 1-.454-.246.6.6 0 0 1-.073-.27H0Zm4.92-2.86H3.322v4h.791v-1.343h.803q.43 0 .732-.172.305-.177.463-.475.162-.302.161-.677 0-.374-.158-.677a1.2 1.2 0 0 0-.46-.477q-.3-.18-.732-.179Zm.546 1.333a.8.8 0 0 1-.085.381.57.57 0 0 1-.238.24.8.8 0 0 1-.375.082H4.11v-1.406h.66q.327 0 .512.182.185.181.185.521Z" />
                                              </svg>
                                  <?php
                                }else if ($row1['filetype'] == ".mp4") {
                                  ?>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#0077CC"
                                                  class="bi bi-filetype-mp4" viewBox="0 0 16 16">
                                                  <path fill-rule="evenodd"
                                                    d="M14 4.5V14a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5zM.706 15.849v-2.66h.038l.952 2.16h.516l.946-2.16h.038v2.66h.715V11.85h-.8l-1.14 2.596h-.026L.805 11.85H0v3.999zm5.278-3.999h-1.6v3.999h.792v-1.342h.803q.43 0 .732-.173.304-.175.463-.474a1.4 1.4 0 0 0 .161-.677q0-.375-.158-.677a1.2 1.2 0 0 0-.46-.477 1.4 1.4 0 0 0-.733-.179m.545 1.333a.8.8 0 0 1-.085.38.57.57 0 0 1-.237.241.8.8 0 0 1-.375.082h-.66V12.48h.66q.329 0 .513.181.184.183.184.522m1.505-.032q.4-.65.791-1.301h1.14v2.62h.49v.638h-.49v.741h-.741v-.741H7.287v-.648q.353-.66.747-1.31Zm-.029 1.298v.02h1.219v-2.021h-.041q-.302.477-.607.984-.3.507-.571 1.017" />
                                                </svg>

                                  <?php
                                } else if ($row1['filetype'] == ".avi") {
                                  ?>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#0077CC"
                                                  class="bi bi-filetype-aac" viewBox="0 0 16 16">
                                                  <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5zm-5.808 8.554a1.7 1.7 0 0 0-.103.633v.495q0 .369.103.627a.83.83 0 0 0 .299.393.85.85 0 0 0 .477.131.9.9 0 0 0 .402-.088.7.7 0 0 0 .272-.248.8.8 0 0 0 .117-.364h.765v.076a1.27 1.27 0 0 1-.226.674q-.204.29-.55.454a1.8 1.8 0 0 1-.785.164q-.54 0-.915-.216a1.4 1.4 0 0 1-.57-.627q-.195-.408-.194-.976v-.498q0-.568.196-.978.195-.411.571-.633.378-.223.912-.223.327 0 .606.097.28.093.49.272a1.33 1.33 0 0 1 .465.964v.073h-.765a.85.85 0 0 0-.12-.38.7.7 0 0 0-.272-.261.8.8 0 0 0-.399-.097.8.8 0 0 0-.474.138.87.87 0 0 0-.302.398M.8 15.925l.313-1.028H2.45l.314 1.028h.84l-1.335-3.999h-.926l-1.342 4zm1.002-3.234.489 1.617H1.277l.49-1.617zm2.63 3.234.313-1.028H6.08l.313 1.028h.841L5.9 11.926h-.926l-1.341 4zm1.001-3.234.49 1.617H4.909l.49-1.617z"/>
                                                </svg>

                                  <?php
                                } else if ($row1['filetype'] == ".mov") {
                                  ?>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#0077CC"
                                                  class="bi bi-filetype-mov" viewBox="0 0 16 16">
                                                  <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5zm-6.914 9.166v.522q0 .384-.117.641a.86.86 0 0 1-.323.387.9.9 0 0 1-.468.126.9.9 0 0 1-.472-.126.87.87 0 0 1-.32-.386 1.55 1.55 0 0 1-.117-.642v-.522q0-.386.118-.641a.87.87 0 0 1 .319-.387.87.87 0 0 1 .472-.129q.263 0 .468.13a.86.86 0 0 1 .323.386q.117.255.117.641m.802.519v-.513q0-.565-.205-.972a1.46 1.46 0 0 0-.588-.63q-.381-.22-.917-.22-.534 0-.92.22a1.44 1.44 0 0 0-.59.627q-.204.406-.204.975v.513q0 .563.205.973.205.406.589.627.386.216.92.216.536 0 .917-.216.383-.22.588-.627.205-.41.205-.973m-7.182 1.74v-2.66h.038l.952 2.16h.516l.946-2.16h.038v2.66h.715v-3.999h-.8l-1.14 2.596h-.026l-1.14-2.596H0v4zm9.54 0h-.952l-1.34-3.999h.918l.896 3.138h.038l.888-3.138h.879z"/>
</svg>

                                  <?php
                                } else {
                                  ?>
                                              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                                class="bi bi-file-earmark" viewBox="0 0 16 16">
                                                <path
                                                  d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5z" />
                                              </svg>
                                  <?php
                                }

                                ?>
                              </td>
                              <td><a href="/hci66/data/<?php echo $userid ?>/<?php echo $row1['hash'] ?>" target="_blank">
                                  <?php echo $row1['orginal'] ?>
                                </a></td>
                              <td>
                                <?php echo strtoupper($row1['filetype']) ?>
                              </td>
                              <td>
                                <?php
                                if ($file_size_MB > 1) {
                                  echo round($file_size_MB, 2) . " MB";
                                } else {
                                  echo round($row1['filesize'] / 1024, 2) . " KB";
                                }
                                ?>
                              </td>
                              <td>
                                <?php echo $row1['create_at'] ?>
                              </td>
                              <td>

                                <button type="button" class="btn btn-outline-danger me-2" data-bs-toggle="modal"
                                  data-bs-target="#delete_<?php echo $row1['id']; ?>">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-trash3" viewBox="0 0 16 16">
                                    <path
                                      d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5">
                                    </path>
                                  </svg> ลบเอกสาร</button>

                              </td>

                            </tr>
                            <?php
                            $count++;
                          }
                        }
                        ?>


                      </tbody>
                    </table>
                  </div>

                </div>



                <div class="tab-pane fade" id="navs-top-profile" role="tabpanel">
                  <div class="table-responsive text-nowrap">
                    <table class="table">
                      <thead>
                        <tr class="text-nowrap">
                          <th>#</th>
                          <th></th>
                          <th style="width: 700px;">ชื่อไฟล์</th>
                          <th>ชนิด</th>
                          <th>ขนาด</th>
                          <th>อัพเดตล่าสุด</th>
                          <th style="width: 200px;"></th>

                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $count5 = 1;
                        while ($row6 = $result6->fetch_assoc()) {
                          if ($row6['delete_at'] != "") {
                            $file_size_M = $row6['filesize'] / (1024 * 1024);

                            ?>
                            <tr>
                              <td scope="row">
                                <?php echo $count5 ?>
                              </td>
                              <td scope="row">
                                <?php
                                if ($row6['filetype'] == ".pdf") {
                                  ?>

                                  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#D32F2F"
                                    class="bi bi-filetype-pdf" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                      d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5zM1.6 11.85H0v3.999h.791v-1.342h.803q.43 0 .732-.173.305-.175.463-.474a1.4 1.4 0 0 0 .161-.677q0-.375-.158-.677a1.2 1.2 0 0 0-.46-.477q-.3-.18-.732-.179m.545 1.333a.8.8 0 0 1-.085.38.57.57 0 0 1-.238.241.8.8 0 0 1-.375.082H.788V12.48h.66q.327 0 .512.181.185.183.185.522m1.217-1.333v3.999h1.46q.602 0 .998-.237a1.45 1.45 0 0 0 .595-.689q.196-.45.196-1.084 0-.63-.196-1.075a1.43 1.43 0 0 0-.589-.68q-.396-.234-1.005-.234zm.791.645h.563q.371 0 .609.152a.9.9 0 0 1 .354.454q.118.302.118.753a2.3 2.3 0 0 1-.068.592 1.1 1.1 0 0 1-.196.422.8.8 0 0 1-.334.252 1.3 1.3 0 0 1-.483.082h-.563zm3.743 1.763v1.591h-.79V11.85h2.548v.653H7.896v1.117h1.606v.638z" />
                                  </svg>

                                  <?php
                                } else if ($row6['filetype'] == ".docx") {
                                  ?>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#2B579A"
                                      class="bi bi-filetype-docx" viewBox="0 0 16 16">
                                      <path fill-rule="evenodd"
                                        d="M14 4.5V11h-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5zm-6.839 9.688v-.522a1.5 1.5 0 0 0-.117-.641.86.86 0 0 0-.322-.387.86.86 0 0 0-.469-.129.87.87 0 0 0-.471.13.87.87 0 0 0-.32.386 1.5 1.5 0 0 0-.117.641v.522q0 .384.117.641a.87.87 0 0 0 .32.387.9.9 0 0 0 .471.126.9.9 0 0 0 .469-.126.86.86 0 0 0 .322-.386 1.55 1.55 0 0 0 .117-.642m.803-.516v.513q0 .563-.205.973a1.47 1.47 0 0 1-.589.627q-.381.216-.917.216a1.86 1.86 0 0 1-.92-.216 1.46 1.46 0 0 1-.589-.627 2.15 2.15 0 0 1-.205-.973v-.513q0-.569.205-.975.205-.411.59-.627.386-.22.92-.22.535 0 .916.22.383.219.59.63.204.406.204.972M1 15.925v-3.999h1.459q.609 0 1.005.235.396.233.589.68.196.445.196 1.074 0 .634-.196 1.084-.197.451-.595.689-.396.237-.999.237zm1.354-3.354H1.79v2.707h.563q.277 0 .483-.082a.8.8 0 0 0 .334-.252q.132-.17.196-.422a2.3 2.3 0 0 0 .068-.592q0-.45-.118-.753a.9.9 0 0 0-.354-.454q-.237-.152-.61-.152Zm6.756 1.116q0-.373.103-.633a.87.87 0 0 1 .301-.398.8.8 0 0 1 .475-.138q.225 0 .398.097a.7.7 0 0 1 .273.26.85.85 0 0 1 .12.381h.765v-.073a1.33 1.33 0 0 0-.466-.964 1.4 1.4 0 0 0-.49-.272 1.8 1.8 0 0 0-.606-.097q-.534 0-.911.223-.375.222-.571.633-.197.41-.197.978v.498q0 .568.194.976.195.406.571.627.375.216.914.216.44 0 .785-.164t.551-.454a1.27 1.27 0 0 0 .226-.674v-.076h-.765a.8.8 0 0 1-.117.364.7.7 0 0 1-.273.248.9.9 0 0 1-.401.088.85.85 0 0 1-.478-.131.83.83 0 0 1-.298-.393 1.7 1.7 0 0 1-.103-.627zm5.092-1.76h.894l-1.275 2.006 1.254 1.992h-.908l-.85-1.415h-.035l-.852 1.415h-.862l1.24-2.015-1.228-1.984h.932l.832 1.439h.035z" />
                                    </svg>

                                  <?php
                                } else if ($row6['filetype'] == ".doc") {
                                  ?>
                                      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#2B579A"
                                        class="bi bi-filetype-doc" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                          d="M14 4.5V14a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5zm-7.839 9.166v.522q0 .384-.117.641a.86.86 0 0 1-.322.387.9.9 0 0 1-.469.126.9.9 0 0 1-.471-.126.87.87 0 0 1-.32-.386 1.55 1.55 0 0 1-.117-.642v-.522q0-.386.117-.641a.87.87 0 0 1 .32-.387.87.87 0 0 1 .471-.129q.264 0 .469.13a.86.86 0 0 1 .322.386q.117.255.117.641m.803.519v-.513q0-.565-.205-.972a1.46 1.46 0 0 0-.589-.63q-.381-.22-.917-.22-.533 0-.92.22a1.44 1.44 0 0 0-.589.627q-.204.406-.205.975v.513q0 .563.205.973.205.406.59.627.386.216.92.216.535 0 .916-.216.383-.22.59-.627.204-.41.204-.973M0 11.926v4h1.459q.603 0 .999-.238a1.45 1.45 0 0 0 .595-.689q.196-.45.196-1.084 0-.63-.196-1.075a1.43 1.43 0 0 0-.59-.68q-.395-.234-1.004-.234zm.791.645h.563q.371 0 .609.152a.9.9 0 0 1 .354.454q.118.302.118.753a2.3 2.3 0 0 1-.068.592 1.1 1.1 0 0 1-.196.422.8.8 0 0 1-.334.252 1.3 1.3 0 0 1-.483.082H.79V12.57Zm7.422.483a1.7 1.7 0 0 0-.103.633v.495q0 .369.103.627a.83.83 0 0 0 .298.393.85.85 0 0 0 .478.131.9.9 0 0 0 .401-.088.7.7 0 0 0 .273-.248.8.8 0 0 0 .117-.364h.765v.076a1.27 1.27 0 0 1-.226.674q-.205.29-.55.454a1.8 1.8 0 0 1-.786.164q-.54 0-.914-.216a1.4 1.4 0 0 1-.571-.627q-.194-.408-.194-.976v-.498q0-.568.197-.978.195-.411.571-.633.378-.223.911-.223.328 0 .607.097.28.093.489.272a1.33 1.33 0 0 1 .466.964v.073H9.78a.85.85 0 0 0-.12-.38.7.7 0 0 0-.273-.261.8.8 0 0 0-.398-.097.8.8 0 0 0-.475.138.87.87 0 0 0-.301.398" />
                                      </svg>

                                  <?php
                                } else if ($row6['filetype'] == ".pptx") {
                                  ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#D24726"
                                          class="bi bi-filetype-pptx" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd"
                                            d="M14 4.5V11h-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5zM1.5 11.85h1.6q.434 0 .732.179.302.175.46.477t.158.677-.16.677q-.159.299-.464.474a1.45 1.45 0 0 1-.732.173H2.29v1.342H1.5zm2.06 1.714a.8.8 0 0 0 .085-.381q0-.34-.185-.521-.185-.182-.513-.182h-.659v1.406h.66a.8.8 0 0 0 .374-.082.57.57 0 0 0 .238-.24m1.302-1.714h1.6q.434 0 .732.179.302.175.46.477t.158.677-.16.677q-.158.299-.464.474a1.45 1.45 0 0 1-.732.173h-.803v1.342h-.79zm2.06 1.714a.8.8 0 0 0 .085-.381q0-.34-.185-.521-.184-.182-.513-.182H5.65v1.406h.66a.8.8 0 0 0 .374-.082.57.57 0 0 0 .238-.24m2.852 2.285v-3.337h1.137v-.662H7.846v.662H8.98v3.337zm3.796-3.999h.893l-1.274 2.007 1.254 1.992h-.908l-.85-1.415h-.035l-.853 1.415h-.861l1.24-2.016-1.228-1.983h.931l.832 1.439h.035z" />
                                        </svg>

                                  <?php
                                } else if ($row6['filetype'] == ".ppx") {
                                  ?>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#D24726"
                                            class="bi bi-filetype-ppt" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                              d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5zM1.6 11.85H0v3.999h.791v-1.342h.803q.43 0 .732-.173.305-.175.463-.474a1.4 1.4 0 0 0 .161-.677q0-.375-.158-.677a1.2 1.2 0 0 0-.46-.477q-.3-.18-.732-.179m.545 1.333a.8.8 0 0 1-.085.38.57.57 0 0 1-.238.241.8.8 0 0 1-.375.082H.788V12.48h.66q.327 0 .512.181.185.183.185.522m2.817-1.333h-1.6v3.999h.791v-1.342h.803q.43 0 .732-.173.305-.175.463-.474.162-.302.161-.677 0-.375-.158-.677a1.2 1.2 0 0 0-.46-.477q-.3-.18-.732-.179m.545 1.333a.8.8 0 0 1-.085.38.57.57 0 0 1-.238.241.8.8 0 0 1-.375.082H4.15V12.48h.66q.327 0 .512.181.185.183.185.522m2.767-.67v3.336H7.48v-3.337H6.346v-.662h3.065v.662z" />
                                          </svg>

                                  <?php
                                } else if ($row6['filetype'] == ".png") {
                                  ?>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#A066AA"
                                              class="bi bi-filetype-png" viewBox="0 0 16 16">
                                              <path fill-rule="evenodd"
                                                d="M14 4.5V14a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5zm-3.76 8.132q.114.23.14.492h-.776a.8.8 0 0 0-.097-.249.7.7 0 0 0-.17-.19.7.7 0 0 0-.237-.126 1 1 0 0 0-.299-.044q-.427 0-.665.302-.234.301-.234.85v.498q0 .351.097.615a.9.9 0 0 0 .304.413.87.87 0 0 0 .519.146 1 1 0 0 0 .457-.096.67.67 0 0 0 .272-.264q.09-.164.091-.363v-.255H8.82v-.59h1.576v.798q0 .29-.097.55a1.3 1.3 0 0 1-.293.458 1.4 1.4 0 0 1-.495.313q-.296.111-.697.111a2 2 0 0 1-.753-.132 1.45 1.45 0 0 1-.533-.377 1.6 1.6 0 0 1-.32-.58 2.5 2.5 0 0 1-.105-.745v-.506q0-.543.2-.95.201-.406.582-.633.384-.228.926-.228.357 0 .636.1.281.1.48.275.2.176.314.407Zm-8.64-.706H0v4h.791v-1.343h.803q.43 0 .732-.172.305-.177.463-.475a1.4 1.4 0 0 0 .161-.677q0-.374-.158-.677a1.2 1.2 0 0 0-.46-.477q-.3-.18-.732-.179m.545 1.333a.8.8 0 0 1-.085.381.57.57 0 0 1-.238.24.8.8 0 0 1-.375.082H.788v-1.406h.66q.327 0 .512.182.185.181.185.521m1.964 2.666V13.25h.032l1.761 2.675h.656v-3.999h-.75v2.66h-.032l-1.752-2.66h-.662v4z" />
                                            </svg>

                                  <?php
                                } else if ($row6['filetype'] == ".jpg" or $row6['filetype'] == ".jpeg") {
                                  ?>
                                              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#14A085"
                                                class="bi bi-filetype-jpg" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                  d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5zm-4.34 8.132q.114.23.14.492h-.776a.8.8 0 0 0-.097-.249.7.7 0 0 0-.17-.19.7.7 0 0 0-.237-.126 1 1 0 0 0-.299-.044q-.428 0-.665.302-.234.301-.234.85v.498q0 .351.097.615a.9.9 0 0 0 .304.413.87.87 0 0 0 .519.146 1 1 0 0 0 .457-.096.67.67 0 0 0 .272-.264q.09-.164.091-.363v-.255H8.24v-.59h1.576v.798q0 .29-.097.55a1.3 1.3 0 0 1-.293.458 1.4 1.4 0 0 1-.495.313q-.296.111-.697.111a2 2 0 0 1-.753-.132 1.45 1.45 0 0 1-.533-.377 1.6 1.6 0 0 1-.32-.58 2.5 2.5 0 0 1-.105-.745v-.506q0-.543.2-.95.201-.406.582-.633.384-.228.926-.228.357 0 .636.1.28.1.48.275t.314.407ZM0 14.786q0 .246.082.465.083.22.243.39.165.17.407.267.246.093.569.093.63 0 .984-.345.357-.346.358-1.005v-2.725h-.791v2.745q0 .303-.138.466t-.422.164a.5.5 0 0 1-.454-.246.6.6 0 0 1-.073-.27H0Zm4.92-2.86H3.322v4h.791v-1.343h.803q.43 0 .732-.172.305-.177.463-.475.162-.302.161-.677 0-.374-.158-.677a1.2 1.2 0 0 0-.46-.477q-.3-.18-.732-.179Zm.546 1.333a.8.8 0 0 1-.085.381.57.57 0 0 1-.238.24.8.8 0 0 1-.375.082H4.11v-1.406h.66q.327 0 .512.182.185.181.185.521Z" />
                                              </svg>
                                  <?php
                                } else if ($row6['filetype'] == ".mp4") {
                                  ?>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#0077CC"
                                                  class="bi bi-filetype-mp4" viewBox="0 0 16 16">
                                                  <path fill-rule="evenodd"
                                                    d="M14 4.5V14a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5zM.706 15.849v-2.66h.038l.952 2.16h.516l.946-2.16h.038v2.66h.715V11.85h-.8l-1.14 2.596h-.026L.805 11.85H0v3.999zm5.278-3.999h-1.6v3.999h.792v-1.342h.803q.43 0 .732-.173.304-.175.463-.474a1.4 1.4 0 0 0 .161-.677q0-.375-.158-.677a1.2 1.2 0 0 0-.46-.477 1.4 1.4 0 0 0-.733-.179m.545 1.333a.8.8 0 0 1-.085.38.57.57 0 0 1-.237.241.8.8 0 0 1-.375.082h-.66V12.48h.66q.329 0 .513.181.184.183.184.522m1.505-.032q.4-.65.791-1.301h1.14v2.62h.49v.638h-.49v.741h-.741v-.741H7.287v-.648q.353-.66.747-1.31Zm-.029 1.298v.02h1.219v-2.021h-.041q-.302.477-.607.984-.3.507-.571 1.017" />
                                                </svg>

                                  <?php
                                } else if ($row6['filetype'] == ".avi") {
                                  ?>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#0077CC"
                                                  class="bi bi-filetype-aac" viewBox="0 0 16 16">
                                                  <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5zm-5.808 8.554a1.7 1.7 0 0 0-.103.633v.495q0 .369.103.627a.83.83 0 0 0 .299.393.85.85 0 0 0 .477.131.9.9 0 0 0 .402-.088.7.7 0 0 0 .272-.248.8.8 0 0 0 .117-.364h.765v.076a1.27 1.27 0 0 1-.226.674q-.204.29-.55.454a1.8 1.8 0 0 1-.785.164q-.54 0-.915-.216a1.4 1.4 0 0 1-.57-.627q-.195-.408-.194-.976v-.498q0-.568.196-.978.195-.411.571-.633.378-.223.912-.223.327 0 .606.097.28.093.49.272a1.33 1.33 0 0 1 .465.964v.073h-.765a.85.85 0 0 0-.12-.38.7.7 0 0 0-.272-.261.8.8 0 0 0-.399-.097.8.8 0 0 0-.474.138.87.87 0 0 0-.302.398M.8 15.925l.313-1.028H2.45l.314 1.028h.84l-1.335-3.999h-.926l-1.342 4zm1.002-3.234.489 1.617H1.277l.49-1.617zm2.63 3.234.313-1.028H6.08l.313 1.028h.841L5.9 11.926h-.926l-1.341 4zm1.001-3.234.49 1.617H4.909l.49-1.617z"/>
                                                </svg>

                                  <?php
                                } else if ($row6['filetype'] == ".mov") {
                                  ?>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#0077CC"
                                                  class="bi bi-filetype-mov" viewBox="0 0 16 16">
                                                  <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5zm-6.914 9.166v.522q0 .384-.117.641a.86.86 0 0 1-.323.387.9.9 0 0 1-.468.126.9.9 0 0 1-.472-.126.87.87 0 0 1-.32-.386 1.55 1.55 0 0 1-.117-.642v-.522q0-.386.118-.641a.87.87 0 0 1 .319-.387.87.87 0 0 1 .472-.129q.263 0 .468.13a.86.86 0 0 1 .323.386q.117.255.117.641m.802.519v-.513q0-.565-.205-.972a1.46 1.46 0 0 0-.588-.63q-.381-.22-.917-.22-.534 0-.92.22a1.44 1.44 0 0 0-.59.627q-.204.406-.204.975v.513q0 .563.205.973.205.406.589.627.386.216.92.216.536 0 .917-.216.383-.22.588-.627.205-.41.205-.973m-7.182 1.74v-2.66h.038l.952 2.16h.516l.946-2.16h.038v2.66h.715v-3.999h-.8l-1.14 2.596h-.026l-1.14-2.596H0v4zm9.54 0h-.952l-1.34-3.999h.918l.896 3.138h.038l.888-3.138h.879z"/>
</svg>

                                  <?php
                                }else {
                                  ?>
                                              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                                class="bi bi-file-earmark" viewBox="0 0 16 16">
                                                <path
                                                  d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5z" />
                                              </svg>
                                  <?php
                                }

                                ?>
                              </td>
                              <td><a href="/hci66/data/<?php echo $userid ?>/<?php echo $row6['hash'] ?>" target="_blank">
                                  <?php echo $row6['orginal'] ?>
                                </a></td>
                              <td>
                                <?php echo strtoupper($row6['filetype']) ?>
                              </td>
                              <td>
                                <?php
                                if ($file_size_M > 1) {
                                  echo round($file_size_M, 2) . " MB";
                                } else {
                                  echo round($row6['filesize'] / 1024, 2) . " KB";
                                }
                                ?>
                              </td>
                              <td>
                                <?php echo $row6['create_at'] ?>
                              </td>
                              <td>

                                <button type="button" class="btn btn-outline-warning me-2" data-bs-toggle="modal"
                                  data-bs-target="#new_<?php echo $row6['id']; ?>">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                      d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2z" />
                                    <path
                                      d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466" />
                                  </svg> กู้คืน</button>

                              </td>

                            </tr>
                            <?php $count5++;
                          }
                        } ?>


                      </tbody>
                    </table>
                  </div>
                </div>

              </div>

            </div>
            <?php
            while ($row2 = $result2->fetch_assoc()) {
              ?>
              <div class="modal  fade" id="delete_<?php echo $row2['id'] ?>" tabindex="-1" aria-labelledby="delete"
                aria-hidden="true">
                <div class="modal-dialog modal-sm modal-dialog-centered modal-delete" role="document">
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
                        <button type="submit" class="btn btn-danger">ลบ</button>
                      </form>
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>

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
                      <form action="/hci66/admin/solo/upload.php?id=<?php echo $id ?>" method="post">
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
            <!-- / Content -->


            <!-- Footer -->
            <footer class="content-footer footer ">
              <p class="m-3 text-body-secondary text-center">
                <small>
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script> HCI v0.4 All Rights Reserved.
                  made with by <a href="http://github.com/OSP101" target="_blank">OSP101</a> and <a
                    href="http://www.facebook.com/picha143" target="_blank" rel="noopener noreferrer">Aomsin</a>

                </small>
              </p>
            </footer>
            <!-- / Footer -->



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
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script src="api_solo.js"></script>

            <script>
        document.getElementById("fileToUpload").addEventListener("change", function() {
            var uploadButton = document.getElementById("uploadButton");
            if (this.files.length > 0) {
                uploadButton.classList.remove("disabled");
            } else {
                uploadButton.classList.add("disabled");
            }
        });
    </script>
</body>

</html>
<?php

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

  $sqllog = "INSERT INTO `log`(`userid`, `type`, `ip`, `detail`) VALUES ('$userid','File','$user_ip','Delete File => $fileid')";
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

  $sqllog = "INSERT INTO `log`(`userid`, `type`, `ip`, `detail`) VALUES ('$userid','File','$user_ip','Recover File => $fileid')";
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