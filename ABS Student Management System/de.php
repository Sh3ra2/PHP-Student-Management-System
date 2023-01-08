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
    </head>
</html>

<?php
    include_once 'Connection.php';
    error_reporting(0);

    $rolld = $_GET['rd'];
    $query = "DELETE FROM st_record WHERE roll_no ='$rolld'" ;
    $data = mysqli_query($conn, $query);
    $query1 = "DELETE FROM st_data WHERE roll_no ='$rolld'" ;
    $data1 = mysqli_query($conn, $query1);
    if ($data) {
          echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">
          <strong>Successfully Deleted</strong>
          </div>';
      } 
      else {
          echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error</strong><br>
          </div>';
          echo $conn->error;
      }
?>

<html>
    <div class="container d-flex align-items-center">
        <a href="SM.php" style="width: 100%;">
            <button class="btn btn-primary" type="submit" id="button-addon2" name="search" style="width:100% ;">OK</button>
        </a>
    </div>
</html>