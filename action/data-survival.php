<?php

  include_once("module/pasien/profile-pasien.php");

?>

<div class="container-content">
  <div class="containerTab" style="background:white">
    <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
    <h2>Data Survival</h2>
      <form>
        </br>
      <div class="form-group row">
        <label for="inputState" class="col-sm-2 col-form-label">Pendidikan</label>
        <div class="col-sm-10">
          <select id="inputState" class="form-control">
            <option>SD</option>
            <option>SMP/SMA</option>
            <option>S1/S2</option>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label for="inputState" class="col-sm-2 col-form-label">Pekerjaan</label>
        <div class="col-sm-10">
          <select id="inputState" class="form-control">
            <option>Buruh</option>
            <option>Petani</option>
            <option>Wiraswasta</option>
            <option>Guru</option>
            <option>Swasta/PNS</option>
            <option>Tidak Bekerja</option>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Alamat Sesuai KTP</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputPassword3" placeholder="Alamat Sesuai KTP">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Rumah Sakit Tempat Pelayanan</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputPassword3" placeholder="Rumah Sakit Tempat Pelayanan">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">No Telp Pasien</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputPassword3" placeholder="No Telp Pasien">
        </div>
      </div><div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">No Telp Keluarga Dekat</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputPassword3" placeholder="No Telp Keluarga Dekat">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputState" class="col-sm-2 col-form-label">Jenis Kasus</label>
        <div class="col-sm-10">
          <select id="inputState" class="form-control">
            <option>Esofagus</option>
            <option>Gaster</option>
            <option>Duodenum-Jejunum-Ileum</option>
            <option>Kolom-Rektum</option>
            <option>Anus</option>
            <option>Heptibiliar</option>
            <option>Pankreas</option>
            <option>GIST</option>
          </select>
        </div>
      </div>
      
      <div class="form-group row">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </div>
    </form>
  </div>
</div>