<?php  

	class Prospectos_V{
		private $_head;
		private $_scripts;
		private $_contenido;
		public function __construct(){
			$this->_head = ZONAS.'head.php';
			$this->_scripts = ZONAS.'scripts.php';

		}

		public function home($visitas, $chartInfo, $prospectosOnly, $chartInfoMonth)
		{
			//$this->_validate();
			$this->_contenido = 'html/pages/prospectos/prospectos.php';
			require_once ESTRUCTURA.'estructura.php';		
		}

        public function agregar($prefijos, $empleados)
		{
			$this->_contenido = 'html/pages/prospectos/agregar.php';
			require_once ESTRUCTURA.'estructura.php';		
		}

        public function consultar($prospectos, $prosSinEmp)
		{
			$this->_contenido = 'html/pages/prospectos/consultar.php';
			require_once ESTRUCTURA.'estructura.php';		
		}

		public function seleccionar($prospectos, $prosSinEmp)
		{
			$this->_contenido = 'html/pages/prospectos/seleccionar.php';
			require_once ESTRUCTURA.'estructura.php';		
		}

        public function editar($prospectos, $vendedores)
		{
			$this->_contenido = 'html/pages/prospectos/editar.php';
			require_once ESTRUCTURA.'estructura.php';		
		}

		public function promociones()
		{
			$this->_contenido = 'html/pages/prospectos/promociones.php';
			require_once ESTRUCTURA.'estructura.php';		
		}
		private function _validate(){
			(!isset($_SESSION['typeuser'] ) ) ? exit : (($_SESSION['typeuser'] != $_GET['modulo'] ) ? header('Location:?modulo='.$_SESSION['typeuser'].'&accion=home') : ''); 
		}

		public function prospecto($prospecto, $visitas)
		{
			$this->_contenido = 'html/pages/prospectos/prospecto.php';
			require_once ESTRUCTURA.'estructura.php';		
		}


	}
	
?>