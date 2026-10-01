<?php

?>

<!DOCTYPE html>  
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap para darle formato y diseño a la pagina -->
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >
    <title>Procesar aspirantes</title>

    <style>

        /* Estilo y formato del fondo, tipografía, color, justificación, etc. */
        body {
            font-family: Georgia;
            background-color: #bea79d;
            min-height: 100vh;
            margin: 0;
            color: #d3c3b3;
            padding-top: 100px; 
            box-sizing: border-box;
        }

        /* Formato del título principal */
        h1 {
            color: #0c0c0c;
            margin-bottom: 20px;
            font-size: 2.2rem;
        }

        /* Formato del recuadro donde aparecen los resultados */
        .tarjeta-resultado {
            background-color: #ffffff;
            padding: 40px 35px;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
            width: 100%;
            max-width: 500px;
            box-sizing: border-box;
            color: #2d3748;
            font-size: 1.1rem;
            line-height: 1.8;
        }

    </style>

</head>

<body>
    <!-- Aqui se coloca el header que esta guardado en la carpeta includes -->
    <header>

        <?php 
            include 'includes/header.php';
        ?>

    </header>

    <!-- Contenido principal de la pagina -->
    <main class="container">

        <!-- Seccion donde aparecen los resultados -->
        <section class="d-flex flex-column align-items-center">

            <h1>
                Resultado del Aspirante
            </h1>


            <div class="tarjeta-resultado">

                <?php

                if(
                    isset($_POST['nombre']) &&
                    isset($_POST['apellido']) &&
                    isset($_POST['identificacion']) &&
                    isset($_POST['fecha_nacimiento']) &&
                    isset($_POST['sexo']) &&
                    isset($_FILES['foto'])
                ){

                    // trim(): Elimina los espacios en blanco innecesarios
                    $Nombre = trim(strip_tags(htmlspecialchars($_POST['nombre'])));
                    $Apellido = trim(strip_tags(htmlspecialchars($_POST['apellido'])));
                    $Identificacion = trim(strip_tags(htmlspecialchars($_POST['identificacion'])));
                    $FechaNacimiento = trim(strip_tags(htmlspecialchars($_POST['fecha_nacimiento'])));
                    $Sexo = trim(strip_tags(htmlspecialchars($_POST['sexo'])));

                    // ucwords(strtolower()): Permite normalizar el texto a Formato Tipo Título
                    // Primero convierte todo a minusculas y despues pone la primera letra de cada palabra en mayuscula
                    $Nombre = ucwords(strtolower($Nombre));
                    $Apellido = ucwords(strtolower($Apellido));

                    // Calcular la edad segun la fecha de nacimiento
                    $fechaActual = new DateTime();
                    $fechaNacimiento = new DateTime($FechaNacimiento);
                    $Edad = $fechaActual->diff($fechaNacimiento)->y;


                    // Verificación de la edad
                    if($Edad < 18 || $Edad > 70){
                        echo "La edad debe estar entre 18 y 70 años.";
                    }else{

                        // VALIDAR IMAGEN
                        $foto = $_FILES['foto'];

                        // Primero revisamos si hubo algun error al subir la foto
                        if($foto['error'] !== UPLOAD_ERR_OK){
                            echo "Ocurrió un error al subir la fotografía.";

                        }else{
                            // Revisamos que el archivo realmente sea una imagen
                            $informacionImagen = getimagesize($foto['tmp_name']);

                            if($informacionImagen === false){
                                echo "El archivo seleccionado no es una imagen válida.";
                            }else{
                                // Sacamos la extensión del archivo
                                $nombreArchivo = $foto['name'];
                                $extension = strtolower(
                                    pathinfo($nombreArchivo, PATHINFO_EXTENSION)
                                );
                                // Extensiones de imagen que permitimos
                                $extensionesPermitidas = [
                                    "jpg",
                                    "jpeg",
                                    "png",
                                    "gif",
                                    "webp"
                                ];
                                // Tipos MIME que permitimos
                                $tiposPermitidos = [
                                    "image/jpeg",
                                    "image/png",
                                    "image/gif",
                                    "image/webp"
                                ];
                                if(
                                    in_array($extension, $extensionesPermitidas) &&
                                    in_array($informacionImagen['mime'], $tiposPermitidos)
                                ){
                                    // Verificamos que el tamaño de la foto no sea demasiado grande
                                    $tamañoMaximo = 5 * 1024 * 1024;
                                    if($foto['size'] > $tamañoMaximo){
                                        echo "La fotografía es demasiado grande. El máximo permitido es de 5 MB.";
                                    }else{
                                        // Le damos un nombre nuevo a la imagen para evitar que dos usuarios tengan el mismo nombre
                                        $nuevoNombre = bin2hex(random_bytes(16)) . "." . $extension;
                                        // Aqui se indica la carpeta donde se guardará la fotografía
                                        $ruta = "./uploaded_files/" . $nuevoNombre;
                                        // Guardamos la fotografía en la carpeta
                                        if(move_uploaded_file(
                                            $foto['tmp_name'],
                                            $ruta
                                        )){
                                            // Si todo ha salido bien entonces se escribe la información correcta
                                            echo "Nombre:".$Nombre."<br>";
                                            echo "Apellido:".$Apellido."<br>";
                                            echo "Identificacion: ".$Identificacion."<br>";
                                            echo "Fecha de nacimiento: ".$fechaNacimiento->format('d/m/Y')."<br>";
                                            echo "Edad: ".$Edad." años<br>";
                                            echo "Sexo: ". $Sexo."<br><br>";
                                            echo "Fotografía guardada correctamente.<br>";
                                            echo "Archivo: ".$nuevoNombre;
                                        }else{
                                            echo "Error al guardar la fotografía, disculpa.";
                                        }
                                    }
                                }else{
                                    echo "Formato de imagen no aceptado.";
                                }
                            }
                        }
                    }
                }else{
                    echo "No se recibieron todos los datos del formulario, revisa la información.";
                }
                ?>
            </div>
        </section>
    </main>
    <!-- Aqui se coloca el footer que esta guardado en la carpeta includes -->
    <?php 
        include 'includes/footer.php';
    ?>
</body>
</html>


    



