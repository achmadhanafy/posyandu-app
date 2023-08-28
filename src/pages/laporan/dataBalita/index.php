<div>
 <div class="flex justify-center">
  <div style="position: absolute;left: 20px;">
   <img src="<?= ASSET; ?>loginImage.png" width="120" height="120" />
  </div>
  <div style="text-align: center;">
   <p style="font-size: 16px;">POSYANDU ALKESA 1</p>
   <p style="font-size: 14px;">Jl. Timbul IV RT 003 RW 003, Kel. Cipedak, Kec. Jagakarsa, Jakarta Selatan</p>
   <p style="font-size: 14px;">Kode Pos 12630</p>
  </div>
 </div>
 <hr />
 <p style="text-align: center;font-size:16px;">Laporan Pendaftaran Balita</p>
 <div>
  <?php
  $headerData = array('NIK', 'Nama Anak', 'Usia', 'Berat Badan', 'Tinggi Badan', 'Nama Ayah', 'Nama Ibu', 'Alamat');
  $rowData = $data['getBalita'];
  include '../src/components/laporan/tableBalita.php'
  ?>
 </div>
 <div style="flex-direction:column;justify-content:flex-end;align-items:flex-end;display:flex;margin-right:50px;margin-bottom:50px;width:100%; margin-top:20px;">
  <div style="width: 100%">
   <p style="text-align:right;">Jakarta, Senin 15 Agustus 2022</p>
   <p style="text-align: right;">Ketua Posyandu</p>
   <p style="margin-top:100px;text-align:right">Ibu Yantih</p>
  </div>
 </div>
</div>