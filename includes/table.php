<?php 
include "dbh.inc.php";
$tableQuery= "SELECT * FROM `payments` ORDER BY ID DESC LIMIT 10";
$tableRow = mysqli_query($conn,$tableQuery);

          if(mysqli_num_rows($tableRow)>0){
              foreach($tableRow as $row){
              ?>
          <tr>
              <td><?php echo $row['ID']?></td>
              <td><?php echo $row['Name']?></td>
              <td><?php echo $row['Email']?></td>
              <td><?php echo $row['Address']?></td>
              <td><?php echo $row['PaymentMethod']?></td>
              <td><?php echo $row['Courier']?></td>
              <td><?php echo $row['Status']?></td>
          </tr>
          <?php
              }
          }
          else{
              ?>
                  <tr>
                  <td>No record</td>
                  </tr>
          <?php
              }
