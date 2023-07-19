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
     <?= $row['nik'] ?>
    </td>
    <td>
     <?= $row['nama'] ?>
    </td>
    <?php if (isset($row['no_tlp'])) : ?>
     <td><?= $row['no_tlp'] ?></td>
    <?php endif; ?>
    <td><?= $row['no_urut'] ?></td>
    <td><?= $row['status'] ?></td>
    <?php if (isset($row['no_tlp'])) : ?>
     <td>
      <a href="<?= BASEURL ?>public/pelayanan/inputibuhamil/<?= $row['nik'] ?>/<?= $row['id'] ?>/<?= $id ?>" class="cursor-pointer bg-primary-30 px-3 py-2 rounded-lg font-semibold mb-3 text-center text-white">
       Submit
      </a>
     </td>
    <?php endif; ?>
    <?php if (!isset($row['no_tlp'])) : ?>
     <td>
      <a href="<?= BASEURL ?>public/pelayanan/inputbalita/<?= $row['nik'] ?>/<?= $row['id'] ?>/<?= $id ?>" class="cursor-pointer bg-primary-30 px-3 py-2 rounded-lg font-semibold mb-3 text-center text-white">
       Submit
      </a>
     </td>
    <?php endif; ?>

   </tr>
  <?php } ?>
 </tbody>
</table>