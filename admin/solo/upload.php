<?php
include('../../route/route_admin.php');

$email = $_SESSION['email'];
$userid = $_SESSION['username'];
$section = $_SESSION['section'];
$fname = $_SESSION['fname'];
$image = $_SESSION['image'];
$id = $_GET['id'];

include('../../database/conn.php');

$sql = "SELECT * FROM users WHERE username = '$id'";
$result = $conn->query($sql);
$result_del = $conn->query($sql);

$sql1 = "SELECT * FROM `file` WHERE userid = '$id'";
$result1 = $conn->query($sql1);
$sql2 = "SELECT * FROM `file` WHERE userid = '$id'";
$result2 = $conn->query($sql2);

$sql4 = "SELECT * FROM `file` WHERE userid = '$id'";
$result4 = $conn->query($sql4);

$sql6 = "SELECT * FROM `file` WHERE userid = '$id'";
$result6 = $conn->query($sql6);

$sql5 = "SELECT * FROM `file` WHERE userid = '$id'";
$result5 = $conn->query($sql5);

?>

<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
  data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title><?php echo $id; ?> - hci66</title>



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

          <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
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


          <li class="menu-item  active">
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

        <nav
          class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
          id="layout-navbar">
          
          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <i class="bx bx-menu bx-sm"></i>
            </a>
          </div>

          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <h4>งานกลุ่ม</h4>
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
                          <span class="fw-semibold d-block"><?php echo $fname ?></span>
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
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="/hci66/admin/solo/">งานเดี่ยว</a>
                </li>
               
                <li class="breadcrumb-item active"><?php echo $id; ?></li>
              </ol>
            </nav>
            

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
                <?php
                        while ($row = $result->fetch_assoc()) {
                            ?>
                  <h5 class="card-header">รหัสนักศึกษา: <?php echo $id; ?> ชื่อ - นามสกุล: <?php echo $row['fname']; ?> เซคชัน: <?php echo $row['section']; ?></h5>
                  <?php }?>
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
                                  if($row1['filetype'] == ".pdf"){
                                    ?>

<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#D32F2F" class="bi bi-file-earmark-pdf-fill" viewBox="0 0 16 16">
  <path d="M5.523 12.424q.21-.124.459-.238a8 8 0 0 1-.45.606c-.28.337-.498.516-.635.572l-.035.012a.3.3 0 0 1-.026-.044c-.056-.11-.054-.216.04-.36.106-.165.319-.354.647-.548m2.455-1.647q-.178.037-.356.078a21 21 0 0 0 .5-1.05 12 12 0 0 0 .51.858q-.326.048-.654.114m2.525.939a4 4 0 0 1-.435-.41q.344.007.612.054c.317.057.466.147.518.209a.1.1 0 0 1 .026.064.44.44 0 0 1-.06.2.3.3 0 0 1-.094.124.1.1 0 0 1-.069.015c-.09-.003-.258-.066-.498-.256M8.278 6.97c-.04.244-.108.524-.2.829a5 5 0 0 1-.089-.346c-.076-.353-.087-.63-.046-.822.038-.177.11-.248.196-.283a.5.5 0 0 1 .145-.04c.013.03.028.092.032.198q.008.183-.038.465z"/>
  <path fill-rule="evenodd" d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2m5.5 1.5v2a1 1 0 0 0 1 1h2zM4.165 13.668c.09.18.23.343.438.419.207.075.412.04.58-.03.318-.13.635-.436.926-.786.333-.401.683-.927 1.021-1.51a11.7 11.7 0 0 1 1.997-.406c.3.383.61.713.91.95.28.22.603.403.934.417a.86.86 0 0 0 .51-.138c.155-.101.27-.247.354-.416.09-.181.145-.37.138-.563a.84.84 0 0 0-.2-.518c-.226-.27-.596-.4-.96-.465a5.8 5.8 0 0 0-1.335-.05 11 11 0 0 1-.98-1.686c.25-.66.437-1.284.52-1.794.036-.218.055-.426.048-.614a1.24 1.24 0 0 0-.127-.538.7.7 0 0 0-.477-.365c-.202-.043-.41 0-.601.077-.377.15-.576.47-.651.823-.073.34-.04.736.046 1.136.088.406.238.848.43 1.295a20 20 0 0 1-1.062 2.227 7.7 7.7 0 0 0-1.482.645c-.37.22-.699.48-.897.787-.21.326-.275.714-.08 1.103"/>
</svg>

                                    <?php
                                  }else if($row1['filetype'] == ".docx" or $row1['filetype'] == ".doc"){
?>
<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#2B579A" class="bi bi-file-earmark-word-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M5.485 6.879l1.036 4.144.997-3.655a.5.5 0 0 1 .964 0l.997 3.655 1.036-4.144a.5.5 0 0 1 .97.242l-1.5 6a.5.5 0 0 1-.967.01L8 9.402l-1.018 3.73a.5.5 0 0 1-.967-.01l-1.5-6a.5.5 0 1 1 .97-.242z"/>
</svg>

<?php
                                  }else if($row1['filetype'] == ".pptx" or $row1['filetype'] == ".ppx"){
?>
<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#D24726" class="bi bi-file-earmark-ppt-fill" viewBox="0 0 16 16">
  <path d="M8.188 10H7V6.5h1.188a1.75 1.75 0 1 1 0 3.5"/>
  <path d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2m5.5 1.5v2a1 1 0 0 0 1 1h2zM7 5.5a1 1 0 0 0-1 1V13a.5.5 0 0 0 1 0v-2h1.188a2.75 2.75 0 0 0 0-5.5z"/>
</svg>

<?php
                                  }else{
                                    ?>
<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-file-earmark-fill" viewBox="0 0 16 16">
  <path d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2m5.5 1.5v2a1 1 0 0 0 1 1h2z"/>
</svg>
                                    <?php
                                  }

