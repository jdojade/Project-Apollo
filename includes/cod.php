<?php
include_once "dbh.inc.php";
$rows = mysqli_query($conn, "SELECT ID FROM `payments` WHERE PaymentMethod = 'COD' order by PaymentMethod");
$ovrall = mysqli_num_rows($rows);
?>
<h5>COD</h5>
<h4><?php echo $ovrall?></h4>

