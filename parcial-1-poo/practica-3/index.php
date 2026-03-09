<?php

    // Se importan las clases necesarias para poder crear objetos
    require_once 'clases/Admin.php'; 
    require_once 'clases/Alumno.php';


    // Función para validar y crear un objeto de tipo Admin
    function validarAdmin($nombreAdmin, $correo) {

        try {

            // Se crea el objeto Admin con los datos recibidos
            $admin = new Admin($nombreAdmin, $correo);

            // Si el correo es válido se muestra un mensaje de confirmación
            echo "Administrador {$nombreAdmin} validado con correo: {$correo} <br>";

            // Se muestra el rol del usuario usando el método de la clase
            echo "Rol: " . $admin->getRol() . "<br><br>";

            // Se retorna el objeto creado
            return $admin;

        } catch (Exception $e) {

            // Si ocurre un error (por ejemplo correo inválido) se muestra el mensaje
            echo "Error al validar Administrador {$nombreAdmin}: {$e->getMessage()} <br>";

        }

    }


    // Función para validar y crear un objeto de tipo Alumno
    function validarAlumno($nombreAlumno, $correo, $matricula) {

        try {

            // Se crea el objeto Alumno con nombre, correo y matrícula
            $alumno = new Alumno($nombreAlumno, $correo, $matricula);

            // Si los datos son válidos se muestra el mensaje de confirmación
            echo "Alumno {$nombreAlumno} validado con correo: {$correo} y matricula: {$matricula} <br>";

            // Se muestra el rol del usuario
            echo "Rol: " . $alumno->getRol() . "<br><br>";

            // Se retorna el objeto creado
            return $alumno;

        } catch (Exception $e) {

            // Si el correo es inválido se captura el error y se muestra el mensaje
            echo "Error al validar Alumno {$nombreAlumno}: {$e->getMessage()} <br>";

        }

    }


    // Pruebas de creación de objetos


    // Este administrador tiene correo inválido para probar la excepción
    $objAdmin01 = validarAdmin("john", "john117#gmail,com");

    // Este administrador tiene correo válido
    $objAdmin02 = validarAdmin("cortana", "cortana@gmail.com");


    // Alumno con datos correctos
    $objAlumno01 = validarAlumno("Jaasiel Efrain Torrero Rojo", "jasieltorrero6@gmail.com", "117");

    // Alumno con correo inválido para probar el manejo de errores
    $objAlumno02 = validarAlumno("Jesus Zatarain", "jesuszatarain#gmail,com", "104");

?>