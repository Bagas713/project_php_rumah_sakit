<?php

  include_once("index.php");

?>

<section>
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-8 col-lg-6 offset-xl-1" style="width: 500px; background-color: #EAFDFC; padding: 50px; padding-left: 20px; padding-right: 20px; border-radius: 10px;">
        <form>
          <!-- Email input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="form3Example3">First Name</label>
            <input type="text" id="form3Example3" class="form-control form-control-lg"
              placeholder="First Name" />
          </div>
          
          <div class="form-outline mb-4">
            <label class="form-label" for="form3Example3">Last Name</label>
            <input type="text" id="form3Example3" class="form-control form-control-lg"
              placeholder="Last Name" />
          </div>
          
          <div class="form-outline mb-4">
            <label class="form-label" for="form3Example3">Email address</label>
            <input type="email" id="form3Example3" class="form-control form-control-lg"
            placeholder="Enter a valid email address" />
          </div>
          
          <!-- Password input -->
          <div class="form-outline mb-3">
            <label class="form-label" for="form3Example4">Password</label>
            <input type="password" id="form3Example4" class="form-control form-control-lg"
            placeholder="Enter password" />
          </div>
          
          <div class="form-outline mb-4">
            <label class="form-label" for="form3Example3">Phone</label>
            <input type="text" id="form3Example3" class="form-control form-control-lg"
              placeholder="Phone" />
          </div>
          
          <div class="form-outline mb-4">
            <label class="form-label" for="form3Example3">Title</label>
            <input type="text" id="form3Example3" class="form-control form-control-lg"
              placeholder="Title" />
          </div>

          <div class="form-outline mb-4">
            <label class="form-label" for="form3Example3">Singkatan</label>
            <input type="text" id="form3Example3" class="form-control form-control-lg"
              placeholder="Singkatan" />
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="button" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Register</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account? <a href="http://localhost/project_php_rumah_sakit/index.php?page=user-access/login"
                class="link-danger">Login</a></p>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>