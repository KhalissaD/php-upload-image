<?php require 'assets/myphp.php' ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Exercice PHP form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col text-center">
                <h1 class="display-3 my-5">Module d'enregistrement d'images</h1>
            </div>
        </div>

        <div class="row py-5">
            <div class="col heightPanel text-center">
                <h2 class="mb-5">Récupérer une image avec $_FILES</h1>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div><input class="my-1 btn btn-secondary" type="file" name="fileToUpload" id="fileToUpload"></div>
                        <div><input class="my-1 btn btn-primary" type="submit" name="SUBMIT" value="UPLOAD"></div>
                        <div><?= $isupload ?? '' ?></div>
                        <div><?= $errorfile ?? '' ?></div>
                        <div><?= $toobig ?? '' ?></div>
                        <div><?= $notimg ?? '' ?></div>
                        <div><?= $errormsg ?? '' ?></div>
                    </form>
            </div>
            <div class="col">
                <img id="imgPreview">
            </div>
        </div>
    </div>
    <script src="assets/script.js"></script>
</body>

</html>