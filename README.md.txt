# Base Evaluaciones - PHP y MySQL Avanzado

## Descripción

Proyecto correspondiente a la materia Laboratorio de Programación II.

El sitio fue desarrollado utilizando PHP y MySQL e integra las ocho partes trabajadas durante la Unidad 3: PHP y MySQL Avanzado.

## Requisitos

Para ejecutar el proyecto se necesita:

- XAMPP
- Apache
- MySQL
- PHP
- Navegador web

## Instalación

1. Copiar la carpeta `base_evaluaciones2` dentro de:

   `C:\xampp\htdocs\`

2. Iniciar XAMPP.

3. Activar los servicios Apache y MySQL.

4. Ingresar a phpMyAdmin.

5. Importar el archivo `phpavanzado.sql`.

6. Abrir el proyecto desde el navegador:

   `http://localhost/base_evaluaciones2/`

## Base de datos

El proyecto utiliza la base de datos:

`phpavanzado`

La conexión a la base de datos se encuentra centralizada en el archivo:

`conexion.php`

## Contenido del proyecto

El sitio está compuesto por ocho partes:

1. Registro y listado de clases.
2. Cálculo de fechas.
3. Comentarios mediante archivos de texto.
4. Manejo de imágenes, marca de agua y thumbnail.
5. Formulario de consultas con CAPTCHA.
6. Programación Orientada a Objetos y encapsulamiento.
7. Administrador de productos utilizando POO.
8. Registro e ingreso de usuarios utilizando POO.

## Seguridad

Las operaciones que reciben datos de los usuarios utilizan consultas preparadas.

Las contraseñas de los usuarios no se almacenan en texto plano. Se utiliza `password_hash()` para almacenarlas y `password_verify()` para verificarlas durante el ingreso.

## Prueba del proyecto

Con Apache y MySQL iniciados, ingresar a:

`http://localhost/base_evaluaciones2/`

Desde el menú superior se puede acceder a las ocho unidades y comprobar el funcionamiento de cada actividad.