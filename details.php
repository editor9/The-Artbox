<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>
<body>
    <?php include 'header.php'; ?>
    <main>
    <?php
    if (!isset($_GET['id'])) {
        echo 'Sélectionner une œuvre sur la page Accueil';
        return;
    }
    include 'artworks.php';
    $id = $_GET['id'];
    
    foreach ($artworks as $a) {
        if ($id == $a[0]) {
            echo "<article id=\"detail-oeuvre\">
                    <div id=\"img-oeuvre\">
                        <img src=\"$a[1]\" alt=\"$a[2]\">
                    </div>
                    <div id=\"contenu-oeuvre\">
                        <h1>$a[2]</h1>
                        <p class=\"description\">$a[3]</p>
                        <p class=\"description-complete\">$a[4]</p>
                    </div>
                </article>";
            break; 
        }
    }
    ?>
</main>
<?php include 'footer.php'; ?>

    </body>
    </html>  