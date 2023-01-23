<?php

  include_once("module/pasien/profile-pasien.php");
  $id_pasien = isset($_GET['id_pasien']) ? $_GET['id_pasien'] : 'id not found';
  $type_ill = isset($_GET['type_ill']) ? $_GET['type_ill'] : 'type ill not found';

?>

<div class="container-content">
  <div class="containerTab" style="background:white">
    <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
    <h2>Data Terapi</h2>
      <form>
        </br>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Terapi 1</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>Operasi</option>
              <option>Kemoterapi</option>
              <option>Radioterapi</option>
              <option>Suportif</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Keterangan terapi 1</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" placeholder="Keterangan terapi 1">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Terapi 2</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>Operasi</option>
              <option>Kemoterapi</option>
              <option>Radioterapi</option>
              <option>Suportif</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Keterangan terapi 2</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" placeholder="Keterangan terapi 2">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Terapi 3</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>Operasi</option>
              <option>Kemoterapi</option>
              <option>Radioterapi</option>
              <option>Suportif</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Keterangan terapi 3</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" placeholder="Keterangan terapi 3">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Terapi 4</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>Operasi</option>
              <option>Kemoterapi</option>
              <option>Radioterapi</option>
              <option>Suportif</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Keterangan terapi 4</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" placeholder="Keterangan terapi 4">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Terapi 5</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>Operasi</option>
              <option>Kemoterapi</option>
              <option>Radioterapi</option>
              <option>Suportif</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Keterangan terapi 5</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" placeholder="Keterangan terapi 5">
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