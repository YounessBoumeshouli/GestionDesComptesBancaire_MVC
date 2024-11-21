<?php
$title = "Delete Account";
$id = $_GET["id"];
ob_start()  
?>
<form action="delete.php?id=<?=$id?>" method="post">

    <input type="submit" value="delete account">
    <a href="index.php" >back to home Page</a>
</form> 
<?php $content = ob_get_clean()?>
<?php include_once("views/layout.php");?>