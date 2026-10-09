# 💼 Laboratorio 3: Registro de Aspirantes con PHP

PHP se utiliza principalmente para crear páginas web dinámicas, es decir, páginas que cambian en función de la interacción del usuario o de los datos almacenados en bases de datos. A diferencia de lenguajes como JavaScript, que funcionan en el navegador, PHP se ejecuta en el servidor. Cuando un visitante solicita una página, el servidor interpreta el código PHP, genera el contenido en HTML y lo envía al navegador.

Este repositorio contiene la solución de las actividades realizadas durante la práctica, permitiendo trabajar de manera práctica con formularios HTML, procesamiento de información mediante PHP, validación de datos, manejo de archivos y organización modular del código. Algunos de los temas que se realizaron son los siguientes:

🔹 Creación y estructuración de formularios utilizando HTML5
🔹 Implementación de etiquetas semánticas (`<header>`, `<main>`, `<section>`, `<footer>`)
🔹 Uso de Bootstrap.
🔹 Validación de los datos recibidos mediante PHP
🔹 Validación de la edad del aspirante entre 18 y 70 años
🔹 Estandarización de nombres y apellidos utilizando PHP
🔹 Recepción y almacenamiento de fotografías mediante `$_FILES`
🔹 Generación de nombres únicos para los archivos utilizando PHP
🔹 Organización modular mediante archivos `include`
🔹 Protección de la carpeta de fotografías mediante `.htaccess`

## 🌐 Tecnologías utilizadas

* 🛠️ PHP
* 🛠️ HTML5
* 🛠️ CSS3
* 🛠️ Bootstrap 5
* 🛠️ Apache / WAMP
* 🛠️ Git y GitHub
* 🛠️ Visual Studio Code

## ⚙️ Estructura de Archivos

A continuación se muestra un resumen de los principales archivos utilizados durante la práctica:

| **Archivo / Sección**        | **Descripción**                                                                                      | **Uso Principal**            |
| ---------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------- |
| **index.php**                | Contiene la interfaz principal y el formulario para registrar los datos del aspirante.               | Registro de información      |
| **procesar.php**             | Recibe y procesa los datos enviados por el formulario, realizando las validaciones correspondientes. | Procesamiento del formulario |
| **include/header.php**       | Contiene la barra superior y elementos reutilizables de la interfaz.                                 | Modularización               |
| **include/footer.php**       | Contiene el pie de página con información institucional, enlaces y año dinámico.                     | Modularización               |
| **uploaded_files/**          | Carpeta destinada al almacenamiento de las fotografías recibidas.                                    | Manejo de archivos           |
| **uploaded_files/.htaccess** | Configuración para impedir el acceso directo a los archivos almacenados mediante el navegador.       | Protección de archivos       |

## 📝 Procesamiento de los datos

El formulario permite recibir diferentes datos del aspirante, como:

* Nombre
* Apellido
* Identificación
* Fecha de nacimiento
* Sexo
* Fotografía

Una vez enviado el formulario, `procesar.php` recibe la información mediante los métodos `$_POST` y `$_FILES`. Los datos de nombre y apellido son estandarizados para mostrar la primera letra en mayúscula, mientras que la fecha de nacimiento permite calcular la edad del aspirante.

También se realiza una validación para comprobar que la edad se encuentre dentro del rango establecido de **18 a 70 años**.

## 📷 Manejo de fotografías

Para recibir la fotografía se utiliza:

```php
enctype="multipart/form-data"
```

Esto permite enviar archivos junto con los demás datos del formulario. PHP recibe la fotografía mediante `$_FILES` y posteriormente se genera un nombre único para evitar conflictos entre archivos.

Las fotografías son almacenadas dentro de la carpeta `uploaded_files/`, la cual cuenta con una configuración `.htaccess` para impedir que los archivos puedan ser consultados directamente desde el navegador.

## 🧩 Organización modular

Una de las partes importantes de la práctica fue separar elementos que pueden reutilizarse en diferentes páginas.

El archivo `header.php` contiene los elementos correspondientes a la parte superior de la página, mientras que `footer.php` contiene el pie de página. Ambos archivos son incorporados mediante `include` de PHP.

De esta manera se evita repetir el mismo código y se facilita el mantenimiento de la aplicación.

## 🚀 Conclusión

Esta práctica me permitió comprender mejor cómo PHP puede utilizarse para procesar información enviada desde un formulario HTML. También aprendí a realizar validaciones del lado del servidor, trabajar con fechas, estandarizar información recibida y manejar archivos mediante `$_FILES`. Además, pude aplicar una estructura más organizada utilizando archivos `include`, Bootstrap y etiquetas semánticas de HTML5. El manejo de fotografías y la protección de la carpeta donde se almacenan también me ayudaron a entender la importancia de considerar la seguridad al desarrollar formularios que reciben archivos.

## 🧑‍💻 Datos del Estudiante

* **Nombre:** Vasti Legaspi
* **Materia:** Desarrollo Web
* **Práctica:** Laboratorio 3
* **Fecha:** 30 de septiembre de 2026
