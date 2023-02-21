<?php

class Landing extends Controller
{
 public function index()
 {
  $data['title'] = 'Selamat Datang';
  $data['path'] = 'landing';
  $this->view('templates/header', $data);
  $this->view('pages/landing/index');
  $this->view('templates/footer', $data);
 }

 public function login($status = '')
 {
  $data['title'] = 'Halaman Masuk';
  $data['path'] = 'landing';
  $data['status'] = $status;
  $this->view('templates/header', $data);
  $this->view('pages/landing/login/index', $data);
  $this->view('templates/footer');
 }

 public function register()
 {
  $result = null;

  // default form 
  $data['nama'] = '';
  $data['email'] = '';
  $data['nik'] = '';
  $data['password'] = '';
  $data['confirmPassword'] = '';
  $data['otorisasi'] = '';

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $id = uniqid();
   $name = $_POST['nama'];
   $email = $_POST['email'];
   $nik = $_POST['nik'];
   $password = $_POST['password'];
   $confirmPassword = $_POST['confirmPassword'];
   $encPass = $this->encrypt($password);
   $otorisasi = $_POST['otorisasiCode'];
   $query = "INSERT INTO `tb_auth` (`id`, `nama`, `email`, `nik`, `password`, `kode_otorisasi`) VALUES ('$id','$name','$email','$nik','$encPass','$otorisasi')";

   // return data to form
   $data['nama'] = $name;
   $data['email'] = $email;
   $data['nik'] = $nik;
   $data['password'] = $password;
   $data['confirmPassword'] = $confirmPassword;
   $data['otorisasi'] = $otorisasi;

  

   // Validasi otorisasi
   $queryGetOtorisasi = "SELECT * FROM `tb_otorisasi` WHERE id = '$otorisasi'";
   $resultValidationOtorisasi = mysqli_query($this->conn(), $queryGetOtorisasi);
   if (mysqli_fetch_assoc($resultValidationOtorisasi) == null) {
    $result = 'Otorisasi Tidak Sesuai!';
   }

   // Validasi unique email and nik
   $queryGetUnique = "SELECT * FROM `tb_auth` WHERE email = '$email' OR nik = '$nik'";
   $resultValidationUnique = mysqli_query($this->conn(), $queryGetUnique);
   if (mysqli_fetch_assoc($resultValidationUnique) != null) {
    $result = 'Email atau NIK sudah terdaftar!';
   }

   // check password matches
   if ($password !== $confirmPassword) {
    $result = 'Password tidak sama!';
   }

   // execute if validation pass
   if ($result == null) {
    $result = mysqli_query($this->conn(), $query);
    if (isset($result)) {
     header('Location:' . $this->baseurl() . 'public/landing/login/registered');
    }
   }
  }
  $data['title'] = 'Halaman Daftar';
  $data['path'] = 'landing';
  $data['setRegisterRes'] = $result;
  $this->view('templates/header', $data);
  $this->view('pages/landing/register/index', $data);
  $this->view('templates/footer');
 }
}
