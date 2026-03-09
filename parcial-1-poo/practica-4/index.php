<?php

    // Se importan las clases necesarias para poder crear los objetos
    require_once 'clases/Admin.php';
    require_once 'clases/Alumno.php';
    require_once 'clases/Invitado.php';

    // Arreglo donde se almacenarán los usuarios válidos
    $usuarios = [];

    // Creación de un administrador válido
    try {
        $admin01 = new Admin("john", "john117@gmail.com");
        $usuarios[] = $admin01;
    } catch (Exception $e) {
        // Mensaje de error controlado
        echo "<p style='color:red;'>Error controlado: {$e->getMessage()}</p>";
    }

    // Creación de un alumno válido
    try {
        $alumno01 = new Alumno("Jaasiel Torrero", "jasieltorrero6@gmail.com", "117");
        $usuarios[] = $alumno01;
    } catch (Exception $e) {
        echo "<p style='color:red;'>Error controlado: {$e->getMessage()}</p>";
    }

    // Creación de un invitado válido
    try {
        $invitado01 = new Invitado("Jesus zatarain", "jesus@gmail.com", "Spartans");
        $usuarios[] = $invitado01;
    } catch (Exception $e) {
        echo "<p style='color:red;'>Error controlado: {$e->getMessage()}</p>";
    }

    // Usuario con correo inválido para comprobar la excepción
    try {
        $admin02 = new Admin("Santiago", "santi#gmail,com");
        $usuarios[] = $admin02;
    } catch (Exception $e) {
        echo "<p style='color:red;'>Error controlado: {$e->getMessage()}</p>";
    }


    // Se imprime el inicio de la tabla 
    echo <<<HTML
        <style>
            table {
                border-collapse: collapse;
            }

            table, th, td {
                border: 1px solid black;
            }

            th, td {
                text-align: center;
                padding: 5px;
            }
        </style>

        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Rol</th>
                    <th>Matricula</th>
                    <th>Empresa</th>
                </tr>
            </thead>
            <tbody>
    HTML;


    // Función para validar si el objeto tiene método getMatricula()
    // Solo la clase Alumno tiene este método
    function validarMatricula($objeto) {

        if (method_exists($objeto, "getMatricula")) {
            return $objeto->getMatricula();
        } else {
            return "--";
        }

    }


    // Función para validar si el objeto tiene método getEmpresa()
    // Solo la clase Invitado tiene este método
    function validarEmpresa($objeto) {

        if (method_exists($objeto, "getEmpresa")) {
            return $objeto->getEmpresa();
        } else {
            return "--";
        }

    }


    // Recorrer el arreglo de usuarios para mostrar los datos en la tabla
    foreach ($usuarios as $usuario) {

        // Obtener matrícula si existe
        $matricula = validarMatricula($usuario);

        // Obtener empresa si existe
        $empresa = validarEmpresa($usuario);

        // Mostrar fila de la tabla
        echo "
            <tr>
                <td>{$usuario->getNombre()}</td>
                <td>{$usuario->getCorreo()}</td>
                <td>{$usuario->getRol()}</td>
                <td>{$matricula}</td>
                <td>{$empresa}</td>
            </tr>
        ";

    }

    // Cierre de la tabla
    echo <<<HTML
            </tbody>
        </table>
    HTML;

?>