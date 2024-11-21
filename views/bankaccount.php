<?php
$title = "Bank account de client";

ob_start()  
?>
  
<table border="1">
<tr>
    
    <th>nom</th>
    <th>prenom</th>
    <th>Balance</th>
    <th>devise</th>
    
   
</tr>
<?php
while ($row = mysqli_fetch_assoc($result)) {
    
   ?>
    <td><?=$row["nom"]?></td>
    <td><?=$row["prenom"]?></td>
    <td><?=$row["balance"]?></td>
    <td><?=$row["devise"]?></td>
    <td><a href="index.php?action=transaction&id=<?=$row["id"]?>">Start a transaction</a></td>
</tr>

   <?php
}

?>
</table>
<?php $content = ob_get_clean()?>
<?php include_once("views/layout.php");?>