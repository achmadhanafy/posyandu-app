<div>
  <div class="min-h-screen w-screen flex flex-row justify-center items-center">
    <img src="<?= ASSET; ?>registerImage.svg" style="width:50%; height:80vh;" />
    <div style="width: 50%;" class="text-secondary-40 flex flex-col items-center">
      <div class="font-semibold font-header text-3xl">Daftar Akun</div>
      <div class="text-xl mb-5 font-semibold">Silahkan masukan data diri</div>
      <div class="bg-primary-10 px-5 py-2 rounded-lg font-semibold">
        <?= $data['setRegisterRes'] ?>
      </div>
      <form style="width: 60%;" method="post" class="">
        <?php
        $label = 'Nama';
        $id = 'nama';
        $class = 'mt-2';
        $value = $data['nama'];
        include '../src/components/inputRequire.php'
        ?>
        <?php
        $label = 'Email';
        $id = 'email';
        $class = 'mt-2';
        $value = $data['email'];
        include '../src/components/inputRequire.php'
        ?>
        <?php
        $label = 'NIK';
        $id = 'nik';
        $class = 'mt-2';
        $value = $data['nik'];
        include '../src/components/inputRequire.php'
        ?>
        <?php
        $label = 'Password';
        $id = 'password';
        $class = 'mt-2';
        $type = 'password';
        $value = $data['password'];
        include '../src/components/inputRequire.php'
        ?>
        <?php
        $label = 'Confirm Password';
        $id = 'confirmPassword';
        $class = 'mt-2';
        $type = 'password';
        $value = $data['confirmPassword'];
        include '../src/components/inputRequire.php'
        ?>
        <?php
        $label = 'Kode Otorisasi';
        $id = 'otorisasiCode';
        $class = 'mt-2 mb-5';
        $type = 'text';
        $value = $data['otorisasi'];
        include '../src/components/inputRequire.php'
        ?>
        Sudah punya akun ? <a href="<?= BASEURL; ?>public/landing/login" style="cursor: pointer; text-decoration:underline" class="text-secondary-40 font-semibold cursor-pointer">Masuk</a>
        <?php
        $label = 'Daftar';
        $onClick = "";
        $class = 'font-semibold';
        $type = "submit";
        include '../src/components/button.php'
        ?>
      </form>
    </div>

  </div>
</div>