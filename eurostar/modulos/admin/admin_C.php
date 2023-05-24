<?php  

	class Admin_C{
		private $_datos;
		private $_objSesion;
		private $_objModelo;
		private $_objVista;
		
		
		public function __construct($datos,$objSesion){
			$this->_objSesion = $objSesion;
			$this->_datos = $datos;
			$this->_objModelo = new Admin_M();
			$this->_objVista  = new Admin_V();
		}
		
		public function home(){
			
			$this->_objVista->home(); 
		}
		public function empleados(){
			
			$this->_objVista->home(); 
		}
		public function clientes(){
			
			$this->_objVista->home(); 
		}
		public function provee(){
			
			$this->_objVista->home(); 
		}
		
		
		
		
		

        
	}

?>
