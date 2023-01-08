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


<!-- Section: Design Block -->
<section class="text-center">
    <!-- Background image -->
    <div class="bg-image" 
        style="background-image: url('https://mdbootstrap.com/img/new/textures/full/171.jpg');">
    </div>
    <!-- Background image -->

    <!-- Data Block Starts -->
    <div class="card-login" style="margin-top: -10%; 
            background: hsla(0, 0%, 100%, 0.7);
            backdrop-filter: blur(10px);">
        <div class="card-body py-5 px-md-5">

            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <h2 class="fw-bold mb-5">Sign up now</h2>
                    <form action="Signup.php" method="post">
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput"        placeholder="First Name" name="firstname" required>
                                    <label for="floatingInput">First Name</label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="Last Name" name="lastname" required>
                                    <label for="floatingInput">Last Name</label>
                                </div>
                            </div>

                        <!-- Email input -->
                        <div class="mb-4">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" required>
                                <label for="floatingInput">Email address</label>
                            </div>
                        </div>
                        
                        <!-- Password -->
                        <div class="mb-4">
                            <div class="form-floating">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" required>
                                <label for="floatingPassword">Password</label>
                            </div>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block mb-4" name="submitted"> Sign up
                        </button>
                        <div class="mb-4">
                            <?php
                                if (isset($_POST['submitted'])){
                                    $firstname = $_POST['firstname'];
                                    $lastname = $_POST['lastname'];
                                    $email = $_POST['email'];
                                    $password = $_POST['password'];

                                    $sql = "INSERT INTO `users`(`first_name`, `last_name`, `Password`, `Email`) VALUES ('$firstname','$lastname', '$password','$email')";

                                    if ($conn->query($sql) === TRUE) {
                                        echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">
                                        <strong>Success</strong>, you have signed up
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



                        <div class ="login-link">
                            <p class="link-line">Already have an account, <a href="Login.php" class="text-black-50 fw-bold">Log In</a>
                            </p>
                        </div>

                        <!-- Register buttons -->
                        <!-- <div class="text-center">
                        <h4>Or sign up with:</h4>
                        <div class="social-links mt-3">
                            <a href="#" class="btn btn-primary btn-l"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="btn btn-primary btn-l"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="btn btn-primary btn-l"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="btn btn-primary btn-l"><i class="bx bxl-linkedin"></i></a>
                        </div>

                

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section: Design Block -->