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

		public function listaproductos(){
			$qryresult=RunQuery("SELECT * FROM `es_productos` INNER JOIN es_almacenes ON es_productos.id_producto = es_almacenes.fk_id_producto;");
			if($qryresult){
				return $qryresult;
			}else{
				return null;
			}
		}

		public function gettipocompuesto(){
			$qryresult=RunQuery("SELECT * FROM es_compuestos");
			if($qryresult){
				return $qryresult;
			}else{
				return null;
			}
		}

		public function gettipoproducto(){
			$qryresult=RunQuery("SELECT * FROM es_tipoproductos");
			if($qryresult){
				return $qryresult;
			}else{
				return null;
			}
		}

		public function productoadd($data){
			$codigo      	= strtoupper($data["codigo"]);
			$nombre      	= strtoupper($data["nombre"]);
			$contenido   	= strtoupper($data["contenido"]);
			$unidad      	= $data["unidad"];
			$descripcion 	= strtoupper($data["descripcion"]);
			$precio      	= $data["precio"];
			$tipo_compuesto = $data["tipo_compuesto"];
			$tipo_producto  = $data["tipo_producto"];
			$min			= $data["min"];
			$max 			= $data["max"];

			

			$qryresult=RunQuery("INSERT INTO es_productos (`codigo`, `nombre`, `contenido`, `unidad`, `descripcion`, `precio`, `fecha_alta`, `estatus`, `fk_id_compuesto`, `fk_id_tipo_producto`)
									 VALUES ('$codigo','$nombre','$contenido','$unidad','$descripcion','$precio', now() ,'1','$tipo_compuesto','$tipo_producto')");

			
			$getidproducto = $this->getidproducto($codigo);
			$idproducto = $getidproducto[0]["id_producto"];
			
			$qryresult2=RunQuery("INSERT INTO es_almacenes (min , max , fk_id_producto) 
									VALUES ('$min','$max','$idproducto')");
				
			
			if($qryresult2){
				return $qryresult2;
			}else{
				return null;
			}
		}

		public function eliminarproducto($data){

			$id = $data["_id_producto"]; 

			/* trigger_error(print_r($data), E_USER_ERROR);  */

			$qryresult=RunQuery("UPDATE `es_productos` SET `estatus`='0' WHERE id_producto = '$id' ");
			if($qryresult){
				return $qryresult;
			}else{
				return null;
			}
		}

		public function getidproducto($codigo){

			$qryresult=RunQuery("SELECT `id_producto` FROM `es_productos` WHERE codigo  = '$codigo'");
			if($qryresult){
				return $qryresult->fetchAll(PDO::FETCH_ASSOC);
			}else{
				return null;
			}
		}

		public function getinfoproducto($data){

			$id = $data["id_producto"];

			$qryresult=RunQuery("SELECT * FROM `es_productos` WHERE id_producto  = '$id'");
			if($qryresult){
				return $qryresult->fetchAll(PDO::FETCH_ASSOC);
			}else{
				return null;
			}
		}

		public function editarproducto($data){

			$id_producto	= $data["id_producto"];
			$codigo      	= strtoupper($data["codigo"]);
			$nombre      	= strtoupper($data["nombre"]);
			$contenido   	= strtoupper($data["contenido"]);
			$unidad      	= $data["unidad"];
			$descripcion 	= strtoupper($data["descripcion"]);
			$precio      	= $data["precio"];
			$tipo_compuesto = intval($data["id_compuesto"]);
			$tipo_producto  = intval($data["id_tipo_producto"]);
			$estatus  		= intval($data["estatus"]);
			$min			= $data["min"];
			$max 			= $data["max"]; 

			$qryresult=RunQuery("UPDATE `es_productos`
								SET `nombre`='$nombre',`contenido`='$contenido',`unidad`='$unidad',
								 	 `descripcion`='$descripcion',`precio`='$precio',`fk_id_tipo_producto`='$tipo_producto',
									 `fk_id_compuesto`='$tipo_compuesto',`estatus`='$estatus'
								WHERE id_producto = '$id_producto' ");

			$qryresult2=RunQuery("UPDATE `es_almacenes` 
								SET `min`='$min',`max`='$max'
								WHERE fk_id_producto = '$id_producto'");			

			if($qryresult2){
				return $qryresult2;
			}else{
				return null;
			}
		}
	}
	
?>
