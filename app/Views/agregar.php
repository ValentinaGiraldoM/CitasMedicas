<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>agregar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<body>
    <div class="container"><br> <br>
        <div class="container-fluid">
            <h1>Agregar datos del paciente</h1>
            <form action="insertar" method="POST">
                <div class="form-group">
                    <input type="number" hidden name="ID">
                    <label for="exampleInputEmail1">nombre del paciente</label>
                    <input type="text" class="form-control" id="nombreP" name="nombreP"  required aria-describedby="emailHelp">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">apellido del paciente</label>
                    <input type="text" class="form-control" id="apellidoP" name="apellidoP"  required aria-describedby="emailHelp">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">fecha de  Nacimiento del paciente</label>
                    <input type="date" class="form-control" id="FechaNacimientoP" name="fechaNaciP" required aria-describedby="emailHelp">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Genero del paciente</label>
                    <input type="text" class="form-control" id="GeneroP" name="GeneroP" required aria-describedby="emailHelp">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Direccion del paciente</label>
                    <input type="text" class="form-control" id="DireccionP" name="DireccionP" required aria-describedby="emailHelp">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Telefono del paciente</label>
                    <input type="number" class="form-control" id="TelefonoP" name="TelefonoP" required aria-describedby="emailHelp">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Correo del paciente</label>
                    <input type="text" class="form-control" id="EmailP" name="EmailP" required aria-describedby="emailHelp">
                </div>

                <button type="submit" class="btn btn-primary">Agregar</button>
            </form>
        </div>
    </div>

</body>

</html>