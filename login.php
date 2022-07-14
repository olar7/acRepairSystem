<?php session_start()?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/melody/template/pages/samples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:08:53 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="assets/back/vendors/iconfonts/font-awesome/css/all.min.css">
  <link rel="stylesheet" href="assets/back/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="assets/back/vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="assets/back/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="assets/back/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5">
            
              <h4>Hello! let's get started</h4>
              <?php if(isset($_SESSION['login_error'])):?>
                <div class="alert alert-danger"><?php echo $_SESSION['login_error']; unset($_SESSION['login_error'])?></div>
              <?php elseif(isset($_SESSION['success'])):?>
                <div class="alert alert-success"><?php echo $_SESSION['success']; unset($_SESSION['success']);?></div>
              <?php endif?>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form class="pt-3" action="include/form.php" method="post">
                <div class="form-group">
                  <input type="email" name="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="mt-3">
                  <input type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" value ="SIGN IN" name="login">
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
                <div class="mb-2">
                  <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                    <i class="fab fa-facebook-f mr-2"></i>Connect using facebook
                  </button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="register.php" class="text-primary">Create</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="assets/back/vendors/js/vendor.bundle.base.js"></script>
  <script src="assets/back/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="assets/back/js/off-canvas.js"></script>
  <script src="assets/back/js/hoverable-collapse.js"></script>
  <script src="assets/back/js/misc.js"></script>
  <script src="assets/back/js/settings.js"></script>
  <script src="assets/back/js/todolist.js"></script>
  <!-- endinject -->
</body>


<!-- Mirrored from www.urbanui.com/melody/template/pages/samples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:08:53 GMT -->
</html>
