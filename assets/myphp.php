<?php
if(isset($_FILES['fileToUpload'])){
    $tmpName = $_FILES['fileToUpload']['tmp_name'];
    $name = $_FILES['fileToUpload']['name'];
    $size = $_FILES['fileToUpload']['size'];
    $error = $_FILES['fileToUpload']['error'];

    $tabExtension = explode('.', $name);
    $extension = strtolower(end($tabExtension));

    $extensions = ['jpg', 'png', 'jpeg', 'gif'];
    $maxSizeb = 1000000;

    if(in_array($extension, $extensions)){
        if($error == 0){
            if($size <= $maxSizeb){
                $file = uniqid() .'.'.$extension;
                if(isset($_POST['SUBMIT'])){
                    move_uploaded_file($tmpName, "./img/$file");
                    $isupload = "le fichier $name a bien été uploadé sous le nom $file.";
                }
            } else {
                $toobig = "Désolé, votre fichier doit faire moins de 1 Mo.";
                $errormsg = "Votre fichier n' a pas été upload.";
            }
        }  
    } else if ($error == 4) {
        $errorfile = "Veuillez selectionner une image.";

    } else {
        $notimg = "Le fichier n'est pas une image (extensions acceptées : jpg, png, jpeg, gif).";
        $errormsg = "Votre fichier n' a pas été upload.";
    }
}
?>