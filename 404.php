<?php 
    header("HTTP/1.0 404 Not Found");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>error 404</title>
</head>
<body>
<?php
    include("headfoot/header.php");
?>
    <div class="error404">
        <h1>Ce que vous cherchez n'existe pas (ou plus)</h1>
        <a href="index.php" class="btnpc">Retour</a>
    </div>
    <?php
        include("headfoot/footer.php");
    ?>
</body>
</html>