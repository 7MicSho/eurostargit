<?php  

	class Usuario_V{
		private $_head;
		private $_scripts;
		private $_contenido;
		public function __construct(){
			$this->_head = ZONAS.'head.php';
			$this->_scripts = ZONAS.'scripts.php';
		}
		public function login()
		{
			$this->_contenido = 'html/pages/usuario/login.php';	
			require_once ESTRUCTURA.'estructura.php';	
		}
		public function profile()
		{
			$this->_contenido = 'html/pages/usuario/profile.php';	
			require_once ESTRUCTURA.'estructura.php';	
		}
	}
	
?>
