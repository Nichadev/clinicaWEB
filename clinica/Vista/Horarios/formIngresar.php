<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form action="preparar.php" method="POST">
        <label for="id">Identificador</label>
        <input type="number" readonly name="id" value="0"> 

        <br>
        
        <label for="descripcion">Descripcion</label>
        <input type="text" name="descripcion" value="">

        <br>

        <label for="orden">Orden</label>
        <input type="number" name="orden" min="1" value="1" >

        <hr>

        <input type="submit" name="boton_nuevo" value="guardar">
    </form>
</body>
</html>