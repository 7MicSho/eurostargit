<?php  

	class Producto_C{
		private $_datos;
		private $_objSesion;
		private $_objModelo;
		private $_objVista;
		
		
		public function __construct($datos,$objSesion){
			$this->_objSesion = $objSesion;
			$this->_datos = $datos;
			$this->_objModelo = new Producto_M();
			$this->_objVista  = new Producto_V();
		}
		
		public function galeria(){

			$this->_objVista->galeria(); 
		}

		public function vigo200(){

			$this->_objVista->vigo200(); 
		}

		public function roma400(){

			$this->_objVista->roma400(); 
		}

		public function venecia600(){

			$this->_objVista->venecia600(); 
		}

		public function madrid800(){

			$this->_objVista->madrid800(); 
		}

		public function paris1000(){

			$this->_objVista->paris1000(); 
		}
		
		
		
		
		

        
	}

?>
