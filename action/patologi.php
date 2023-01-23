<?php

  include_once("module/pasien/profile-pasien.php");
  $id_pasien = isset($_GET['id_pasien']) ? $_GET['id_pasien'] : 'id not found';
  $type_ill = isset($_GET['type_ill']) ? $_GET['type_ill'] : 'type ill not found';

?>

<div class="container-content">
  <div class="containerTab" style="background:white">
    <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
    <h2>Potologi</h2>
    <hr/>
      <h2>Potologi Esofagus
      </h2>
      <form>
        </br>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Tumor</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>T1a</option>
              <option>T1b</option>
              <option>T2</option>
              <option>T3</option>
              <option>T4a</option>
              <option>T4b</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Node</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>N0</option>
              <option>N1</option>
              <option>N2</option>
              <option>N3</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Metastasis</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>M0</option>
              <option>M1</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Lokasi Metastasis</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>Paru</option>
              <option>Hati</option>
              <option>Peritoneal</option>
              <option>Otak</option>
              <option>Tulang</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">No. Patologi Biopsi</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="No. Patologi Biopsi">
          </div>
        </div>
        <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal Biopsi</label>
        <div class="col-sm-10">
          <input type="date" class="form-control" id="inputPassword3" >
        </div>
      </div>
        <div class="form-group row">
          <label for="exampleDataList" class="col-form-label col-sm-2">Jenis Patologi Biopsi</label>
          <div class="col-sm-10">
            <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Lainnya">
            <datalist id="datalistOptions">
              <option value="Adenocarcinoma">
              <option value="Squamous cell carcinoma">
            </datalist>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">No. Patologi Operasi Definitif </label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="No. Patologi Operasi Definitif ">
          </div>
        </div>
        <div class="form-group row">
          <label for="exampleDataList" class="col-form-label col-sm-2">Jenis Patologi Operasi Definitif </label>
          <div class="col-sm-10">
            <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Lainnya">
            <datalist id="datalistOptions">
              <option value="Adenocarcinoma">
              <option value="Squamous cell carcinoma">
            </datalist>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Grade Histopatologi</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>I</option>
              <option>II</option>
              <option>III</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Reseksi</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>R0</option>
              <option>R1</option>
              <option>R2</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Batas reseksi proksimal</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="inputPassword3" placeholder="No. Patologi Operasi Definitif ">cm
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Batas reseksi distal</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="inputPassword3" placeholder="No. Patologi Operasi Definitif ">cm
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">LVI</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>negatif</option>
              <option>positif</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Invasi perineural </label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>negatif</option>
              <option>positif</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Catatan temuan operasi</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="Catatan temuan operasi">
          </div>
        </div>

        <div class="form-group row">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </div>
      </form>
    <hr/>
    <h2>Potologi Gaster
    </h2>
    <form>
    <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Tumor</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>T1a</option>
              <option>T1b</option>
              <option>T2a</option>
              <option>T2b</option>
              <option>T3</option>
              <option>T4a</option>
              <option>T4b</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Node</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>N0</option>
              <option>N1</option>
              <option>N2</option>
              <option>N3</option>
              <option>N3a</option>
              <option>N3b</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Metastasis</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>M0</option>
              <option>M1</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Lokasi Metastasis</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>Paru</option>
              <option>Hati</option>
              <option>Peritoneal</option>
              <option>Otak</option>
              <option>Tulang</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">No. Patologi Biopsi</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="No. Patologi Biopsi">
          </div>
        </div>
        <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal Biopsi</label>
        <div class="col-sm-10">
          <input type="date" class="form-control" id="inputPassword3" >
        </div>
      </div>
        <div class="form-group row">
          <label for="exampleDataList" class="col-form-label col-sm-2">Jenis Patologi Biopsi</label>
          <div class="col-sm-10">
            <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Lainnya">
            <datalist id="datalistOptions">
              <option value="Adenocarcinoma">
              <option value="Squamous cell carcinoma">
            </datalist>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">No. Patologi Operasi Definitif </label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="No. Patologi Operasi Definitif ">
          </div>
        </div>
        <div class="form-group row">
          <label for="exampleDataList" class="col-form-label col-sm-2">Jenis Patologi Operasi Definitif </label>
          <div class="col-sm-10">
            <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Lainnya">
            <datalist id="datalistOptions">
              <option value="Adenocarcinoma">
              <option value="Squamous cell carcinoma">
            </datalist>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Grade Histopatologi</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>I</option>
              <option>II</option>
              <option>III</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Reseksi</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>R0</option>
              <option>R1</option>
              <option>R2</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Batas reseksi proksimal</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="inputPassword3" placeholder="No. Patologi Operasi Definitif ">cm
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Batas reseksi distal</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="inputPassword3" placeholder="No. Patologi Operasi Definitif ">cm
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">LVI</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>negatif</option>
              <option>positif</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Invasi perineural </label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>negatif</option>
              <option>positif</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Catatan temuan operasi</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="Catatan temuan operasi">
          </div>
        </div>

      <div class="form-group row">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </div>
    </form>

    <hr/>
    <h2>Potologi Duodenum–Jejunum-Ileum 
    </h2>
    <form>
    <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Tumor</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>T1</option>
              <option>T2</option>
              <option>T3</option>
              <option>T4</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Node</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>N0</option>
              <option>N1</option>
              <option>N2</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Metastasis</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>M0</option>
              <option>M1</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Lokasi Metastasis</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>Paru</option>
              <option>Hati</option>
              <option>Peritoneal</option>
              <option>Otak</option>
              <option>Tulang</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">No. Patologi Biopsi</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="No. Patologi Biopsi">
          </div>
        </div>
        <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal Biopsi</label>
        <div class="col-sm-10">
          <input type="date" class="form-control" id="inputPassword3" >
        </div>
      </div>
        <div class="form-group row">
          <label for="exampleDataList" class="col-form-label col-sm-2">Jenis Patologi Biopsi</label>
          <div class="col-sm-10">
            <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Lainnya">
            <datalist id="datalistOptions">
              <option value="Adenocarcinoma">
              <option value="Squamous cell carcinoma">
            </datalist>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">No. Patologi Operasi Definitif </label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="No. Patologi Operasi Definitif ">
          </div>
        </div>
        <div class="form-group row">
          <label for="exampleDataList" class="col-form-label col-sm-2">Jenis Patologi Operasi Definitif</label>
          <div class="col-sm-10">
            <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Lainnya">
            <datalist id="datalistOptions">
              <option value="Adenocarcinoma">
              <option value="Carcinoid">
            </datalist>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Grade Histopatologi</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>I</option>
              <option>II</option>
              <option>III</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Reseksi</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>R0</option>
              <option>R1</option>
              <option>R2</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Batas reseksi proksimal</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="inputPassword3" placeholder="No. Patologi Operasi Definitif ">cm
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Batas reseksi distal</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="inputPassword3" placeholder="No. Patologi Operasi Definitif ">cm
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">LVI</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>negatif</option>
              <option>positif</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Invasi perineural </label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>negatif</option>
              <option>positif</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Catatan temuan operasi</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="Catatan temuan operasi">
          </div>
        </div>
      <div class="form-group row">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </div>
    </form>

    <hr/>
    <h2>Potologi Kolon-Rektum 
    </h2>
    <form>
    <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Tumor</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>T1</option>
              <option>T2</option>
              <option>T3</option>
              <option>T4a</option>
              <option>T4b</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Node</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>N0</option>
              <option>N1a</option>
              <option>N1b</option>
              <option>N2a</option>
              <option>N2b</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Metastasis</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>M0</option>
              <option>M1a</option>
              <option>M1b</option>
              <option>M1c</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Lokasi Metastasis</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>Paru</option>
              <option>Hati</option>
              <option>Peritoneal</option>
              <option>Otak</option>
              <option>Tulang</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">No. Patologi Biopsi</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="No. Patologi Biopsi">
          </div>
        </div>
        <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal Biopsi</label>
        <div class="col-sm-10">
          <input type="date" class="form-control" id="inputPassword3" >
        </div>
      </div>
        <div class="form-group row">
          <label for="exampleDataList" class="col-form-label col-sm-2">Jenis Patologi Biopsi</label>
          <div class="col-sm-10">
            <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Lainnya">
            <datalist id="datalistOptions">
              <option value="Squamous cell carcinoma">
            </datalist>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">No. Patologi Operasi Definitif </label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="No. Patologi Operasi Definitif ">
          </div>
        </div>
        <div class="form-group row">
          <label for="exampleDataList" class="col-form-label col-sm-2">Jenis Patologi Operasi Definitif </label>
          <div class="col-sm-10">
            <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Lainnya">
            <datalist id="datalistOptions">
              <option value="Squamous cell carcinoma">
            </datalist>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Grade Histopatologi</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>I</option>
              <option>II</option>
              <option>III</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Reseksi</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>R0</option>
              <option>R1</option>
              <option>R2</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Batas reseksi proksimal</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="inputPassword3" placeholder="No. Patologi Operasi Definitif ">cm
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Batas reseksi distal</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="inputPassword3" placeholder="No. Patologi Operasi Definitif ">cm
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">LVI</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>negatif</option>
              <option>positif</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Invasi perineural </label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>negatif</option>
              <option>positif</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Catatan temuan operasi</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="Catatan temuan operasi">
          </div>
        </div>


      <div class="form-group row">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </div>
    </form>

    <hr/>
    <h2>Potologi Anus
    </h2>
    <form>
    <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Tumor</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>T1</option>
              <option>T2</option>
              <option>T3</option>
              <option>T4</option>
              <option>T4</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Node</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>N0</option>
              <option>N1</option>
              <option>N2</option>
              <option>N3</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Metastasis</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>M0</option>
              <option>M1</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Lokasi Metastasis</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>Paru</option>
              <option>Hati</option>
              <option>Peritoneal</option>
              <option>Otak</option>
              <option>Tulang</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">No. Patologi Biopsi</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="No. Patologi Biopsi">
          </div>
        </div>
        <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal Biopsi</label>
        <div class="col-sm-10">
          <input type="date" class="form-control" id="inputPassword3" >
        </div>
      </div>
        <div class="form-group row">
          <label for="exampleDataList" class="col-form-label col-sm-2">Jenis Patologi Biopsi</label>
          <div class="col-sm-10">
            <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Lainnya">
            <datalist id="datalistOptions">
              <option value="Squamous cell carcinoma">
            </datalist>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">No. Patologi Operasi Definitif </label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="No. Patologi Operasi Definitif ">
          </div>
        </div>
        <div class="form-group row">
          <label for="exampleDataList" class="col-form-label col-sm-2">Jenis Patologi Operasi Definitif</label>
          <div class="col-sm-10">
            <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Lainnya">
            <datalist id="datalistOptions">
              <option value="Adenocarcinoma">
              <option value="Mucinous adenocarcinoma">
              <option value="Signet-ring cell carcinoma">
            </datalist>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Grade Histopatologi</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>I</option>
              <option>II</option>
              <option>III</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Reseksi</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>R0</option>
              <option>R1</option>
              <option>R2</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Batas reseksi proksimal</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="inputPassword3" placeholder="No. Patologi Operasi Definitif ">cm
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Batas reseksi distal</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="inputPassword3" placeholder="No. Patologi Operasi Definitif ">cm
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">LVI</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>negatif</option>
              <option>positif</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Invasi perineural </label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>negatif</option>
              <option>positif</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Catatan temuan operasi</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="Catatan temuan operasi">
          </div>
        </div>

      <div class="form-group row">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </div>
    </form>

    <hr/>
    <h2>Potologi Hepatobilier
    </h2>
    <form>
    <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Tumor</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>T1a</option>
              <option>T1b</option>
              <option>T2a</option>
              <option>T2b</option>
              <option>T3</option>
              <option>T4</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Node</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>N0</option>
              <option>N1</option>
              <option>N2</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Metastasis</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>M0</option>
              <option>M1</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Lokasi Metastasis</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>Paru</option>
              <option>Hati</option>
              <option>Peritoneal</option>
              <option>Otak</option>
              <option>Tulang</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">No. Patologi Biopsi</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="No. Patologi Biopsi">
          </div>
        </div>
        <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal Biopsi</label>
        <div class="col-sm-10">
          <input type="date" class="form-control" id="inputPassword3" >
        </div>
      </div>
      <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Jenis Patologi Biopsi</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="No. Patologi Biopsi">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">No. Patologi Operasi Definitif </label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="No. Patologi Operasi Definitif ">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Jenis Patologi Operasi Definitif </label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="No. Patologi Biopsi">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Grade Histopatologi</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>I</option>
              <option>II</option>
              <option>III</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Reseksi</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>R0</option>
              <option>R1</option>
              <option>R2</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Batas reseksi proksimal</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="inputPassword3" placeholder="No. Patologi Operasi Definitif ">cm
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Batas reseksi distal</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="inputPassword3" placeholder="No. Patologi Operasi Definitif ">cm
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">LVI</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>negatif</option>
              <option>positif</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Invasi perineural </label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>negatif</option>
              <option>positif</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Catatan temuan operasi</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="Catatan temuan operasi">
          </div>
        </div>

      <div class="form-group row">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </div>
    </form>


    <hr/>
    <h2>Potologi Pankreas
    </h2>
    <form>
    <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Tumor</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>T1a</option>
              <option>T1b</option>
              <option>T1c</option>
              <option>T2</option>
              <option>T3</option>
              <option>T4</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Node</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>N0</option>
              <option>N1</option>
              <option>N2</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Metastasis</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>M0</option>
              <option>M1</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Lokasi Metastasis</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>Paru</option>
              <option>Hati</option>
              <option>Peritoneal</option>
              <option>Otak</option>
              <option>Tulang</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">No. Patologi Biopsi</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="No. Patologi Biopsi">
          </div>
        </div>
        <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal Biopsi</label>
        <div class="col-sm-10">
          <input type="date" class="form-control" id="inputPassword3" >
        </div>
      </div>
        <div class="form-group row">
          <label for="exampleDataList" class="col-form-label col-sm-2">Jenis Patologi Biopsi</label>
          <div class="col-sm-10">
            <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Lainnya">
            <datalist id="datalistOptions">
              <option value="Ductal adenocarcinoima">
            </datalist>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">No. Patologi Operasi Definitif </label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="No. Patologi Operasi Definitif ">
          </div>
        </div>
        <div class="form-group row">
          <label for="exampleDataList" class="col-form-label col-sm-2">Jenis Patologi Operasi Definitif </label>
          <div class="col-sm-10">
            <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Lainnya">
            <datalist id="datalistOptions">
              <option value="Ductal adenocarcinoima">
            </datalist>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Grade Histopatologi</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>I</option>
              <option>II</option>
              <option>III</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Reseksi</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>R0</option>
              <option>R1</option>
              <option>R2</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Batas reseksi proksimal</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="inputPassword3" placeholder="No. Patologi Operasi Definitif ">cm
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Batas reseksi distal</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="inputPassword3" placeholder="No. Patologi Operasi Definitif ">cm
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">LVI</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>negatif</option>
              <option>positif</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Invasi perineural </label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>negatif</option>
              <option>positif</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Catatan temuan operasi</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="Catatan temuan operasi">
          </div>
        </div>

      <div class="form-group row">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </div>
    </form>

    <hr/>
    <h2>Potologi GIST
    </h2>
    <form>
    <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Tumor</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>T1</option>
              <option>T2</option>
              <option>T3</option>
              <option>T4</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Node</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>N0</option>
              <option>N1</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Metastasis</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>M0</option>
              <option>M1</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Lokasi Metastasis</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>Paru</option>
              <option>Hati</option>
              <option>Peritoneal</option>
              <option>Otak</option>
              <option>Tulang</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">No. Patologi Biopsi</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="No. Patologi Biopsi">
          </div>
        </div>
        <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal Biopsi</label>
        <div class="col-sm-10">
          <input type="date" class="form-control" id="inputPassword3" >
        </div>
      </div>
      <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Jenis patologi biopsi</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="No. Patologi Biopsi">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">No. Patologi Operasi Definitif </label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="No. Patologi Operasi Definitif ">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Jenis patologi operasi definitif</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="No. Patologi Biopsi">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Grade Histopatologi</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>I</option>
              <option>II</option>
              <option>III</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Reseksi</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>R0</option>
              <option>R1</option>
              <option>R2</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Batas reseksi proksimal</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="inputPassword3" placeholder="No. Patologi Operasi Definitif ">cm
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Batas reseksi distal</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="inputPassword3" placeholder="No. Patologi Operasi Definitif ">cm
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">LVI</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>negatif</option>
              <option>positif</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Invasi perineural </label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>negatif</option>
              <option>positif</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Catatan temuan operasi</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="Catatan temuan operasi">
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