<?php
include('../../route/route_admin.php');

$email = $_SESSION['email'];
$username = $_SESSION['username'];
$section = $_SESSION['section'];
$image = $_SESSION['image'];
$fname = $_SESSION['fname'];

include('../../database/conn.php');


$sql1 = "SELECT * FROM `status` WHERE id = '1'";
$result1 = $conn->query($sql1);

?>
<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
  data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>งานกลุ่ม - hci66</title>

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

          <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
          </a>
        </div>

        <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-1">

          <li class="menu-item active">
            <a href="../group/" class="menu-link">

              <div data-i18n="Analytics">งานกลุ่ม</div>
            </a>
          </li>


          <li class="menu-item  ">
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
              <button type="button" class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#basicModal">
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
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form action="/hci66/admin/group/" method="post">
                      <input type="hidden" name="addgroup" value="1">

                      <div class="mb-2">
                        <label for="recipient-name" class="col-form-label">Username:</label>
                        <input type="text" class="form-control" id="recipient-name" name="username">
                      </div>
                      <div class="mb-2">
                        <label for="recipient-name" class="col-form-label">key:</label>
                        <input type="text" class="form-control" id="recipient-name" name="key">
                      </div>
                      <div class="mb-2">
                        <label for="recipient-name" class="col-form-label">หัวข้อ:</label>
                        <input type="text" class="form-control" id="recipient-name" name="topic">
                      </div>
                      <div class="mb-2">
                        <label for="recipient-name" class="col-form-label">ชื่อแอปพลิเคชั่น:</label>
                        <input type="text" class="form-control" id="recipient-name" name="fname">
                      </div>
                      <div class="mb-2">
                        <input class="form-check-input" type="radio" name="sec" id="flexRadiofault1" value="1">
                        <label class="form-check-label" for="flexRadiofault1">
                          ภาคปกติ
                        </label>
                        <input class="form-check-input" type="radio" name="sec" id="flexRadiofault2" value="3">
                        <label class="form-check-label" for="flexRadiofault2">
                          โครงการพิเศษ
                        </label>
                      </div>


                    
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
                    <button type="submit" class="btn btn-primary">บันทึก</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>





            <div class="modal fade" id="basicModal" tabindex="-1" style="display: none;" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">ตั้งค่าการรับงาน</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <form action="/hci66/admin/group/" method="post">
                    <div class="modal-body">
                      <?php
                      while ($row1 = $result1->fetch_assoc()) {
                        ?>

                        <input type="hidden" name="typestatus" value="1">
                        <div class="row g-3 align-content-center justify-content-center">
                          <div class="col">
                            <input class="form-check-input" type="radio" name="type" id="flexRadioDefault1" value="1"
                              <?php echo ($row1['type'] == "1") ? "checked" : ""; ?>>
                            <label class="form-check-label" for="flexRadioDefault1">
                              ปิดการรับ
                            </label>
                          </div>
                          <div class="col">
                            <input class="form-check-input" type="radio" name="type" id="flexRadioDefault2" value="2"
                              <?php echo ($row1['type'] == "2") ? "checked" : ""; ?>>
                            <label class="form-check-label" for="flexRadioDefault2">
                              เปิดการรับ
                            </label>
                          </div>
                          <div class="col">
                            <div class="input-group">
                              <div class="input-group-text">
                                <input class="form-check-input mt-0" type="radio" id="flexRadioDefault3" name="type"
                                  value="3" <?php echo ($row1['type'] == "3") ? "checked" : ""; ?>>
                              </div>
                              <input type="datetime-local" for="flexRadioDefault3" class="form-control" id="customInput"
                                name="date" value="<?php echo ($row1['type'] == "3") ? $row1['datetime'] : ""; ?>"
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
                    data-bs-target="#navs-top-home" aria-controls="navs-top-home" aria-selected="true">
                    ภาคปกติ
                  </button>
                </li>
                <li class="nav-item">
                  <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                    data-bs-target="#navs-top-profile" aria-controls="navs-top-profile" aria-selected="false">
                    ภาคพิเศษ
                  </button>
                </li>

              </ul>
              <div class="tab-content">
                <div class="tab-pane fade active show" id="navs-top-home" role="tabpanel">

                  <h5 class="card-header">Miniproject-ภาคปกติ ( 19 กลุ่ม )</h5>
                  <div class="table-responsive text-nowrap">
                    <table class="table">
                      <thead>
                        <tr class="text-nowrap">
                          <th>#</th>
                          <th>กลุ่ม</th>
                          <th style="width: 700px;">หัวข้อ</th>
                          <th>อัพเดตล่าสุด</th>
                          <th style="width: 200px;"></th>

                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $sql = "SELECT * FROM `groups` JOIN `users` ON groups.userid = users.username WHERE users.section = '1'";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                          // ถ้าพบข้อมูลผู้ใช้ในฐานข้อมูล
                          $count1 = 1;
                          while ($row = $result->fetch_assoc()) {

                            ?>
                            <tr>
                              <th scope="row">
                                <?php echo $count1 ?>
                              </th>
                              <td><a href="/hci66/admin/group/upload.php?id=<?php echo $row['userid'] ?>">
                                  <?php echo $row['userid'] ?>
                                </a>
                              </td>
                              <td>
                                <?php echo $row['topic'] ?>
                              </td>
                              <td>
                                <?php echo ($row['update_at'] == "" ? "ไม่มีการส่งงาน" : $row['update_at']) ?>
                              </td>
                              <td>

                                <button type="button" class="btn btn-outline-warning me-2">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path
                                      d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z">
                                    </path>
                                    <path fill-rule="evenodd"
                                      d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z">
                                    </path>
                                  </svg> Edit</button>
                                <button type="button" class="btn btn-outline-danger me-2" data-bs-toggle="modal"
                                  data-bs-target="#delete_<?php echo $row['userid'] ?>">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-trash3" viewBox="0 0 16 16">
                                    <path
                                      d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5">
                                    </path>
                                  </svg> Delete</button>

                              </td>

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



                <div class="tab-pane fade" id="navs-top-profile" role="tabpanel">
                  <h5 class="card-header">Miniproject-ภาคพิเศษ ( 18 กลุ่ม )</h5>
                  <div class="table-responsive text-nowrap">
                    <table class="table">
                      <thead>
                        <tr class="text-nowrap">
                          <th>#</th>
                          <th>กลุ่ม</th>
                          <th style="width: 700px;">หัวข้อ</th>
                          <th>อัพเดตล่าสุด</th>
                          <th style="width: 200px;"></th>

                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $sql = "SELECT * FROM `groups` JOIN `users` ON groups.userid = users.username WHERE users.section = '3'";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                          // ถ้าพบข้อมูลผู้ใช้ในฐานข้อมูล
                          $count2 = 1;
                          while ($row = $result->fetch_assoc()) {

                            ?>
                            <tr>
                              <th scope="row">
                                <?php echo $count2 ?>
                              </th>
                              <td><a href="/hci66/admin/group/upload.php?id=<?php echo $row['userid'] ?>">
                                  <?php echo $row['userid'] ?>
                                </a>
                              </td>
                              <td>
                                <?php echo $row['topic'] ?>
                              </td>
                              <td>
                                <?php echo ($row['update_at'] == "" ? "ไม่มีการส่งงาน" : $row['update_at']) ?>
                              </td>
                              <td>

                                <button type="button" class="btn btn-outline-warning me-2">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path
                                      d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z">
                                    </path>
                                    <path fill-rule="evenodd"
                                      d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z">
                                    </path>
                                  </svg> Edit</button>
                                <button type="button" class="btn btn-outline-danger me-2" data-bs-toggle="modal"
                                  data-bs-target="#delete_<?php echo $row['userid'] ?>">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-trash3" viewBox="0 0 16 16">
                                    <path
                                      d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5">
                                    </path>
                                  </svg> Delete</button>

                              </td>

                            </tr>
                            <?php
                            $count2++;
                          }
                        }
                        ?>



                      </tbody>
                    </table>
                  </div>
                </div>

              </div>


            <?php
              $sqldel = "SELECT * FROM `users`";
              $res1 = $conn->query($sqldel);
                while($datagroup1 = $res1->fetch_assoc()) {

            ?>
            <div class="modal fade" id="delete_<?php echo $datagroup1['username'] ?>" tabindex="-1" aria-labelledby="delete" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="delete">ลบกลุ่ม</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    คุณแน่ใจที่จะลบกลุ่ม <?php echo $datagroup1['username'].$datagroup1['topic'] ?> หรือไม่?
                  </div>
                  <div class="modal-footer">
                    <form action="/hci66/admin/group/" method="post">
                      <input type="hidden" name="dele_id" value="<?php echo $datagroup1['username']?>">
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
    $sqlupdate = "UPDATE `status` SET `statustype`=1,`type`=1 WHERE id = '1'";
    if ($conn->query($sqlupdate) === TRUE) {
      $user_ip = $_SERVER['REMOTE_ADDR'];
        
      $sqllog = "INSERT INTO `log`(`userid`, `type`, `ip`, `detail`) VALUES ('$username','Setting','$user_ip','Set up group work reception => Close acceptance')";
      $conn->query($sqllog);
      $_SESSION['statusupdate'] = 1;
      echo '<script>window.location.href = "/hci66/admin/group";</script>';
    } else {
      echo "Error updating record: " . $conn->error;
    }

  } else if ($_POST['type'] == 2) {
    $sqlupdate = "UPDATE `status` SET `statustype`='2',`type`='2' WHERE id = '1'";
    if ($conn->query($sqlupdate) === TRUE) {
      $user_ip = $_SERVER['REMOTE_ADDR'];
        
      $sqllog = "INSERT INTO `log`(`userid`, `type`, `ip`, `detail`) VALUES ('$username','Setting','$user_ip','Set up group work reception => Open acceptance')";
      $conn->query($sqllog);
      $_SESSION['statusupdate'] = 1;
      echo '<script>window.location.href = "/hci66/admin/group";</script>';
    } else {
      echo "Error updating record: " . $conn->error;
    }

  } else if ($_POST['type'] == 3) {
    $datetime = $_POST['date'];
    $sqlupdate = "UPDATE `status` SET `statustype`='2',`type`='3',`datetime`= '$datetime' WHERE id = '1'";
    if ($conn->query($sqlupdate) === TRUE) {
      $user_ip = $_SERVER['REMOTE_ADDR'];
        
      $sqllog = "INSERT INTO `log`(`userid`, `type`, `ip`, `detail`) VALUES ('$username','Setting','$user_ip','Set up group work reception => set date and time as $datetime')";
      $conn->query($sqllog);
      $_SESSION['statusupdate'] = 1;
      echo '<script>window.location.href = "/hci66/admin/group";</script>';
    } else {
      echo "Error updating record: " . $conn->error;
    }
  }

  $conn->close(); // Close connection after all queries are executed
}


