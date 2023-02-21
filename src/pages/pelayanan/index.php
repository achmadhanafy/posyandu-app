<div class="flex">
  <!-- Sidebar -->
  <?php
  include '../src/components/sidebar.php'
  ?>
  <div class="flex ml-5 flex-col justify-center items-center w-full">
    <div style="width: 700px;">
      <div class="text-2xl mb-8 font-header font-semibold text-secondary-30">
        Pelayanan Balita
      </div>
      <div style="width: 100%;" class="border-2 border-secondary-40 rounded-lg p-5">
        <div class="flex justify-around bg-primary-10 rounded-lg" style="margin: -20px; padding: 20px; margin-bottom: 20px;">
          <?php
          $label = 'Pelayanan Balita';
          $onClick ='navigatePelayananBalita()';
          $class = 'font-semibold w-[200px]';
          include '../src/components/button.php'
          ?>
          <?php
          $label = 'Pelayanan Ibu Hamil';
          $onClick = 'navigatePelayananIbuHamil()';
          $class = 'font-semibold w-[200px]';
          include '../src/components/button.php'
          ?>
        </div>
        <div class="flex">
          <div class="w-1/2 mx-2">
            <div class="text-center text-secondary-40 font-semibold">Data Orang Tua</div>
            <?php
            $label = 'No. Kartu Keluarga';
            $id = 'kartuKeluarga';
            $class = 'text-secondary-40 font-semibold mt-2';
            include '../src/components/input.php'
            ?>
            <?php
            $label = 'Nama Ibu';
            $id = 'namaIbu';
            $class = 'text-secondary-40 font-semibold mt-2';
            include '../src/components/input.php'
            ?>
            <?php
            $label = 'Nama Ayah';
            $id = 'namaAyah';
            $class = 'text-secondary-40 font-semibold mt-2';
            include '../src/components/input.php'
            ?>
            
          </div>
          <div class="w-1/2 mx-2">
            <div class="text-center text-secondary-40 font-semibold">Alamat</div>
            <?php
            $label = 'Jalan/Gg';
            $id = 'jalan';
            $type = 'text';
            $class = 'text-secondary-40 font-semibold mt-2';
            include '../src/components/input.php'
            ?>
            <div class="flex flex-row items-end">
              <?php
              $label = 'RT';
              $id = 'rt';
              $type = 'text';
              $class = 'text-secondary-40 font-semibold mt-2';
              $style = 'width: 50px';
              include '../src/components/input.php'
              ?>
              <div class="text-xl mx-5">/</div>
              <?php
              $label = 'RW';
              $id = 'rw';
              $type = 'text';
              $class = 'text-secondary-40 font-semibold mt-2';
              include '../src/components/input.php'
              ?>
              <?php
              $label = 'No';
              $id = 'no';
              $type = 'text';
              $class = 'text-secondary-40 font-semibold mt-2 ml-5';
              include '../src/components/input.php'
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
          $class = 'text-secondary-40 font-semibold mt-2';
          include '../src/components/input.php'
          ?>
          <?php
          $label = 'Nama Anak';
          $id = 'namaAnak';
          $class = 'text-secondary-40 font-semibold mt-2';
          include '../src/components/input.php'
          ?>
          <?php
          $label = 'Tanggal Lahir';
          $id = 'tanggalLahir';
          $type = 'date';
          $class = 'text-secondary-40 font-semibold mt-2';
          include '../src/components/input.php'
          ?>
          <div class="flex">
            <div class="flex items-center mr-8">
              <?php
              $label = 'Usia (tahun)';
              $id = 'usiaTahun';
              $type = 'number';
              $class = 'text-secondary-40 font-semibold mt-2';
              include '../src/components/input.php'
              ?>
            </div>
            <div class="flex items-center">
              <?php
              $label = 'Usia (bulan)';
              $id = 'usiaBulan';
              $type = 'number';
              $class = 'text-secondary-40 font-semibold mt-2';
              include '../src/components/input.php'
              ?>
            </div>
          </div>
          <div class="w-full">
              <div class="flex">
                <div class="flex items-center mr-8">
                  <?php
                  $label = 'Beran Badan';
                  $id = 'bb';
                  $type = 'number';
                  $class = 'text-secondary-40 font-semibold mt-2';
                  include '../src/components/input.php'
                  ?>
                </div>
                <div class="flex items-center">
                  <?php
                  $label = 'Tinggi Badan';
                  $id = 'tb';
                  $type = 'number';
                  $class = 'text-secondary-40 font-semibold mt-2';
                  include '../src/components/input.php'
                  ?>
                </div>
              </div>
            </div>
        </div>
        <?php
        $label = 'Simpan';
        $onClick = "";
        $class = 'font-semibold mt-5';
        include '../src/components/button.php'
        ?>
      </div>
    </div>

  </div>
  <!-- Sidebar -->
</div>