<!-- Barra superior de la pagina -->
<div class="barra-superior">

    <div class="bloque-izquierda">

        <!-- Flecha para regresar una carpeta -->
        <a 
            href="../" 
            class="btn-flecha-regresar"
            title="Regresar a la carpeta anterior"
        >
            ←
        </a>

        <!-- Nombre que aparece en la parte de arriba -->
        <div class="nombre-marca">
            VASTI LEGASPI

            <span>
                DESARROLLO WEB
            </span>
        </div>

    </div>


    <!-- Menu de la parte derecha -->
    <div class="menu-navegacion">

        <span class="michi-sticker">
            🐾 🐱
        </span>

    </div>

</div>


<style>

    /* Barra que aparece en la parte superior */
    .barra-superior {
        width: 100%;
        background-color: #ffffff;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px 40px;
        position: fixed;
        top: 0;
        left: 0;
        box-sizing: border-box;
        z-index: 1000;
    }


    /* Parte izquierda donde esta la flecha y el nombre */
    .bloque-izquierda {
        display: flex;
        align-items: center;
        gap: 20px;
    }


    /* Estilo de la flecha para regresar */
    .btn-flecha-regresar {
        font-size: 1.8rem;
        color: #355c7d;
        text-decoration: none;
        font-weight: bold;
        transition: transform 0.2s ease, color 0.2s ease;
        cursor: pointer;
    }


    .btn-flecha-regresar:hover {
        color: #6c76cc;
        transform: translateX(-4px);
    }


    /* Nombre que aparece en la barra */
    .nombre-marca {
        font-family: Georgia, serif;
        font-size: 1.5rem;
        font-weight: bold;
        color: #080808;
        letter-spacing: 3px;
        line-height: 1;
    }


    /* Texto pequeño debajo del nombre */
    .nombre-marca span {
        display: block;
        font-size: 0.6rem;
        color: #7f8c8d;
        letter-spacing: 2px;
        margin-top: 5px;
        font-family: Arial, sans-serif;
    }


    /* Gatitos de la parte derecha */
    .michi-sticker {
        font-size: 1.4rem;
        cursor: default;
        user-select: none;
        animation: flotarMichi 3s ease-in-out infinite;
        display: inline-block;
    }


    /* Animacion para que el michi se mueva un poquito */
    @keyframes flotarMichi {

        0%, 100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-4px);
        }

    }

</style>