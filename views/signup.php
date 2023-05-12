<?php
ob_start();
session_start();
$pagename="Home Page";

require('../config/config.php');
require('../controllers/signup.php');
include("head.php");
require('data.php');
require('fungsi.php');


if(isset($_POST['okada'])){
    
    if(!(isset($_SESSION['yenny']))){
        $_SESSION['yenny']="sale";
    }
    
    $propertylocation=$_POST['propertyLocation'];
    if($propertylocation==""){
        $propertylocation="0";
    }
    
    $tid=$_POST['tid'];
    $bedrooms=$_POST['bedrooms'];
    $minprice=$_POST['minprice'];
    $maxprice=$_POST['maxprice'];
    $furnished="All Types";
    $serviced="All Types";
    $shared="All Types";
    
    header("Location:search.php?ps=$propertylocation&type=$tid&bedrooms=$bedrooms&minprice=$minprice&maxprice=$maxprice&furnished=$furnished&king=1&serviced=$serviced&shared=$shared");
    exit();   
}
?>


 <main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Sign Up</h4>
                   <p class="text-white font-weight-bolder text-center mt-2 mb-0">Enter your email and password to register</p>
                  <div class="row mt-3">
                    <div class="col-2 text-center ms-auto">
                      <a class="btn btn-link px-3" href="javascript:;">
                        <i class="fa fa-facebook text-white text-lg"></i>
                      </a>
                    </div>
                    <div class="col-2 text-center px-1">
                      <a class="btn btn-link px-3" href="javascript:;">
                        <i class="fa fa-github text-white text-lg"></i>
                      </a>
                    </div>
                    <div class="col-2 text-center me-auto">
                      <a class="btn btn-link px-3" href="javascript:;">
                        <i class="fa fa-google text-white text-lg"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body">
              <?php if (!empty($error)) : ?>
                               <div class="container">
                                   <?php foreach ($error as $err) : ?>
                                       <div class="alert alert-danger"><?php echo $err . '<br>' ?></div>
                                   <?php endforeach; ?>
                               </div>
                    <?php endif; ?>
                <form role="form" class="text-start" method="POST" action="">
                    
                    <label for="cars">SIGNING UP AS ....</label>
                     <div class="input-group input-group-outline mb-3">
                     <select  class="form-control" name="accttype" id="cars">
                      <option value="volvo">AGENT</option>
                      <option value="saab">LANDLORD</option>
                      <option value="mercedes">USER</option>
                      <option value="audi">PROPERTY DEVELOPER</option>
                    </select>
                    </div>
                     <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Name</label>
                      <input type="text" class="form-control" name="username">
                    </div>
                    
                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email">
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password">
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" name="confirmpassword">
                  </div>
                   <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Phone Number</label>
                    <input type="text" class="form-control" name="phone_number">
                  </div>
                  <div class="form-check form-check-info text-start ps-0">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                      <label class="form-check-label" for="flexCheckDefault">
                        I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                      </label>
                    </div>
                    <div class="text-center">
                      <button type="button" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0" name="signup">Sign Up</button>
                    </div>
                </form>
              </div>
               <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-2 text-sm mx-auto">
                    Already have an account?
                    <a href="../pages/sign-in.html" class="text-primary text-gradient font-weight-bold">Sign in</a>
                  </p>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.4"></script>
</body>

<?php  include("footer.php");

