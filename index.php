<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles.css">
        <title>Prueba Hostienda</title>
    </head>
    <body> 
        <!-- NAVIGATION -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapse" aria-controls="collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                </ul>

                <form class="form-inline my-2 my-lg-0">
                    <div class="input-group">
                        <input id="search" class="form-control" type="search" placeholder="Search" aria-label="Search">
                    </div>
                </form>

            </div>
        </nav><!-- NAVIGATION -->
        <!-- DIV PRINCIPAL -->
        <div class="principal container">
            <!-- boton agregar -->
            <div class="row mt-2">
                <div class="fixed-btn">
                    <button id="btn-agregar" class="btn btn-success btn-lg" >+</button>
                </div>
            </div><!-- boton agregar -->
            <div class="row mt-2">
            <!-- tabla -->
            <div class="col">
                <table id="tabla_usuarios" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">NOMBRE</th>
                            <th class="text-center">APELLIDO</th>
                            <th class="text-center">EDAD</th>
                            <th class="text-center">OPCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table><!-- tabla -->
            </div>
            <div id="form">
                <!-- Formulario oculto --> 
                <div id='form-agregar' class='hidem'>
                    <div class='card card-body'>
                        <h5 class='text-center card-header'>Agregar Nuevo</h5>
                            <input class='form-control mb-1' type='text' name='nombre' id='nombre' placeholder='Nombre' required>
                            <input class='form-control mb-1' type='text' name='apellido' id='apellido' placeholder='Apellido' required>
                            <input class='form-control mb-1' type='date' name='fecha' id='fecha' required>
                            <input class='form-control mb-1' type='email' name='correo' id='correo' placeholder='Correo' required>
                            <select class='form-control' name='sexo'  id='sexo'>
                                <option value='M'>Mujer</option>
                                <option value='H'>Hombre</option>
                            </select>
                            <div class='card-footer text-center'>
                                <button id='guardar' class='btn btn-outline-info btn-md'>Guardar</button>
                                <button id='cancelar' class='btn btn-outline-danger btn-md'>Cancelar</button>
                            </div>
                    </div>
                </div><!-- Formulario oculto -->
            </div>
        </div><!-- DIV PRINCIPAL -->

            <script src="js/jquery.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
            <script src="js/main.js"></script>
    </body>
</html>