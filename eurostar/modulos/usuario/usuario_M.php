<?php

	require_once('helpers/clsConexion.php');
	class Usuario_M{

		public function ModelgetLogin($data)
		{
			try{
				$user = $data['username'];
				$password = $data['password'];
				$result = RunQuery("SELECT DISTINCT p.id_persona,p.nombre,p.primer_apellido,p.segundo_apellido,p.rfc,p.curp,p.fk_id_tipopersona,
				(SELECT GROUP_CONCAT(t.tipo_telefono,'|',t.codigo_pais,'|',t.lada,'|',t.numero_telefono,'|' SEPARATOR ',') As telefonos FROM `es_telefonos` t where t.fk_id_persona =p.id_persona)AS telefonos,
				(SELECT GROUP_CONCAT( c.tipo_correo_contacto ,'|', c.correo,'|' SEPARATOR ',') FROM es_correos C where p.id_persona = C.fk_id_persona) AS correos,
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
	}
	
?>
