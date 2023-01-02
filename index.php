<?php

  include_once("function/helper.php");

  $page = isset($_GET['page']) ? $_GET['page'] : false;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="<?php echo BASE_URL."css/style.css"; ?>" type="text/css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>Rumah Sakit</title>
</head>
<body>
  <header>
    <div class="theader">
      <p>Rumah Sakit</p>
    </div>
    <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Dropdown button
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
      </div>
    </div>
  </header>
  <div class="container">
    <?php
      include_once("sidebar.php");
    ?>

    <div id="content">
      <?php
        $filename = "$page.php";
        
        if(file_exists($filename)) {
            include_once($filename);
        } else {
            echo "Maaf, file tersebut tidak ada di dalam sistem";
        }
      ?>
    </div>
  </div>

  <footer>Copyright 2023</footer>
</body>
</html>