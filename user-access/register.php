<?php

  // include_once("index.php");

?>

<section>
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-8 col-lg-6 offset-xl-1" style="width: 500px; background-color: #EAFDFC; padding: 50px; padding-left: 20px; padding-right: 20px; border-radius: 10px;">
        <form action="<?php echo BASE_URL."user-access/proses-register.php"; ?>" method="POST">

          <?php
            $notif = isset($_GET['notif']) ? $_GET['notif'] : false;
            $firstName = isset($_GET['first_name']) ? $_GET['first_name'] : false;
            $lastName = isset($_GET['last_Name']) ? $_GET['last_Name'] : false;
            $email = isset($_GET['email']) ? $_GET['email'] : false;
            $password = isset($_GET['password']) ? $_GET['password'] : false;
            $username = isset($_GET['username']) ? $_GET['username'] : false;
            $phone = isset($_GET['phone']) ? $_GET['phone'] : false;
            $title = isset($_GET['title']) ? $_GET['title'] : false;
            $short = isset($_GET['short']) ? $_GET['short'] : false;

            if($notif == "require") {
                echo "<div class='notif'>Maaf, kamu harus melengkapi form dibawah ini</div>";
            } elseif($notif == "username") {
                echo "<div class='notif'>Maaf, username yang kamu masukkan sudah terdaftar</div>";
            }
          ?>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="form3Example3">First Name</label>
            <input type="text" id="form3Example3" class="form-control form-control-lg"
              placeholder="First Name" name="first_name" value="<?php echo $firstName ?>"/>
          </div>
          
          <div class="form-outline mb-4">
            <label class="form-label" for="form3Example3">Last Name</label>
            <input type="text" id="form3Example3" class="form-control form-control-lg"
              placeholder="Last Name" name="last_name" value="<?php echo $lastName ?>"/>
          </div>
          
          <div class="form-outline mb-4">
            <label class="form-label" for="form3Example3">Username</label>
            <input type="text" id="form3Example3" class="form-control form-control-lg"
              placeholder="Username" name="username" value="<?php echo $username ?>"/>
          </div>
          
          <div class="form-outline mb-4">
            <label class="form-label" for="form3Example3">Email address</label>
            <input type="email" id="form3Example3" class="form-control form-control-lg"
            placeholder="Enter a valid email address" name="email" value="<?php echo $email ?>"/>
          </div>
          
          <!-- Password input -->
          <div class="form-outline mb-3">
            <label class="form-label" for="form3Example4">Password</label>
            <input type="password" id="form3Example4" class="form-control form-control-lg"
            placeholder="Enter password" name="password" value="<?php echo $password ?>"/>
          </div>
          
          <div class="form-outline mb-4">
            <label class="form-label" for="form3Example3">Phone</label>
            <input type="text" id="form3Example3" class="form-control form-control-lg"
              placeholder="Phone" name="phone" value="<?php echo $phone ?>"/>
          </div>
          
          <div class="form-outline mb-4">
            <label class="form-label" for="form3Example3">Title</label>
            <input type="text" id="form3Example3" class="form-control form-control-lg"
              placeholder="Title" name="title" value="<?php echo $title ?>"/>
          </div>

          <div class="form-outline mb-4">
            <label class="form-label" for="form3Example3">Singkatan</label>
            <input type="text" id="form3Example3" class="form-control form-control-lg"
              placeholder="Singkatan" name="short" value="<?php echo $short ?>"/>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg" name="register" value="register
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Register</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account? <a href="http://localhost/project_php_rumah_sakit/index.php?page=user-access/login"
                class="link-danger">Login</a></p>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>