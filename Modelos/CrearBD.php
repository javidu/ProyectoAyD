<?php
	/**
 	* .............................................
 	* UNIVERSIDAD  FRANCISCO  DE  PAULA  SANTANDER
 	*    PROGRAMA  DE  INGENIERIA   DE   SISTEMAS
        *                PROYECTO DE GRADO
 	*             SAN JOSE DE CUCUTA-2016
	* .............................................
 	*/

$conexion = mysqli_connect("localhost","root","") 
or die (("<a href=../Plantillas/Error404.php>Error de Conexion</a>" . mysqli_error($conexion)));

$creacion = "CREATE DATABASE Grado";
mysqli_query($conexion,$creacion);
mysqli_close($conexion);

$conexion = mysqli_connect("localhost","root","","Grado") 
or die(("<a href=../Plantillas/Error404.php>No Existe Base de Datos</a>" . mysqli_error($conexion)));

//Creacion tabla Estado
$tabla = "CREATE TABLE Estudiante(
	codigo int(7)NOT NULL,
	nombre varchar(20) NOT NULL,
        apellido varchar(20) NOT NULL,
        clave varchar(4) NOT NULL,
        semestre int(7)NOT NULL,
        nota float NOT NULL,
	PRIMARY KEY(codigo)
	)";

if(mysqli_query($conexion,$tabla))
{
	echo("Se creo la tabla Estudiante/");
}
else
{
	echo("No se creo la tabla Estudiante/");
}

//Creacion tabla Estado
$tabla = "CREATE TABLE Estado(
	codigo int AUTO_INCREMENT,
	nombre varchar(20) NOT NULL,
	descripcion varchar(100),
	PRIMARY KEY(codigo)
	)";

if(mysqli_query($conexion,$tabla))
{
	echo("Se creo la tabla Estado/");
}
else
{
	echo("No se creo la tabla Estado/");
}

//Creacion tabla Bodega
$tabla = "CREATE TABLE Bodega(
	codigo int AUTO_INCREMENT,
	nombre varchar(20) NOT NULL,
	direccion varchar(50),
	PRIMARY KEY(codigo)
	)";

if(mysqli_query($conexion,$tabla))
{
	echo("Se creo la tabla Bodega/");
}
else
{
	echo("No se creo la tabla Bodega/");
}

//Creacion tabla DiseÃ±o
$tabla = "CREATE TABLE Disenio(
	codigo int AUTO_INCREMENT,
	url varchar(100) NOT NULL,
	descripcion varchar(100),
	PRIMARY KEY(codigo)
	)";
if(mysqli_query($conexion,$tabla))
{
	echo("Se creo la tabla Disenio/");
}
else
{
	echo("No se creo la tabla Disenio/");
}

//Creacion tabla Usuario
$tabla = "CREATE TABLE Usuario(
	DNI varchar(10),
	password varchar(40) NOT NULL,
	nombre varchar(20) NOT NULL,
	tipo int NOT NULL,
	telefono varchar(15),
	correo_electronico varchar(30),
	direccion varchar(30),
	PRIMARY KEY(DNI)
	)";
if(mysqli_query($conexion,$tabla))
{
	echo("Se creo la tabla Usuario/");
}
else
{
	echo("No se creo la tabla Usuario/");
}

//Creacion tabla Cotizacion
$tabla = "CREATE TABLE Cotizacion(
	codigo int AUTO_INCREMENT,
	DNI_Cliente varchar(10) NOT NULL,
	DNI_Operario varchar(10),
	estado varchar(20) NOT NULL,
	fecha Date NOT NULL,
	descripcion varchar(100),
	precioTotal int,
	cantidad int,
	codigoDisenio int,
	PRIMARY KEY(codigo),
	FOREIGN KEY(DNI_Cliente) REFERENCES Usuario(DNI),
	FOREIGN KEY(DNI_Operario) REFERENCES Usuario(DNI),
	FOREIGN KEY(codigoDisenio) REFERENCES Disenio(codigo)
	)";
if(mysqli_query($conexion,$tabla))
{
	echo("Se creo la tabla Cotizacion/");
}
else
{
	echo("No se creo la tabla Cotizacion/");
}

//Creacion tabla Pedido
$tabla = "CREATE TABLE Pedido(
	codigo int AUTO_INCREMENT,
	estado varchar(20) NOT NULL,
	codigoEstado int NOT NULL,
	codigoCotizacion int NOT NULL,
	fecha_Creacion Date NOT NULL,
	fecha_Recoleccion Date,
	fecha_Entrega Date,
	direccion varchar(30),
	codigoBodega int NOT NULL,
	PRIMARY KEY(codigo),
	FOREIGN KEY(codigoCotizacion) REFERENCES Cotizacion(codigo),
	FOREIGN KEY(codigoEstado) REFERENCES Estado(codigo),
	FOREIGN KEY(codigoBodega) REFERENCES Bodega(codigo),
	UNIQUE KEY(codigoCotizacion)
	)";
if(mysqli_query($conexion,$tabla))
{
	echo("Se creo la tabla Pedido/");
}
else
{
	echo("No se creo la tabla Pedido/");
}

$query = "INSERT INTO Bodega(nombre,direccion) VALUES('Bodega Principal','Av. 5 # 16N-102 Ciudadela')";
mysqli_query($conexion,$query);

$query = "INSERT INTO Estado(nombre) VALUES('En Procesamiento')";
mysqli_query($conexion,$query);

$query = "INSERT INTO Estado(nombre) VALUES('En Almacenamiento')";
mysqli_query($conexion,$query);

$query = "INSERT INTO Estado(nombre) VALUES('En Tratamiento')";
mysqli_query($conexion,$query);

$query = "INSERT INTO Estado(nombre) VALUES('Pago Pendiente')";
mysqli_query($conexion,$query);

$query = "INSERT INTO Estado(nombre) VALUES('En Despacho')";
mysqli_query($conexion,$query);

$query = "INSERT INTO Estado(nombre) VALUES('Producto Entregado')";
mysqli_query($conexion,$query);

$query = "INSERT INTO Usuario VALUES('1090484841','".sha1('1234')."','Daniel Vega',1,'3043430740','daniel.dvs95@hotmail.com','Calle 2n #14e-28 Villa Prado')";
mysqli_query($conexion,$query);

mysqli_close($conexion);
?>

