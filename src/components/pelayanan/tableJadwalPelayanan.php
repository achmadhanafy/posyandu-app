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
        <td><?= $row['id'] ?></td>
        <td>
          <a class="underline underline-offset-2" href="<?= BASEURL ?>public/pelayanan/detail/<?=$row['tipe_pelayanan'] ?>/<?=$row['id']?>">
            <?= $row['pelayanan'] ?>
          </a>
        </td>
        <td><?= $row['alamat'] ?></td>
        <td><?= $row['catatan'] ?></td>
        <td><?= $row['total_peserta'] ?> Orang</td>
        <td><?= $row['tgl_layanan'] ?></td>
      </tr>
    <?php } ?>
  </tbody>
</table>