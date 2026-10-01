<?php
// include/footer.php - Pie de página modular común
?>

<footer class="bg-dark text-white text-center py-4 mt-auto">

    <div class="container">

        <!-- identificación institucional -->
        <p class="mb-1 fw-semibold">
            Portal de Registro de Aspirantes - Licenciatura en Ciberseguridad
        </p>

        <!-- Información de mi -->
        <p class="text-white-50 small mb-2">
            Desarrollado por Vasti Legaspi
        </p>

        <!-- Enlaces  de contacto -->
        <div class="mb-2">
            <a href="#" class="text-white text-decoration-none mx-2 small">
                Soporte Técnico
            </a> | 

            <a href="#" class="text-white text-decoration-none mx-2 small">
                GitHub Institucional
            </a> | 

            <a href="#" class="text-white text-decoration-none mx-2 small">
                Contacto
            </a>
        </div>

        <!-- Copyright con año dinámico en PHP -->
        <p class="text-white-50 small mb-0">
            &copy; <?php echo date('Y'); ?> 
            Universidad Tecnológica de Panamá.
            Todos los derechos reservados.
        </p>

    </div>

</footer>