?>
                              </td>
                              <td><a href="/hci66/data/<?php echo $id ?>/<?php echo $row1['hash'] ?>" target="_blank">
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
                <?php
                        while ($row_del = $result_del->fetch_assoc()) {
                            ?>
                  <h5 class="card-header">รหัสนักศึกษา: <?php echo $id; ?> ชื่อ - นามสกุล: <?php echo $row_del['fname']; ?> เซคชัน: <?php echo $row_del['section']; ?></h5>
                  <?php }?>
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
                                  if($row6['filetype'] == ".pdf"){
                                    ?>

<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#D32F2F" class="bi bi-file-earmark-pdf-fill" viewBox="0 0 16 16">
  <path d="M5.523 12.424q.21-.124.459-.238a8 8 0 0 1-.45.606c-.28.337-.498.516-.635.572l-.035.012a.3.3 0 0 1-.026-.044c-.056-.11-.054-.216.04-.36.106-.165.319-.354.647-.548m2.455-1.647q-.178.037-.356.078a21 21 0 0 0 .5-1.05 12 12 0 0 0 .51.858q-.326.048-.654.114m2.525.939a4 4 0 0 1-.435-.41q.344.007.612.054c.317.057.466.147.518.209a.1.1 0 0 1 .026.064.44.44 0 0 1-.06.2.3.3 0 0 1-.094.124.1.1 0 0 1-.069.015c-.09-.003-.258-.066-.498-.256M8.278 6.97c-.04.244-.108.524-.2.829a5 5 0 0 1-.089-.346c-.076-.353-.087-.63-.046-.822.038-.177.11-.248.196-.283a.5.5 0 0 1 .145-.04c.013.03.028.092.032.198q.008.183-.038.465z"/>
  <path fill-rule="evenodd" d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2m5.5 1.5v2a1 1 0 0 0 1 1h2zM4.165 13.668c.09.18.23.343.438.419.207.075.412.04.58-.03.318-.13.635-.436.926-.786.333-.401.683-.927 1.021-1.51a11.7 11.7 0 0 1 1.997-.406c.3.383.61.713.91.95.28.22.603.403.934.417a.86.86 0 0 0 .51-.138c.155-.101.27-.247.354-.416.09-.181.145-.37.138-.563a.84.84 0 0 0-.2-.518c-.226-.27-.596-.4-.96-.465a5.8 5.8 0 0 0-1.335-.05 11 11 0 0 1-.98-1.686c.25-.66.437-1.284.52-1.794.036-.218.055-.426.048-.614a1.24 1.24 0 0 0-.127-.538.7.7 0 0 0-.477-.365c-.202-.043-.41 0-.601.077-.377.15-.576.47-.651.823-.073.34-.04.736.046 1.136.088.406.238.848.43 1.295a20 20 0 0 1-1.062 2.227 7.7 7.7 0 0 0-1.482.645c-.37.22-.699.48-.897.787-.21.326-.275.714-.08 1.103"/>
</svg>

                                    <?php
                                  }else if($row6['filetype'] == ".docx" or $row6['filetype'] == ".doc"){
?>
<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#2B579A" class="bi bi-file-earmark-word-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M5.485 6.879l1.036 4.144.997-3.655a.5.5 0 0 1 .964 0l.997 3.655 1.036-4.144a.5.5 0 0 1 .97.242l-1.5 6a.5.5 0 0 1-.967.01L8 9.402l-1.018 3.73a.5.5 0 0 1-.967-.01l-1.5-6a.5.5 0 1 1 .97-.242z"/>
</svg>

<?php
                                  }else if($row6['filetype'] == ".pptx" or $row6['filetype'] == ".ppx"){
?>
<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#D24726" class="bi bi-file-earmark-ppt-fill" viewBox="0 0 16 16">
  <path d="M8.188 10H7V6.5h1.188a1.75 1.75 0 1 1 0 3.5"/>
  <path d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2m5.5 1.5v2a1 1 0 0 0 1 1h2zM7 5.5a1 1 0 0 0-1 1V13a.5.5 0 0 0 1 0v-2h1.188a2.75 2.75 0 0 0 0-5.5z"/>
</svg>

<?php
                                  }else{
                                    ?>
<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-file-earmark-fill" viewBox="0 0 16 16">
  <path d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2m5.5 1.5v2a1 1 0 0 0 1 1h2z"/>
</svg>
                                    <?php
                                  }