if (isset($_POST["addgroup"]) && !empty($_POST["addgroup"])) {
  // รับค่าและป้องกันการโจมตี SQL Injection
  $user_srt = mysqli_real_escape_string($conn, $_POST['username']);
  $fanme_str = mysqli_real_escape_string($conn, $_POST['fname']);
  $sec_str = mysqli_real_escape_string($conn, $_POST['sec']);
  $key_str = mysqli_real_escape_string($conn, $_POST['key']);
  $topic_str = mysqli_real_escape_string($conn, $_POST['topic']);

  // เพิ่มข้อมูลผู้ใช้และกลุ่มลงในฐานข้อมูล MySQL
  $sqladduser = "INSERT INTO `users` (`username`, `fname`, `section`, `passkey`, `rold`, `image`) VALUES ('$user_srt','$fanme_str','$sec_str','$key_str','2','https://i.pinimg.com/564x/ac/6a/f4/ac6af4564c4cc773538fa21bc42153fc.jpg')";
  $sqladdgroup = "INSERT INTO `groups` (`topic`, `userid`) VALUES ('$topic_str','$user_srt')";

  // ทำการสร้างโฟลเดอร์สำหรับกลุ่มที่สร้างขึ้น
  $folderPath = "/hci66/data/".$user_srt;

  // ตรวจสอบว่าโฟลเดอร์ยังไม่มีอยู่ และทำการสร้าง
  if (!file_exists($folderPath)) {
      if (mkdir($folderPath, 0777, true)) { // สร้างโฟลเดอร์และอนุญาตให้สร้างโฟลเดอร์ย่อยได้
          // ถ้าสร้างโฟลเดอร์สำเร็จ ให้เพิ่มข้อมูลลงในฐานข้อมูล
          if ($conn->query($sqladduser) && $conn->query($sqladdgroup)) {
              // บันทึกข้อมูลการกระทำลงในตาราง log
              $user_ip = $_SERVER['REMOTE_ADDR'];
              $sqllog = "INSERT INTO `log`(`userid`, `type`, `ip`, `detail`) VALUES ('$username','User','$user_ip','Create group => $user_srt')";
              $conn->query($sqllog);

              // แสดงข้อความและเปลี่ยนเส้นทาง URL
              $_SESSION['statusupdate'] = 1;
              header("Location: /hci66/admin/group/");

          } else {
              echo "มีข้อผิดพลาดในการเพิ่มข้อมูลลงในฐานข้อมูล: " . $conn->error;
          }
      } else {
          echo "มีข้อผิดพลาดในการสร้างโฟลเดอร์: " . error_get_last()['message'];
      }
  } else {
      echo "โฟลเดอร์ที่ต้องการสร้างมีอยู่แล้ว";
  }

  $conn->close(); // ปิดการเชื่อมต่อฐานข้อมูล
}


