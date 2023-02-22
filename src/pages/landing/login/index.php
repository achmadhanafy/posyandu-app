<div>
  <div class="min-h-screen w-screen flex flex-row justify-center items-center">
    <img src="<?= ASSET; ?>loginImage.svg" style="width:300px; height:300px;" />
    <div class="text-secondary-40 ml-8">
      <div class="font-semibold font-header text-3xl">Selamat Datang!</div>

      <?php if ($data['status'] === 'registered' && $data['setLoginRes'] == null) : ?>
        <div class="bg-secondary-10 font-semibold p-1 mt-2 rounded-md">
          Anda berhasil mendaftar
        </div>
      <?php endif; ?>
      <?php if ($data['setLoginRes'] != null) : ?>
        <div class="bg-secondary-10 font-semibold p-1 mt-2 rounded-md">
          <?= $data['setLoginRes'] ?>
        </div>
      <?php endif; ?>

      <div class="text-xl mb-5 font-semibold">Silahkan Login</div>
      <form method="post">
        <?php
        $label = 'Email';
        $id = 'email';
        $class = 'mt-2';
        $value = $data['email'];
        $type = 'text';
        include '../src/components/inputRequire.php'
        ?>
        <?php
        $label = 'Password';
        $id = 'password';
        $class = 'mt-2 mb-5';
        $value = $data['password'];
        $type = 'password';
        include '../src/components/inputRequire.php'
        ?>
        Belum punya akun ? <a href="<?= BASEURL; ?>public/landing/register" style="cursor: pointer; text-decoration:underline" class="text-secondary-40 font-semibold cursor-pointer">Daftar</a>
        <?php
        $label = 'Masuk';
        $onClick = "";
        $class = 'font-semibold';
        $type = 'submit';
        include '../src/components/button.php'
        ?>
      </form>
    </div>

  </div>
</div>