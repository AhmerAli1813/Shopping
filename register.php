<?php
include 'function.php';
include 'connection.php';
error_reporting(0);
 headers();
?>





<div class="continer">
    <div class="col-md-8 offset-2">
    <section class="vh-100" style="background-color: #9A616D;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="img/img1.webp"
                alt="login form" class="img-fluid" style=" height:100%; border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form method="POST" > 

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">Logo</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                  <div class="form-outline mb-4">
                    <input type="text" id="form2Example17" class="form-control form-control-lg" name="uname" />
                    <label class="form-label" for="form2Example17">Username</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="email" id="form2Example17" class="form-control form-control-lg" name="email" />
                    <label class="form-label" for="form2Example17">Email </label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="form2Example27" class="form-control form-control-lg" name="pswd" />
                    <label class="form-label" for="form2Example27"> Create Password</label>
                  </div>
                  
                  <div class="form-outline mb-4">
                    <input type="password" id="form2Example27" class="form-control form-control-lg" name="cpswd" />
                    <label class="form-label" for="form2Example27"> Confirm Password</label>
                  </div>

                  <div class="pt-1 mb-4">
                    <input type="submit" class="btn btn-info" name="register" value="Register">
                  </div>

                  <a href="#!" class="small text-muted">Terms of use.</a>
                  <a href="#!" class="small text-muted">Privacy policy</a>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>
</div>
<?php
if(isset($_POST['register']))
{
    
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $pass = $_POST['pswd'];
    $Cpass = $_POST['cpswd'];
echo $query = "INSERT INTO `register`( `name`, `email`, `password`)  VALUES ('$uname','$email' , '$pass )";
mysqli_query($con , $query);



};
?>
