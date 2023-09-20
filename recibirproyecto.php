<?php
	if ($_POST){
		$Nombres=$_POST['nombres'];
		$Apellido_P=$_POST['apellidop'];
		$Apellido_M=$_POST['apellidom'];
		$Registro=$_POST['registro'];
		$GG=$_POST['gradoygrupo'];
		$Correo=$_POST['correo'];	
		$Carrera=$_POST['carrera'];
		$TProyecto=$_POST['tproyecto'];	
		$Asesor_M=$_POST['asesorm'];
		$Asesor_T=$_POST['asesort'];	
		$Problematica=$_POST['problematica'];
		$Solucion=$_POST['solucion'];
		$Justificacion=$_POST['justificacion'];
		$ObjetivoGE=$_POST['objetivog'];
		$ObjetivosES=$_POST['objetivose'];

		$conexion=mysqli_connect("localhost","root","");
		mysqli_select_db($conexion, "cetipt");		

		$Resultado=mysqli_query($conexion,"INSERT INTO `proyectos`(`nombres`, `apellido_p`, `apellido_m`, `registro`, `gradoygrupo`,`correo`, `carrera`, `Tipo de proyecto`, `asesorm`, `asesort`, `problematica`, `solucion`, `justificacion`, `objetivog`, `objetivose`) VALUES ('".$Nombres."','".$Apellido_P."','".$Apellido_M."','".$Registro."','".$GG."','".$Correo."','".$Carrera."','".$TProyecto."','".$Asesor_M."','".$Asesor_T."','".$Problematica."','".$Solucion."','".$Justificacion."','".$ObjetivoGE."','".$ObjetivosES."');");
		if($Resultado==true){
			echo "Gracias Hemos Recibido Tus Datos. Espere un Momento Por Favor\n";
			echo '<META HTTP-EQUIV="REFRESH" CONTENT="15;URL=login.php">';
		}
		else{ echo "ERROR En La Consulta";
		mysqli_close($conexion);
		}
	}
	else{
		echo "ERROR";
		echo '<META HTTP-EQUIV="REFRESH" CONTENT="5;URL=Registroalumnos.html>';
	}
?>
