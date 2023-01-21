<?php
  include_once("function/helper.php");
  include_once("function/koneksi.php");

  session_start(); 

  $page = isset($_GET['page']) ? $_GET['page'] : false;

  $id_user = isset($_SESSION['id_user']) ? $_SESSION['id_user'] : false;
  $level = isset($_SESSION['level']) ? $_SESSION['level'] : false;
  $username = isset($_SESSION['username']) ? $_SESSION['username'] : 'username tidak di temukan';

  if($id_user) {
    $module = isset($_GET['module']) ? $_GET['module'] : false;
    $action = isset($_GET['action']) ? $_GET['action'] : false;
    $mode = isset($_GET['mode']) ? $_GET['mode'] : false;
  } else {
    // header("location: ".BASE_URL."index.php?page=login");
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="<?php echo BASE_URL."css/style.css"; ?>" type="text/css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css"></link>

  <title>Rumah Sakit</title>
</head>
<body>
  <header>
    <div class="theader">
      <p>Rumah Sakit</p>
    </div>
    <?php
      $count = 0;
      $firstName;
      $lastName;
      $phone;
      $title;
      $short;
      $name = mysqli_query($conn, "SELECT * FROM account WHERE id_user = '". $id_user."'"); 
      while($nameck = mysqli_fetch_array($name)){
        if($nameck['id_user'] == $id_user) {
          $firstName = $nameck['first_name'];
          $lastName = $nameck['last_name'];
          $phone = $nameck['phone'];
          $title = $nameck['title'];
          $short = $nameck['short'];
        }
      }
      if($id_user) {
        echo "
        <div class='dropdown'>
          <button class='dropbtn'>$firstName $lastName</button>
          <div class='dropdown-content'>
            <a href='".BASE_URL."index.php?page=module/dokter/profile-dokter&module=dokter&action=profile-dokter'>$firstName $lastName</a>
            <a href='logout.php'>Logout</a>
          </div>
        </div>
        ";
      }
    ?>
  </header>
  
  <div class="container">

    <?php
      if($id_user) {
        include_once("sidebar.php");
      }
    ?>

    <div id="content">
      <?php
        $filename = "$page.php";
        
        if($id_user) {
          $file = "module/$module/$action.php";
        }

        
        if(file_exists($filename)) {
          include_once($filename);
        } else if(file_exists($file)) {
          include_once($file);
        }
         else {
            echo "Maaf, file tersebut tidak ada di dalam sistem";
        }
      ?>
    </div>
  </div>

  <footer>Copyright 2023</footer>
</body>
</html>