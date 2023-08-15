<div class="flex">
  <!-- Sidebar -->
  <?php
  include '../src/components/sidebar.php'
  ?>
  <div class="flex ml-5 flex-col justify-center items-center w-full">
    <div style="width: 700px;">
      <div class="text-2xl mb-8 font-header font-semibold text-secondary-30">
        Posyandu
      </div>
      <form method="post" style="width: 100%;" class="border-2 border-secondary-40 rounded-lg p-5">
        <div style='font-size:x-large;font-weight:700' class="text-secondary-30 text-center">
         Imunisasi
        </div>
        <?php if ($data['setImunisasi'] === 'success') : ?>
          <div class="bg-secondary-10 font-semibold mb-8 p-1 text-secondary-40 pl-5 mt-2 rounded-md">
            Data Imunisasi Berhasil dimasukan
          </div>
        <?php endif; ?>
        <div class="flex">
          <div class="w-full mx-2">
           <div class='text-secondary-40 font-semibold mt-2'>NIK  : <?= $data['nik'] ?></div>
           <div class='text-secondary-40 font-semibold mt-2'>Nama : <?= $data['nama'] ?></div>
            <!-- <?php
                  $label = 'Nama Ibu';
                  $id = 'namaIbu';
                  $class = 'text-secondary-40 font-semibold mt-2';
                  $value = $data['namaIbu'];
                  $maxLength = '50';
                  $type = 'text';
                  include '../src/components/inputRequire.php'
                  ?> -->
            <div class="text-secondary-40 font-semibold mt-2">Imunisasi</div>      
            <select name='imunisasi' class="w-full rounded-md border border-secondary-40" style="padding:6px ;background-color:white;">
             <option value="BCG Polio 1">BCG Polio 1</option>
             <option value="DPT-HB-Hib 1 Polio 2">DPT-HB-Hib 1 Polio 2</option>
             <option value="DPT-HB-Hib 2 Polio 3">DPT-HB-Hib 2 Polio 3</option>
             <option value="DPT-HB-Hib 3 Polio 4">DPT-HB-Hib 3 Polio 4</option>
             <option value="Campak">Campak</option>
            </select>
            <?php
            $label = 'Catatan';
            $id = 'catatan';
            $value = $data['catatan'];
            $class = 'text-secondary-40 font-semibold mt-2';
            include '../src/components/textarea.php'
            ?>
            <?php
            $label = 'Tanggal Imunisasi';
            $id = 'tgl';
            $value = $data['tgl'];
            $type = 'date';
            $class = 'text-secondary-40 font-semibold mt-2';
            include '../src/components/inputRequire.php'
            ?>
            <?php
            $label = 'Berat Badan/Kg';
            $id = 'bb';
            $type = 'number';
            $value = $data['bb'];
            $class = 'text-secondary-40 font-semibold mt-2';
            include '../src/components/inputRequire.php'
            ?>
            <?php
            $label = 'Tinggi Badan/Cm';
            $id = 'tb';
            $type = 'number';
            $value = $data['tb'];
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