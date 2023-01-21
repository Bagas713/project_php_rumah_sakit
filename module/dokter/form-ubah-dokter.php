<?php
  include_once("function/koneksi.php");
  // if($id_user) {
  //   $module = isset($_GET['module']) ? $_GET['module'] : false;
  //   $action = isset($_GET['action']) ? $_GET['action'] : false;
  //   $mode = isset($_GET['mode']) ? $_GET['mode'] : false;
  // } else {
  //   header("location: ".BASE_URL."index.php?page=login");
  // }

?>

<form action="<?php echo BASE_URL."module/dokter/ubah-dokter.php"; ?>" method="POST" style="width: 1000px; margin: auto;">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">First Name</label>
    <div class="col-sm-9">
      <input type="text"  class="form-control" id="inputEmail3" placeholder="First Name" name="first_name">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Last Name</label>
    <div class="col-sm-9">
      <input type="text"  class="form-control" id="inputPassword3" placeholder="Last Name" name="last_name">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Phone</label>
    <div class="col-sm-9">
      <input type="text"  class="form-control" id="inputPassword3" placeholder="Phone" name="phone">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Title</label>
    <div class="col-sm-9">
      <input type="text"  class="form-control" id="inputPassword3" placeholder="Title" name="title">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Singkatan</label>
    <div class="col-sm-9">
      <input type="text"  class="form-control" id="inputPassword3" placeholder="Singkatan" name="short">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password (If Changing Password)</label>
    <div class="col-sm-9">
      <input type="password"  class="form-control" id="inputPassword3" placeholder="New Password" name="new_password">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Confirm Password</label>
    <div class="col-sm-9">
      <input type="password"  class="form-control" id="inputPassword3" placeholder="Confirm New Password" name="conf_password">
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-9">
      <a href="<?php echo BASE_URL."index.php?page=profile-dokter&module=dokter&action=update-dokter"; ?>">
        <button type="submit" class="btn btn-primary">Ubah</button>
      </a>
    </div>
  </div>
</form>
