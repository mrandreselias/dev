<?php
    $id = $_POST['id']; 
    include('db.php');
    $query = "DELETE  FROM tabla WHERE id = $id";
    $result = $conn->query($query);
    $resp ="";

    if(!$result){
        $resp.= "<div class='alert alert-danger alert-dismissible fade show mt-3' role='alert'>
                        No se pudo Eliminar
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                </div>";
    }else{
        $resp.= "<div class='alert alert-success alert-dismissible fade show mt-3' role='alert'>
                     Se ha Eliminado correctamente
                     <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                         <span aria-hidden='true'>&times;</span>
                    </button>
                 </div>";
    }
    echo ($resp);

?>