if (isset($_POST["dele_id"]) &&!empty($_POST["dele_id"])) {
  $user_del = $_POST["dele_id"];
  $sqldelgroup = "DELETE FROM `groups` WHERE `userid` = '$user_del'";
  $conn->query($sqldelgroup);
  $sqldeluser = "DELETE FROM `users` WHERE `username` = '$user_del'";
  $conn->query($sqldeluser);

  $user_ip = $_SERVER['REMOTE_ADDR'];
  $sqllog = "INSERT INTO `log`(`userid`, `type`, `ip`, `detail`) VALUES ('$username','User','$user_ip','Delete group => $user_del')";
  $conn->query($sqllog);

  $folderPathDel = "/hci66/data/$user_del";
  if (file_exists($folderPathDel)) {
    if (rmdir($folderPathDel)) {
      // echo "โฟลเดอร์ถูกสร้างขึ้นเรียบร้อยแล้วที่: $folderPath";
      $_SESSION['statusupdate'] = 1;
      header("Location: /hci66/student/group/");

    } else {
      // echo "เกิดข้อผิดพลาดขณะที่พยายามสร้างโฟลเดอร์ที่: $folderPath";
      $_SESSION['statusupdate'] = 1;
      header("Location: /hci66/student/group/");

    }
  }

}

?>