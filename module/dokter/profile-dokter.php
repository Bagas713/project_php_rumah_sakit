<?php
  if(!$id_user){
    header("location:index.php?page=user-access/login");
  }
?>
<div class="container-content" style="background-color:white; margin-left:60px;">
  <section>
  
      <div class="row">
        <div class="col-lg-8">
          <?php
            $data = mysqli_query($conn, "SELECT * FROM account where id_user = '$id_user'"); 
            while($dta = mysqli_fetch_array($data)){
          ?>
            <div class="card mb-4">


              <div class="card-body">
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">First Name</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0"><?php echo $dta['first_name']; ?></p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Last Name</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0"><?php echo $dta['last_name']; ?></p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Username</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0"><?php echo $dta['username']; ?></p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Phone</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0"><?php echo $dta['phone']; ?></p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Title</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0"><?php echo $dta['title']; ?></p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Singkatan</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0"><?php echo $dta['short']; ?></p>
                  </div>
                </div>
              </div>


            </div>

            <a href="<?php echo BASE_URL."index.php?page=profile-dokter&module=dokter&action=form-ubah-dokter&id_user=$dta[id_user]"; ?>">
              <button type="submit" class="btn btn-primary">Ubah</button>
            </a>
        
          <?php
              }
          ?>

        </div>
      </div>
    </div>
  </section>
</div>