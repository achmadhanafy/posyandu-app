<?php

class Pendaftaran extends Controller
{
 public function index()
 {
  $data['title'] = 'Halaman Pendaftaran';
  $data['path'] = 'pendaftaran';
  $this->view('templates/header', $data);
  $this->view('pages/pendaftaran/index');
  $this->view('templates/footer');
 }
 public function balita()
 {
  $data['title'] = 'Halaman Pendaftaran';
  $data['path'] = 'pendaftaran';
  $this->view('templates/header', $data);
  $this->view('pages/pendaftaran/balita/index');
  $this->view('templates/footer');
 }
 public function ibuhamil()
 {
  $data['title'] = 'Halaman Pendaftaran';
  $data['path'] = 'pendaftaran';
  $this->view('templates/header', $data);
  $this->view('pages/pendaftaran/ibuhamil/index');
  $this->view('templates/footer');
 }
}
