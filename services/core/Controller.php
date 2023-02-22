<?php

class Controller
{
    public function view($view, $data = [])
    {
        require_once '../src/' . $view . '.php';
    }

    public function conn()
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

    public function baseurl()
    {
        return BASEURL;
    }

    function encrypt($data)
    {
        $encryption_key = base64_decode(SALT);
        $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
        $encrypted = openssl_encrypt(
            $data,
            'aes-256-cbc',
            $encryption_key,
            0,
            $iv
        );
        return base64_encode($encrypted . '::' . $iv);
    }

    function decrypt($data)
    {
        $encryption_key = base64_decode(SALT);
        list($encrypted_data, $iv) = array_pad(explode(
            '::',
            base64_decode($data),
            2
        ), 2, null);
        return openssl_decrypt(
            $encrypted_data,
            'aes-256-cbc',
            $encryption_key,
            0,
            $iv
        );
    }

    function setCookie($name, $value)
    {
        $cookie_name = $name;
        $cookie_value = $value;
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
    }

    function getCookie($name)
    {
        if (!isset($_COOKIE[$$name])) {
            return false;
        } else {
            return $_COOKIE[$cookie_name];
        }
    }
}
