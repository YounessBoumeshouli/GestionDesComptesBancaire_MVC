<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    
<?php


include("connexion.php");

if (isset($_POST["nom"],$_POST["prenom"],$_POST["genre"],$_POST["datenaissance"],$_POST["nationalite"])) {
    $nom = mysqli_real_escape_string($con, $_POST["nom"]);
    $prenom = mysqli_real_escape_string($con, $_POST["prenom"]);
    $genre = mysqli_real_escape_string($con, $_POST["genre"]);
    $datenaissance = mysqli_real_escape_string($con, $_POST["datenaissance"]);
    $nationalite = mysqli_real_escape_string($con, $_POST["nationalite"]);
   $queryCheck = "SELECT * FROM client where nom = '$nom' and prenom = '$prenom' and genre = $genre and nationalite = '$nationalite'";
   $resultCheck = mysqli_query($con, $queryCheck);
   if (mysqli_num_rows($resultCheck) == 0) {
    $query = "INSERT INTO client (nom, prenom, genre, datenaissance, nationalite) VALUES (?, ?, ?, ?, ?)";
    $stmt = $con->prepare($query);
    $stmt->bind_param("ssiss", $nom, $prenom, $genre, $datenaissance, $nationalite);
    if ($stmt->execute()) {
        $id = $con->insert_id;

      echo "<h1>welcome".$nom ." ".$prenom."</h1> <br>";
        echo "<a href='http://localhost/demo/addBankAccount.php?id=$id'>do you want to create a bank account?</a>";

    } else {    
        echo "Data insertion failed: " . $stmt->error;
    }

    
    $stmt->close();
    $con->close();
   }else{
    echo "you already have an account";
    echo "<a href='http://localhost/demo/inscrire.html'>Login to your account</a>";
   }

} else {
    echo "All fields are required!";
}


?>

</body>
</html>