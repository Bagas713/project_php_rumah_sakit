<?php
  if(!$id_user){
    header("location:index.php?page=user-access/login");
  }
?>
<div class="container-fluid-sidebar" style="">
  <div class="sidebar" style="float:left; display: inline-block;
	vertical-align: top;
	height: 100%;
	overflow: auto; ">
    <div class="bg-dark" style="min-height: 100%; width: 250px; margin-right: 40px;  float:left;">
      <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white">
        <h2 href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <span class="fs-5 d-none d-sm-inline">Menu</span>
        </h2>
  
        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">

          <li class="nav-item">
            <a href="http://localhost/project_php_rumah_sakit/index.php?page=module/pasien/home" class="nav-link align-middle px-0 text-white ">
              <i class="fs-4"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
            </a>
          </li>

          <!-- <li>
            <a href="http://localhost/project_php_rumah_sakit/index.php?page=data-pasien" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-white">
              <i class="fs-4 "></i> <span class="ms-1 d-none d-sm-inline">Data Pasien</span>
            </a>
          </li> -->

          <li>
            <a href="http://localhost/project_php_rumah_sakit/index.php?page=module/pasien/history-pasien" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-white">
              <i class="fs-4 "></i> <span class="ms-1 d-none d-sm-inline">History Pasien</span>
            </a>
          </li>

          <li>
            <a href="http://localhost/project_php_rumah_sakit/index.php?page=petunjuk-pengisian/petunjuk-pengisian" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-white">
              <i class="fs-4 "></i> <span class="ms-1 d-none d-sm-inline">Petunjuk Pengisian</span>
            </a>
          </li>
          
          <li>
            <a href="http://localhost/project_php_rumah_sakit/index.php?page=summary-data" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-white">
              <i class="fs-4 "></i> <span class="ms-1 d-none d-sm-inline">Summary Data</span>
            </a>
          </li>
      
        </ul>
      </div>
    </div>
  </div>
</div>