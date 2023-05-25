<?php  

	class Producto_V{
		private $_head;
		private $_scripts;
		private $_contenido;
		public function __construct(){
			$this->_head = ZONAS.'head.php';
			$this->_scripts = ZONAS.'scripts.php';

		}


		public function galeria($vinilicas)
		{
			$this->_contenido = 'html/pages/producto/galeria.php';
			require_once ESTRUCTURA.'estructura.php';		
		}

		public function vigo200()
		{
			$this->_contenido = 'html/pages/producto/vinilicas/vigo200.php';
			require_once ESTRUCTURA.'estructura.php';		
		}

		public function vinilicas()
		{
			$this->_contenido = 'html/pages/producto/vinilicas/vinilicas.php';
			require_once ESTRUCTURA.'estructura.php';		
		}
		public function roma400()
		{
			$this->_contenido = 'html/pages/producto/vinilicas/roma400.php';
			require_once ESTRUCTURA.'estructura.php';		
		}
		public function venecia600()
		{
			$this->_contenido = 'html/pages/producto/vinilicas/venecia600.php';
			require_once ESTRUCTURA.'estructura.php';		
		}
		public function madrid800()
		{
			$this->_contenido = 'html/pages/producto/vinilicas/madrid800.php';
			require_once ESTRUCTURA.'estructura.php';		
		}
		public function paris1000()
		{
			$this->_contenido = 'html/pages/producto/vinilicas/paris1000.php';
			require_once ESTRUCTURA.'estructura.php';		
		}
		

	}
	
?>
