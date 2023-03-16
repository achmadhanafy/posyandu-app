<?php

class Pendaftaran extends Controller
{
 public function index()
 {
  $this->balita();
 }
 public function balita()
 {
  //Default form
  $data['namaIbu'] = '';
  $data['namaAyah'] = '';
  $data['jalan'] = '';
  $data['rt'] = '';
  $data['rw'] = '';
  $data['no'] = '';
  $data['nik'] = '';
  $data['namaAnak'] = '';
  $data['tanggalLahir'] = '';
  $data['usiaTahun'] = '';
  $data['usiaBulan'] = '';
  $data['bb'] = '';
  $data['tb'] = '';

  $data['setBalita'] = '';

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $namaIbu = $_POST['namaIbu'];
   $namaAyah = $_POST['namaAyah'];
   $jalan = $_POST['jalan'];
   $rt = $_POST['rt'];
   $rw = $_POST['rw'];
   $no = $_POST['no'];
   $nik = $_POST['nik'];
   $namaAnak = $_POST['namaAnak'];
   $tanggalLahir = $_POST['tanggalLahir'];
   $usiaTahun = $_POST['usiaTahun'];
   $usiaBulan = $_POST['usiaBulan'];
   $bb = $_POST['bb'];
   $tb = $_POST['tb'];

   //Return data to form
   $data['namaIbu'] = $namaIbu;
   $data['namaAyah'] = $namaAyah;
   $data['jalan'] = $jalan;
   $data['rt'] = $rt;
   $data['rw'] = $rw;
   $data['no'] = $no;
   $data['nik'] = $nik;
   $data['namaAnak'] = $namaAnak;
   $data['tanggalLahir'] = $tanggalLahir;
   $data['usiaTahun'] = $usiaTahun;
   $data['usiaBulan'] = $usiaBulan;
   $data['bb'] = $bb;
   $data['tb'] = $tb;

   // Post form data to tb_balita
   $querySetBalita = "INSERT INTO `tb_balita`(`nik`, `nama_anak`, `tgl_lahir`, `usiaTahun`, `usiaBulan`, `bb`, `tb`, `nama_ayah`, `nama_ibu`, `alamat_jalan`, `alamat_rt`, `alamat_rw`, `alamant_no`) VALUES ('$nik','$namaAnak','$tanggalLahir','$usiaTahun','$usiaBulan','$bb','$tb','$namaAyah','$namaIbu','$jalan','$rt','$rw','$no')";
   $resultSetBalita = mysqli_query($this->conn(), $querySetBalita);

   if (isset($resultSetBalita)) {
    $data['setBalita'] = 'success';
    // empty form
    $data['namaIbu'] = '';
    $data['namaAyah'] = '';
    $data['jalan'] = '';
    $data['rt'] = '';
    $data['rw'] = '';
    $data['no'] = '';
    $data['nik'] = '';
    $data['namaAnak'] = '';
    $data['tanggalLahir'] = '';
    $data['usiaTahun'] = '';
    $data['usiaBulan'] = '';
    $data['bb'] = '';
    $data['tb'] = '';
   }
  }


  $data['title'] = 'Halaman Pendaftaran';
  $data['path'] = 'pendaftaran';
  $this->view('templates/header', $data);
  $this->view('pages/pendaftaran/balita/index', $data);
  $this->view('templates/footer');
 }
 public function ibuhamil()
 {
  //Default form
  $data['nik'] = '';
  $data['no_kk'] = '';
  $data['nama'] = '';
  $data['tgl_lahir'] = '';
  $data['tgl_hpl'] = '';
  $data['faskes'] = '';
  $data['alamat_jalan'] = '';
  $data['alamat_rt'] = '';
  $data['alamat_rw'] = '';
  $data['alamat_no'] = '';
  $data['nama_suami'] = '';
  $data['no_tlp'] = '';

  $data['setIbuHamil'] = '';

  // FORM SUBMIT
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $nik = $_POST['nik'];
   $no_kk = $_POST['no_kk'];
   $nama = $_POST['nama'];
   $tgl_lahir = $_POST['tgl_lahir'];
   $tgl_hpl = $_POST['tgl_hpl'];
   $faskes = $_POST['faskes'];
   $alamat_jalan = $_POST['alamat_jalan'];
   $alamat_rt = $_POST['alamat_rt'];
   $alamat_rw = $_POST['alamat_rw'];
   $alamat_no = $_POST['alamat_no'];
   $nama_suami = $_POST['nama_suami'];
   $no_tlp = $_POST['no_tlp'];

   //Return data to form
   $data['nik'] = $nik;
   $data['no_kk'] = $no_kk;
   $data['nama'] = $nama;
   $data['tgl_lahir'] = $tgl_lahir;
   $data['tgl_hpl'] = $tgl_hpl;
   $data['faskes'] = $faskes;
   $data['alamat_jalan'] = $alamat_jalan;
   $data['alamat_rt'] = $alamat_rt;
   $data['alamat_rw'] = $alamat_rw;
   $data['alamat_no'] = $alamat_no;
   $data['nama_suami'] = $nama_suami;
   $data['no_tlp'] = $no_tlp;

   // POST data to tb_ibuhamil
   $querySetIbuHamil = "INSERT INTO `tb_ibuhamil`(`nik`, `no_kk`, `nama`, `tgl_lahir`, `tgl_hpl`, `faskes`, `alamat_jalan`, `alamat_rt`, `alamat_rw`, `alamat_no`, `nama_suami`, `no_tlp`) VALUES ('$nik','$no_kk','$nama','$tgl_lahir','$tgl_hpl','$faskes','$alamat_jalan','$alamat_rt','$alamat_rw','$alamat_no','$nama_suami','$no_tlp')";
   $resultSetIbuHamil = mysqli_query($this->conn(), $querySetIbuHamil);
   var_dump($querySetIbuHamil);
   // Set form to default if insert success
   if (isset($resultSetIbuHamil)) {
    $data['setIbuHamil'] = 'success';
    $data['nik'] = '';
    $data['no_kk'] = '';
    $data['nama'] = '';
    $data['tgl_lahir'] = '';
    $data['tgl_hpl'] = '';
    $data['faskes'] = '';
    $data['alamat_jalan'] = '';
    $data['alamat_rt'] = '';
    $data['alamat_rw'] = '';
    $data['alamat_no'] = '';
    $data['nama_suami'] = '';
    $data['no_tlp'] = '';
   }
  }

  $data['title'] = 'Halaman Pendaftaran';
  $data['path'] = 'pendaftaran';
  $this->view('templates/header', $data);
  $this->view('pages/pendaftaran/ibuhamil/index', $data);
  $this->view('templates/footer');
 }
}
