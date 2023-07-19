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
        <div class="flex justify-around bg-primary-10 rounded-lg" style="margin: -20px; padding: 20px; margin-bottom: 20px;">
          <div class="font-semibold text-xl mb-3 text-secondary-40 text-center">Pelayanan Balita</div>
        </div>
        <!-- <?php if ($data['setIbuHamil'] === 'success') : ?>
          <div class="bg-secondary-10 font-semibold mb-8 p-1 text-secondary-40 pl-5 mt-2 rounded-md">
            Data Ibu Hamil Berhasil dimasukan
          </div>
        <?php endif; ?> -->
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
        <div class="flex justify-center">
          <div>
            <form method="post">
              <div class="flex mt-5">
                <div class="mr-16" style="width: 400px;">
                  <div class="text-secondary-40 font-semibold mt-2">
                    NIK : <?= $data['nik'] ?>
                  </div>
                  <div class="text-secondary-40 font-semibold mt-2">
                    Nama : <?= strtoupper($data['nama_anak']) ?>
                  </div>
                  <div class="text-secondary-40 font-semibold mt-2">
                    Tanggal Lahir : <?= $data['tgl_lahir'] ?>
                  </div>
                  <div class="text-secondary-40 font-semibold mt-2">
                    Nama Ayah : <?= strtoupper($data['nama_ayah']) ?>
                  </div>
                  <div class="text-secondary-40 font-semibold mt-2 mb-5">
                    Nama Ibu : <?= strtoupper($data['nama_ibu']) ?>
                  </div>
                  <?php
                  $label = 'Usia';
                  $id = 'usia';
                  $type = 'text';
                  $value = $data['usia'];
                  $class = 'text-secondary-40 font-semibold mt-2';
                  include '../src/components/inputRequire.php'
                  ?>
                  <?php
                  $label = 'Berat Badan (Kg)';
                  $id = 'bb';
                  $type = 'text';
                  $value = $data['bb'];
                  $class = 'text-secondary-40 font-semibold mt-2';
                  include '../src/components/inputRequire.php'
                  ?>
                  <?php
                  $label = 'Tinggi Badan (Cm)';
                  $id = 'tb';
                  $type = 'number';
                  $value = $data['tb'];
                  $class = 'text-secondary-40 font-semibold mt-2';
                  include '../src/components/inputRequire.php'
                  ?>
                </div>
                <div style="width: 400px;">
                  <?php
                  $label = 'Catatan';
                  $id = 'catatan';
                  $value = $data['catatan'];
                  $class = 'text-secondary-40 font-semibold mt-2';
                  include '../src/components/textarea.php'
                  ?>
                  <?php
                  $label = 'Resep';
                  $id = 'resep';
                  $value = $data['resep'];
                  $class = 'text-secondary-40 font-semibold mt-2';
                  include '../src/components/textarea.php'
                  ?>
                </div>
              </div>
              <center>
                <?php
                $label = 'Simpan';
                $onClick = "";
                $class = 'font-semibold mt-5';
                $style = 'width:400px; justify-self:center;margin-top:50px;';
                $type = 'submit';
                include '../src/components/button.php'
                ?>
              </center>

            </form>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>