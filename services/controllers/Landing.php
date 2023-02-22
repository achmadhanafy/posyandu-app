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
  $resultLogin = null;
  // default form 
  $data['email'] = '';
  $data['password'] = '';

 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Get Auth By Email
  $queryGetAuthByEmail = "SELECT * FROM `tb_auth` WHERE email ='$email'";
  $resultGetAuthByEmail = mysqli_query($this->conn(),$queryGetAuthByEmail);
  $responGetAuthByEmail = mysqli_fetch_assoc($resultGetAuthByEmail);
  
  // Check email exist
  if($responGetAuthByEmail === null){
   $resultLogin = 'Email atau Password salah';
  }

  // Check Password matches
  if(isset($responGetAuthByEmail)){
   $decryptPass = $this->decrypt($responGetAuthByEmail['password']);
   if($decryptPass != $password){
    $resultLogin = 'Email atau Password salah';
   }
  }

  // execute if validation pass
  if ($resultLogin === null){
   $id = uniqid();
   $authId = $responGetAuthByEmail['id'];
   
   // replace authId with newest
   $queryGetLogin = "SELECT * FROM `tb_user_login` WHERE authId = '$authId'";
   $resultGetLogin = mysqli_query($this->conn(),$queryGetLogin);
   $responGetLogin = mysqli_fetch_assoc($resultGetLogin);

   // delete current login
   if(isset($responGetLogin)){
    $queryDeleteLogin = "DELETE FROM `tb_user_login` WHERE authId = '$authId'";
    $resultDeleteLogin = mysqli_query($this->conn(),$queryDeleteLogin);
   }

   // Create token login
   $querySetLogin = "INSERT INTO `tb_user_login`(`id`, `authId`) VALUES ('$id','$authId')";
   $resultSetLogin = mysqli_query($this->conn(),$querySetLogin);
   if (isset($resultSetLogin)){
    $this->setCookie('token',$id);
    header('Location:' . $this->baseurl() . 'public/pendaftaran');
   }
  }
 }

  $data['title'] = 'Halaman Masuk';
  $data['path'] = 'landing';
  $data['setLoginRes'] = $resultLogin;
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
