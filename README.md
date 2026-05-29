# NatureHub

NatureHub es una wiki de naturaleza donde usuarios registrados pueden crear artículos sobre especies, los cuales son revisados y aprobados por moderadores antes de ser publicados.


## Tecnologías

- **Frontend:** Angular + TypeScript + Bootstrap
- **Backend:** PHP
- **Base de datos:** MySQL
- **Gestión de sesiones:** Tokens


## Requisitos previos

- PHP 8+
- MySQL 8+
- Node.js + Angular CLI
- Servidor web (XAMPP)


## Configuración de la base de datos

1. Abrir phpMyAdmin.
2. Hacer click en la pestaña Importar.
3. Seleccionar el archivo "naturehub.sql" ubicado en la carpeta DB.
4. Hacer click en el boton de Importar.

Eso creará la base de datos "naturehub" con todas las tablas necesarias.

## Configuración de la conexión

El archivo "ParametrosConexion.php" usa los parámetros por defecto de XAMPP:

- **Servidor:** localhost
- **Usuario:** root
- **Contraseña:** (vacía)
- **Base de datos:** naturehub

Si tu configuración local es diferente, edita esos valores en el archivo mencionado.
