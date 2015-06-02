# PHP Ceneac Curso Mayo - Junio 2015

## Autor
Fernando Crema

## Ejercicios_24.php
Ejercicios de la página 24 del texto de consulta del curso.

## Matrices_arreglos.php
Ejemplos de uso de matrices y arreglos con PHP.

## Ahorrando código

### Archivos usados

- footer.inc
- header.inc
- incluir.php

### Uso
Para "ahorrar" escritura de códigos.

### Ejemplos dentro de incluir.php
Funciones de cálculo de áreas.

## Nuevo: Ejemplo de MySQL con Login y uso de la BD de prestamo

### Archivos Usados

- login.php
- lobby.php
- reservar.php

### Tablas de la BD

- usuario (nombre, apellido, cedula, direccion, email, clave, genero, fecha_nacimiento, estado)
 * Clave primaria: cedula
- prestamo (cedula, codigo, fecha_pedido, fecha_entrega)
 * Claves foráneas: cedula, codigo
- libros (nombre, autor, editorial, codigo)
  * Clave primaria: codigo

