<?php
$title = "List des stagiares";

ob_start()  
?>
   <a href="index.php?action=create">ajouter Compte</a>
<table border="1">
<tr>
    
    <th>nom</th>
    <th>prenom</th>
    <th>genre</th>
    <th>nationnalite</th>
    <th>datedenaissance</th>
    <th></th>
    <th></th>
</tr>
<?php
while ($row = mysqli_fetch_array($result)) {
   if( $row["genre"] ==  "1" ) $genre = "homme"; else $genre = "femme" ;    
   ?>
    <td><?=$row["nom"]?></td>
    <td><?=$row["prenom"]?></td>
    <td><?= $genre ?></td>
    <td><?=$row["nationalite"]?></td>
    <td><?=$row["datenaissance"]?></td>
    <td><a href="index.php?action=edite&id=<?=$row['id']?>">modifier</a></td>
    <td><a href="index.php?action=delete&id=<?=$row['id']?>">supprimer</a></td>
    <td><a href="index.php?action=bankAccount&id=<?=$row['id']?>">Check the bank account</a></td>
</tr>

   <?php
}

?>
</table>
<?php $content = ob_get_clean()?>
<?php include_once("views/layout.php");?>