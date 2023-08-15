<?php

class Imunisasi extends Controller
{
 public function index($action = '', $id = '')
 {
  $data['action'] = $action;
  $data['id'] = $id;
  $data['cari_data'] = '';
  // GET Data Ibu Hamil By Id
  if (isset($_POST['cari_data'])) {
   $id = $_POST['cari_data'];
   $queryGetIbuHamilById = "SELECT * FROM `tb_ibuhamil` WHERE nik LIKE '$id%' OR nama LIKE '$id%' OR faskes LIKE '$id%'";
   $resultGetIbuHamilById = mysqli_query($this->conn(), $queryGetIbuHamilById);
   $data['getIbuHamil'] = $resultGetIbuHamilById;
   $data['cari_data'] = $_POST['cari_data'];
  } else {
   // Get Data Pelayanan
   $queryGetBalita = "SELECT * FROM `tb_balita` WHERE 1";
   $resultGetBalita = mysqli_query($this->conn(), $queryGetBalita);
   $data['getBalita'] = $resultGetBalita;
  }

  // // PATCH Data Ibu Hamil
  // if ($action === 'ubah' && $id !== '') {
  //   $queryGetIbuHamilById = "SELECT * FROM `tb_ibuhamil` WHERE nik = $id";
  //   $resultGetIbuHamilById = mysqli_query($this->conn(), $queryGetIbuHamilById);
  //   $dataGetIbuHamilById = mysqli_fetch_assoc($resultGetIbuHamilById);


  //   // Default Form Ubah
  //   $data['nama'] = $dataGetIbuHamilById['nama'];
  //   $data['tgl_lahir'] = $dataGetIbuHamilById['tgl_lahir'];
  //   $data['tgl_hpl'] = $dataGetIbuHamilById['tgl_hpl'];
  //   $data['alamat_jalan'] = $dataGetIbuHamilById['alamat_jalan'];
  //   $data['alamat_rt'] = $dataGetIbuHamilById['alamat_rt'];
  //   $data['alamat_rw'] = $dataGetIbuHamilById['alamat_rw'];
  //   $data['alamat_no'] = $dataGetIbuHamilById['alamat_no'];
  //   $data['faskes'] = $dataGetIbuHamilById['faskes'];
  //   $data['no_tlp'] = $dataGetIbuHamilById['no_tlp'];

  //   // Patch Data Ibu Hamil
  //   if ($_SERVER['REQUEST_METHOD'] === 'POST' && $action === 'ubah') {
  //     $nama = $_POST['nama'];
  //     $tgl_lahir = $_POST['tgl_lahir'];
  //     $tgl_hpl = $_POST['tgl_hpl'];
  //     $alamat_jalan = $_POST['alamat_jalan'];
  //     $alamat_rt = $_POST['alamat_rt'];
  //     $alamat_rw = $_POST['alamat_rw'];
  //     $alamat_no = $_POST['alamat_no'];
  //     $faskes = $_POST['faskes'];
  //     $no_tlp = $_POST['no_tlp'];

  //     $queryPatchIbuHamil = "UPDATE `tb_ibuhamil` SET `nama`='$nama',`tgl_lahir`='$tgl_lahir',`tgl_hpl`='$tgl_hpl',`faskes`='$faskes',`alamat_jalan`='$alamat_jalan',`alamat_rt`='$alamat_rt',`alamat_rw`='$alamat_rw',`alamat_no`='$alamat_no',`no_tlp`='$no_tlp' WHERE nik = $id";
  //     $resultPatchIbuHamil = mysqli_query($this->conn(), $queryPatchIbuHamil);
  //     if (isset($resultPatchIbuHamil)) {
  //       echo '<script>window.location = "' . BASEURL . 'public/pengkinian/ibuhamil/patch-success"</script>';
  //     }
  //   }
  // }

  // // DELETE Ibu Hamil
  // if ($action === 'hapus' && $id !== '') {
  //   $queryDeleteIbuHamil = "DELETE FROM `tb_ibuhamil` WHERE nik = $id";
  //   $resultDeleteIbuHamil = mysqli_query($this->conn(), $queryDeleteIbuHamil);
  //   if (isset($resultDeleteIbuHamil)) {
  //     echo '<script>window.location = "' . BASEURL . 'public/pengkinian/ibuhamil/delete-success"</script>';
  //   }
  // }

  $data['title'] = 'Halaman Pelayanan';
  $data['path'] = 'pelayanan';
  $this->view('templates/header', $data);
  $this->view('pages/imunisasi/index', $data);
  $this->view('templates/footer');
 }

