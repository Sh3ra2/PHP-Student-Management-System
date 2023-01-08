<?php
  include_once 'Connection.php';

?>

<html>

  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Students Data</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- JavaScript Bundle with Popper -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Action Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  

    <!-- Template Main CSS File -->
    <link href="assets/css/Findstyle.css" rel="stylesheet">
    
    <!-- Action button style -->
    <style>
      table.table td a.edit {
        color: #FFC107;
      }
      table.table td a.delete {
        color: #F44336;
      }
      /* Modal styles */
      .modal .modal-dialog {
        max-width: 400px;
      }
      .modal .modal-header, .modal .modal-body, .modal .modal-footer {
        padding: 20px 30px;
      }
      .modal .modal-content {
        border-radius: 3px;
        font-size: 14px;
      }
      .modal .modal-footer {
        background: #ecf0f1;
        border-radius: 0 0 3px 3px;
      }
      .modal .modal-title {
        display: inline-block;
      }
      .modal .form-control {
        border-radius: 2px;
        box-shadow: none;
        border-color: #dddddd;
      }
      .modal textarea.form-control {
        resize: vertical;
      }
      .modal .btn {
        border-radius: 2px;
        min-width: 100px;
      }	
      .modal form label {
        font-weight: normal;
      }	
    </style>    



  </head>

