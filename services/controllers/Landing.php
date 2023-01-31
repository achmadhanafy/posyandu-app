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

 public function login(){
  $data['title'] = 'Halaman Login';
  $data['path'] = 'landing';
  $this->view('templates/header', $data);
  $this->view('pages/landing/login/index');
  $this->view('templates/footer');
 }
}
