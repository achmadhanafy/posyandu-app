<div class="flex">
  <!-- Sidebar -->
  <?php
  include '../src/components/sidebar.php'
  ?>
  <div class="flex ml-5 flex-col justify-center items-center w-full">
    <div style="width: 700px;">
      <div class="text-2xl mb-8 font-header font-semibold text-secondary-30">
        Pendaftaran Balita
      </div>
      <div style="width: 100%;" class="border-2 border-secondary-40 rounded-lg p-5">
        <div class="flex justify-around bg-primary-10 rounded-lg" style="margin: -20px; padding: 20px; margin-bottom: 20px;">
          <?php
          $label = 'Pendaftaran Balita';
          $onClick = 'navigatePendaftaranBalita()';
          $class = 'font-semibold w-[200px]';
          include '../src/components/button.php'
          ?>
          <?php
          $label = 'Pendaftaran Ibu Hamil';
          $onClick = 'navigatePendaftaranIbuHamil()';
          $class = 'font-semibold w-[200px]';
          include '../src/components/button.php'
          ?>
        </div>
        <?php if ($data['setBalita'] === 'success') : ?>
          <div class="bg-secondary-10 font-semibold p-1 text-secondary-40 pl-5 mt-2 rounded-md">
            Data balita berhasil dimasukan
          </div>
        <?php endif; ?>
        <form method="post">
          <div class="flex">
            <div class="w-1/2 mx-2">
              <div class="text-center text-secondary-40 font-semibold">Data Orang Tua</div>
              <?php
              $label = 'Nama Ibu';
              $id = 'namaIbu';
              $class = 'text-secondary-40 font-semibold mt-2';
              $value = $data['namaIbu'];
              $maxLength = '50';
              $type = 'text';
              include '../src/components/inputRequire.php'
              ?>
              <?php
              $label = 'Nama Ayah';
              $id = 'namaAyah';
              $maxLength = '50';
              $type = 'text';
              $class = 'text-secondary-40 font-semibold mt-2';
              $value = $data['namaAyah'];
              include '../src/components/inputRequire.php'
              ?>

            </div>
            <div class="w-1/2 mx-2">
              <div class="text-center text-secondary-40 font-semibold">Alamat</div>
              <?php
              $label = 'Jalan/Gg';
              $id = 'jalan';
              $type = 'text';
              $class = 'text-secondary-40 font-semibold mt-2';
              $value = $data['jalan'];
              $maxLength = '100';
              include '../src/components/inputRequire.php'
              ?>
              <div class="flex flex-row items-end">
                <?php
                $label = 'RT';
                $id = 'rt';
                $type = 'number';
                $class = 'text-secondary-40 font-semibold mt-2';
                $style = 'width: 50px';
                $value = $data['rt'];
                $maxLength = '3';
                include '../src/components/inputRequire.php'
                ?>
                <div class="text-xl mx-5">/</div>
                <?php
                $label = 'RW';
                $id = 'rw';
                $type = 'text';
                $type = 'number';
                $class = 'text-secondary-40 font-semibold mt-2';
                $value = $data['rw'];
                $maxLength = '3';
                include '../src/components/inputRequire.php'
                ?>
                <?php
                $label = 'No';
                $id = 'no';
                $type = 'text';
                $type = 'number';
                $class = 'text-secondary-40 font-semibold mt-2 ml-5';
                $value = $data['no'];
                $maxLength = '5';
                include '../src/components/inputRequire.php'
                ?>
              </div>
            </div>

          </div>
          <div class="p-2 mt-5">
            <div class="text-secondary-40 font-semibold mt-5 text-center">Data Balita</div>
            <?php
            $label = 'NIK';
            $id = 'nik';
            $type = 'text';
            $type = 'number';
            $class = 'text-secondary-40 font-semibold mt-2';
            $value = $data['nik'];
            $maxLength = '20';
            include '../src/components/inputRequire.php'
            ?>
            <?php
            $label = 'Nama Anak';
            $id = 'namaAnak';
            $class = 'text-secondary-40 font-semibold mt-2';
            $value = $data['namaAnak'];
            $type = 'text';
            $maxLength = '50';
            include '../src/components/inputRequire.php'
            ?>
            <div class="text-secondary-40 font-semibold mt-2">Jenis Kelamin</div>
            <?php
            $label = 'LAKI-LAKI';
            $id = 'laki';
            $name ='jenisKelamin';
            $class = 'text-secondary-40 font-semibold mt-2';
            $value = "L";
            include '../src/components/radio.php'
            ?>
            <?php
            $label = 'PEREMPUAN';
            $id = 'perempuan';
            $name ='jenisKelamin';
            $class = 'text-secondary-40 font-semibold mt-2';
            $value = "P";
            include '../src/components/radio.php'
            ?>
            <?php
            $label = 'Tanggal Lahir';
            $id = 'tanggalLahir';
            $type = 'date';
            $class = 'text-secondary-40 font-semibold mt-2';
            $value = $data['tanggalLahir'];
            $maxLength = '100';
            include '../src/components/inputRequire.php'
            ?>
            <div class="flex">
              <div class="flex items-center mr-8">
                <?php
                $label = 'Usia (tahun)';
                $id = 'usiaTahun';
                $type = 'number';
                $class = 'text-secondary-40 font-semibold mt-2';
                $value = $data['usiaTahun'];
                $maxLength = '3';
                include '../src/components/inputRequire.php'
                ?>
              </div>
              <div class="flex items-center">
                <?php
                $label = 'Usia (bulan)';
                $id = 'usiaBulan';
                $type = 'number';
                $class = 'text-secondary-40 font-semibold mt-2';
                $value = $data['usiaBulan'];
                $maxLength = '2';
                include '../src/components/inputRequire.php'
                ?>
              </div>
            </div>
            <div class="w-full">
              <div class="flex">
                <div class="flex items-center mr-8">
                  <?php
                  $label = 'Berat Badan (kg)';
                  $id = 'bb';
                  $type = 'number';
                  $class = 'text-secondary-40 font-semibold mt-2';
                  $value = $data['bb'];
                  $maxLength = '5';
                  include '../src/components/inputRequire.php'
                  ?>
                </div>
                <div class="flex items-center">
                  <?php
                  $label = 'Tinggi Badan (cm)';
                  $id = 'tb';
                  $type = 'number';
                  $class = 'text-secondary-40 font-semibold mt-2';
                  $value = $data['tb'];
                  $maxLength = '5';
                  include '../src/components/inputRequire.php'
                  ?>
                </div>
              </div>
            </div>
          </div>
          <?php
          $label = 'Simpan';
          $onClick = "";
          $class = 'font-semibold mt-5';
          $type = 'submit';
          include '../src/components/button.php'
          ?>
        </form>

      </div>
    </div>

  </div>
  <!-- Sidebar -->
</div>