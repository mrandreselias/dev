<?php
    
    $resp="";

    if(!isset($_POST)){
        $resp .="<div class='alert alert-warning alert-dismissible fade show mt-3' role='alert'>
                    Ha ocurrido un error
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>";
    }else{
       
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $fecha = $_POST['fecha'];
        $correo = $_POST['correo'];
        $sexo = $_POST['sexo'];

        include('db.php');
        $query = "INSERT INTO tabla(nombre,apellido,fecha_nacimiento,correo,sexo) 
                  VALUES('$nombre','$apellido','$fecha','$correo','$sexo')";

        $result = $conn->query($query);
        if(!$result){
            $resp.="<div class='alert alert-warning alert-dismissible fade show mt-3' role='alert'>
                        Ha ocurrido un error al guardar
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>";
        }else{
            $resp.="<div class='alert alert-success alert-dismissible fade show mt-3' role='alert'>
                        Se ha Guardado correctamente
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>";
        }
    
    }
    echo $resp;
?>