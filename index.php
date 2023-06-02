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
        <div id="liste-oeuvres">
            <?php
            include 'artworks.php';

            foreach ($artworks as $artwork) {
                $id = $artwork[0];
                $image = $artwork[1];
                $title = $artwork[2];
                $artist = $artwork[3];
                $description = $artwork[4];

                echo "<article class=\"oeuvre\">
                    <a href=\"details.php?id=" . $id . "\">
                        <img src=\"$image\" alt=\"$title\">
                        <h2>$title</h2>
                        <p class=\"description\">$artist</p>
                    </a>
                </article>";
            }
            ?>
        </div>
    </main>
    <?php include 'footer.php'; ?>
</body>

</html>