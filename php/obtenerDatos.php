<?php
    
    if(!isset($_POST['query']) || $_POST['query'] == '' ){
        $query = 'SELECT * FROM tabla ORDER BY id';
    }else{
        $query = $_POST['query'];          
    }
    include('db.php');

    $result = $conn->query($query);
    $resp = "";

    if(!$result){
        $resp.="<div class='alert alert-danger alert-dismissible fade show mt-3' role='alert'>
                    Ha ocurrido un error!
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>";
    }
    if($result->num_rows == 0){
        $resp.="<div class='alert alert-danger alert-dismissible fade show mt-3' role='alert'>
                    No se encontraron resultados!
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>";
    }else{
        while($row = $result->fetch_array()){
            $resp.=  "<tr>
                        <td id='id' class='text-center'>".$row[0]."</td>
                        <td id='nombre' class='text-center'>".$row[1]."</td>
                        <td id='apellido' class='text-center'>".$row[2]."</td>
                        <td id='edad' class='text-center'>".(((int)date('Y'))-(int)$row[3])."</td>
                        <td id='opciones' class='text-center'>
                                <button id='btn-detalles' class='btn btn-outline-info'><i class='far fa-eye'></i></button>
                                <button id='btn-modificar' class='btn btn-outline-success'><i class='far fa-edit'></i></button>
                                <button id='btn-eliminar' class='btn btn-outline-danger' onclick='eliminar(this);'><i class='far fa-trash-alt'></i></button>               
                        </td>
                      </tr>";
        }
    }
    echo $resp;
?>