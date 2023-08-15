<div>
 <div class="flex justify-center" style="padding: 24px;">
  <div style="position: absolute;left: 20px;">
   <img src="<?= ASSET; ?>loginImage.svg" width="120" height="120"/>
  </div>
  <div style="text-align: center;">
   <p style="font-size: 24px;">POSYANDU ALKESA 1</p>
   <p style="font-size: 18px;">Jl. Timbul IV RT 003 RW 003, Kel. Cipedak, Kec. Jagakarsa, Jakarta Selatan</p>
   <p style="font-size: 18px;">Kode Pos 12630</p>
  </div>
 </div>
 <hr />
 <p style="text-align: center;font-size:24px;margin-top:24px;">Laporan Pendaftaran Balita</p>
 <div style="padding: 24px;">
  <?php
  $headerData = array('NIK', 'Nama Anak', 'Usia', 'Berat Badan', 'Tinggi Badan', 'Nama Ayah', 'Nama Ibu', 'Alamat');
  $rowData = $data['getBalita'];
  include '../src/components/laporan/tableBalita.php'
  ?>
 </div>
 <div style="position:absolute;right:100px;bottom: 24px">
  <p>Jakarta, 15 Agustus 2022</p>
  <p style="text-align: center;">Ketua Posyandu</p>
  <p style="margin-top:100px;text-align:center">Ibu Yantih</p>
 </div>
</div>