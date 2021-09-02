<?php
	// Función para convertir a día mes y año 
	function fechaCastellano($fecha) {
				$fecha = substr($fecha, 0, 10);
				$numeroDia = date('d', strtotime($fecha));
				$dia = date('l', strtotime($fecha));
				$mes = date('F', strtotime($fecha));
				$anio = date('Y', strtotime($fecha));
				$dias_ES = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");
				$dias_EN = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
				$meses_ES = array("Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic");
				$meses_EN = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
				$nombreMes = str_replace($meses_EN, $meses_ES, $mes);
				// return $numeroDia."/".$nombreMes."/".$anio;
				return $nombreMes." ".$numeroDia.", ".$anio." ";
	}

?>