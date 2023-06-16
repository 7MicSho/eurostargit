<?php
class Visitas_V{
    private $_head;
		private $_scripts;
		private $_contenido;
		public function __construct(){
			$this->_head = ZONAS.'head.php';
			$this->_scripts = ZONAS.'scripts.php';

		}

        public function agregar($prospecto, $telEmp, $visitPros, $productos, $cliente){
            $this->_contenido = 'html/pages/visitas/agregar.php';
			require_once ESTRUCTURA.'estructura.php';
        }

        public function consultar($visitas, $empresas){
            $this->_contenido = 'html/pages/visitas/consultar.php';
			require_once ESTRUCTURA.'estructura.php';
        }
		
		public function muestras($muestras, $empresas){
            $this->_contenido = 'html/pages/visitas/muestras.php';
			require_once ESTRUCTURA.'estructura.php';
        }

		public function listapersonas($prospectos, $prosSinEmp, $clientes, $clientesSinEmp)
		{
			$this->_contenido = 'html/pages/visitas/listapersonas.php';
			require_once ESTRUCTURA.'estructura.php';		
		}

		public function carrito($prospecto,$productos)
		{
			$this->_contenido = 'html/pages/visitas/carrito.php';
			require_once ESTRUCTURA.'estructura.php';		
		}
}
?>