<!--+++++++++++++++++++++++++++++++++++++++++ **BODY** +++++++++++++++++++++++++++++++++++++++++-->
  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
      <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="KnownUser.php">ABS SCHOOL</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/stat-hero-2.png" alt="" class="img-fluid"></a> -->
        
      </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
      <div class="container">
          <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
              <h1>Student Management</h1>
            </div>
          </div>
      </div>
    </section>
    <!-- End Hero -->

    <main id="main">

      <!-- ======= Search Section ======= -->
      <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Students</h2>
            </div>
            <div class="row">
                <div class="col-sm-8">
                  <a href="Add_student.php" class="btn btn-primary" data-toggle="modal"> <span>Add Student</span></a>
                </div>
                
                
                <div class="col-sm-4">
                  <form method="POST" action="#services">
                  <div class="input-group mb-7">
                      <input class="form-control" list="RollOptions" id="exampleDataList" placeholder="Enter Roll No" name= "name_search">
                      
                      <input type="text" class="form-control" placeholder="Enter Address" aria-label="Recipient's username" list="AddressOptions" aria-describedby="button-addon2" name = "address_search">
                      
                      <datalist id="RollOptions">
                      <?php
                          $sql = "SELECT *
                              FROM st_data
                              join st_record
                              ON st_data.roll_no = st_record.roll_no
                              limit 5";
                          $result = mysqli_query($conn, $sql);
                          $resultCheck = mysqli_num_rows($result);
                          
                          if ($resultCheck > 0) {
                              while ($row = mysqli_fetch_assoc($result)) { ?>
                                  <option value= <?php echo $row['roll_no'] ?>> </option>
                          <?php 
                              }
                          }
                      ?>
                  </datalist>

                  <datalist id="AddressOptions">
                      <?php
                          $sql = "SELECT *
                              FROM st_data
                              join st_record
                              ON st_data.roll_no = st_record.roll_no
                              limit 5";
                          $result = mysqli_query($conn, $sql);
                          $resultCheck = mysqli_num_rows($result);
                          
                          if ($resultCheck > 0) {
                              while ($row = mysqli_fetch_assoc($result)) { ?>
                                  <option value= <?php echo $row['address'] ?>> </option>
                          <?php 
                              }
                          }
                      ?>
                  </datalist>

                  
                  <button class="btn btn-primary" type="submit" id="button-addon2" name="search">filter</button>
                  </div>
                  </form>
                </div>
            </div>
        </div>
      </section>
      <!-- End SEARCH Section -->

      <!-- ======= Show Seacrh Data Section ======= -->
      <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">
          <table class="table">
            <thead>
              <tr class="table-dark">
                <th scope="col">#</th>
                <th scope="col">Roll No</th>
                <th scope="col">Name</th>
                <th scope="col">Contact</th>
                <th scope="col">Semester</th>
                <th scope="col">Address</th>
                <th scope="col">Department</th>
                <th scope="col">CGPA</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
            <?php
                if(!empty($_POST['name_search']) && empty($_POST['address_search']))
                {
                $to_search = $_POST['name_search'];
                $sql = "SELECT *
                    FROM st_data
                    join st_record
                    ON st_data.roll_no = st_record.roll_no 
                    where st_data.roll_no like '$to_search';";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                ?>
                <div class="section-title">
                  <h3><?php echo "For Roll No: ".$to_search; ?></h3>
                </div>
                <?php
                $tCount = 1;
                if ($resultCheck > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                    
                  ?>
                  
                    <tr>
                      <td><?php echo "".$tCount ?></td>
                      <td><?php echo $row['roll_no']; ?></td>
                      <td><?php echo $row['name']; ?></td>
                      <td><?php echo $row['contact']; ?></td>
                      <td><?php echo $row['semester']; ?></td>
                      <td><?php echo $row['address']; ?></td>
                      <td><?php echo $row['department']; ?></td>
                      <td><?php echo $row['cgpa']; ?></td>
                      <td>
                        <a href="edit_student.php?rn=<?php echo $row['roll_no'];?>&n=<?php echo $row['name'];?>&ct=<?php echo $row['contact'];?>&st=<?php echo $row['semester'];?>&ad=<?php echo $row['address'];?>&dt=<?php echo $row['department'];?>&cgp=<?php echo $row['cgpa'];?>" name = "edit" class="edit"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                        <a href="de.php?rd=<?php echo $row['roll_no'];?>" name = "delete" class="delete"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                      </td>
                    </tr>
                  <?php
                  $tCount++;
                  }
                }
                }
                else if(!empty($_POST['address_search']) && empty($_POST['name_search']))
                {
                $to_search = $_POST['address_search'];
                $sql = "SELECT *
                    FROM st_data
                    join st_record
                    ON st_data.roll_no = st_record.roll_no 
                    where address like '$to_search';";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                ?>
                <div class="section-title">
                  <h3><?php echo "For Address: ".$to_search; ?></h3>
                </div>
                <?php
                $tCount = 1;
                if ($resultCheck > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                    
                  ?>
                  
                    <tr>
                      <td><?php echo "".$tCount ?></td>
                      <td><?php echo $row['roll_no']; ?></td>
                      <td><?php echo $row['name']; ?></td>
                      <td><?php echo $row['contact']; ?></td>
                      <td><?php echo $row['semester']; ?></td>
                      <td><?php echo $row['address']; ?></td>
                      <td><?php echo $row['department']; ?></td>
                      <td><?php echo $row['cgpa']; ?></td>
                      <td>
                        <a href="edit_student.php?rn=<?php echo $row['roll_no'];?>&n=<?php echo $row['name'];?>&ct=<?php echo $row['contact'];?>&st=<?php echo $row['semester'];?>&ad=<?php echo $row['address'];?>&dt=<?php echo $row['department'];?>&cgp=<?php echo $row['cgpa'];?>" name = "edit" class="edit"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                        <a href="de.php?rd=<?php echo $row['roll_no'];?>" name = "delete" class="delete"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                      </td>
                    </tr>
                  <?php
                  $tCount++;
                  }
                }
                }
                else if(!empty($_POST['name_search']) && !empty($_POST['address_search']))
                {
                $Nto_search = $_POST['name_search'];
                $Ato_search = $_POST['address_search'];
                $sql = "SELECT *
                    FROM st_data
                    join st_record
                    ON st_data.roll_no = st_record.roll_no 
                    where st_data.roll_no like '$Nto_search' and address like '$Ato_search';";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                ?>
                <div class="section-title">
                  <h3><?php echo "For Roll No: ".$Nto_search; ?></h3>
                  <h3><?php echo "For Address: ".$Ato_search; ?></h3>
                </div>
                <?php
                $tCount = 1;
                if ($resultCheck > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                    
                  ?>
                  
                    <tr>
                      <td><?php echo "".$tCount ?></td>
                      <td><?php echo $row['roll_no']; ?></td>
                      <td><?php echo $row['name']; ?></td>
                      <td><?php echo $row['contact']; ?></td>
                      <td><?php echo $row['semester']; ?></td>
                      <td><?php echo $row['address']; ?></td>
                      <td><?php echo $row['department']; ?></td>
                      <td><?php echo $row['cgpa']; ?></td>
                      <td>
                      <a href="edit_student.php?rn=<?php echo $row['roll_no'];?>&n=<?php echo $row['name'];?>&ct=<?php echo $row['contact'];?>&st=<?php echo $row['semester'];?>&ad=<?php echo $row['address'];?>&dt=<?php echo $row['department'];?>&cgp=<?php echo $row['cgpa'];?>" name = "edit" class="edit"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                        <a href="de.php?rd=<?php echo $row['roll_no'];?>" name = "delete" class="delete"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                      </td>
                    </tr>
                  <?php
                  $tCount++;
                  }
                }
                }
                else
                {
                $sql = "SELECT *
                    FROM st_data
                    join st_record
                    ON st_data.roll_no = st_record.roll_no";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                
                $tCount = 1;
                if ($resultCheck > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                    
                  ?>
                    <tr>
                      <td><?php echo "".$tCount ?></td>
                      <td><?php echo $row['roll_no']; ?></td>
                      <td><?php echo $row['name']; ?></td>
                      <td><?php echo $row['contact']; ?></td>
                      <td><?php echo $row['semester']; ?></td>
                      <td><?php echo $row['address']; ?></td>
                      <td><?php echo $row['department']; ?></td>
                      <td><?php echo $row['cgpa']; ?></td>
                      <td>
                        <a href="edit_student.php?rn=<?php echo $row['roll_no'];?>&n=<?php echo $row['name'];?>&ct=<?php echo $row['contact'];?>&st=<?php echo $row['semester'];?>&ad=<?php echo $row['address'];?>&dt=<?php echo $row['department'];?>&cgp=<?php echo $row['cgpa'];?>" name = "edit" class="edit"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                        <a href="de.php?rd=<?php echo $row['roll_no'];?>" name = "delete" class="delete"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                      </td>
                    </tr>
                  <?php
                  $tCount++;
                  }
                }
                }
              ?>
              
            </tbody>
          
          </table>

        </div>
      </section>
      <!-- End Show Seacrh Data Section-->


    <!-- ======= Footer ======= -->
    <footer id="footer">

      <div class="footer-top">
        <div class="container">
          <div class="row">

            <div class="col-lg-3 col-md-6 footer-contact">
              <h3>ABS School</h3>
              <p>
                Students <br>
                From School ABS<br>
                XYZ <br><br>
                <strong>Phone:</strong> +1 2345 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Useful Links</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
              </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Our Social Networks</h4>
              <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>

          </div>
        </div>
      </div>
      


      <div class="container footer-bottom clearfix">
        <div class="copyright">
          &copy; Not for <strong><span>Commercial</span></strong> use
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
          Designed by Copy, Copy, Paste, Paste 
        </div>
      </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

  </body>

</html>