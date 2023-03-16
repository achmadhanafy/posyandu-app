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
      <form method="post" style="width: 100%;" class="border-2 border-secondary-40 rounded-lg p-5">
        <div class="flex justify-around bg-primary-10 rounded-lg" style="margin: -20px; padding: 20px; margin-bottom: 20px;">
          <?php
          $label = 'Pengkinian Balita';
          $onClick = 'navigatePendaftaranBalita()';
          $class = 'font-semibold w-[300px]';
          include '../src/components/button.php'
          ?>
          <?php
          $label = 'Pengkinian Ibu Hamil';
          $onClick = 'navigatePendaftaranIbuHamil()';
          $class = 'font-semibold w-[300px]';
          include '../src/components/button.php'
          ?>
        </div>
        <!-- <?php if ($data['setIbuHamil'] === 'success') : ?>
          <div class="bg-secondary-10 font-semibold mb-8 p-1 text-secondary-40 pl-5 mt-2 rounded-md">
            Data Ibu Hamil Berhasil dimasukan
          </div>
        <?php endif; ?> -->
        <?php
        include '../src/components/table.php'
        ?>
    </div>
    </form>

  </div>
</div>