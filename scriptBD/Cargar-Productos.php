<?php
    include"../conexion.php";
    if(isset($_POST['submit']))
    {
        //Aquí es donde seleccionamos nuestro csv
         $fname = $_FILES['archivo']['name'];
         echo 'Cargando nombre del archivo: '.$fname.' ';
         $chk_ext = explode(".",$fname);
         
         if(strtolower(end($chk_ext)) == "csv")
         {
             //si es correcto, entonces damos permisos de lectura para subir
             $filename = $_FILES['archivo']['tmp_name'];
             $handle = fopen($filename, "r");
        
             while (($data = fgetcsv($handle, 1000, ";")) !== FALSE)
             {
               //Insertamos los datos con los valores...
                $query = sqlsrv_query($conn,"INSERT INTO Producto (Caracteristica,Nombre,Precio,Descripcion,Existencia,Estado,Cod_Marca,Cod_Categoria) values ('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]')");
                
             }
             //cerramos la lectura del archivo "abrir archivo" con un "cerrar archivo"
             fclose($handle);
             echo "Importación exitosa!";
             
         }
         else
         {
            //si aparece esto es posible que el archivo no tenga el formato adecuado, inclusive cuando es cvs, revisarlo para             //ver si esta separado por " , "
             echo "Archivo invalido!";
         }   
    }
     
    ?>