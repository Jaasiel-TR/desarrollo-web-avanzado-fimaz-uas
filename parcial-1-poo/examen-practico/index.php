<?php

// Importar las clases necesarias
require_once "clases/Admin.php";
require_once "clases/Alumno.php";

// Arreglo donde se almacenarán los usuarios válidos
$usuarios = [];


// Creación de un administrador válido
try{

    $admin01 = new Admin("john", "john117@gmail.com");
    $usuarios[] = $admin01;

}catch(Exception $e){

    // Mensaje de error controlado
    echo "<p style='color:red;'>Error controlado: {$e->getMessage()}</p>";

}


// Creación de un alumno válido
try{

    $alumno01 = new Alumno("Jaasiel Efrain Torrero Rojo", "jasieltorrero6@gmail.com", "117");
    $usuarios[] = $alumno01;

}catch(Exception $e){

    echo "<p style='color:red;'>Error controlado: {$e->getMessage()}</p>";

}


// Usuario con correo inválido para probar la excepción
try{

    $alumno02 = new Alumno("Jesus", "jesus#gmail,com", "123");
    $usuarios[] = $alumno02;

}catch(Exception $e){

    echo "<p style='color:red;'>Error controlado: {$e->getMessage()}</p>";

}


// Inicio de la tabla HTML
echo <<<HTML

<style>

table{
    border-collapse: collapse;
}

table, th, td{
    border:1px solid black;
}

th, td{
    padding:5px;
    text-align:center;
}

</style>

<table>

<thead>
<tr>
<th>Nombre</th>
<th>Correo</th>
<th>Rol</th>
<th>Matricula</th>
</tr>
</thead>

<tbody>

HTML;


// Función para validar si el objeto tiene método getMatricula
function validarMatricula($objeto){

    if(method_exists($objeto,"getMatricula")){
        return $objeto->getMatricula();
    }else{
        return "--";
    }

}


// Recorrer arreglo de usuarios
foreach($usuarios as $usuario){

    $matricula = validarMatricula($usuario);

    echo "

    <tr>
        <td>{$usuario->getNombre()}</td>
        <td>{$usuario->getCorreo()}</td>
        <td>{$usuario->getRol()}</td>
        <td>{$matricula}</td>
    </tr>

    ";

}


// Cierre de tabla
echo <<<HTML

</tbody>
</table>

HTML;

?>