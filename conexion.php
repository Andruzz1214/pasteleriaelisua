<?php

$server_conec = @mysql_connect("localhost","root","");
$bd = "inventario";//nombre de base de datos

$bd_conec = @mysql_select_db($bd,$server_conec);//conexion a base de datos
	if(!$bd_conec) //confirma si no existe la base de datos
{

		@mysql_query("create database $bd");//crea la base de datos
		@mysql_query("use $bd"); //selecciona la base de datos
	
		@mysql_query("create table if not exists proveedor(codigo_p varchar(7) not null, empresa varchar(30),dir_p varchar(50), correo_p varchar(30), tel_p varchar(12),producto varchar(40),nom_contacto varchar(40),ape_contacto varchar(40) ,  primary key (codigo_p))");
		
		@mysql_query("create table if not exists inventario (codigo_a varchar(6) not null, fecha varchar(15), codigo_p varchar(10), nombre_art varchar(30), marca varchar(18), des varchar(50),cant int, precio double , primary key (codigo_a))");
			
		@mysql_query("create table if not exists venta (codigo_v varchar(5) not null, codigo_a varchar(10), nombre_art varchar(30),des varchar(50),cant int, fecha date, precio double, primary key (codigo_a))");
		
		@mysql_query("create table if not exists acceso_sis(user varchar(10)not null,pass varchar(100)not null, primary key(user))");
	
	if(!@mysql_num_rows(mysql_query("select * from acceso_sis")))
	{
		@mysql_query("insert into acceso_sis value('admin','".md5('admin')."')");//el md5 encripta la contraseña
	}
	echo "<script>window.alert('Se crearon BD y tablas necesarias!')</script>";
	echo "<script>window.location.replace('index.php');</script>";
}
else{
		@mysql_query("use $bd"); //selecciona la base de datos
	
		@mysql_query("create table if not exists proveedor(codigo_p varchar(6) not null, empresa varchar(30),dir_p varchar(50), correo_p varchar(30), tel_p varchar(12),producto varchar(40),nom_contacto varchar(40),ape_contacto varchar(40) ,  primary key (codigo_p))");
	
		@mysql_query("create table if not exists inventario (codigo_a varchar(6) not null, fecha varchar(15), codigo_p varchar(10), nombre_art varchar(30), marca varchar(18), des varchar(50),cant int, precio double , primary key (codigo_a))");

		@mysql_query("create table if not exists venta (codigo_v varchar(5) not null, codigo_a varchar(10), nombre_art varchar(30),des varchar(50),cant int, fecha date, precio double, primary key (codigo_a))");
		
		@mysql_query("create table if not exists acceso_sis(user varchar(10)not null,pass varchar(100)not null, primary key(user))");
	

	if(!@mysql_num_rows(mysql_query("select * from acceso_sis")))
	{
		@mysql_query("insert into acceso_sis value('admin','".md5('admin')."')");
	}
}


?>	