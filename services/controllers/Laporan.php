<?php

class Laporan extends Controller {
 public function dataBalita($action ='', $id ='')
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

  $data['title'] = 'Halaman Laporan';
  $data['path'] = 'pendaftaran';
  $this->view('templates/header', $data);
  $this->view('pages/laporan/dataBalita/index', $data);
  $this->view('templates/footer');
 }

 public function dataIbuHamil($action ='', $id ='')
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

  $data['title'] = 'Halaman Laporan';
  $data['path'] = 'pendaftaran';
  $this->view('templates/header', $data);
  $this->view('pages/laporan/dataIbuHamil/index', $data);
  $this->view('templates/footer');
 }

 public function dataPelayananBalita($action ='', $id ='')
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
  $queryGetIbuHamil = "SELECT peserta.id,peserta.nik,balita.nama_anak,peserta.status,balita.usiaTahun,balita.usiaBulan,pelayanan.bb,pelayanan.tb,pelayanan.catatan,pelayanan.resep FROM `tb_detail_pelayanan_balita` as pelayanan INNER JOIN `tb_peserta_layanan` as peserta ON pelayanan.id_peserta = peserta.id INNER JOIN `tb_balita` as balita ON balita.nik = peserta.nik";
  $resultGetIbuHamil = mysqli_query($this->conn(), $queryGetIbuHamil);
  $data['getIbuHamil'] = $resultGetIbuHamil;
  }

  $data['title'] = 'Halaman Laporan';
  $data['path'] = 'pendaftaran';
  $this->view('templates/header', $data);
  $this->view('pages/laporan/dataPelayananBalita/index', $data);
  $this->view('templates/footer');
 }

 public function dataPelayananibuHamil($action ='', $id ='')
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
  $queryGetIbuHamil = "SELECT peserta.id,peserta.nik,ibuhamil.nama,ibuhamil.no_tlp,peserta.status,pelayanan.catatan,pelayanan.resep,pelayanan.tekanan_darah,pelayanan.usia_hamil,pelayanan.bb FROM `tb_detail_pelayanan_ibuhamil` as pelayanan INNER JOIN `tb_peserta_layanan` as peserta ON pelayanan.id_peserta = peserta.id INNER JOIN `tb_ibuhamil` as ibuhamil ON peserta.nik = ibuhamil.nik";
  $resultGetIbuHamil = mysqli_query($this->conn(), $queryGetIbuHamil);
  $data['getIbuHamil'] = $resultGetIbuHamil;
  }

  $data['title'] = 'Halaman Laporan';
  $data['path'] = 'pendaftaran';
  $this->view('templates/header', $data);
  $this->view('pages/laporan/dataPelayananIbuHamil/index', $data);
  $this->view('templates/footer');
 }

 public function dataImunisasi($action ='', $id ='')
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
  $queryGetIbuHamil = "SELECT peserta.id,peserta.nik,ibuhamil.nama,ibuhamil.no_tlp,peserta.status,pelayanan.catatan,pelayanan.resep,pelayanan.tekanan_darah,pelayanan.usia_hamil,pelayanan.bb FROM `tb_detail_pelayanan_ibuhamil` as pelayanan INNER JOIN `tb_peserta_layanan` as peserta ON pelayanan.id_peserta = peserta.id INNER JOIN `tb_ibuhamil` as ibuhamil ON peserta.nik = ibuhamil.nik";
  $resultGetIbuHamil = mysqli_query($this->conn(), $queryGetIbuHamil);
  $data['getIbuHamil'] = $resultGetIbuHamil;
  }

  $data['title'] = 'Halaman Laporan';
  $data['path'] = 'pendaftaran';
  $this->view('templates/header', $data);
  $this->view('pages/laporan/dataImunisasi/index', $data);
  $this->view('templates/footer');
 }
}