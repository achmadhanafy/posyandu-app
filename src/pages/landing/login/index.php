<div>
 <div class="min-h-screen w-screen flex flex-col justify-center items-center">
 <img src="<?= ASSET; ?>loginImage.svg" style="width:400px; height:400px;" /> 
 <div class="text-secondary-40">
   <div class="text-4xl font-semibold font-header">Selamat Datang!</div>
   <div class="text-xl mb-5 font-semibold">Silahkan Login</div>
   <form>
    <?php
    $label = 'Email';
    $id = 'email';
    $class = 'mt-2';
    include '../src/components/input.php'
    ?>
    <?php
    $label = 'Password';
    $id = 'password';
    $class = 'mt-2 mb-5';
    include '../src/components/input.php'
    ?>
    <?php
    $label = 'Login';
    $onClick = "";
    $class = 'font-semibold';
    include '../src/components/button.php'
    ?>
   </form>
  </div>
  
 </div>
</div>