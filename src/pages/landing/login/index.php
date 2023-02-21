<div>
  <div class="min-h-screen w-screen flex flex-row justify-center items-center">
    <img src="<?= ASSET; ?>loginImage.svg" style="width:300px; height:300px;" />
    <div class="text-secondary-40 ml-8">
      <div class="font-semibold font-header text-3xl">Selamat Datang!</div>
      <div class="bg-secondary-10 font-semibold p-1 mt-2 rounded-md">
        <?php if ($data['status'] === 'registered') : ?>
          Anda berhasil mendaftar
        <?php endif; ?>
      </div>
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
        Belum punya akun ? <a href="<?= BASEURL; ?>public/landing/register" style="cursor: pointer; text-decoration:underline" class="text-secondary-40 font-semibold cursor-pointer">Daftar</a>
        <?php
        $label = 'Masuk';
        $onClick = "";
        $class = 'font-semibold';
        include '../src/components/button.php'
        ?>
      </form>
    </div>

  </div>
</div>