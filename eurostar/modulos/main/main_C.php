<?php  

	class Main_C{
		private $_datos;
		private $_objSesion;
		private $_objModelo;
		private $_objVista;
		
		
		public function __construct($datos,$objSesion){
			$this->_objSesion = $objSesion;
			$this->_datos = $datos;
			$this->_objModelo = new Main_M();
			$this->_objVista  = new Main_V();
		}
		
		public function home(){
			
			$this->_objVista->home(); 
		}

		public function prospectos(){
			$this->_objVista->prospectos(); 
		}








        
	}

?>
