<?php
include_once "dbh.inc.php";
$rows = mysqli_query($conn, "SELECT ID FROM `payments` WHERE PaymentMethod = 'E-Wallet' order by PaymentMethod");
$ovrall = mysqli_num_rows($rows);
?>
<h5>E-WALLET </h5>
<h4><?php echo $ovrall?></h4>