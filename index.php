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

    <title>Registro de aspirantes</title>

    <style>
        /* Estilo y formato del fondo, tipografía, color, justificación, etc. */
        body {
            font-family: Georgia;
            background-color: #bea79d;
            min-height: 100vh;
            margin: 0;
            color: #d3c3b3;
            padding-top: 100px; 
        }

        /* Formato del título principal */
        h1 {
            color: #0c0c0c;
            margin-bottom: 20px;
            font-size: 2.2rem;
        }

        /* Formato del recuadro blanco donde estan las opciones del formulario */
        form {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
            width: 100%;
            max-width: 500px;
            box-sizing: border-box;
        }

        /* Estilo de los textos de instrucción de los que se debe poner en el formulario */
        form {
            font-size: 0.95rem;
            color: #4a5568;
            font-weight: 500;
        }

        /* Estilos para las cajas de texto */
        input[type="text"], 
        input[type="date"], 
        select, 
        input[type="file"] {
            border: 2px solid #a4bcdc;
            border-radius: 8px;
        }

        /* Efecto de enfoque al hacer clic en los inputs */
        input[type="text"]:focus, 
        input[type="date"]:focus, 
        select:focus {
            border-color: #8e83e2;
            box-shadow: 0 0 0 3px rgba(131, 102, 234, 0.15);
        }

        /* Botón donde se aprieta para enviar o confirmar */
        .btn-registrar {
            width: 100%;
            background-image: linear-gradient(to right, #897446, #b1c06c);
            color: white;
            padding: 14px;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            box-shadow: 0 4px 12px rgba(102, 126, 234, 0.25);
        }

        .btn-registrar:hover {
            opacity: 0.9;
        }

    </style>
</head>

<body>

    <!-- Aqui se coloca el header que esta guardado en la carpeta include -->
    <header>
        <?php 
            include 'includes/header.php';
        ?>
    </header>


    <!-- Contenido principal de la pagina -->
    <main class="contenedor-principal container">

        <!-- Seccion donde se encuentra el formulario -->
        <section class="seccion-formulario d-flex flex-column align-items-center">
        <!-- Seccion donde se encuentra el formulario. "d-flex" de Bootstrap activa Flexbox para poder organizar los elementos. "flex-column" hace que los elementos se acomoden uno debajo de otro. "align-items-center" centra los elementos horizontalmente. --> <section class="seccion-formulario d-flex flex-column align-items-center">
            <h1>Registro del Aspirante</h1>

            <!-- Formulario para registrar los datos del aspirante -->
            <form
                action="procesar.php"
                method="post"
                enctype="multipart/form-data"
            >

                <div class="mb-3">
                    <label for="nombre" class="form-label">
                        Ingrese su nombre:
                    </label>
                    <!-- "form-control" es de Bootstrap y sirve para darle un diseño uniforme a las cajas de texto y hacerlas ocupar correctamente el espacio disponible. -->
                    <input 
                        type="text" 
                        name="nombre" 
                        id="nombre" 
                        class="form-control"
                        required
                    >
                </div>


                <div class="mb-3">
                    <label for="apellido" class="form-label">
                        Ingrese su apellido:
                    </label>

                    <input 
                        type="text" 
                        name="apellido" 
                        id="apellido" 
                        class="form-control"
                        required
                    >
                </div>


                <div class="mb-3">
                    <label for="identificacion" class="form-label">        
                        Ingrese su Identificación (Cédula):
                    </label>

                    <input 
                        type="text" 
                        name="identificacion" 
                        id="identificacion" 
                        class="form-control"
                        required
                    >
                </div>


                <div class="mb-3">
                    <label for="fecha_nacimiento" class="form-label">        
                        Ingrese su fecha de nacimiento:
                    </label>

                    <input 
                        type="date" 
                        name="fecha_nacimiento" 
                        id="fecha_nacimiento" 
                        class="form-control"
                        required
                    >
                </div>


                <div class="mb-3">
                    <label for="sexo" class="form-label">        
                        Seleccione su sexo:
                    </label>
                    <!-- "form-select" es de Bootstrap y sirve para darle formato al menu desplegable de opciones. -->
                    <select 
                        name="sexo" 
                        id="sexo" 
                        class="form-select"
                        required
                    > 
                        <option value="">
                            Seleccione una opción
                        </option> 

                        <option value="Femenino">
                            Femenino
                        </option> 

                        <option value="Masculino">
                            Masculino
                        </option> 

                    </select>
                </div>


                <div class="mb-3">
                    <label for="foto" class="form-label">
                        Suba su fotografía:
                    </label>

                    <!-- "form-control" de Bootstrap tambien se puede usar para darle formato al campo donde se selecciona un archivo. -->
                    <input 
                        type="file"
                        name="foto"
                        id="foto"
                        class="form-control"  
                        accept="image/*"
                        required
                    >
                </div>

                <!-- Boton para enviar los datos a procesar.php -->
                <button 
                    type="submit"
                    class="btn-registrar"
                >
                    Registrar datos del aspirante
                </button>

            </form>

        </section>

    </main>

    <?php 
        include 'includes/footer.php';
    ?>

</body>
</html>