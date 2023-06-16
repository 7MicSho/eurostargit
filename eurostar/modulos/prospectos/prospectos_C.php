<?php  
	require_once('modulos/visitas/visitas_M.php');

	class Prospectos_C{
		private $_datos;
		private $_objSesion;
		private $_objModelo;
		private $_objModeloVisit;
		private $_objVista;
		
		
		public function __construct($datos,$objSesion){
			$this->_objSesion = $objSesion;
			$this->_datos = $datos;
			$this->_objModeloVisit = new Visitas_M();
			$this->_objModelo = new Prospectos_M();
			$this->_objVista  = new Prospectos_V();
		}

		public function administrar(){
			$visitas=$this->_objModeloVisit->readVisitSinEmp();
			$chartInfo=$this->_objModelo->readProspectosByBuy();
			$chartInfoMonth=$this->_objModelo->readProspectosByMonth();
			$prospectosOnly=$this->_objModelo->readProspectosOnly();
			$empresas=$this->_objModeloVisit->readEmpresas();
			$this->_objVista->home($visitas->fetchAll(PDO::FETCH_ASSOC), $chartInfo->fetchAll(PDO::FETCH_ASSOC), $prospectosOnly->fetchAll(PDO::FETCH_ASSOC) , $chartInfoMonth->fetchAll(PDO::FETCH_ASSOC), $empresas->fetchAll(PDO::FETCH_ASSOC)); 
		}


        public function agregar(){
			$empleados=$this->_objModelo->readEmpleados();
			$mercados=$this->_objModelo->readMercados();
			$prefijos=json_decode(file_get_contents("html/temas/eurostartemplate/assets/json/prefijos.json"), true);
			$this->_objVista->agregar($prefijos, $empleados->fetchAll(PDO::FETCH_ASSOC), $mercados->fetchAll(PDO::FETCH_ASSOC)); 
		}

        public function consultar(){
			$prospectos=$this->_objModelo->readProspectosM();
			$prosSinEmp=$this->_objModelo->readProspectosNoEmpresaM();
			$this->_objVista->consultar($prospectos->fetchAll(PDO::FETCH_ASSOC), $prosSinEmp->fetchAll(PDO::FETCH_ASSOC)); 
		}

        public function editar(){
			$prospectos=$this->_objModelo->readProspectosM();
			$prosSinEmp=$this->_objModelo->readProspectosNoEmpresaM();
			$vendedores=$this->_objModelo->readVendedores();
			$mercados=$this->_objModelo->readMercados();
			$tipos=$this->_objModelo->readTipos();
			$this->_objVista->editar($prospectos->fetchAll(PDO::FETCH_ASSOC), $vendedores->fetchAll(PDO::FETCH_ASSOC), $prosSinEmp->fetchAll(PDO::FETCH_ASSOC), $mercados->fetchAll(PDO::FETCH_ASSOC), $tipos->fetchAll(PDO::FETCH_ASSOC)); 
		}

		public function promociones(){
			$this->_objVista->promociones(); 
		}
		public function seleccionar(){
			$prospectos=$this->_objModelo->readProspectosM();
			$prosSinEmp=$this->_objModelo->readProspectosNoEmpresaM();
			$this->_objVista->seleccionar($prospectos->fetchAll(PDO::FETCH_ASSOC), $prosSinEmp->fetchAll(PDO::FETCH_ASSOC)); 
		}

		public function readprospectos(){
			$prospectos=$this->_objModelo->readProspectosM();
			$vendedores=$this->_objModelo->readEmpleados();
			$prosSinEmp=$this->_objModelo->readProspectosNoEmpresaM();
			$mercados=$this->_objModelo->readMercados();
			$tipos=$this->_objModelo->readTipos();

			$this->_objVista->editar($prospectos->fetchAll(PDO::FETCH_ASSOC), $vendedores->fetchAll(PDO::FETCH_ASSOC),$prosSinEmp->fetchAll(PDO::FETCH_ASSOC),$mercados->fetchAll(PDO::FETCH_ASSOC), $tipos->fetchAll(PDO::FETCH_ASSOC));
		}

		public function prospecto(){
			$prospecto=$this->_objModelo->readOneProspectoM($this->_datos);
			$visitas=$this->_objModeloVisit->readVisitToPros($this->_datos);
			$this->_objVista->prospecto($prospecto->fetchAll(PDO::FETCH_ASSOC), $visitas->fetchAll(PDO::FETCH_ASSOC));
		}

		public function createpfisica(){
			$res=$this->_objModelo->createPFisicaM($this->_datos);
			if ($res) {
				header('Location:?modulo=prospectos&accion=agregar&sc');
			} else {
				header('Location:?modulo=prospectos&accion=agregar&fail');
			}
		}

		public function createpmoral(){
			$res=$this->_objModelo->createPMoralM($this->_datos);
			if ($res) {
				header('Location:?modulo=prospectos&accion=agregar&sc');
			} else {
				header('Location:?modulo=prospectos&accion=agregar&fail');
			}
		}

		public function editarprospecto(){
			$res=$this->_objModelo->updateProspectoM($this->_datos);
			if ($res) {
				header('Location:?modulo=prospectos&accion=editar&sc');
			} else {
				header('Location:?modulo=prospectos&accion=editar&fail');
			}
		}

		public function getmercados(){
			$res=$this->_objModelo->getMercadosM($this->_datos);
			if($res){
				echo json_encode($res->fetchAll(PDO::FETCH_ASSOC));
			}else{
				echo 'error';
			}
		}

		public function deleteprospectobd(){
			$res=$this ->_objModelo->deletebd($this->_datos);
			if ($res) {
				header('Location:?modulo=prospectos&accion=editar&sc');
			} else {
				header('Location:?modulo=prospectos&accion=editar&fail');
			}
		}

		








        
	}

?>