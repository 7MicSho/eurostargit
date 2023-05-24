<?php  

	class Empleado_V{
		private $_head;
		private $_scripts;
		private $_contenido;
		public function __construct(){
			$this->_head = ZONAS.'head.php';
			$this->_scripts = ZONAS.'scripts.php';
		}
		public function dashboard($vendedores)
		{
			$this->_contenido = 'html/pages/empleado/inicio.php';
			require_once ESTRUCTURA.'estructura.php';			
		}
		public function dashboarddown($vendedores)
		{
			$this->_contenido = 'html/pages/empleado/deshabilitados.php';
			require_once ESTRUCTURA.'estructura.php';			
		}


		public function agregar()
		{
			$this->_contenido = 'html/pages/empleado/agregar.php';
			require_once ESTRUCTURA.'estructura.php';		
		}
		
	}
?>
