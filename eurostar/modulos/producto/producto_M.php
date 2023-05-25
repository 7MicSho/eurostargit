<?php
require_once('helpers/clsConexion.php');
	class Producto_M{
		public function readProductosVinilicas(){
			$qryresult=RunQuery("SELECT nombre, 
			GROUP_CONCAT(CONCAT_WS(' ', contenido, ' $',precio) SEPARATOR '  |  ') AS detalles 
			FROM es_productos e WHERE e.nombre = 'vigo' OR e.nombre = 'roma' OR e.nombre = 'venecia' OR e.nombre = 'madrid' OR e.nombre = 'paris satinada' OR e.nombre = 'paris mate' GROUP BY nombre ORDER BY e.id_producto ASC;");
			if($qryresult){
				return $qryresult;
			}else{
				return null;
			}
		}
	}
	
?>
