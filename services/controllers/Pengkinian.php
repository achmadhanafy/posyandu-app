<?php

class Pengkinian extends Controller
{
 public function index()
 {
  $data['title'] = 'Halaman Pelayanan';
  $data['path'] = 'pelayanan';
  $this->view('templates/header', $data);
  $this->view('pages/pengkinian/index');
  $this->view('templates/footer');
 }
}