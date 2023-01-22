<?php
  // include_once("function/koneksi.php");

  if(!$id_user){
    header("location:index.php?page=user-access/login");
  }

  $id_user = isset($_GET['id_user']) ? $_GET['id_user'] : 'id not found';

  $firstName = "";
  $lastName = "";
  $phone = "";
  $title = "";
  $short = "";
  $new_password = "";
  $conf_password = "";
  $button = "Save";

  if($id_user) {
    $queryDokter = mysqli_query($conn, "SELECT * FROM account WHERE id_user='$id_user'");
    $row = mysqli_fetch_assoc($queryDokter);

    $firstName = $row['first_name'];
    $lastName = $row['last_name'];
    $phone = $row['phone'];
    $title = $row['title'];
    $short = $row['short'];
    $new_password = md5($row['password']);
    $button = "Update";
  }

?>

<form action="<?php echo BASE_URL."module/dokter/action.php?id_user=$id_user"; ?>" method="POST" style="width: 1000px; margin: auto;">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">First Name</label>
    <div class="col-sm-9">
      <input type="text"  class="form-control" id="inputEmail3" placeholder="First Name" name="first_name" value="<?php echo $firstName ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Last Name</label>
    <div class="col-sm-9">
      <input type="text"  class="form-control" id="inputPassword3" placeholder="Last Name" name="last_name" value="<?php echo $lastName ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Phone</label>
    <div class="col-sm-9">
      <input type="text"  class="form-control" id="inputPassword3" placeholder="Phone" name="phone" value="<?php echo $phone ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Title</label>
    <div class="col-sm-9">
      <input type="text"  class="form-control" id="inputPassword3" placeholder="Title" name="title" value="<?php echo $title ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Singkatan</label>
    <div class="col-sm-9">
      <input type="text"  class="form-control" id="inputPassword3" placeholder="Singkatan" name="short" value="<?php echo $short ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password (If Changing Password)</label>
    <div class="col-sm-9">
      <input type="password"  class="form-control" id="inputPassword3" placeholder="New Password" name="password">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Confirm Password</label>
    <div class="col-sm-9">
      <input type="password"  class="form-control" id="inputPassword3" placeholder="Confirm New Password" name="password">
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-9">
        <input type="submit" name="button" class="btn btn-primary" value="<?php echo $button ?>" />
    </div>
  </div>
</form>
