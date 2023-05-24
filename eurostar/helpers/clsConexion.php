<?php
		function conectar(){
			try{
				$GLOBALS['pdo']=new PDO("mysql:host=".SERVIDOR.";dbname=".BASE_DATOS, USUARIO, CONTRASENA);
				$GLOBALS['pdo']->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}catch (PDOException $e){
				print "Error!: No se pudo conectar a la bd ".BASE_DATOS."<br/>";
				print "\nError!: ".$e."<br/>";
				die();
			}
		}
		function desconectar() {
			$GLOBALS['pdo']=null;
		}
		function RunQuery($query){
			try{
				conectar();
				$resultQry=$GLOBALS['pdo']->prepare($query);
				$resultQry->setFetchMode(PDO::FETCH_ASSOC);
				$resultQry->execute();
				$result = $resultQry;
				desconectar();
				return $result;
			}catch(Exception $e){
				die("Error: ".$e);
			}
		}
	
	
?>




