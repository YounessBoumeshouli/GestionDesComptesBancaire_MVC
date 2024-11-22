<?php
$title = "List des stagiares";

ob_start()  
?>
   <a href="index.php?action=create">ajouter Client</a>
<table border="1" class="w-full">
<tr>
    
    <th>nom</th>
    <th>prenom</th>
    <th>genre</th>
    <th>nationnalite</th>
    <th>datedenaissance</th>
    <th>balance</th>
    <th></th>
    <th></th>
</tr>
<?php
while ($row = mysqli_fetch_array($result)) {
   if( $row["genre"] ==  "1" ) $genre = "homme"; else $genre = "femme" ;    
   if( $row["nom"] ==  null ) $class = "bg-red-400 border "; else  $class = "bg-green-400" ;    
   ?>
<tr class="<?=$class?>">

    <td><?=$row["nom"]?></td>
    <td><?=$row["prenom"]?></td>
    <td><?= $genre ?></td>
    <td><?=$row["nationalite"]?></td>
    <td><?=$row["datenaissance"]?></td>
    <td><?=$row["balance"]?></td>

    <td><a href="index.php?action=bankAccount&id=<?=$row['CompteID']?>">Check the bank account</a></td>
    <?php  if( $row["nom"] ==  null ) {
      printf(" <td><a href='index.php?action=createClient&id=%d'>Complete registring</a></td>",$row['CompteID']) ;
    }else{
      echo " <th>Completed</th>";
    }
     ?>
</tr>

   <?php
}

?>
</table>
<?php $content = ob_get_clean()?>
<?php include_once("views/layout.php");?>