 public function detail($action = '', $id = '')
 {
  $data['action'] = $action;
  $data['id'] = $id;
  $data['cari_data'] = '';
  // GET Data Ibu Hamil By Id
  if (isset($_POST['cari_data'])) {
   $id = $_POST['cari_data'];
   $queryGetIbuHamilById = "SELECT * FROM `tb_ibuhamil` WHERE nik LIKE '$id%' OR nama LIKE '$id%' OR faskes LIKE '$id%'";
   $resultGetIbuHamilById = mysqli_query($this->conn(), $queryGetIbuHamilById);
   $data['getIbuHamil'] = $resultGetIbuHamilById;
   $data['cari_data'] = $_POST['cari_data'];
  } else {
   // Get Data Pelayanan
   $queryGetImunisasi = "SELECT imunisasi.id, imunisasi.nik,balita.nama_anak,imunisasi.imunisasi,imunisasi.catatan,imunisasi.tgl,imunisasi.bb,imunisasi.tb FROM `tb_imunisasi` as imunisasi INNER JOIN `tb_balita` as balita ON imunisasi.nik = balita.nik WHERE imunisasi.nik = '$action'";
   $resultGetImunisasi = mysqli_query($this->conn(), $queryGetImunisasi);
   $data['getImunisasi'] = $resultGetImunisasi;
  }

  $data['title'] = 'Halaman Pelayanan';
  $data['path'] = 'pelayanan';
  $this->view('templates/header', $data);
  $this->view('pages/imunisasi/detail/index', $data);
  $this->view('templates/footer');
 }

 public function tambah($nik ='', $nama ='')
 {
  //Default form
  $data['nik'] = '';
  $data['imunisasi'] = '';
  $data['catatan'] = '';
  $data['tgl'] = '';
  $data['bb'] = '';
  $data['tb'] = '';
  $data['nik'] = $nik;
  $data['nama'] = $nama;

  $data['setImunisasi'] = '';

  // FORM SUBMIT
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $imunisasi = $_POST['imunisasi'];
   $catatan = $_POST['catatan'];
   $tgl= $_POST['tgl'];
   $bb = $_POST['bb'];
   $tb = $_POST['tb'];

   //Return data to form
   $data['imunisasi'] = $imunisasi;
   $data['nama'] = $catatan;
   $data['tgl'] = $tgl;
   $data['bb'] = $bb;
   $data['tb'] = $tb;

   // POST data to imunisasi
   $querySetImunisasi = "INSERT INTO `tb_imunisasi`(`nik`, `imunisasi`, `catatan`, `tgl`, `bb`, `tb`) VALUES ('$nik','$imunisasi','$catatan','$tgl','$bb','$tb')";
   $resultSetImunisasi = mysqli_query($this->conn(), $querySetImunisasi);
   // Set form to default if insert success
   if (isset($resultSetImunisasi)) {
    $data['setImunisasi'] = 'success';
    $data['imunisasi'] = '';
    $data['catatan'] = '';
    $data['tgl'] = '';
    $data['bb'] = '';
    $data['tb'] = '';
   }
  }

  $data['title'] = 'Halaman Pendaftaran';
  $data['path'] = 'pendaftaran';
  $this->view('templates/header', $data);
  $this->view('pages/imunisasi/tambah/index', $data);
  $this->view('templates/footer');
 }
}
