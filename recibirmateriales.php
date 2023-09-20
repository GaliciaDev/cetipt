<?php
	if ($_POST){
		$Nombres=$_POST['nombres'];
		$Apellido_P=$_POST['apellido_p'];
		$Apellido_M=$_POST['apellido_m'];
		$Registro=$_POST['registro'];
		$Softwares=$_POST['softwares'];
		$Mesas=$_POST['mesas'];	
		$Bancas=$_POST['bancas'];
		$Computadoras=$_POST['computadoras'];	
		$Mamparas=$_POST['mamparas'];
		$Otros=$_POST['otros'];


		$conexion=mysqli_connect("localhost","root","");
		mysqli_select_db($conexion, "cetipt");		

		$Resultado=mysqli_query($conexion,"INSERT INTO `materiales`(`nombres`, `apellido_p`, `apellido_m`, `registro`, `softwares`,`mesas`,`bancas`,`computadoras`, `mamparas`, `otros`) VALUES ('".$Nombres."','".$Apellido_P."','".$Apellido_M."','".$Registro."','".$Softwares."','".$Mesas."','".$Bancas."','".$Computadoras."','".$Mamparas."','".$Otros."');");
		if($Resultado==true){
			echo "Gracias Hemos Recibido Tus Datos. Espere un Momento Por Favor\n";
			echo '<META HTTP-EQUIV="REFRESH" CONTENT="15;URL=inicioalumno.html">';
		}
		else{ echo "ERROR En La Consulta";
		mysqli_close($conexion);
		}
	}
	else{
		echo "ERROR";
		echo '<META HTTP-EQUIV="REFRESH" CONTENT="5;URL=inicioalumno.html>';
	}
?>
