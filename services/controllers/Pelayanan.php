<?php

class Pelayanan extends Controller
{
  public function index()
  {
    $this->ibuhamil();
  }

  public function balita($action = '', $id = '')
  {
    $data['action'] = $action;
    $data['id'] = $id;
    $data['cari_data'] = '';
    // GET Data Balita By Id
    if (isset($_POST['cari_data'])) {
      $id = $_POST['cari_data'];
      $queryGetBalitaById = "SELECT * FROM `tb_balita` WHERE nik LIKE '$id%' OR nama_anak LIKE '$id%' OR nama_ibu LIKE '$id%'";
      $resultGetBalitaById = mysqli_query($this->conn(), $queryGetBalitaById);
      $data['getBalita'] = $resultGetBalitaById;
      $data['cari_data'] = $_POST['cari_data'];
    } else {
      // Get Data Balita
      $queryGetBalita = "SELECT * FROM `tb_balita` WHERE 1";
      $resultGetBalita = mysqli_query($this->conn(), $queryGetBalita);
      $data['getBalita'] = $resultGetBalita;
    }

    // PATCH Data Balita
    if ($action === 'ubah' && $id !== '') {
      $queryGetBalitaById = "SELECT * FROM `tb_balita` WHERE nik = $id";
      $resultGetBalitaById = mysqli_query($this->conn(), $queryGetBalitaById);
      $dataGetBalitaById = mysqli_fetch_assoc($resultGetBalitaById);


      // Default Form Ubah
      $data['nama_anak'] = $dataGetBalitaById['nama_anak'];
      $data['bb'] = $dataGetBalitaById['bb'];
      $data['tb'] = $dataGetBalitaById['tb'];
      $data['alamat_jalan'] = $dataGetBalitaById['alamat_jalan'];
      $data['alamat_rw'] = $dataGetBalitaById['alamat_rw'];
      $data['alamat_rt'] = $dataGetBalitaById['alamat_rt'];
      $data['alamat_no'] = $dataGetBalitaById['alamant_no'];
      $data['usiaTahun'] = $dataGetBalitaById['usiaTahun'];
      $data['usiaBulan'] = $dataGetBalitaById['usiaBulan'];

      // Patch Data Balita
      if ($_SERVER['REQUEST_METHOD'] === 'POST' && $action === 'ubah') {
        $nama_anak = $_POST['nama_anak'];
        $bb = $_POST['bb'];
        $tb = $_POST['tb'];
        $alamat_jalan = $_POST['alamat_jalan'];
        $alamat_rt = $_POST['alamat_rt'];
        $alamat_rw = $_POST['alamat_rw'];
        $alamat_no = $_POST['alamat_no'];
        $usiaTahun = $_POST['usiaTahun'];
        $usiaBulan = $_POST['usiaBulan'];

        $queryPatchBalita = "UPDATE `tb_balita` SET `nama_anak`='$nama_anak',`bb`='$bb',`tb`='$tb',`usiaTahun`='$usiaTahun',`usiaBulan`='$usiaBulan',`alamat_jalan`='$alamat_jalan',`alamat_rt`='$alamat_rt',`alamat_rw`='$alamat_rw',`alamant_no`='$alamat_no' WHERE nik = $id";
        $resultPatchBalita = mysqli_query($this->conn(), $queryPatchBalita);
        if (isset($resultPatchBalita)) {
          echo '<script>window.location = "' . BASEURL . 'public/pengkinian/balita/patch-success"</script>';
        }
      }
    }

    // DELETE Balita
    if ($action === 'hapus' && $id !== '') {
      $queryDeleteBalita = "DELETE FROM `tb_balita` WHERE nik = $id";
      $resultDeleteBalita = mysqli_query($this->conn(), $queryDeleteBalita);
      if (isset($resultDeleteBalita)) {
        echo '<script>window.location = "' . BASEURL . 'public/pengkinian/balita/delete-success"</script>';
      }
    }

    $data['title'] = 'Halaman Pelayanan';
    $data['path'] = 'pelayanan';
    $this->view('templates/header', $data);
    $this->view('pages/pelayanan/balita/index', $data);
    $this->view('templates/footer');
  }


