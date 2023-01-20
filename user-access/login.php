<?php

  // include_once("index.php");

?>

<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1" style="background-color: #EAFDFC; padding: 50px; padding-left: 20px; padding-right: 20px; border-radius: 10px;">
        <form action="<?php echo BASE_URL."user-access/proses-login.php"; ?>" method="POST">

          <?php
            $notif = isset($_GET['notif']) ? $_GET['notif'] : false;

            if($notif == true){
                echo "<div style='background-color: #FFB100; height: 9vh; padding:10px; border-radius:10px;'>Maaf, username atau password yang kamu masukan tidak cocok</div>";
            }
          ?>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <label class="form-label" style="margin-top: 10px;" for="form3Example3">Username</label>
            <input type="text" id="form3Example3" class="form-control form-control-lg"
              placeholder="Enter Username" name="username"/>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <label class="form-label" for="form3Example4">Password</label>
            <input type="password" id="form3Example4" class="form-control form-control-lg"
              placeholder="Enter password" name="password"/>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg" name="login" value="Login"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="http://localhost/project_php_rumah_sakit/index.php?page=user-access/register"
                class="link-danger">Register</a></p>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>