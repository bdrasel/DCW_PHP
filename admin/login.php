<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Panel</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/admin/login.css">
</head>
<body>

   <div class="container">
       <!--=============== Admin Login form start ===============-->
      <div class="row justify-content-center h-100vh" id="login-form-box">
         <div class="col-lg-8 my-auto">
            <div class="card-group">
                <div class="card p-4">
                    <h2 class="text-center text-primary fw-bold">Login to your account</h2>
                    <hr class="my-4">
                    <form action="" method="post" class="px-3" id="login-form">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i></span>
                            <input type="email" class="form-control" placeholder="Enter your email" />
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                            <input type="password" id="password" name="password" class="form-control" placeholder="password" />
                        </div>
                        <div class="form-group">
                            <div class="float-start">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
                                <label class="form-check-label" for="flexSwitchCheckChecked"> Remember me</label>
                                </div>
                                
                            </div>
                            <div class="float-end"><a class="text-decoration-none" id="forgotSignBox" href="#">Forgot your password?</a></div>
                        </div>
                        <div class="input-group d-grid gap-2 pt-3">
                            <input type="submit" value="Sign In" class="btn btn-primary">
                        </div>
                    </form>
                    
                </div>
                <div class="card justify-content-center" style="background:#383e45">
                    <h2 class="text-center text-white fw-bold">Welcome back!</h2>
                    <hr class="my-4 bg-light">
                    <p class="text-center text-light px-4">Please log in using your email and password. If you haven't registered yet, you can register for free.</p>
                    <button type="button" class="btn btn-outline-primary mt-3 align-self-center" id="showSignUpForm">Sign Up</button>
               </div>
            </div>
         </div>
      </div>
      <!--=============== Admin Login form end ===============-->

        <!--=============== Admin register form start ===============-->
        <div class="row justify-content-center h-100vh" id="register-form-box" style="display:none;">
         <div class="col-lg-8 my-auto">
            <div class="card-group">
                <div class="card p-4">
                    <h2 class="text-center text-primary fw-bold">Create new account</h2>
                    <hr class="my-4">
                    <form action="" method="post" class="px-3" id="register-form">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                            <input type="text" class="form-control" placeholder="Enter your name" />
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i></span>
                            <input type="email" class="form-control" placeholder="Enter your email" />
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                            <input type="password" id="password" name="password" class="form-control" placeholder="password" />
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                            <input type="password" id="rpassword" name="rpassword" class="form-control" placeholder="Confirmed Password" />
                        </div>

                        <div class="input-group d-grid gap-2 pt-3">
                            <input type="submit" value="Reqister" class="btn btn-primary">
                        </div>
                    </form>
                    
                </div>
                <div class="card justify-content-center" style="background:#383e45">
                    <h2 class="text-center text-white fw-bold">Welcome back!</h2>
                    <hr class="my-4 bg-light">
                    <p class="text-center text-light px-4">Please log in using your email and password. If you haven't registered yet, you can register for free.</p>
                    <button class="btn btn-outline-primary mt-3 align-self-center" id="showLoginform">Sign In</button>
               </div>
            </div>
         </div>
      </div>
      <!--=============== Admin Login form end ===============-->

        <!--=============== Admin Forgotten form start ===============-->
        <div class="row justify-content-center h-100vh" id="forgotten-form-box" style="display:none;">
         <div class="col-lg-8 my-auto">
            <div class="card-group">
                <div class="card p-4">
                    <h2 class="text-center text-primary fw-bold">Reset your password</h2>
                    <hr class="my-4">
                    <form action="" method="post" class="px-3" id="forgotten-form">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i></span>
                            <input type="email" class="form-control" placeholder="Enter your email" />
                        </div>
                        <div class="input-group d-grid gap-2 pt-3">
                            <input type="submit" value="Reset Password" class="btn btn-primary">
                        </div>
                    </form>
                    
                </div>
                <div class="card justify-content-center" style="background:#383e45">
                    <h2 class="text-center text-white fw-bold">Lost password?</h2>
                    <hr class="my-4 bg-light">
                    <p class="text-center text-light px-4">Enter your email and check your inbox for instructions. Please also check your spam folder.</p>
                    <button class="btn btn-outline-primary mt-3 align-self-center" id="forgotSignUpFrom">Sign Up</button>
               </div>
            </div>
         </div>
      </div>
      <!--=============== Admin Forgotten form end ===============-->
   </div>
    

    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/admin/login.js"></script>
</body>
</html>