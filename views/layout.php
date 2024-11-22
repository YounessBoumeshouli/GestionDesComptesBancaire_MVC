<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <nav  class="w-full h-16 bg-red-400 flex items-center justify-around ">
        <a href="index.php?action=list">List des Comptes</a>
        <a href="index.php?action=listClient">listes des Clients</a>
        <a href="index.php?action=create">Ajouter un Client</a>
    </nav>
    <h1><?= $title ?></h1>
 
<?=$content?>
</body>
</html>