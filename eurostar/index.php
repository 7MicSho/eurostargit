<?php
	require_once 'helpers/config.php';
	require_once 'helpers/clsSanear.php';
	$objSanear = new Sanear();
	$datos = $objSanear->getDatos();
	$modulo = isset($_REQUEST['modulo']) ? $_REQUEST['modulo'] : (isset($_SESSION['typeuser'])? $_SESSION['typeuser'] :  'usuario');
	$accion = isset($_REQUEST['accion']) ? $_REQUEST['accion'] : (isset($_SESSION['typeuser'])? 'home' :  'login');
	if(!file_exists('modulos/'.$modulo.'/'.$modulo.'_C.php')){
			header('Location:?');
		}
	$clase =ucfirst($modulo).'_C';
	unset($datos['modulo']);
	unset($datos['accion']);
	require_once 'modulos/'.$modulo.'/'.$modulo.'_C.php';
	$metodosClases = get_class_methods($clase);
	$metodosClases = array_flip($metodosClases);
		if(!isset($metodosClases[$accion])){
			header('Location:?');
		}
	require_once 'modulos/'.$modulo.'/'.$modulo.'_M.php';
	require_once 'modulos/'.$modulo.'/'.$modulo.'_V.php';
	require_once 'helpers/clsSesion.php';
	$objSesion = new Sesion();	
	$objControlador = new $clase($datos, $objSesion);
	$objControlador->$accion();
	
?>
