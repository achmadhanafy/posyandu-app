<?php

class Pelayanan extends Controller
{
 public function index()
 {
  $data['title'] = 'Halaman Pelayanan';
  $data['path'] = 'pelayanan';
  $this->view('templates/header', $data);
  $this->view('pages/pelayanan/index');
  $this->view('templates/footer');
 }
 public function balita()
 {
  $data['title'] = 'Halaman Pendaftaran';
  $data['path'] = 'pendaftaran';
  $this->view('templates/header', $data);
  $this->view('pages/pelayanan/balita/index');
  $this->view('templates/footer');
 }
 public function ibuhamil()
 {
  $data['title'] = 'Halaman Pendaftaran';
  $data['path'] = 'pendaftaran';
  $this->view('templates/header', $data);
  $this->view('pages/pelayanan/ibuhamil/index');
  $this->view('templates/footer');
 }
}
