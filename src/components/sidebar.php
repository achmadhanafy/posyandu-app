<div class="bg-primary-10 flex flex-col justify-between py-8 items-center h-screen" style="width: 350px;">
  <div>
    <div class="w-full flex justify-center">
      <img src="<?= ASSET; ?>loginImage.svg" style="width:120px" />
    </div>

    <div class="text-secondary-40 font-semibold font-header text-xl">
      Posyandu Cipedak
    </div>
    <div id='userName' class="text-secondary-40 mt-3 font-semibold">
    </div>
    <div id='userRole' class="text-secondary-40 mt-3 font-semibold">
    </div>
  </div>
  <div class="mt-8 ">
    <a href="<?= BASEURL ?>public/pelayanan" class="flex text-white text-center cursor-pointer text-lg px-5 py-2 bg-secondary-40 rounded-lg shadow-md shadow-secondary-20">
      <img style="width: 25px; height: 25px" src="<?= ASSET; ?>pelayanan.svg" />
      <div class="ml-5">
        Pelayanan
      </div>
    </a>
    <a href="<?= BASEURL ?>public/pendaftaran" class="flex text-white mt-5 text-center cursor-pointer text-lg px-5 py-2 bg-secondary-40 rounded-lg shadow-md shadow-secondary-20">
      <img style="width: 25px; height: 25px" src="<?= ASSET; ?>pendaftaran.svg" />
      <div class="ml-5">
        Pendaftaran
      </div>
    </a>
    <a href="<?= BASEURL ?>public/pengkinian" class="flex text-white mt-5 text-center cursor-pointer text-lg px-5 py-2 bg-secondary-40 rounded-lg shadow-md shadow-secondary-20">
      <img style="width: 25px; height: 25px" src="<?= ASSET; ?>pengkinianData.svg" />
      <div class="ml-5">
        Pengkinian Data
      </div>
    </a>
    <a href="<?= BASEURL ?>public/imunisasi" class="flex text-white mt-5 text-center cursor-pointer text-lg px-5 py-2 bg-secondary-40 rounded-lg shadow-md shadow-secondary-20">
      <img style="width: 25px; height: 25px" src="<?= ASSET; ?>imunisasi.svg" />
      <div class="ml-5">
        Imunisasi
      </div>
    </a>
    <a href="<?= BASEURL ?>public/laporan" class="flex text-white mt-5 text-center cursor-pointer text-lg px-5 py-2 bg-secondary-40 rounded-lg shadow-md shadow-secondary-20">
      <img style="width: 25px; height: 25px" src="<?= ASSET; ?>laporan.svg" />
      <div class="ml-5">
        Laporan
      </div>
    </a>
  </div>
  <div class="text-secondary-40 font-bold cursor-pointer bottom-0 mt-5 text-center text-lg px-5 py-2 rounded-lg flex items-center">
    <img style="width: 25px; height: 25px" src="<?= ASSET; ?>logout.svg" />
    <form method="post">
      <button name="logout" class="ml-5">
        Logout
      </button>
    </form>

  </div>
</div>
<script>
  function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for (let i = 0; i < ca.length; i++) {
      let c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  }
  document.getElementById('userName').innerHTML = `Hai, ${getCookie('name')}`
  document.getElementById('userRole').innerHTML = `Jabatan: ${getCookie('role')}`
</script>