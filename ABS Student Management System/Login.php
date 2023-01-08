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

    <div class="card-login" style="margin-top: -10%; 
            background: hsla(0, 0%, 100%, 0.7);
            backdrop-filter: blur(10px);">
                <?php
    $right = false;
    //Checking user 
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $username = $_POST['email'];
        $password = $_POST['password'];

        $sql =  "select * from users where Email='$username' and Password= '$password'";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
                                
        if ($num == 1){
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert" style="
            margin-bottom: 0px;">
                    <strong>Somethings Wrong</strong>
                    </div>';
            $right = true;

            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            header("location: KnownUser.php");

        }
        else{
            echo '<div class="alert alert-danger" role="alert">
            <strong>Something Went Wrong, Please! Try Again !!!!!!!!!!</strong>
            </div>';
            $right = false;
        }
    }
?>

        <div class="card-body py-5 px-md-5">

            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <h2 class="fw-bold mb-5">Log In</h2>
                    <form action="Login.php" method="post">

                    <div class="row">
                        <!-- Email input -->
                        <div class="col-md-6 mb-4">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
                                <label for="floatingInput">Email address</label>
                            </div>
                        </div>
                        
                        <!-- Password -->
                        <div class="col-md-6 mb-4">
                            <div class="form-floating">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                                <label for="floatingPassword">Password</label>
                            </div>
                        </div>

                        <!-- Checkbox -->
                        <div class="form-check d-flex justify-content-center mb-4">
                            <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                            <label class="form-check-label" for="form2Example33">
                                Remember Me
                            </label>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block mb-4" name="submitted">
                        log In
                        </button>


                        <!-- Register buttons -->
                        <!-- <div class="text-center">
                        <h4>Log in with:</h4>
                        <div class="social-links mt-3">
                            <a href="#alertlink" class="btn btn-primary btn-l"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="btn btn-primary btn-l"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="btn btn-primary btn-l"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="btn btn-primary btn-l"><i class="bx bxl-linkedin"></i></a>
                        </div>
                        </div> -->
                        
                        <div class ="signup-link">
                            <p class="link-line">Don't have an account? <a href="Signup.php" class="text-black-50 fw-bold">Sign Up</a>
                            </p>
                        </div>

                            <?php
                                if ($right == true){
                                    echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">
                                    <strong>Logging In</strong>
                                    </div>';
                                }
                        ?>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section: Design Block -->