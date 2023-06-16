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
			$emplyeds = $this->_objModelo->ModelgetBetterEmployed();

			$c_pros = $this->_objModelo->ModelgetCountProspectos();
			$c_prosm = $this->_objModelo->ModelgetCountProspectosMonth();

			$c_clie = $this->_objModelo->ModelgetCountClientes();
			$c_cliem = $this->_objModelo->ModelgetCountClientesMonth();

			$c_prod = $this->_objModelo->ModelgetCountProductos();
			$c_prodm = $this->_objModelo->ModelgetCountProductosMonth();

			$c_empl = $this->_objModelo->ModelgetCountEmpleados();
			$c_emplm = $this->_objModelo->ModelgetCountEmpleadosMonth();

			$c_prov = $this->_objModelo->ModelgetCountProveedores();
			$c_provm = $this->_objModelo->ModelgetCountProveedoresMonth();

			$c_vent = $this->_objModelo->ModelgetCountVentas();
			$c_ventm = $this->_objModelo->ModelgetCountVentasMonth();

			$ventas = $this->_objModelo->ModelgetVentas();
			$dventas = $this->_objModelo->ModelgetCountVentasPedido();

			$mercado = $this->_objModelo->ModelgetMercado();
			$mercadop = $this->_objModelo->ModelgetMercadoP();
			$total = $this->_objModelo->ModelgetTotal();
			$this->_objVista->home($emplyeds,$c_pros,$c_clie,$c_prod,$c_empl,$c_prov,$c_vent,$c_prosm,$c_cliem,$c_prodm,$c_emplm,$c_provm,$c_ventm,$ventas,$dventas,$mercado,$mercadop,$total ); 
		}
		public function empleados(){
			
			//$this->_objVista->home(); 
		}
		public function clientes(){
			
			//$this->_objVista->home(); 
		}
		public function provee(){
			
			//$this->_objVista->home(); 
		}
		public function viewpowerbi(){
			
			$this->_objVista->viewpowerbi(); 
		}
		
		
		
		
		

        
	}

?>
