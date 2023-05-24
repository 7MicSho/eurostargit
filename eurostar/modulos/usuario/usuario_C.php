<?php  

	class Usuario_C{
		private $_datos;
		private $_objSesion;
		private $_objModelo;
		private $_objVista;
		
		
		public function __construct($datos,$objSesion){
			$this->_objSesion = $objSesion;
			$this->_datos = $datos;
			$this->_objModelo = new Usuario_M();
			$this->_objVista  = new Usuario_V();
		}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////																																							 ///////////
///////////													        VISTAS																							 ///////////
///////////																																							 ///////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		public function login(){
			isset($_SESSION['typeuser'])? ($_SESSION['typeuser']=='admin'?header('Location:?modulo=main&accion=home'):header('Location:?modulo=vendedor&accion=home')) :$this->_objVista->login();;
			 
		}



////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////																																							 ///////////
///////////													        METODOS																							 ///////////
///////////																																							 ///////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		public function entrar(){

			$user = $this->_objModelo->ModelgetLogin($this->_datos);
		
			if (isset($user['fk_id_tipopersona'])) {
				
				if ($user['fk_id_tipopersona'] == '0') {
					$this->_objSesion->crearVariable('typeuser','admin');
					header('Location:?modulo=admin&accion=home');
					
				} elseif ($user['fk_id_tipopersona'] == '1') {
					$this->_objSesion->crearVariable('typeuser','empleado');
					$this->_objSesion->crearVariable('id_empleado',$user['id_empleado']);
					
					header('Location:?modulo=producto&accion=galeria');
				} elseif ($user['fk_id_tipopersona'] == '2') {
					//$this->_objSesion->crearVariable('typeuser','proveedor');
					//header('Location:?modulo=proveedor&accion=home');
				} elseif ($user['fk_id_tipopersona'] == '3') {
					$this->_objSesion->crearVariable('typeuser','cliente');
					header('Location:?modulo=cliente&accion=home');
				} elseif ($user['fk_id_tipopersona'] == '4') {
					$this->_objSesion->crearVariable('typeuser','prospectos');
					header('Location:?modulo=prospectos&accion=administrar');
				}

				$this->_objSesion->crearVariable('nombre',$user['nombre']);
				$this->_objSesion->crearVariable('primer_apellido',$user['primer_apellido']);
				$this->_objSesion->crearVariable('segundo_apellido',$user['segundo_apellido']);
				$this->_objSesion->crearVariable('rfc',$user['rfc']);
				$this->_objSesion->crearVariable('curp',$user['curp']);
				$this->_objSesion->crearVariable('telefonos',$user['telefonos']);
				$this->_objSesion->crearVariable('correos',$user['correos']);
				$this->_objSesion->crearVariable('direcciones',$user['direcciones']);
				$this->_objSesion->crearVariable('id_persona',$user['id_persona']);
				$this->_objSesion->crearVariable('foto',$user['image_name']);
				
			}else{
				header('Location:?faillogin');
			}

		}

		public function salir(){
			session_destroy();
			header('Location:?');
		}
        public function profile(){
			
			$this->_objVista->profile(); 
		}





	}

?>
