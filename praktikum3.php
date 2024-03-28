<?php
include_once 'header.php';
include_once 'sidebar.php';
?>

<!-- main.php/index.php -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Praktikum</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Praktikum 3</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
              <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<h3>Formulir Data Nilai Mahasiswa</h3>
<form method="GET" action="#">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="pemweb">PemWeb</option>
        <option value="uiux">UI/UX</option>
        <option value="ddp">DDP</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="nilai_uts" name="nilai_uts" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="nilai_uas" name="nilai_uas" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
    <div class="col-8">
      <input id="nilai_tugas" name="nilai_tugas" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

<?php
$nama = $_GET['nama'];
$matkul = $_GET['matkul'];
$nilai_uts = $_GET['nilai_uts'];
$nilai_uas = $_GET['nilai_uas'];
$nilai_tugas = $_GET['nilai_tugas'];

//Buat Total Nilai
//nilai_uts + nilai_uas + nilai_tugas : 3
$rata_nilai = ($nilai_uts + $nilai_uas + $nilai_tugas) / 3;

//Buat Perhitungan IF untuk mencari Grade
if ($rata_nilai >= 85){
    $grade = "A";
}
elseif ($rata_nilai >= 70){
    $grade = "B";
}
elseif ($rata_nilai >= 56){
    $grade = "C";
}
elseif ($rata_nilai >= 36){
    $grade = "D";
}
else {
    $grade = "E";
}

//Buat perhitungan SWITCH Case untuk mencari predikat
switch ($grade){
    case "A":
        $predikat = "Sangat Memuaskan";
        break;
    case "B":
        $predikat = "Memuaskan";
        break;
    case "C":
        $predikat = "Cukup";
        break; 
    case "D":
        $predikat = "Kurang";
        break;
    case "E":
        $predikat = "Sangat Kurang";
        break;
default:
        
}

//Buat perhitungan IF untuk mencari lulus/gagal
if ($rata_nilai >= 70){
    $status = "LULUS";
}
else {
    $status = "GAGAL";
}

//Cetak Hasil
echo 'Nama: '. $nama;
echo '<br> Mata Kuliah: '. $matkul;
echo '<br> Nilai UTS: '. $nilai_uts;
echo '<br> Nilai UAS: '. $nilai_uas;
echo '<br> Nilai Tugas: '. $nilai_tugas;
echo '<br> Rata - Rata Nilai: '. $rata_nilai;
echo '<br> Grade: '. $grade;
echo '<br> Predikat: '. $predikat;
echo '<br> Status Kelulusan: '. $status;
?>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
              Ini Hasil Praktikum 3
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  
<?php
include_once 'footer.php';
?>
