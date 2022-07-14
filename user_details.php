<?php session_start();?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/melody/template/pages/samples/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:08:53 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Worker Details</title>
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
              <div class="brand-logo">
                <img src="assets/back/images/logo.svg" alt="logo">
              </div>
              <h4>Write in your Details</h4>
              <form class="pt-3" method="post" action="include/form.php"  enctype="multipart/form-data">
                <div class="form-group">
                  <input type="text" name="email" class="form-control form-control-lg" id="exampleInputUsername1" value="<?php echo $_SESSION['email']?>">
                </div>
                <div class="form-group">
                  <input type="number" class="form-control form-control-lg" name="expereince" placeholder="Your Experience">
                </div>
                <div class="form-group">
                  <input type="number" class="form-control form-control-lg" name="hour_rate" placeholder="Your hourly rate">
                </div>
                <div class="form-group">
                    <textarea name="desc" id="" cols="30" rows="10" class="form-control form-control-lg" placeholder="Your work description"></textarea>
                </div>
                <div class="form-group">
                    <label>Your Profile Picture</label>
                    <input type="file" class="form-control form-control-lg" name="image">
                </div>
                <div class="mt-3">
                  <input type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" value="Submit" name="user_register">
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


<!-- Mirrored from www.urbanui.com/melody/template/pages/samples/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:08:53 GMT -->
</html>
