<?php

	class Sanear{
		private $_datos;
				
		public function __construct(){
			$this->_saneamiento();
		}
		
		public function getDatos(){
			return $this->_datos;
		}
		
		private function _saneamiento(){
			
			foreach($_REQUEST as $id => $valor){
					$valor = trim($valor);  //Elimina espacios en blanco al princio y al final de la cadena.
					$valor = strip_tags($valor);  //Elimina etiquetas html y javascript del valor introducido evitando ataques XSS
					$valor = addslashes($valor);  // agrega \ a las comillas simples y dobles para que no sean contempladas en ataques XSS y SQL Injection
					$valor = htmlentities($valor, ENT_QUOTES); // convierte comillas simples, comillas dobles y etiquetas html5 a su codigo en HTML5 y pone el valor como texto plano sin interpretación por el navegador
					$valor = htmlspecialchars($valor); // ademas de la anterior convierte < > / a su codigo en XHTML y pone el valor como texto plano sin interpretación por el navegador
					$valor = html_entity_decode($valor, ENT_QUOTES | ENT_HTML5, "UTF-8");			
				$this->_datos[$id] = $valor;
			}
		}
	}
	
?>




