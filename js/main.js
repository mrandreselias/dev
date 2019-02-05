
$('document').ready(function(){
    var estate = 'on';
    //cargarDatos();
    //Funcion para mantener latabla actualizada ante cualquier cambio 
    setInterval(function(){
        if(estate == 'off'){
            clearInterval();
        }else{
            cargarDatos();
        }

    },1000); 
    //busqueda en tiempo real 
    $("#search").keyup(function(){
        var query ="";
        if($(this).val().trim() == '' ){
            query ="";
            estate = 'on';
        }else{  
            var arg = $(this).val().trim();  
            query = "SELECT * FROM tabla WHERE nombre LIKE '%"+arg+"%' OR apellido LIKE '%"+arg+"%'";
            estate = 'off';
        }
        loadData(query);
    }); 
    //llamada al boton agregar para mostrar el formulario
    $(".principal").find("#btn-agregar").click(function(){
        
        $(".principal").find("#form").attr("class","col container");
        $(".principal").find("#btn-agregar").attr("class","btn btn-outline-success disabled");

    });
    //llamada al boton cancelar para ocultar el formulario
    $(".principal").find("#form").find("#form-agregar").find("#cancelar").click(function(){
        $(".principal").find("#tabla_usuarios").attr("class","table table-bordered table-hover");
        $(".principal").find("#form-agregar").attr("class","hidem");
        $(".principal").find("#btn-agregar").attr("class","btn btn-success");
    });
    //llamada al boton guardar para ejecutar la funcion insertar
    $(".principal").find("#form-agregar").find("#guardar").click(function(){
        
        var nombre = $("#form-agregar").find("#nombre").val().trim();
        var apellido = $("#form-agregar").find("#apellido").val().trim();
        var fecha = $("#form-agregar").find("#fecha").val();
        var correo = $("#form-agregar").find("#correo").val();
        var sexo = $("#form-agregar").find("#sexo").val();
        
       if(nombre ==''||apellido == ''||!fecha){
                alert("Debe completar todos los campos!");
        }else{
            insertar({
                'nombre': nombre,
                'apellido': apellido,
                'fecha': fecha,
                'correo': correo,
                'sexo': sexo,
            });
            $("#form-agregar").find("#nombre").val("");
            $("#form-agregar").find("#apellido").val("");
            $("#form-agregar").find("#fecha").val("");
            $("#form-agregar").find("#correo").val("");
            $("#form-agregar").find("#sexo").val("");
            $(".principal").find("#tabla_usuarios").attr("class","table table-bordered table-hover");
            $(".principal").find("#form-agregar").attr("class","hidem");
        }
        
    });
});

//funcion para la busqueda por el evento keyup
function loadData(query){ 
    $.ajax({
        type: "POST",
        url: "php/obtenerDatos.php",
        data: {query: query},
        dataType: "html",
        success: function (resp) {
            $('#tabla_usuarios').find('tbody').html($(resp));
        }
    });
}
//funcion para cargar datos en la tabla
function cargarDatos(){
    $.ajax('php/obtenerDatos.php')
    .done(function(res){
        $('#tabla_usuarios').find('tbody').html($(res));
    });
}
//funcion para insertar nuevos elementos a la bd
function insertar(obj){
    $.ajax({
        type:"POST",
        url: "php/agregar.php",
        data: obj,
        dataType: "html",
        success: function (resp){
            $('.principal').prepend($(resp));
        }
    });
}
//funcion para eliminar un elemento
function eliminar(element){
    var id = $(element).parent().parent().find('#id').text();
    var op = confirm('Estas Seguro de Eliminar ?');
    if(op == true){
        $.ajax({
            type: "POST",
            url: "php/eliminar.php",
            data: {id: id},
            dataType: "html",
            success: function (resp){
                $('.principal').prepend($(resp));
            }
        });
    }else{
        return;
    }
}
