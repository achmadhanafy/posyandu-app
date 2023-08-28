<?php

use Dompdf\Dompdf;
use Dompdf\Options;

class Controller
{
    public function view($view, $data = [])
    {
        require_once '../src/' . $view . '.php';
    }

    public function dompdf($data, $path)
    {
        require_once '../src/lib/dompdf/autoload.inc.php';
        $options = new Options();
        $options->set('isPhpEnabled', true);
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isRemoteEnabled', true);
        $dompdf = new Dompdf($options);

        // Start buffering output
        ob_start();

        // Include the PHP and HTML content
        include '../src/'.$path; // This file contains your PHP code and HTML

        // Get the content from the buffer
        $html = ob_get_clean();

        // Convert HTML to PDF
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape'); // You can set the paper size and orientation here

        // Render the PDF
        $dompdf->render();

        // Output the PDF as a downloadable file
        $dompdf->stream('pdf_output.pdf', array('Attachment' => 0));
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
