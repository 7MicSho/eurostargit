<?php  

	class Empleado_C{
		private $_datos;
		private $_objSesion;
		private $_objModelo;
		private $_objVista;
		
		
		public function __construct($datos,$objSesion){
			$this->_objSesion = $objSesion;
			$this->_datos = $datos;
			$this->_objModelo = new Empleado_M();
			$this->_objVista  = new Empleado_V();
		}
		
		public function home(){
			
			//$this->validarSesion(); 
			$vendedores = $this->_objModelo->ModelgetVendedores($this->_datos);
			$this->_objVista->dashboard($vendedores); 
		}
		public function empleados_downs(){
			
			//$this->validarSesion(); 
			$vendedores = $this->_objModelo->ModelgetVendedoresDown($this->_datos);
			$this->_objVista->dashboarddown($vendedores); 
		}

		private function validarSesion(){
			if (isset($_SESSION['typeuser'])) {
				header('Location:?');
			}
		}
		public function agregar(){
			$this->_objVista->agregar(); 
		}
		public function empleadoadd(){
			$this->_objModelo->vendedoradd($this->_datos);
			header('Location:?modulo=empleado&accion=home');
		}
		public function downvendedor(){
			$this->_objModelo->ModeldownVendedor($this->_datos);
			header('Location:?modulo=empleado&accion=home');
		}
        
	}

?>
