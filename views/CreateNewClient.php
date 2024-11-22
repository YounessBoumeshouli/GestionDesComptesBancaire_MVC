<?php

$id = $_GET["id"];
$title = "add Client for Account ".$id;
ob_start()  
?>
<form action="index.php?action=CreateNewClient&id=<?=$id?>" method="post">

    <input type="submit" class="bg-green-300" value="add a client for this  account">
    <a href="index.php" >back to home Page</a>
</form> 
<?php $content = ob_get_clean()?>
<?php include_once("views/layout.php");?>