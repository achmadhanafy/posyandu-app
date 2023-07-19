<div class="flex">
  <!-- Sidebar -->
  <?php
  include '../src/components/sidebar.php'
  ?>
  <div class="flex ml-5 flex-col justify-center items-center w-full">
    <div style="width: 100%;" class="mr-5">
      <div class="text-2xl mb-8 font-header font-semibold text-secondary-30">
        Pelayanan Posyandu
      </div>
      <div style="width: 100%;" class="border-2 border-secondary-40 rounded-lg p-5">
        <!-- <?php if ($data['setIbuHamil'] === 'success') : ?>
          <div class="bg-secondary-10 font-semibold mb-8 p-1 text-secondary-40 pl-5 mt-2 rounded-md">
            Data Ibu Hamil Berhasil dimasukan
          </div>
        <?php endif; ?> -->
        <div class="font-semibold text-xl mb-3 text-secondary-40 text-center">Peserta Pelayanan</div>
        <?php if ($data['action'] === 'patch-success') : ?>
          <div class="bg-secondary-10 px-3 py-2 my-5 rounded-lg font-semibold text-secondary-40" style="width:fit-content">
            Data berhasil diperbarui
          </div>
        <?php endif; ?>
        <?php if ($data['action'] === 'delete-success') : ?>
          <div style="background-color: rgb(220 38 38); width:fit-content" class="px-3 py-2 my-5 rounded-lg font-semibold text-white">
            Data berhasil dihapus
          </div>
        <?php endif; ?>
        <?php if ($data['action'] !== 'ubah') : ?>
          <form method="post">
            <div class="flex justify-end items-end mb-5">
              <?php
              $label = 'Masukan nik/nama/faskes';
              $id = 'cari_data';
              $value = $data['cari_data'];
              $class = 'text-secondary-40 font-semibold mt-2';
              include '../src/components/input.php'
              ?>
              <?php
              $label = 'Cari';
              $onClick = "";
              $class = 'font-semibold mt-5 ml-5';
              $style = 'width:100px; justify-self:center;height:40px';
              $type = 'submit';
              include '../src/components/button.php'
              ?>
            </div>
          </form>
        <?php endif; ?>

        <?php if ($data['getPelayananIbuHamil'] !== false) : ?>
          <?php
          $id = $data['id'];
          $headerData = array('ID Peserta','NIK', 'Nama', 'No Telephone', 'No Urut', 'Status', 'Action');
          $rowData = $data['getPelayananIbuHamil'];
          include '../src/components/pelayanan/tableDetailPeserta.php'
          ?>
        <?php endif; ?>
        <?php if ($data['getPelayananBalita'] !== false) : ?>
          <?php
          $id = $data['id'];
          $headerData = array('ID Peserta','NIK', 'Nama', 'No Urut', 'Status', 'Action');
          $rowData = $data['getPelayananBalita'];
          include '../src/components/pelayanan/tableDetailPeserta.php'
          ?>
        <?php endif; ?>
        <?php if ($data['getPelayananIbuHamil'] == false && $data['getPelayananBalita'] == false) : ?>
          <div class="flex justify-center font-bold text-xl">
            Data tidak ditemukan
          </div>
        <?php endif; ?>
        <?php if ($data['action'] === 'ubah') : ?>
          <div class="flex justify-center">
            <div>
              <form method="post">
                <div class="flex mt-5">
                  <div class="mr-16" style="width: 400px;">
                    <?php
                    $label = 'Nama Lengkap';
                    $id = 'nama';
                    $type = 'text';
                    $value = $data['nama'];
                    $class = 'text-secondary-40 font-semibold mt-2';
                    include '../src/components/inputRequire.php'
                    ?>
                    <?php
                    $label = 'Tanggal Lahir';
                    $id = 'tgl_lahir';
                    $type = 'date';
                    $value = $data['tgl_lahir'];
                    $class = 'text-secondary-40 font-semibold mt-2';
                    include '../src/components/inputRequire.php'
                    ?>
                    <?php
                    $label = 'Tanggal Perkiraan Lahir';
                    $id = 'tgl_hpl';
                    $type = 'date';
                    $value = $data['tgl_hpl'];
                    $class = 'text-secondary-40 font-semibold mt-2';
                    include '../src/components/inputRequire.php'
                    ?>
                    <?php
                    $label = 'Faskes';
                    $id = 'faskes';
                    $type = 'text';
                    $value = $data['faskes'];
                    $maxLength = '50';
                    $class = 'text-secondary-40 font-semibold mt-2';
                    include '../src/components/inputRequire.php'
                    ?>
                  </div>
                  <div style="width: 400px;">
                    <?php
                    $label = 'Jalan/Gg';
                    $id = 'alamat_jalan';
                    $type = 'text';
                    $value = $data['alamat_jalan'];
                    $class = 'text-secondary-40 font-semibold mt-2';
                    include '../src/components/inputRequire.php'
                    ?>
                    <div class="flex items-center">
                      <?php
                      $label = 'RT';
                      $id = 'alamat_rt';
                      $maxLength = '3';
                      $type = 'text';
                      $value = $data['alamat_rt'];
                      $class = 'text-secondary-40 font-semibold mt-2 mr-5';
                      $style = 'width: 50px';
                      include '../src/components/inputRequire.php'
                      ?>
                      <?php
                      $label = 'RW';
                      $id = 'alamat_rw';
                      $type = 'text';
                      $value = $data['alamat_rw'];
                      $class = 'text-secondary-40 font-semibold mt-2';
                      include '../src/components/inputRequire.php'
                      ?>
                      <?php
                      $label = 'No';
                      $id = 'alamat_no';
                      $type = 'text';
                      $maxLength = '5';
                      $value = $data['alamat_no'];
                      $class = 'text-secondary-40 font-semibold mt-2 ml-5';
                      include '../src/components/inputRequire.php'
                      ?>
                    </div>
                    <?php
                    $label = 'No Handphone';
                    $id = 'no_tlp';
                    $type = 'text';
                    $value = $data['no_tlp'];
                    $maxLength = '20';
                    $class = 'text-secondary-40 font-semibold mt-2';
                    include '../src/components/inputRequire.php'
                    ?>
                  </div>
                </div>
                <center>
                  <?php
                  $label = 'Simpan';
                  $onClick = "";
                  $class = 'font-semibold mt-5';
                  $style = 'width:400px; justify-self:center;';
                  $type = 'submit';
                  include '../src/components/button.php'
                  ?>
                </center>

              </form>
            </div>
          </div>
        <?php endif; ?>
      </div>
    </div>

  </div>
</div>