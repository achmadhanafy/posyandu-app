<div class="relative flex">
   <img style="width: 50%;height: 100vh" src="<?= ASSET; ?>banner.jpg" />
   <div class="flex flex-col px-10 justify-center items-center w-full">
      <div class="w-[600px] mb-8">
         <div class="text-3xl text-secondary-40 font-semibold font-header">APLIKASI LAYANAN</div>
         <div class="text-4xl text-secondary-40 font-semibold font-header">POSYANDU KELURAHAN CIPEDAK</div>
      </div>
      <div class="flex">
         <div class="mx-3">
            <?php
            $label = 'Masuk';
            $class = 'font-semibold';
            $onClick = "navigateLogin()";
            include '../src/components/button.php'
            ?>
         </div>
         <div class="mx-3">
            <?php
            $label = 'Daftar';
            $class = 'font-semibold';
            $onClick = 'navigateLogin()';
            include '../src/components/button.php'
            ?>
         </div>
      </div>

   </div>
</div>