?>
                              </td>
                              <td><a href="/hci66/data/<?php echo $id ?>/<?php echo $row6['hash'] ?>" target="_blank">
                                  <?php echo $row6['orginal'] ?>
                                </a></td>
                              <td>
                                <?php echo strtoupper($row6['filetype']) ?>
                              </td>
                              <td>
                              <?php
                                if ($file_size_M > 1) {
                                  echo round($file_size_MB, 2) . " MB";
                                } else {
                                  echo round($row['filesize'] / 1024, 2) . " KB";
                                }
                                ?>
                              </td>
                              <td>
                                <?php echo $row6['create_at'] ?>
                              </td>
                              <td>

                                <button type="button" class="btn btn-warning me-2" data-bs-toggle="modal"
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

<?php
        while ($row5 = $result5->fetch_assoc()) {
            ?>

            <div class="modal fade" id="delete_<?php echo $row5['id'] ?>" tabindex="-1" aria-labelledby="delete"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="delete">ลบเอกสาร</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            คุณแน่ใจที่จะลบเอกสาร <b>
                                <?php echo $row5['orginal'] ?>
                            </b> หรือไม่?
                        </div>
                        <div class="modal-footer">
                            <form action="/hci66/admin/solo/upload.php?id=<?php echo $id ?>" method="post">
                                <input type="hidden" name="delete" value="<?php echo $row5['id'] ?>">
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
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


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
        
    $sqllog = "INSERT INTO `log`(`userid`, `type`, `ip`, `detail`) VALUES ('$userid','File','$user_ip','Delete File => $fileid | $id')";
    $conn->query($sqllog);
    if ($conn->query($sqldelete) === TRUE) {
        $_SESSION['statusdelete'] = 1;
        echo "<script>window.location.href = \"/hci66/admin/solo/upload.php?id=$id\";</script>";
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
        
    $sqllog = "INSERT INTO `log`(`userid`, `type`, `ip`, `detail`) VALUES ('$userid','File','$user_ip','Recover File => $fileid | $id')";
    $conn->query($sqllog);
    if ($conn->query($sqldelete) === TRUE) {
        $_SESSION['statusnew'] = 1;
        echo "<script>window.location.href = \"/hci66/admin/solo/upload.php?id=$id\";</script>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
}

?>