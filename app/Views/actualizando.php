<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<body>
    <div class="container"><br> <br>
        <div class="container-fluid">
            <h1>Actualizar Datos del Paciente</h1>
            <form action="<?= base_url('factualizar'); ?>" method="POST">
                <div class="form-group">
                    <input type="number" hidden name="ID" value="<?=$paciente['ID'] ?>">
                    <label for="exampleInputEmail1">nombre del paciente</label>
                    <input type="text" class="form-control" id="nombreP" name="nombreP" value="<?= $paciente['NombreP'] ?>" required aria-describedby="emailHelp">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">apellido del paciente</label>
                    <input type="text" class="form-control" id="apellidoP" name="apellidoP" value="<?= $paciente['ApellidoP'] ?>" required aria-describedby="emailHelp">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">fecha de  Nacimiento del paciente</label>
                    <input type="date" class="form-control" id="FechaNacimientoP" name="fechaNaciP" value="<?= $paciente['FechaNacimientoP'] ?>" required aria-describedby="emailHelp">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Genero del paciente</label>
                    <input type="text" class="form-control" id="GeneroP" name="GeneroP" value="<?= $paciente['GeneroP']?>" required aria-describedby="emailHelp">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Direccion del paciente</label>
                    <input type="text" class="form-control" id="DireccionP" name="DireccionP" value="<?= $paciente['DireccionP']?>" required aria-describedby="emailHelp">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Telefono del paciente</label>
                    <input type="number" class="form-control" id="TelefonoP" name="TelefonoP" value="<?= $paciente['TelefonoP']?>" required aria-describedby="emailHelp">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Correo del paciente</label>
                    <input type="text" class="form-control" id="EmailP" name="EmailP" value="<?= $paciente['EmailP']?>" required aria-describedby="emailHelp">
                </div>

                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>

        </div>
    </div>

</body>

</html>