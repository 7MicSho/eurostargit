<?php

	require_once('helpers/clsConexion.php');
	class Usuario_M{

		public function ModelgetLogin($data)
		{
			try{
				$user = $data['username'];
				$password = $data['password'];
				$result = RunQuery("SELECT DISTINCT p.id_persona,p.nombre,p.primer_apellido,p.segundo_apellido,p.rfc,p.curp,p.fk_id_tipopersona,p.image_name,
				(SELECT GROUP_CONCAT(t.tipo_telefono,'|',t.codigo_pais,'|',t.lada,'|',t.numero_telefono,'|' SEPARATOR ',') As telefonos FROM `es_telefonos` t where t.fk_id_persona =p.id_persona)AS telefonos,
				(SELECT GROUP_CONCAT( c.tipo_correo_contacto ,'|', c.correo,'|' SEPARATOR ',') FROM es_correos c where p.id_persona = c.fk_id_persona) AS correos,
				(SELECT GROUP_CONCAT( d.id_direccion,'|',d.calle,'|',d.numero,'|',d.colonia,'|',d.entre_calles,'|',d.municipio,'|',d.estado,'|',d.pais,'|',d.codigo_postal,'|',d.numero_int,'|' SEPARATOR ',') FROM es_direcciones d where d.fk_id_persona = p.id_persona) AS direcciones
				FROM es_personas p
				WHERE p.nombre = '$user' AND password = SHA1('$password')");
				
				
				if (empty($result)){ return false; }else{


				$resultF = $result->fetchAll(PDO::FETCH_ASSOC);
				$p = $resultF[0]['id_persona'];
				$t = $resultF[0]['fk_id_tipopersona'];

				switch ($t) {
					case 0:
						
						
		
						break;
					case 1:
						$query = RunQuery("SELECT id_empleado FROM es_empleados WHERE es_empleados.fk_id_persona = '$p'");
						$resultquery = $query->fetchAll(PDO::FETCH_ASSOC);
		
						break;
					case 2:
						$query = RunQuery("SELECT id_empleado FROM es_empleados WHERE es_.fk_id_persona = '$p'");
						$resultquery = $query->fetchAll(PDO::FETCH_ASSOC);
						break;
					case 3:
						$query = RunQuery("SELECT id_empleado FROM es_empleados WHERE es_empleados.fk_id_persona = '$p'");
						$resultquery = $query->fetchAll(PDO::FETCH_ASSOC);
						break;
					case 4:
						$query = RunQuery("SELECT id_empleado FROM es_empleados WHERE es_empleados.fk_id_persona = '$p'");
						$resultquery = $query->fetchAll(PDO::FETCH_ASSOC);
						break;
					
					default:
						# code...
						break;
				}

				if(isset($resultquery[0])){
				$r=array_merge($resultF[0], $resultquery[0]);
				}else{
					
				$r=$resultF[0];
				}
				return $r;

			}
			}
			catch (Exception $e) {
				print_r( 'error'.$e );
			}
		}

		public function profileupdate($data){
			$idPersona = $data['idPersona'];
			$nombre = $data['nombre'];
			$primer_apellido = $data['primer_apellido'];
			$segundo_apellido = $data['segundo_apellido'];
			$rfc = $data['rfc'];
			$curp = $data['curp'];
			RunQuery("UPDATE es_personas SET 
			nombre = '$nombre', 
			primer_apellido = '$primer_apellido', 
			segundo_apellido = '$segundo_apellido', 
			rfc = '$rfc', 
			curp = '$curp'
			WHERE id_persona = '$idPersona'");




			
			$codigo = $data['codigo'];
			$lada = $data['lada'];
			$telefono = $data['telefono'];
			RunQuery("UPDATE es_telefonos SET 
			codigo_pais = '$codigo', 
			lada = '$lada', 
			numero_telefono = '$telefono'
			WHERE fk_id_persona = '$idPersona'");

			


			$email = $data['email'];
			RunQuery("UPDATE `es_correos` SET `correo` = '$email' 
			WHERE fk_id_persona = '$idPersona'");
			


			$calle = $data['calle'];
			$nExt = $data['nExt'];
			$nInt = $data['nInt'];
			$entreCalles = $data['entreCalles'];
			$colonia = $data['colonia'];
			$cp = $data['cp'];
			$municipio = $data['municipio'];
			$estado = $data['estado'];
			$pais = $data['paises'];
			RunQuery("UPDATE es_direcciones SET 
			calle='$calle', 
			numero='$nExt', 
			numero_int='$nInt', 
			colonia='$colonia', 
			entre_calles='$entreCalles', 
			municipio='$municipio', 
			estado='$estado', 
			pais='$pais' ,
			codigo_postal='$cp'
			WHERE fk_id_persona = '$idPersona'");

			$_SESSION['nombre'] = $data['nombre'];
			$_SESSION['primer_apellido'] = $data['primer_apellido'];
			$_SESSION['segundo_apellido'] = $data['segundo_apellido'];
			$_SESSION['rfc'] = $data['rfc'];
			$_SESSION['curp'] = $data['curp'];


			$_SESSION['telefonos'] = 'main|'.$codigo.'|'.$lada.'|'.$telefono.'|';
			$_SESSION['correos'] = 'main|'.$email.'|';
			$_SESSION['direcciones'] = 'main|'.$calle.'|'.$nExt.'|'.$colonia.'|'.$entreCalles.'|'.$municipio.'|'.$estado.'|'.$pais.'|'.$cp.'|'.$nInt.'|';
	
		}
	}
	
?>
