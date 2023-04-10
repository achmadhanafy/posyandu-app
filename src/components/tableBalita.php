<style>
  table {
    border-collapse: collapse;
    font-family: Tahoma, Geneva, sans-serif;
    width: 100%;
    font-size: small;
  }

  table td {
    padding: 15px;
  }

  table thead td {
    background-color: rgb(142, 195, 176);
    color: white;
    font-weight: bold;
    font-size: 13px;
    border: 1px solid rgb(85, 113, 83);
  }

  table tbody td {
    color: #636363;
    border: 1px solid rgb(85, 113, 83);
  }

  table tbody tr {
    background-color: #f9fafb;
  }

  table tbody tr:nth-child(odd) {
    background-color: rgb(222, 245, 229);
  }
</style>
<table>
  <thead>
    <tr>
      <?php
      function mapHeader($data)
      {
        echo "<td>$data</td>";
      }

      array_map("mapHeader", $headerData);
      ?>
    </tr>
  </thead>
  <tbody>
    <?php while ($row = mysqli_fetch_assoc($rowData)) { ?>
      <tr>
        <td><?= $row['nik'] ?></td>
        <td><?= $row['nama_anak'] ?></td>
        <td><?= $row['usiaTahun'] ?> tahun <?= $row['usiaBulan'] ?> bulan</td>
        <td><?= $row['bb'] ?> kg</td>
        <td><?= $row['tb'] ?> cm</td>
        <td><?= $row['nama_ayah'] ?></td>
        <td><?= $row['nama_ibu'] ?></td>
        <td>
          <?= $row['alamat_jalan'] ?>
          RT.<?= $row['alamat_rt'] ?>
          RW.<?= $row['alamat_rw'] ?>
          No.<?= $row['alamant_no'] ?>
        </td>
        <td class="flex flex-col">
          <a href="<?= BASEURL ?>public/pengkinian/balita/ubah/<?= $row['nik'] ?>" class="cursor-pointer bg-secondary-10 px-3 py-2 rounded-lg font-semibold mb-3 text-center">
            Ubah
          </a>
          <a href="<?= BASEURL ?>public/pengkinian/balita/hapus/<?= $row['nik'] ?>" class="cursor-pointer px-3 py-2 rounded-lg font-semibold text-center text-white" style="background-color: rgb(220 38 38);">
            Hapus
          </a>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>