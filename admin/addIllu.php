<?php 
    session_start();
    if(!isset($_SESSION['login']))
    {
        header("LOCATION:../403.php");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>add illustration</title>
</head>
<body>
    <?php
        include("partials/header.php");
    ?>
    <div class="container">
        <h2>Ajouter une illustration</h2>
        <a href="illustration.php" class='btn btn-secondary'>Retour</a>
        <?php
            if(isset($_GET['error']))
            {
                echo "<div class='alert alert-danger my-3'>Une erreur est survenue (code erreur: ".$_GET['error']." )</div>";
            }
        ?>
        <form action="treatmentAddIllu.php" method="POST" enctype="multipart/form-data">
            <div class="form-group my-3">
                <label for="nom">Nom de l'illustration </label>
                <input type="text" id="nom" name="nom" value="" class="form-control">
            </div>
            <div class="form-group my-3">
                <label for="categorie">Catégorie: </label>
                <select name="categorie" id="categorie" class="form-control">
                    <option value="Photoshop">Photoshop</option>
                    <option value="Illustrator">Ilustrator</option>
                    <option value="Indesign">Indesign</option>
                    <option value="Photo">Photo</option>
                </select>
            </div>
            <div class="form-group my-3">
                <label for="image">Image: </label>
                <input type="file" name="image" id="image" class="form-control">
            </div>
            <div class="form-group my-3">
                <label for="description">Description:</label>
                <textarea name="description" id="description" class="form-control"></textarea>
            </div>
            <div class="form-group my-3">
                <label for="date">Date: </label>
                <input type="date" name="date" id="date" class="form-control">
            </div>  
            <div class="form-group my-3">
                <input type="submit" value="Ajouter" class="btn btn-success">
            </div>
        </form>
    </div>
    <?php include('partials/footer.php'); ?>
</body>
</html>