<?php  

	class Main_V{
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

			if ($_SESSION['typeuser']=='admin') {
				$this->_contenido = 'html/pages/admin/inicio.php';
			}
			elseif ($_SESSION['typeuser']=='vendedor') {
				$this->_contenido = 'html/pages/vendedor/inicio.php';
			}

			
			require_once ESTRUCTURA.'estructura.php';		
		}
		public function prospectos()
		{
			$this->_contenido = 'html/pages/main/prospectos.php';
			require_once ESTRUCTURA.'estructura.php';		
		}
		private function _validate(){
			(!isset($_SESSION['typeuser'] ) ) ? exit : (($_SESSION['typeuser'] != $_GET['modulo'] ) ? header('Location:?modulo='.$_SESSION['typeuser'].'&accion=home') : ''); 
		}

	}
	
?>
