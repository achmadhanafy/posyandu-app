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
    background-color: #9CC0E7;
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
    background-color: #EEEEEE;
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
        <td><?= $row['nama'] ?></td>
        <td><?= $row['tgl_lahir'] ?></td>
        <td><?= $row['tgl_hpl'] ?></td>
        <td><?= $row['faskes'] ?></td>
        <td>
          <?= $row['alamat_jalan'] ?>
          RT.<?= $row['alamat_rt'] ?>
          RW.<?= $row['alamat_rw'] ?>
          No.<?= $row['alamat_no'] ?>
        </td>
        <td><?= $row['nama_suami'] ?></td>
        <td><?= $row['no_tlp'] ?></td>
        
      </tr>
    <?php } ?>
  </tbody>
</table>