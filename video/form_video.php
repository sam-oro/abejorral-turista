
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cambio de video</title>
</head>
<body>
<form action="actu_video.php" method="POST" enctype="multipart/form-data">

<label>Nombre</label><br>
<input type="text" name="nombre"><br><br>
<fieldset>
<legend>video</legend>
<p>Si inserta el video con un URL no es necesario que seleccione un video desde su dispositivo y viceversa</p>
<label>URL Video</label><br>
<input type="text" name="url"><br><br>
<label>Seleccionar Video</label><br>
<input type="file" name="video"><br><br>
</fieldset>
<input type="submit" value="actualizar" name="submit">
</form>

</body>
</html>