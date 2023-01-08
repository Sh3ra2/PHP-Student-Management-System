<?php
    include_once 'Connection.php';
    error_reporting(0);

    $rn = $_GET['rn'];
    $n = $_GET['n'];
    $ct = $_GET['ct'];
    $st = $_GET['st'];
    $ad = $_GET['ad'];
    $dt = $_GET['dt'];
    $cgp = $_GET['cgp'];
?>

<html>
    <head>
        <title>Login</title>
        <link href="assets/css/UserLogStyle.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        
        <link href="assets/img/favicon.png" rel="icon">

    </head>
</html>

<header id="header" class="fixed-top ">
      <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="SM.php">ABS SCHOOL</a></h1>
        </div>
</header>
<!-- Section: Design Block -->
<section class="text-center">
    <!-- Background image -->
    <div class="bg-image" 
        style="background-image: url('https://mdbootstrap.com/img/new/textures/full/171.jpg');">
    </div>
    <!-- Background image -->

    <!-- Data Block Starts -->
    <div class="card-login" style="margin-top: -10%; height : 85%; 
            background: hsla(0, 0%, 100%, 0.7);
            backdrop-filter: blur(10px); ">
        <div class="card-body py-8 px-md-5">

            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <h2 class="fw-bold mb-5"><br>Updating Roll No <?php echo $rn;?></h2>
                    <form action="edit_student.php" method="post">
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div class="row">

                            <!-- Name -->
                            <div class="mb-4">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" value="<?php echo $n;?>" placeholder="Name:" name="name" required>
                                    <label for="floatingInput">Name:</label>
                                </div>
                            </div>

                            <!-- Contact -->
                            <div class="mb-4">
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" id="floatingInput" value="<?php echo $ct;?>"  placeholder="Contact:" name="contact" required>
                                    <label for="floatingInput">Contact:</label>
                                </div>
                            </div>
                        
                            <!-- Semester -->
                            <div class="mb-4">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="floatingPassword"  value="<?php echo $st;?>" placeholder="Semester:" name="semester" required>
                                    <label for="floatingPassword">Semester:</label>
                                </div>
                            </div>

                            <!-- Address -->
                            <div class="mb-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingPassword" value="<?php echo $ad;?>"  placeholder="Address:" name="address" required>
                                    <label for="floatingPassword">Address:</label>
                                </div>
                            </div>

                            <!-- Department -->
                            <div class="mb-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingPassword" value="<?php echo $dt;?>"  placeholder="Department:" name="department" required>
                                    <label for="floatingPassword">Department:</label>
                                </div>
                            </div>

                            <!-- CGPA -->
                            <div class="mb-4">
                                <div class="form-floating">
                                    <input type="number" step="0.01" min="0" max="4" class="form-control" id="floatingPassword"  value="<?php echo $cgp;?>" placeholder="CGPA:" name="cgpa" required>
                                    <label for="floatingPassword">CGPA:</label>
                                </div>
                            </div>


                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4" name="submitted"> Update
                            </button>
                            <div class="mb-4">
                                <?php
                                    if (isset($_POST['submitted'])){
                                        $rollnumber = $_GET['rn'];
                                        $name = $_POST['name'];
                                        $semester = $_POST['semester'];
                                        $contact = $_POST['contact'];
                                        $address = $_POST['address'];
                                        $department = $_POST['department'];
                                        $cgpa = $_POST['cgpa'];

                                        $sql = "UPDATE `st_record` SET `cgpa`='$cgpa',`address`='$address',`department`='$department' WHERE roll_no = '$rollnumber'";
                                        $sql1 = "UPDATE `st_data` SET `name`='$name',`contact`='$contact',`semester`='$semester' WHERE roll_no = '$rollnumber'";
                                        if ($conn->query($sql) == TRUE && $conn->query($sql1) == TRUE) {
                                            echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">
                                            <strong>Updated, You can go back</strong>
                                            </div>';
                                        } else {
                                            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <strong>Error</strong><br>
                                            </div>';
                                            echo $conn->error;
                                        }
                                    }
                                ?>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section: Design Block -->