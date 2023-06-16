<?php  

	class Producto_C{
		private $_datos;
		private $_objSesion;
		private $_objModelo;
		private $_objVista;
		
		
		public function __construct($datos,$objSesion){
			$this->_objSesion = $objSesion;
			$this->_datos = $datos;
			$this->_objModelo = new Producto_M();
			$this->_objVista  = new Producto_V();
		}
		
		public function galeria(){
			$vinilicasPDO = $this->_objModelo->readProductosVinilicas();
			$vinilicas = $vinilicasPDO->fetchAll(PDO::FETCH_ASSOC);
			$this->_objVista->galeria($vinilicas); 
		}

		public function vigo200(){

			$this->_objVista->vigo200(); 
		}
		public function vinilicas(){

			$this->_objVista->vinilicas(); 
		}

		public function roma400(){

			$this->_objVista->roma400(); 
		}

		public function venecia600(){

			$this->_objVista->venecia600(); 
		}

		public function madrid800(){

			$this->_objVista->madrid800(); 
		}

		public function paris1000(){

			$this->_objVista->paris1000(); 
		}

		public function dashproductos(){

			$tipoproductosPDO = $this->_objModelo->gettipoproducto();
			$tipocompuestoPDO = $this->_objModelo->gettipocompuesto();
			$productosPDO = $this->_objModelo->listaproductos();

			$tipoproductos = $tipoproductosPDO->fetchAll(PDO::FETCH_ASSOC);
			$tipocompuesto = $tipocompuestoPDO->fetchAll(PDO::FETCH_ASSOC);
			$productos = $productosPDO->fetchAll(PDO::FETCH_ASSOC);

			$this->_objVista->dashproductos($productos,$tipoproductos,$tipocompuesto); 
		}

		public function agregarproducto(){

			$tipoproductosPDO = $this->_objModelo->gettipoproducto();
			$tipocompuestoPDO = $this->_objModelo->gettipocompuesto();
			$tipoproductos = $tipoproductosPDO->fetchAll(PDO::FETCH_ASSOC);
			$tipocompuesto = $tipocompuestoPDO->fetchAll(PDO::FETCH_ASSOC);
			$this->_objVista->agregarproducto($tipoproductos,$tipocompuesto); 
		}

		public function productoadd(){

			$data = $this->_objModelo->productoadd($this->_datos);
			header('Location:?modulo=producto&accion=agregarproducto&res=true');
		}

		public function eliminarproducto(){

			$data = $this->_objModelo->eliminarproducto($this->_datos);
			header('Location:?modulo=producto&accion=dashproductos&res=eliminado');
		}

		public function editarproducto(){

			$data = $this->_objModelo->editarproducto($this->_datos);
			header('Location:?modulo=producto&accion=dashproductos&res=editado');
		}
		
        
	}

?>
