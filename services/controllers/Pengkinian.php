<?php

class Pengkinian extends Controller
{
 public function index($action = '', $id = '')
 {
  $this->ibuhamil();
 }

 public function ibuhamil($action = '', $id = '')
 {
  $data['action'] = $action;
  $data['id'] = $id;
  $data['cari_data'] = '';
  // GET Data Ibu Hamil By Id
  if(isset($_POST['cari_data'])){
   $id = $_POST['cari_data'];
   $queryGetIbuHamilById = "SELECT * FROM `tb_ibuhamil` WHERE nik LIKE '$id%' OR nama LIKE '$id%' OR faskes LIKE '$id%'";
   $resultGetIbuHamilById = mysqli_query($this->conn(), $queryGetIbuHamilById);
   $data['getIbuHamil'] = $resultGetIbuHamilById;
   $data['cari_data'] = $_POST['cari_data'];
  } else {
  // Get Data Ibu Hamil
  $queryGetIbuHamil = "SELECT * FROM `tb_ibuhamil` WHERE 1";
  $resultGetIbuHamil = mysqli_query($this->conn(), $queryGetIbuHamil);
  $data['getIbuHamil'] = $resultGetIbuHamil;
  }

  // PATCH Data Ibu Hamil
  if ($action === 'ubah' && $id !== '') {
   $queryGetIbuHamilById = "SELECT * FROM `tb_ibuhamil` WHERE nik = $id";
   $resultGetIbuHamilById = mysqli_query($this->conn(), $queryGetIbuHamilById);
   $dataGetIbuHamilById = mysqli_fetch_assoc($resultGetIbuHamilById);


   // Default Form Ubah
   $data['nama'] = $dataGetIbuHamilById['nama'];
   $data['tgl_lahir'] = $dataGetIbuHamilById['tgl_lahir'];
   $data['tgl_hpl'] = $dataGetIbuHamilById['tgl_hpl'];
   $data['alamat_jalan'] = $dataGetIbuHamilById['alamat_jalan'];
   $data['alamat_rt'] = $dataGetIbuHamilById['alamat_rt'];
   $data['alamat_rw'] = $dataGetIbuHamilById['alamat_rw'];
   $data['alamat_no'] = $dataGetIbuHamilById['alamat_no'];
   $data['faskes'] = $dataGetIbuHamilById['faskes'];
   $data['no_tlp'] = $dataGetIbuHamilById['no_tlp'];

   // Patch Data Ibu Hamil
   if($_SERVER['REQUEST_METHOD'] === 'POST' && $action === 'ubah'){
    $nama = $_POST['nama'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $tgl_hpl = $_POST['tgl_hpl'];
    $alamat_jalan = $_POST['alamat_jalan'];
    $alamat_rt = $_POST['alamat_rt'];
    $alamat_rw = $_POST['alamat_rw'];
    $alamat_no = $_POST['alamat_no'];
    $faskes = $_POST['faskes'];
    $no_tlp = $_POST['no_tlp'];

    $queryPatchIbuHamil = "UPDATE `tb_ibuhamil` SET `nama`='$nama',`tgl_lahir`='$tgl_lahir',`tgl_hpl`='$tgl_hpl',`faskes`='$faskes',`alamat_jalan`='$alamat_jalan',`alamat_rt`='$alamat_rt',`alamat_rw`='$alamat_rw',`alamat_no`='$alamat_no',`no_tlp`='$no_tlp' WHERE nik = $id";
    $resultPatchIbuHamil = mysqli_query($this->conn(),$queryPatchIbuHamil);
    if(isset($resultPatchIbuHamil)){
     echo '<script>window.location = "' . BASEURL . 'public/pengkinian/ibuhamil/patch-success"</script>';
    }
   }
  }

  // DELETE Ibu Hamil
  if($action === 'hapus' && $id !== ''){
   $queryDeleteIbuHamil = "DELETE FROM `tb_ibuhamil` WHERE nik = $id";
   $resultDeleteIbuHamil = mysqli_query($this->conn(),$queryDeleteIbuHamil);
   if(isset($resultDeleteIbuHamil)){
    echo '<script>window.location = "' . BASEURL . 'public/pengkinian/ibuhamil/delete-success"</script>';
   }
  }

  $data['title'] = 'Halaman Pelayanan';
  $data['path'] = 'pelayanan';
  $this->view('templates/header', $data);
  $this->view('pages/pengkinian/ibuhamil/index', $data);
  $this->view('templates/footer');
 }

 public function balita($action = '', $id = '')
 {
  $data['action'] = $action;
  $data['id'] = $id;
  $data['cari_data'] = '';
  // GET Data Balita By Id
  if(isset($_POST['cari_data'])){
   $id = $_POST['cari_data'];
   $queryGetBalitaById = "SELECT * FROM `tb_balita` WHERE nik LIKE '$id%' OR nama_anak LIKE '$id%' OR nama_ibu LIKE '$id%'";
   $resultGetBalitaById = mysqli_query($this->conn(), $queryGetBalitaById);
   $data['getBalita'] = $resultGetBalitaById;
   $data['cari_data'] = $_POST['cari_data'];
  } else {
  // Get Data Balita
  $queryGetBalita = "SELECT * FROM `tb_balita` WHERE 1";
  $resultGetBalita = mysqli_query($this->conn(), $queryGetBalita);
  $data['getBalita'] = $resultGetBalita;
  }

  // PATCH Data Balita
  if ($action === 'ubah' && $id !== '') {
   $queryGetBalitaById = "SELECT * FROM `tb_balita` WHERE nik = $id";
   $resultGetBalitaById = mysqli_query($this->conn(), $queryGetBalitaById);
   $dataGetBalitaById = mysqli_fetch_assoc($resultGetBalitaById);


   // Default Form Ubah
   $data['nama_anak'] = $dataGetBalitaById['nama_anak'];
   $data['bb'] = $dataGetBalitaById['bb'];
   $data['tb'] = $dataGetBalitaById['tb'];
   $data['alamat_jalan'] = $dataGetBalitaById['alamat_jalan'];
   $data['alamat_rw'] = $dataGetBalitaById['alamat_rw'];
   $data['alamat_rt'] = $dataGetBalitaById['alamat_rt'];
   $data['alamat_no'] = $dataGetBalitaById['alamant_no'];
   $data['usiaTahun'] = $dataGetBalitaById['usiaTahun'];
   $data['usiaBulan'] = $dataGetBalitaById['usiaBulan'];

   // Patch Data Balita
   if($_SERVER['REQUEST_METHOD'] === 'POST' && $action === 'ubah'){
    $nama_anak = $_POST['nama_anak'];
    $bb = $_POST['bb'];
    $tb = $_POST['tb'];
    $alamat_jalan = $_POST['alamat_jalan'];
    $alamat_rt = $_POST['alamat_rt'];
    $alamat_rw = $_POST['alamat_rw'];
    $alamat_no = $_POST['alamat_no'];
    $usiaTahun = $_POST['usiaTahun'];
    $usiaBulan = $_POST['usiaBulan'];

    $queryPatchBalita = "UPDATE `tb_balita` SET `nama_anak`='$nama_anak',`bb`='$bb',`tb`='$tb',`usiaTahun`='$usiaTahun',`usiaBulan`='$usiaBulan',`alamat_jalan`='$alamat_jalan',`alamat_rt`='$alamat_rt',`alamat_rw`='$alamat_rw',`alamant_no`='$alamat_no' WHERE nik = $id";
    $resultPatchBalita = mysqli_query($this->conn(),$queryPatchBalita);
    if(isset($resultPatchBalita)){
     echo '<script>window.location = "' . BASEURL . 'public/pengkinian/balita/patch-success"</script>';
    }
   }
  }

  // DELETE Balita
  if($action === 'hapus' && $id !== ''){
   $queryDeleteBalita = "DELETE FROM `tb_balita` WHERE nik = $id";
   $resultDeleteBalita = mysqli_query($this->conn(),$queryDeleteBalita);
   if(isset($resultDeleteBalita)){
    echo '<script>window.location = "' . BASEURL . 'public/pengkinian/balita/delete-success"</script>';
   }
  }

  $data['title'] = 'Halaman Pelayanan';
  $data['path'] = 'pelayanan';
  $this->view('templates/header', $data);
  $this->view('pages/pengkinian/balita/index', $data);
  $this->view('templates/footer');
 }
}
