<div class="flex">
 <!-- Sidebar -->
 <?php
 include '../src/components/sidebar.php'
 ?>
 <div class="flex ml-5 flex-col justify-center items-center w-full">
  <div style="width: 700px;">
   <div class="text-2xl mb-8 font-header font-semibold text-secondary-30">
    Laporan
   </div>
   <div style="width: 100%;" class="border-2 border-secondary-40 rounded-lg p-5">
    <div class="justify-around bg-primary-10 rounded-lg" style="margin: -20px; padding: 20px;">
     <?php
     $label = 'Laporan Balita';
     $style = 'margin-bottom: 20px; font-size: 20px';
     $onClick = 'navigateLaporanBalita()';
     $class = 'font-semibold w-[200px] mr-5';
     include '../src/components/button.php'
     ?>
     <?php
     $label = 'Laporan Ibu Hamil';
     $onClick = 'navigateLaporanIbuHamil()';
     $class = 'font-semibold w-[200px]';
     $style = 'font-size: 20px;margin-bottom: 20px;';
     include '../src/components/button.php'
     ?>
     <?php
     $label = 'Laporan Pelayanan Ibu Hamil';
     $onClick = 'navigateLaporanPelayananIbuHamil()';
     $class = 'font-semibold w-[200px]';
     $style = 'font-size: 20px;margin-bottom: 20px;';
     include '../src/components/button.php'
     ?>
     <?php
     $label = 'Laporan Pelayanan Balita';
     $onClick = 'navigateLaporanPelayananBalita()';
     $class = 'font-semibold w-[200px]';
     $style = 'font-size: 20px;margin-bottom: 20px;';
     include '../src/components/button.php'
     ?>
     <?php
     $label = 'Laporan Imunisasi';
     $onClick = 'navigateLaporanImunisasi()';
     $class = 'font-semibold w-[200px]';
     $style = 'font-size: 20px;margin-bottom: 20px;';
     include '../src/components/button.php'
     ?>
    </div>
   </div>
  </div>

 </div>
 <!-- Sidebar -->
</div>