<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<h1>Form Pendaftaran Siswa</h1>
<form method="POST" action="#">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nama" name="nama" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="laki-laki"> 
        <label for="jk_0" class="custom-control-label">Laki-Laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="perempuan"> 
        <label for="jk_1" class="custom-control-label">Perempuan</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Hobi</label> 
    <div class="col-8">
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="hobi[]" id="hobi_0" type="checkbox" class="custom-control-input" value="main game"> 
        <label for="hobi_0" class="custom-control-label">Main Game</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="hobi[]" id="hobi_1" type="checkbox" class="custom-control-input" value="membaca"> 
        <label for="hobi_1" class="custom-control-label">Membaca</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="hobi[]" id="hobi_2" type="checkbox" class="custom-control-input" value="nonton"> 
        <label for="hobi_2" class="custom-control-label">Nonton</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="hobi[]" id="hobi_3" type="checkbox" class="custom-control-input" value="menulis"> 
        <label for="hobi_3" class="custom-control-label">Menulis</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="hobi[]" id="hobi_4" type="checkbox" class="custom-control-input" value="memasak"> 
        <label for="hobi_4" class="custom-control-label">Memasak</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="ipk" class="col-4 col-form-label">IPK</label> 
    <div class="col-8">
      <input id="ipk" name="ipk" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

<?php
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$hobi = $_POST['hobi'];
$ipk = $_POST['ipk'];
//mencari status LULUS & GAGAL
function status($ipk){
    if ($ipk>=3){
        return "LULUS";
    }
    else{
        return "GAGAL";
    }
}
    $status = status($ipk);


//cetak
echo "<h2>Informasi yang Anda Kirim:</h2>";
echo "Nama: $nama <br>";
echo "Jenis Kelamin: $jk <br>";
echo "Hobi:";
foreach ($hobi as $value){
  echo "$value ,";
}
echo "<br>";
echo "IPK: $ipk <br>"; 
echo "Status: $status";


?>