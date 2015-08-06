<?php
	include"../conexion.php";

	if($_SESSION["Nombre"]==$_POST["username"]){
		header('Location: ../index.php');
	}
	else{
		$query = sqlsrv_query($conn,"SELECT * FROM Cliente where Usuario='".$_POST["username"]."' and Contrasena='".$_POST["password"]."' and Estado='1'");
		$usuario = sqlsrv_fetch_array( $query, SQLSRV_FETCH_ASSOC );
		if (empty($usuario)){
			header('Location: ../login.php?errorpass=error');
		}
		else{
			session_start();
			$_SESSION['codigo'] = $usuario["codigo"];
			$_SESSION['Nombre'] = $usuario["Nombre"];
			$_SESSION['Primer_Apellido'] = $usuario["Primer_Apellido"];
			$_SESSION['Segundo_Apellido'] = $usuario["Segundo_Apellido"];
			$_SESSION['Usuario'] = $usuario["Usuario"];
			$_SESSION['Correo'] = $usuario["Correo"];
			$_SESSION['Rol'] = $usuario["Rol"];
			$_SESSION['Estado']=$usuario["Estado"];
			header('Location: ../index.php');
		}
	}
 ?>