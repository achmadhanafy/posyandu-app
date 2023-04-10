<div class="flex">
  <!-- Sidebar -->
  <?php
  include '../src/components/sidebar.php'
  ?>
  <div class="flex ml-5 flex-col justify-center items-center w-full">
    <div style="width: 100%;" class="mr-5">
      <div class="text-2xl mb-8 font-header font-semibold text-secondary-30">
        Pengkinian Data
      </div>
      <div style="width: 100%;" class="border-2 border-secondary-40 rounded-lg p-5">
        <div class="flex justify-around bg-primary-10 rounded-lg" style="margin: -20px; padding: 20px; margin-bottom: 20px;">
          <?php
          $label = 'Pengkinian Balita';
          $onClick = 'navigatePengkinianBalita()';
          $class = 'font-semibold';
          $style = 'width: 300px;';
          include '../src/components/button.php'
          ?>
          <?php
          $label = 'Pengkinian Ibu Hamil';
          $onClick = 'navigatePengkinianIbuHamil()';
          $class = 'font-semibold';
          $style = 'width: 300px;';
          include '../src/components/button.php'
          ?>
        </div>
        <!-- <?php if ($data['setIbuHamil'] === 'success') : ?>
          <div class="bg-secondary-10 font-semibold mb-8 p-1 text-secondary-40 pl-5 mt-2 rounded-md">
            Data Ibu Hamil Berhasil dimasukan
          </div>
        <?php endif; ?> -->
        <div class="font-semibold text-xl mb-3 text-secondary-40 text-center">Pengkinian Balita</div>
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
              $label = 'Masukan nik/nama anak/nama ibu';
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

        <?php if ($data['action'] != 'ubah' && $data['action'] != 'hapus' && $data['getBalita'] !== false) : ?>
          <?php
          $headerData = array('NIK', 'Nama Anak', 'Usia', 'Berat Badan', 'Tinggi Badan', 'Nama Ayah', 'Nama Ibu', 'Alamat', 'Action');
          $rowData = $data['getBalita'];
          include '../src/components/tableBalita.php'
          ?>
        <?php endif; ?>
        <?php if ($data['getBalita'] == false) : ?>
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
                    $id = 'nama_anak';
                    $type = 'text';
                    $value = $data['nama_anak'];
                    $class = 'text-secondary-40 font-semibold mt-2';
                    include '../src/components/inputRequire.php'
                    ?>
                    <?php
                    $label = 'Berat Badan';
                    $id = 'bb';
                    $type = 'text';
                    $value = $data['bb'];
                    $maxLength = '50';
                    $class = 'text-secondary-40 font-semibold mt-2';
                    include '../src/components/inputRequire.php'
                    ?>
                    <?php
                    $label = 'Tinggi Badan';
                    $id = 'tb';
                    $type = 'text';
                    $value = $data['bb'];
                    $maxLength = '50';
                    $class = 'text-secondary-40 font-semibold mt-2';
                    include '../src/components/inputRequire.php'
                    ?>
                    <?php
                    $label = 'Usia Tahun';
                    $id = 'usiaTahun';
                    $type = 'text';
                    $value = $data['usiaTahun'];
                    $class = 'text-secondary-40 font-semibold mt-2';
                    include '../src/components/inputRequire.php'
                    ?>
                    <?php
                    $label = 'usiaBulan';
                    $id = 'usiaBulan';
                    $type = 'text';
                    $value = $data['usiaBulan'];
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
                    $maxLength = '50';
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