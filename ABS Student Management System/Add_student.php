<?php
  include_once 'Connection.php';
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
                    <h2 class="fw-bold mb-5">Add Student</h2>
                    <form action="Add_student.php" method="post">
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div class="row">
                            <!-- Roll Number -->
                            <div class="mb-4">
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" id="floatingInput" placeholder="Roll Number:" name="rollnumber" required>
                                    <label for="floatingInput">Roll Number:</label>
                                </div>
                            </div>

                            <!-- Name -->
                            <div class="mb-4">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="Name:" name="name" required>
                                    <label for="floatingInput">Name:</label>
                                </div>
                            </div>

                            <!-- Contact -->
                            <div class="mb-4">
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" id="floatingInput" placeholder="Contact:" name="contact" required>
                                    <label for="floatingInput">Contact:</label>
                                </div>
                            </div>
                        
                            <!-- Semester -->
                            <div class="mb-4">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="floatingPassword" placeholder="Semester:" name="semester" required>
                                    <label for="floatingPassword">Semester:</label>
                                </div>
                            </div>

                            <!-- Address -->
                            <div class="mb-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingPassword" placeholder="Address:" name="address" required>
                                    <label for="floatingPassword">Address:</label>
                                </div>
                            </div>

                            <!-- Department -->
                            <div class="mb-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingPassword" placeholder="Department:" name="department" required>
                                    <label for="floatingPassword">Department:</label>
                                </div>
                            </div>

                            <!-- CGPA -->
                            <div class="mb-4">
                                <div class="form-floating">
                                    <input type="number" step="0.01" min="0" max="4" class="form-control" id="floatingPassword" placeholder="CGPA:" name="cgpa" required>
                                    <label for="floatingPassword">CGPA:</label>
                                </div>
                            </div>


                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4" name="submitted"> Add
                            </button>
                            <div class="mb-4">
                                <?php
                                    if (isset($_POST['submitted'])){
                                        $rollnumber = $_POST['rollnumber'];
                                        $name = $_POST['name'];
                                        $semester = $_POST['semester'];
                                        $contact = $_POST['contact'];
                                        $address = $_POST['address'];
                                        $department = $_POST['department'];
                                        $cgpa = $_POST['cgpa'];

                                        $sql = "INSERT INTO `st_data`(`roll_no`, `name`, `contact`, `semester`) VALUES ('$rollnumber','$name', '$contact','$semester')";
                                        $sql1 = "INSERT INTO `st_record`(`roll_no`, `cgpa`, `address`, `department`) VALUES ('$rollnumber','$cgpa', '$address','$department')";
                                        if ($conn->query($sql) == TRUE && $conn->query($sql1) == TRUE) {
                                            echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">
                                            <strong>Added</strong>
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