<?php
include_once "dbh.inc.php";
$rows = mysqli_query($conn, "SELECT * FROM `payments` ORDER BY ID DESC LIMIT 10");
?>
  <?php foreach($rows as $row) : ?>
    <tr>
      <td><?php echo $row["ID"]; ?></td>
      <td><?php echo $row["Name"]; ?></td>
      <td><?php echo $row["Email"]; ?></td>
      <td><?php echo $row["Address"]; ?></td>
      <td><?php echo $row["PaymentMethod"]; ?></td>
      <td><?php echo $row["Courier"]; ?></td>
      <td><?php echo $row["Status"]; ?></td>
    </tr>
  <?php endforeach; ?>
