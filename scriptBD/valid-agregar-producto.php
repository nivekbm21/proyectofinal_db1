<?php
$target_dir = "../img/";
$target_file = $target_dir . basename($_FILES["imagen"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["imagen"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" && $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG"
&& $imageFileType != "GIF"  ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file)) {
        include 'dbConnection.php';
        $connexion= new conexion;
        $sql = 'INSERT INTO Producto(`Codigo_Producto`,`Caracteristica`,`Nombre`,`Precio`,`Descripcion`,`Existencia`,`Estado`,`Cod_Marca`,`Cod_Categoria`,`Foto_Principal`) VALUES ("' . $Codigo_Producto . '","' . $Caracteristica . '","' . $Nombre . '","' . $Precio . '","' . $Descripcion . '","' . $Existencia . '","' . $Estado. '","' . $Cod_Marca . '","' . $Cod_Categoria . '","' . $Foto_Principa . '")';
        
        $servicios=$connexion-> $sql( $_POST["Codigo_Producto"],$_POST["Caracteristica"],$_POST["Nombre"],$_POST["Precio"],$_POST["Descripcion"],$_POST["Existencia"],$_POST["Estado"],$_POST["Cod_Marca"],$_POST["Cod_Categoria"],"img/".basename( $_FILES["imagen"]["name"]));


        header('Location: ../index.php');
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>