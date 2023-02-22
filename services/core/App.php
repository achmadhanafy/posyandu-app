<?php
ob_start();

class App
{
 protected $controller = 'Landing';
 protected $method = 'index';
 protected $params = [];

 // =========================== CONTAINER APP ======================
 public function __construct()
 {
  $url = $this->parseURL();

  if (isset($url[0])) {
   if (file_exists('../services/controllers/' . $url[0] . '.php')) {
    $this->controller = $url[0];
    unset($url[0]);
   }
  }

  require_once '../services/controllers/' . $this->controller . '.php';
  $this->controller = new $this->controller;

  //method
  if (isset($url[1])) {
   if (method_exists($this->controller, $url[1])) {
    $this->method = $url[1];
    unset($url[1]);
   }
  }

  //params
  if (!empty($url)) {
   $this->params = array_values($url);
  }

  // prevent akses menu without token
  $getUrl = $this->parseURL();
  $token = $this->getCookie('token');
  if ($token == null && $getUrl[0] !== 'landing') {
   echo '<script>window.location = "'.BASEURL.'public/landing"</script>';
  }

  // Validasi token
  if( $token != null){
   $queryGetToken = "SELECT * FROM `tb_user_login` WHERE id = '$token'";
   $resultGetToken = mysqli_query($this->connection(),$queryGetToken);
   $responGetToken = mysqli_fetch_assoc($resultGetToken);
   if($responGetToken == null){
    $this->setCookie('token', '');
    echo '<script>window.location = "'.BASEURL.'public/landing"</script>';
   } else {
    // Get Data user
    $authId = $responGetToken['authId'];
    $queryGetUser = "SELECT * FROM `tb_auth` WHERE id = '$authId'";
    $resultGetUser = mysqli_query($this->connection(),$queryGetUser);
    $responGetUser = mysqli_fetch_assoc($resultGetUser);

    $roleId = $responGetUser['kode_otorisasi']; 
    $queryGetRole = "SELECT * FROM `tb_otorisasi` WHERE id = '$roleId'";
    $resultGetRole = mysqli_query($this->connection(),$queryGetRole);
    $responGetRole = mysqli_fetch_assoc($resultGetRole);
    // Set user data to cookie
    $this->setCookie('name',$responGetUser['nama']);
    $this->setCookie('role',$responGetRole['nama_jabatan']);
    //redirect if access landing when have token
    if( $getUrl[0] === 'landing')
    {
     echo '<script>window.location = "'.BASEURL.'public/pendaftaran"</script>';
    }
   }
   
  }
  

  //Runnig controller & method, serta kirimkan params jika ada
  call_user_func_array([$this->controller, $this->method], $this->params);

  // func logout
  if (isset($_POST['logout'])) {
   $this->setCookie('token', '');
   echo '<script>window.location = "'.BASEURL.'public/landing"</script>';
  }
 }

 // ================================== FUNCTION ========================
 public function parseURL()
 {
  if (isset($_GET['url'])) {
   $url = rtrim($_GET['url'], '/');
   $url = filter_var($url, FILTER_SANITIZE_URL);
   $url = explode('/', $url);
   return $url;
  }
 }

 public function connection()
 {
  $db_host = "localhost";
  $db_user = "root";
  $db_pass = "";
  $db_name = "db_posyandu";
  $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
  if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
  }
  return $conn;
 }

 function setCookie($name, $value)
 {
  $cookie_name = $name;
  $cookie_value = $value;
  setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
 }

 function getCookie($name)
 {
  if (!isset($_COOKIE[$name])) {
   return false;
  } else {
   return $_COOKIE[$name];
  }
 }
}
