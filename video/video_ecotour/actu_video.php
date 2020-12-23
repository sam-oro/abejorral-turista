<?php
include '../../conexion/conexion.php';

$nombre = $_POST['nombre'];

//Evalua si el campo del URL esta vacio para validar si se guarda un url o una ruta de directorio
if ($_POST['url'] != "") {
    //Si se URL no esta vacio
    $url=$_POST['url'];

    //Se reemplaza el indicador "watch?v=" por "embed/" para que el video se inserte correctamente
    $varPHP = str_replace('watch?v=', 'embed/', $url);

    //Se realiza la consulta de UPDATE para el video del Index
    $up = $conn -> query("UPDATE tblvideo SET Nombre='$nombre', url='$varPHP' WHERE cod='2'");

    if ($up) {
        echo "<script> 	alert('Video actualizado correctamente');</script>";
        echo "<script> 	location.href='../../vistas/ecotour/ecotour.php'; </script>";
    }
    else{
        echo "<script> 	alert('No se pudo actaulizar el video');</script>";
        echo "<script> 	location.href='../../vistas/ecotour/ecotour.php'; </script>";
    }
}else{
    //Si URL esta vacio se toman los datos que traiga del selector de ficheros
    $nombv = $_FILES['video']['name'];
    $guardado = $_FILES['video']['tmp_name'];

    //Evalua si el directorio donde se guardaran los videos existe
    if(!file_exists('videos')){

        //Si el directorio no existe es creado automaticamente
        mkdir('videos',0777,true);

        //Vuelve a evaluar si existe el directorio para despues guardar el video en el
        if(file_exists('videos')){

            //Guarda una copia del video seleccionado en el directorio, si se guardo correctamente se realiza la consulta de UPDATE para el video, si no saca un mensaje
            if (move_uploaded_file($guardado, 'videos/'.$nombv)) {

                //Renombra el video para que tenga el nombre de la pagina en la que va a ir ubicada
                rename( 'videos/'.$nombv, 'videos/ecotour.mp4');
                echo "Archivo Guardado con exito";

                $varPHP="../../video/video_ecotour/videos/ecotour.mp4";
                $up = $conn -> query("UPDATE tblvideo SET Nombre='$nombre', url='$varPHP' WHERE cod='2'");

                if ($up) {
                    echo "<script> 	alert('Video actualizado correctamente');</script>";
                    echo "<script> 	location.href='../../vistas/ecotour/ecotour.php'; </script>";
                }
                else{
                    echo "<script> 	alert('No se pudo actaulizar el video');</script>";
                    echo "<script> 	location.href='../../vistas/ecotour/ecotour.php'; </script>";
                }
            }else{
                echo "Archivo no se pudo guardar ya sea por el tamaño o porque la extenxion no es .mp4";
            }
        }
    }else{
        if(move_uploaded_file($guardado, 'videos/'.$nombv)) {
            rename( 'videos/'.$nombv, 'videos/ecotour.mp4');
            echo "Archivo Guardado con exito";

            $varPHP="../../video/video_ecotour/videos/ecotour.mp4";
            $up = $conn -> query("UPDATE tblvideo SET Nombre='$nombre', url='$varPHP' WHERE cod='2'");

            if ($up) {
                echo "<script> 	alert('Video actualizado correctamente');</script>";
                echo "<script> 	location.href='../../vistas/ecotour/ecotour.php'; </script>";
            }
            else{
                echo "<script> 	alert('No se pudo actaulizar el video');</script>";
                echo "<script> 	location.href='../../vistas/ecotour/ecotour.php'; </script>";
            }
        }else{
            echo "Archivo no se pudo guardar ya sea por el tamaño o porque la extenxion no es .mp4";
        }
    }
}
?>
