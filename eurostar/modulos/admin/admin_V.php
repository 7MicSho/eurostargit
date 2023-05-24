<?php  

	class Admin_V{
		private $_head;
		private $_scripts;
		private $_contenido;
		public function __construct(){
			$this->_head = ZONAS.'head.php';
			$this->_scripts = ZONAS.'scripts.php';

		}
		public function home()
		{
			//$this->_validate();
			$this->_contenido = 'html/pages/admin/inicio.php';
			require_once ESTRUCTURA.'estructura.php';		
		}
		public function empleadoshome()
		{
			//$this->_validate();
			$this->_contenido = 'html/pages/empleado/inicio.php';
			require_once ESTRUCTURA.'estructura.php';		
		}
		public function clienteshome()
		{
			//$this->_validate();
			$this->_contenido = 'html/pages/admin/inicio.php';
			require_once ESTRUCTURA.'estructura.php';		
		}
		public function proveedoreshome()
		{
			//$this->_validate();
			$this->_contenido = 'html/pages/admin/inicio.php';
			require_once ESTRUCTURA.'estructura.php';		
		}








		private function _validate(){
			(!isset($_SESSION['typeuser'] ) ) ? exit : (($_SESSION['typeuser'] != $_GET['modulo'] ) ? header('Location:?') : ''); 
			 

		}

	}
	
?>
