<?php

  include_once("profile-pasien.php");

?>

<div class="container-content">
  <div class="containerTab" style="background:white">
    <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
    <h2>Klinis</h2>
    <hr/>
      <h2>Klinis Esofagus
      </h2>
      <form>
        </br>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Keluhan ticker</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>Disfagia</option>
              <option>Nyeri</option>
              <option>Batuk</option>
              <option>Sesak</option>
              <option>Refluks</option>
              <option>Penurunan BB</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Lama keluhan</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="inputPassword3" placeholder="Lama keluhan">minggu
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Riwayat keluarga</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>Ada</option>
              <option>Tidak</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Lokasi</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>Atas</option>
              <option>Tengah</option>
              <option>Bawah</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Esofagografi</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="Esofagografi">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Endoskopi</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="Endoskopi">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">CT Scan infiltrasi organ</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="CT Scan infiltrasi organ">
          </div>
        </div>

        <div class="form-group row">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </div>
      </form>
    <hr/>
    <h2>Klinis Gaster
    </h2>
    <form>
    <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Keluhan ticker menu</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <optio>Nyeri</optio></option>
              <option>Kembung</option>
              <option>Muntah</option>
              <option>BAB Hitam</option>
              <option>Sulit Menelan</option>
              <option>Penurunan BB</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Lama keluhan</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="inputPassword3" placeholder="Lama keluhan">minggu
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Riwayat keluarga</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>Ada</option>
              <option>Tidak</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Lokasi</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>Kardia</option>
              <option>Fundus</option>
              <option>Korpus</option>
              <option>Antrum</option>
              <option>Pilorus</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Upper GI study </label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="Esofagografi">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Endoskopi</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="Endoskopi">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">CT Scan infiltrasi organ</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="CT Scan infiltrasi organ">
          </div>
        </div>
      <div class="form-group row">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </div>
    </form>

    <hr/>
    <h2>Klinis Duodenum–Jejunum-Ileum 
    </h2>
    <form>
    <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Keluhan ticker</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <optio>Nyeri</option>
              <option>Kembung</option>
              <option>Muntah</option>
              <option>BAB Hitam</option>
              <option>Sulit Menelan</option>
              <option>Penurunan BB</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Lama keluhan</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="inputPassword3" placeholder="Lama keluhan">minggu
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Riwayat keluarga</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>Ada</option>
              <option>Tidak</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Lokasi</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>Atas</option>
              <option>Tengah</option>
              <option>Bawah</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Endoskopi</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="Endoskopi">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">CT Scan infiltrasi organ</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="CT Scan infiltrasi organ">
          </div>
        </div>

      <div class="form-group row">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </div>
    </form>

    <hr/>
    <h2>Klinis Kolon-Rektum
    </h2>
    <form>
    <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Keluhan ticker</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>Gangguan pola BAB</option>
              <option>BAB berdarah</option>
              <option>Tidak bisa BAB</option>
              <option>Nyeri</option>
              <option>Penurunan BB</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Lama keluhan</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="inputPassword3" placeholder="Lama keluhan">minggu
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Riwayat keluarga</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>Ada</option>
              <option>Tidak</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Riwayat infeksi HPV</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>Ada</option>
              <option>Tidak</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Lokasi</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>Ascendens</option>
              <option>Transversum</option>
              <option>Descendens</option>
              <option>Sigmoid</option>
              <option>Rektum</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Kolonoskopi</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="Kolonoskopi">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">CT Scan infiltrasi organ</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="CT Scan infiltrasi organ">
          </div>
        </div>

      <div class="form-group row">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </div>
    </form>

    <hr/>
    <h2>Klinis Anus
    </h2>
    <form>
    <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Keluhan ticker</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <optio>Benjolan</optio></option>
              <option>Gatal</option>
              <option>Discharge</option>
              <option>Perdarahan</option>
              <option>Penurunan BB</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Lama keluhan</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="inputPassword3" placeholder="Lama keluhan">minggu
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Riwayat keluarga</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>Ada</option>
              <option>Tidak</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Lokasi</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>Ascendens</option>
              <option>Transversum</option>
              <option>Descendens</option>
              <option>Sigmoid</option>
              <option>Rektum</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Kolonoskopi</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="Kolonoskopi">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">CT Scan infiltrasi organ</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="CT Scan infiltrasi organ">
          </div>
        </div>

      <div class="form-group row">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </div>
    </form>

    <hr/>
    <h2>Klinis Hepatobilier
    </h2>
    <form>
    <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Keluhan ticker</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>Ikterik</option>
              <option>Demam</option>
              <option>Nyeri</option>
              <option>Penurunan BB</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Lama keluhan</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="inputPassword3" placeholder="Lama keluhan">minggu
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Riwayat keluarga</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>Ada</option>
              <option>Tidak</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Lokasi</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>Hepar</option>
              <option>Gallbladder</option>
              <option>Intrahepatic Bile Duct</option>
              <option>Perihilar Bile Duct</option>
              <option>Distal Bile Duct</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">CT Scan infiltrasi organ</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="CT Scan infiltrasi organ">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">MRCP</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="MRCP">
          </div>
        </div>

      <div class="form-group row">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </div>
    </form>

    <hr/>
    <h2>Klinis Pankreas
    </h2>
    <form>
    <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Keluhan ticker</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>Ikterik</option>
              <option>Demam</option>
              <option>Nyeri</option>
              <option>Penurunan BB</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Lama keluhan</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="inputPassword3" placeholder="Lama keluhan">minggu
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Riwayat keluarga</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>Ada</option>
              <option>Tidak</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Lokasi</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>Caput</option>
              <option>Corpus</option>
              <option>Caudatus</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">CT Scan infiltrasi organ</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="CT Scan infiltrasi organ">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">MRCP</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="MRCP">
          </div>
        </div>

      <div class="form-group row">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </div>
    </form>

    <hr/>
    <h2>Klinis GIST
    </h2>
    <form>
    <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Keluhan ticker</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>Nyeri</option>
              <option>Benjolan</option>
              <option>Penurunan BB</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Lama keluhan</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="inputPassword3" placeholder="Lama keluhan">minggu
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Riwayat keluarga</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>Ada</option>
              <option>Tidak</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputState" class="col-sm-2 col-form-label">Lokasi</label>
          <div class="col-sm-10">
            <select id="inputState" class="form-control">
              <option>Caput</option>
              <option>Corpus</option>
              <option>Caudatus</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">CT Scan infiltrasi organ</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="CT Scan infiltrasi organ">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">MRCP</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="MRCP">
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