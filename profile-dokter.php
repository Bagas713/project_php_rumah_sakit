<?php

  if($id_user){
      
  } else {
    header("location:index.php?page=user-access/login");
  }

?>

<form style="width: 1000px; margin: auto;">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">First Name</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="inputEmail3" placeholder="First Name" value="<?php echo $firstName ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Last Name</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Last Name" value="<?php echo $lastName ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Phone</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Phone" value="<?php echo $phone ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Title</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Title" value="<?php echo $title ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Singkatan</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Singkatan" value="<?php echo $short ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password (If Changing Password)</label>
    <div class="col-sm-9">
      <input type="password" class="form-control" id="inputPassword3" placeholder="New Password">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Confirm Password</label>
    <div class="col-sm-9">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Confirm New Password">
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-9">
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </div>
</form>