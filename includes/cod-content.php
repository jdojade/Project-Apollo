<?php
include "dbh.inc.php";
$totalQuery = "SELECT ID FROM `payments` WHERE PaymentMethod = 'COD' order by PaymentMethod";
$totalRecruitment = mysqli_query($conn,$totalQuery);

$ovrall = mysqli_num_rows($totalRecruitment);
echo $ovrall;
?> 

<h5>E-WALLET </h5>
                <h4>0</h4>