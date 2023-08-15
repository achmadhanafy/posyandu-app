<div class="flex">
  <!-- Sidebar -->
  <?php
  include '../src/components/sidebar.php'
  ?>
  <div class="flex ml-5 flex-col justify-center items-center w-full">
    <div style="width: 700px;">
      <div class="text-2xl mb-8 font-header font-semibold text-secondary-30">
        Pendaftaran Ibu Hamil
      </div>
      <form method="post" style="width: 100%;" class="border-2 border-secondary-40 rounded-lg p-5">
        <div class="flex justify-around bg-primary-10 rounded-lg" style="margin: -20px; padding: 20px; margin-bottom: 20px;">
          <?php
          $label = 'Pendaftaran Balita';
          $onClick = 'navigatePendaftaranBalita()';
          $class = 'font-semibold w-[200px] mr-5';
          include '../src/components/button.php'
          ?>
          <?php
          $label = 'Pendaftaran Ibu Hamil';
          $onClick = 'navigatePendaftaranIbuHamil()';
          $class = 'font-semibold w-[200px]';
          include '../src/components/button.php'
          ?>
        </div>
        <?php if ($data['setIbuHamil'] === 'success') : ?>
          <div class="bg-secondary-10 font-semibold mb-8 p-1 text-secondary-40 pl-5 mt-2 rounded-md">
            Data Ibu Hamil Berhasil dimasukan
          </div>
        <?php endif; ?>
        <div class="flex">
          <div class="w-1/2 mx-2">
            <div class="text-center text-secondary-40 font-semibold">Data Ibu</div>
            <!-- <?php
                  $label = 'Nama Ibu';
                  $id = 'namaIbu';
                  $class = 'text-secondary-40 font-semibold mt-2';
                  $value = $data['namaIbu'];
                  $maxLength = '50';
                  $type = 'text';
                  include '../src/components/inputRequire.php'
                  ?> -->
            <?php
            $label = 'NIK';
            $id = 'nik';
            $value = $data['nik'];
            $class = 'text-secondary-40 font-semibold mt-2';
            include '../src/components/inputRequire.php'
            ?>
            <?php
            $label = 'No. Kartu Keluarga';
            $id = 'no_kk';
            $value = $data['no_kk'];
            $class = 'text-secondary-40 font-semibold mt-2';
            include '../src/components/inputRequire.php'
            ?>
            <?php
            $label = 'Nama Lengkap';
            $id = 'nama';
            $value = $data['nama'];
            $class = 'text-secondary-40 font-semibold mt-2';
            include '../src/components/inputRequire.php'
            ?>
            <?php
            $label = 'Nama Suami';
            $id = 'nama_suami';
            $type = 'text';
            $value = $data['nama_suami'];
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

          </div>
          <div class="w-1/2 mx-2">
            <div class="text-center text-secondary-40 font-semibold">Alamat</div>
            <?php
            $label = 'Jalan/Gg';
            $id = 'alamat_jalan';
            $type = 'text';
            $value = $data['alamat_jalan'];
            $class = 'text-secondary-40 font-semibold mt-2';
            include '../src/components/inputRequire.php'
            ?>
            <div class="flex flex-row items-end">
              <?php
              $label = 'RT';
              $id = 'alamat_rt';
              $maxLength = '3';
              $type = 'text';
              $value = $data['alamat_rt'];
              $class = 'text-secondary-40 font-semibold mt-2';
              $style = 'width: 50px';
              include '../src/components/inputRequire.php'
              ?>
              <div class="text-xl mx-5">/</div>
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

        </div>
        <?php
        $label = 'Simpan';
        $onClick = "";
        $class = 'font-semibold mt-5';
        $type = 'submit';
        include '../src/components/button.php'
        ?>
    </div>
    </form>

  </div>
  <!-- Sidebar -->
</div>