  public function ibuhamil($action = '', $id = '')
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
      $queryGetPelayanan = "SELECT pelayanan.id, pelayanan.pelayanan, pelayanan.alamat, pelayanan.catatan, pelayanan.tgl_layanan,pelayanan.tipe_pelayanan, COUNT(peserta.id_pelayanan) as total_peserta FROM tb_jadwal_pelyanan as pelayanan LEFT JOIN tb_peserta_layanan as peserta ON pelayanan.id = peserta.id_pelayanan GROUP BY pelayanan.id";
      $resultGetPelayanan = mysqli_query($this->conn(), $queryGetPelayanan);
      $data['getPelayanan'] = $resultGetPelayanan;
    }

    // // PATCH Data Ibu Hamil
    // if ($action === 'ubah' && $id !== '') {
    //   $queryGetIbuHamilById = "SELECT * FROM `tb_ibuhamil` WHERE nik = $id";
    //   $resultGetIbuHamilById = mysqli_query($this->conn(), $queryGetIbuHamilById);
    //   $dataGetIbuHamilById = mysqli_fetch_assoc($resultGetIbuHamilById);


    //   // Default Form Ubah
    //   $data['nama'] = $dataGetIbuHamilById['nama'];
    //   $data['tgl_lahir'] = $dataGetIbuHamilById['tgl_lahir'];
    //   $data['tgl_hpl'] = $dataGetIbuHamilById['tgl_hpl'];
    //   $data['alamat_jalan'] = $dataGetIbuHamilById['alamat_jalan'];
    //   $data['alamat_rt'] = $dataGetIbuHamilById['alamat_rt'];
    //   $data['alamat_rw'] = $dataGetIbuHamilById['alamat_rw'];
    //   $data['alamat_no'] = $dataGetIbuHamilById['alamat_no'];
    //   $data['faskes'] = $dataGetIbuHamilById['faskes'];
    //   $data['no_tlp'] = $dataGetIbuHamilById['no_tlp'];

    //   // Patch Data Ibu Hamil
    //   if ($_SERVER['REQUEST_METHOD'] === 'POST' && $action === 'ubah') {
    //     $nama = $_POST['nama'];
    //     $tgl_lahir = $_POST['tgl_lahir'];
    //     $tgl_hpl = $_POST['tgl_hpl'];
    //     $alamat_jalan = $_POST['alamat_jalan'];
    //     $alamat_rt = $_POST['alamat_rt'];
    //     $alamat_rw = $_POST['alamat_rw'];
    //     $alamat_no = $_POST['alamat_no'];
    //     $faskes = $_POST['faskes'];
    //     $no_tlp = $_POST['no_tlp'];

    //     $queryPatchIbuHamil = "UPDATE `tb_ibuhamil` SET `nama`='$nama',`tgl_lahir`='$tgl_lahir',`tgl_hpl`='$tgl_hpl',`faskes`='$faskes',`alamat_jalan`='$alamat_jalan',`alamat_rt`='$alamat_rt',`alamat_rw`='$alamat_rw',`alamat_no`='$alamat_no',`no_tlp`='$no_tlp' WHERE nik = $id";
    //     $resultPatchIbuHamil = mysqli_query($this->conn(), $queryPatchIbuHamil);
    //     if (isset($resultPatchIbuHamil)) {
    //       echo '<script>window.location = "' . BASEURL . 'public/pengkinian/ibuhamil/patch-success"</script>';
    //     }
    //   }
    // }

    // // DELETE Ibu Hamil
    // if ($action === 'hapus' && $id !== '') {
    //   $queryDeleteIbuHamil = "DELETE FROM `tb_ibuhamil` WHERE nik = $id";
    //   $resultDeleteIbuHamil = mysqli_query($this->conn(), $queryDeleteIbuHamil);
    //   if (isset($resultDeleteIbuHamil)) {
    //     echo '<script>window.location = "' . BASEURL . 'public/pengkinian/ibuhamil/delete-success"</script>';
    //   }
    // }

    $data['title'] = 'Halaman Pelayanan';
    $data['path'] = 'pelayanan';
    $this->view('templates/header', $data);
    $this->view('pages/pelayanan/ibuhamil/index', $data);
    $this->view('templates/footer');
  }

  public function detail($action = '', $id = '')
  {
    $data['action'] = $action;
    $data['id'] = $id;
    $data['cari_data'] = '';
    $data['getPelayananIbuHamil'] = false;
    $data['getPelayananBalita'] = false;
    // GET Data Ibu Hamil By Id
    if (isset($_POST['cari_data'])) {
      $id = $_POST['cari_data'];
      $queryGetIbuHamilById = "SELECT * FROM `tb_ibuhamil` WHERE nik LIKE '$id%' OR nama LIKE '$id%' OR faskes LIKE '$id%'";
      $resultGetIbuHamilById = mysqli_query($this->conn(), $queryGetIbuHamilById);
      $data['getIbuHamil'] = $resultGetIbuHamilById;
      $data['cari_data'] = $_POST['cari_data'];
    } else {
      // Get Data Detail Peserta
      $queryGetPeserta = '';
      if ($action == 'ibuhamil') {
        $queryGetPeserta = "SELECT peserta.id, peserta.nik, ibuhamil.nama, ibuhamil.no_tlp, peserta.no_urut, peserta.status FROM `tb_peserta_layanan` as peserta INNER JOIN `tb_ibuhamil` as ibuhamil ON peserta.nik = ibuhamil.nik WHERE peserta.id_pelayanan = $id ";
        $resultGetPeserta = mysqli_query($this->conn(), $queryGetPeserta);
        $data['getPelayananIbuHamil'] = $resultGetPeserta;
      }
      if ($action == 'balita') {
        $queryGetPeserta = "SELECT peserta.id, peserta.nik, balita.nama_anak as nama, peserta.no_urut, peserta.status FROM `tb_peserta_layanan` as peserta INNER JOIN `tb_balita` as balita ON peserta.nik = balita.nik WHERE peserta.id_pelayanan = $id ";
        $resultGetPeserta = mysqli_query($this->conn(), $queryGetPeserta);
        $data['getPelayananBalita'] = $resultGetPeserta;
      }
    }

    // // PATCH Data Ibu Hamil
    // if ($action === 'ubah' && $id !== '') {
    //   $queryGetIbuHamilById = "SELECT * FROM `tb_ibuhamil` WHERE nik = $id";
    //   $resultGetIbuHamilById = mysqli_query($this->conn(), $queryGetIbuHamilById);
    //   $dataGetIbuHamilById = mysqli_fetch_assoc($resultGetIbuHamilById);


    //   // Default Form Ubah
    //   $data['nama'] = $dataGetIbuHamilById['nama'];
    //   $data['tgl_lahir'] = $dataGetIbuHamilById['tgl_lahir'];
    //   $data['tgl_hpl'] = $dataGetIbuHamilById['tgl_hpl'];
    //   $data['alamat_jalan'] = $dataGetIbuHamilById['alamat_jalan'];
    //   $data['alamat_rt'] = $dataGetIbuHamilById['alamat_rt'];
    //   $data['alamat_rw'] = $dataGetIbuHamilById['alamat_rw'];
    //   $data['alamat_no'] = $dataGetIbuHamilById['alamat_no'];
    //   $data['faskes'] = $dataGetIbuHamilById['faskes'];
    //   $data['no_tlp'] = $dataGetIbuHamilById['no_tlp'];

    //   // Patch Data Ibu Hamil
    //   if ($_SERVER['REQUEST_METHOD'] === 'POST' && $action === 'ubah') {
    //     $nama = $_POST['nama'];
    //     $tgl_lahir = $_POST['tgl_lahir'];
    //     $tgl_hpl = $_POST['tgl_hpl'];
    //     $alamat_jalan = $_POST['alamat_jalan'];
    //     $alamat_rt = $_POST['alamat_rt'];
    //     $alamat_rw = $_POST['alamat_rw'];
    //     $alamat_no = $_POST['alamat_no'];
    //     $faskes = $_POST['faskes'];
    //     $no_tlp = $_POST['no_tlp'];

    //     $queryPatchIbuHamil = "UPDATE `tb_ibuhamil` SET `nama`='$nama',`tgl_lahir`='$tgl_lahir',`tgl_hpl`='$tgl_hpl',`faskes`='$faskes',`alamat_jalan`='$alamat_jalan',`alamat_rt`='$alamat_rt',`alamat_rw`='$alamat_rw',`alamat_no`='$alamat_no',`no_tlp`='$no_tlp' WHERE nik = $id";
    //     $resultPatchIbuHamil = mysqli_query($this->conn(), $queryPatchIbuHamil);
    //     if (isset($resultPatchIbuHamil)) {
    //       echo '<script>window.location = "' . BASEURL . 'public/pengkinian/ibuhamil/patch-success"</script>';
    //     }
    //   }
    // }

    // // DELETE Ibu Hamil
    // if ($action === 'hapus' && $id !== '') {
    //   $queryDeleteIbuHamil = "DELETE FROM `tb_ibuhamil` WHERE nik = $id";
    //   $resultDeleteIbuHamil = mysqli_query($this->conn(), $queryDeleteIbuHamil);
    //   if (isset($resultDeleteIbuHamil)) {
    //     echo '<script>window.location = "' . BASEURL . 'public/pengkinian/ibuhamil/delete-success"</script>';
    //   }
    // }

    $data['title'] = 'Halaman Pelayanan';
    $data['path'] = 'pelayanan';
    $this->view('templates/header', $data);
    $this->view('pages/pelayanan/detail/index', $data);
    $this->view('templates/footer');
  }


  public function inputibuhamil($action = '', $id = '', $idPelayanan = '')
  {
    $data['action'] = $action;
    $data['id'] = $id;
    $data['cari_data'] = '';

    // Default Form Pelayanan
    $data['bb'] = '';
    $data['catatan'] = '';
    $data['resep'] = '';
    $data['usiaHamil'] = '';
    $data['tekananDarah'] = '';
    // GET Data Ibu Hamil By Id
    $queryGetIbuHamil = "SELECT * FROM `tb_ibuhamil` WHERE nik = $action";
    $resultGetIbuHamil = mysqli_query($this->conn(), $queryGetIbuHamil);
    $dataGetIbuHamil = mysqli_fetch_assoc($resultGetIbuHamil);

    $data['nik'] = $dataGetIbuHamil['nik'];
    $data['nama'] = $dataGetIbuHamil['nama'];
    $data['tgl_hpl'] = $dataGetIbuHamil['tgl_hpl'];
    $data['faskes'] = $dataGetIbuHamil['faskes'];

    // FORM SUBMIT
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $bb = $_POST['bb'];
      $catatan = $_POST['catatan'];
      $resep = $_POST['resep'];
      $usiaHamil = $_POST['usiaHamil'];
      $tekananDarah = $_POST['tekananDarah'];

      //Return data to form
      $data['bb'] = $bb;
      $data['catatan'] = $catatan;
      $data['resep'] = $resep;
      $data['usiaHamil'] = $usiaHamil;
      $data['tekananDarah'] = $tekananDarah;

      // POST data to tb_ibuhamil
      $querySetIbuHamil = "INSERT INTO `tb_detail_pelayanan_ibuhamil`(`id_peserta`, `usia_hamil`, `resep`, `catatan`, `tekanan_darah`, `bb`) VALUES ('$id','$usiaHamil','$resep','$catatan','$tekananDarah','$bb')";
      $resultSetIbuHamil = mysqli_query($this->conn(), $querySetIbuHamil);
      // Set form to default if insert success

      if (isset($resultSetIbuHamil)) {
        $qeryUpdateStatusPeserta = "UPDATE `tb_peserta_layanan` SET `status`='Selesai' WHERE id=$id";
        mysqli_query($this->conn(),  $qeryUpdateStatusPeserta);
        echo '<script>window.location = "' . BASEURL . 'public/pelayanan/detail/ibuhamil/' . $idPelayanan . '"</script>';
      }
    }

    // PATCH Data Ibu Hamil
    // if ($action === 'ubah' && $id !== '') {
    //  $queryGetIbuHamilById = "SELECT * FROM `tb_ibuhamil` WHERE nik = $id";
    //  $resultGetIbuHamilById = mysqli_query($this->conn(), $queryGetIbuHamilById);
    //  $dataGetIbuHamilById = mysqli_fetch_assoc($resultGetIbuHamilById);

    //  // Patch Data Ibu Hamil
    //  if ($_SERVER['REQUEST_METHOD'] === 'POST' && $action === 'ubah') {
    //   $nama = $_POST['nama'];
    //   $tgl_lahir = $_POST['tgl_lahir'];
    //   $tgl_hpl = $_POST['tgl_hpl'];
    //   $alamat_jalan = $_POST['alamat_jalan'];
    //   $alamat_rt = $_POST['alamat_rt'];
    //   $alamat_rw = $_POST['alamat_rw'];
    //   $alamat_no = $_POST['alamat_no'];
    //   $faskes = $_POST['faskes'];
    //   $no_tlp = $_POST['no_tlp'];

    //   $queryPatchIbuHamil = "UPDATE `tb_ibuhamil` SET `nama`='$nama',`tgl_lahir`='$tgl_lahir',`tgl_hpl`='$tgl_hpl',`faskes`='$faskes',`alamat_jalan`='$alamat_jalan',`alamat_rt`='$alamat_rt',`alamat_rw`='$alamat_rw',`alamat_no`='$alamat_no',`no_tlp`='$no_tlp' WHERE nik = $id";
    //   $resultPatchIbuHamil = mysqli_query($this->conn(), $queryPatchIbuHamil);
    //   if (isset($resultPatchIbuHamil)) {
    //    echo '<script>window.location = "' . BASEURL . 'public/pengkinian/ibuhamil/patch-success"</script>';
    //   }
    //  }
    // }

    $data['title'] = 'Halaman Pelayanan';
    $data['path'] = 'pelayanan';
    $this->view('templates/header', $data);
    $this->view('pages/pelayanan/inputibuhamil/index', $data);
    $this->view('templates/footer');
  }

  public function inputbalita($action = '', $id = '', $idPelayanan = '')
  {
    $data['action'] = $action;
    $data['id'] = $id;
    $data['cari_data'] = '';

    // Default Form Pelayanan
    $data['bb'] = '';
    $data['tb'] = '';
    $data['catatan'] = '';
    $data['resep'] = '';
    $data['usia'] = '';
    // GET Data Ibu Hamil By Id
    $queryGetIbuHamil = "SELECT * FROM `tb_balita` WHERE nik = $action";
    $resultGetIbuHamil = mysqli_query($this->conn(), $queryGetIbuHamil);
    $dataGetIbuHamil = mysqli_fetch_assoc($resultGetIbuHamil);

    $data['nik'] = $dataGetIbuHamil['nik'];
    $data['nama_anak'] = $dataGetIbuHamil['nama_anak'];
    $data['tgl_lahir'] = $dataGetIbuHamil['tgl_lahir'];
    $data['nama_ayah'] = $dataGetIbuHamil['nama_ayah'];
    $data['nama_ibu'] = $dataGetIbuHamil['nama_ibu'];

    // FORM SUBMIT
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $bb = $_POST['bb'];
      $tb = $_POST['tb'];
      $catatan = $_POST['catatan'];
      $resep = $_POST['resep'];
      $usia = $_POST['usia'];

      //Return data to form
      $data['bb'] = $bb;
      $data['tb'] = $tb;
      $data['catatan'] = $catatan;
      $data['resep'] = $resep;
      $data['usia'] = $usia;

      // POST data to tb_ibuhamil
      $querySetBalita = "INSERT INTO `tb_detail_pelayanan_balita`(`id_peserta`, `bb`, `tb`, `usia`, `catatan`, `resep`) VALUES ('$id','$bb','$tb','$usia','$catatan','$resep')";
      $resultSetBalita = mysqli_query($this->conn(), $querySetBalita);
      // Set form to default if insert success

      if (isset($resultSetBalita)) {
        $qeryUpdateStatusPeserta = "UPDATE `tb_peserta_layanan` SET `status`='Selesai' WHERE id=$id";
        mysqli_query($this->conn(),  $qeryUpdateStatusPeserta);
        echo '<script>window.location = "' . BASEURL . 'public/pelayanan/detail/balita/' . $idPelayanan . '"</script>';
      }
    }

    // PATCH Data Ibu Hamil
    // if ($action === 'ubah' && $id !== '') {
    //  $queryGetIbuHamilById = "SELECT * FROM `tb_ibuhamil` WHERE nik = $id";
    //  $resultGetIbuHamilById = mysqli_query($this->conn(), $queryGetIbuHamilById);
    //  $dataGetIbuHamilById = mysqli_fetch_assoc($resultGetIbuHamilById);

    //  // Patch Data Ibu Hamil
    //  if ($_SERVER['REQUEST_METHOD'] === 'POST' && $action === 'ubah') {
    //   $nama = $_POST['nama'];
    //   $tgl_lahir = $_POST['tgl_lahir'];
    //   $tgl_hpl = $_POST['tgl_hpl'];
    //   $alamat_jalan = $_POST['alamat_jalan'];
    //   $alamat_rt = $_POST['alamat_rt'];
    //   $alamat_rw = $_POST['alamat_rw'];
    //   $alamat_no = $_POST['alamat_no'];
    //   $faskes = $_POST['faskes'];
    //   $no_tlp = $_POST['no_tlp'];

    //   $queryPatchIbuHamil = "UPDATE `tb_ibuhamil` SET `nama`='$nama',`tgl_lahir`='$tgl_lahir',`tgl_hpl`='$tgl_hpl',`faskes`='$faskes',`alamat_jalan`='$alamat_jalan',`alamat_rt`='$alamat_rt',`alamat_rw`='$alamat_rw',`alamat_no`='$alamat_no',`no_tlp`='$no_tlp' WHERE nik = $id";
    //   $resultPatchIbuHamil = mysqli_query($this->conn(), $queryPatchIbuHamil);
    //   if (isset($resultPatchIbuHamil)) {
    //    echo '<script>window.location = "' . BASEURL . 'public/pengkinian/ibuhamil/patch-success"</script>';
    //   }
    //  }
    // }

    $data['title'] = 'Halaman Pelayanan';
    $data['path'] = 'pelayanan';
    $this->view('templates/header', $data);
    $this->view('pages/pelayanan/inputbalita/index', $data);
    $this->view('templates/footer');
  }
}
