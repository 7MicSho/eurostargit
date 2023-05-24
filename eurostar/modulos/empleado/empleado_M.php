<?php

require_once('helpers/clsConexion.php');
class Empleado_M
{
	public function ModelgetVendedores($data)
	{
		try {

			$result = RunQuery("SELECT DISTINCT p.id_persona,e.id_empleado,e.sueldo,e.cuenta_nomina,e.fecha_ingreso,p.nombre,p.primer_apellido,p.segundo_apellido,p.rfc, m.descripcion AS fk_id_tipoempleado , e.sueldo,e.cuenta_nomina,
				(SELECT GROUP_CONCAT(t.tipo_telefono,'|',t.codigo_pais,'|',t.lada,'|',t.numero_telefono SEPARATOR ',') As telefonos FROM `es_telefonos` t where t.fk_id_persona =p.id_persona)AS telefonos,
				(SELECT GROUP_CONCAT( c.tipo_correo_contacto ,'|', c.correo SEPARATOR ',') FROM es_correos C where p.id_persona = C.fk_id_persona )AS correos,
				(SELECT GROUP_CONCAT( d.id_direccion,'|',d.calle,'|',d.numero,'|',d.colonia,'|',d.entre_calles,'|',d.municipio,'|',d.estado,'|',d.pais,'|',d.codigo_postal,'|',d.numero_int SEPARATOR ',') FROM es_direcciones d where d.fk_id_persona = p.id_persona) AS direcciones
				FROM es_personas p 
				JOIN es_empleados e ON p.id_persona = e.fk_id_persona 
				JOIN es_tipoempleados m ON e.fk_id_tipoempleado = m.id_tipoempleado   WHERE p.estatus='1' AND p.fk_id_tipopersona='1' ;");
			return (empty($result) ? false : $result->fetchAll(PDO::FETCH_ASSOC));
		} catch (Exception $e) {
			print_r('error' . $e);
		}
	}
	public function ModelgetVendedoresDown()
	{
		try {

			$result = RunQuery("SELECT DISTINCT p.id_persona,e.id_empleado,e.sueldo,e.cuenta_nomina,e.fecha_ingreso,p.nombre,p.primer_apellido,p.segundo_apellido,p.rfc, m.descripcion AS fk_id_tipoempleado , e.sueldo,e.cuenta_nomina,
				(SELECT GROUP_CONCAT(t.tipo_telefono,'|',t.codigo_pais,'|',t.lada,'|',t.numero_telefono SEPARATOR ',') As telefonos FROM `es_telefonos` t where t.fk_id_persona =p.id_persona)AS telefonos,
				(SELECT GROUP_CONCAT( c.tipo_correo_contacto ,'|', c.correo SEPARATOR ',') FROM es_correos C where p.id_persona = C.fk_id_persona )AS correos,
				(SELECT GROUP_CONCAT( d.id_direccion,'|',d.calle,'|',d.numero,'|',d.colonia,'|',d.entre_calles,'|',d.municipio,'|',d.estado,'|',d.pais,'|',d.codigo_postal,'|',d.numero_int SEPARATOR ',') FROM es_direcciones d where d.fk_id_persona = p.id_persona) AS direcciones
				FROM es_personas p 
				JOIN es_empleados e ON p.id_persona = e.fk_id_persona 
				JOIN es_tipoempleados m ON e.fk_id_tipoempleado = m.id_tipoempleado   WHERE p.estatus='0' AND p.fk_id_tipopersona='1'; ");
			return (empty($result) ? false : $result->fetchAll(PDO::FETCH_ASSOC));
		} catch (Exception $e) {
			print_r('error' . $e);
		}
	}
	public function ModeldownVendedor($data)
	{
		try {

			$result = RunQuery("UPDATE es_personas SET estatus = 0 WHERE id_persona =" . $data['id'] . ";");
			return (empty($result) ? false : $result->fetchAll(PDO::FETCH_ASSOC));
		} catch (Exception $e) {
			print_r('error' . $e);
		}
	}
	public function vendedoradd($data)
	{
		try {

			$nombre = $data['nombre'];
			$primer_apellido = $data['primer_apellido'];
			$segundo_apellido = $data['segundo_apellido'];

			$codigo_pais = $data['codigo'];
			$lada = $data['lada'];
			$numero_telefono = $data['telefono'];

			$email = $data['email'];

			$rfc = $data['rfc'];
			$curp = $data['curp'];

			$tipo_empleado = $data['tipo_empleado'];
			$sueldo = $data['sueldo'];
			$cuenta_nomina = $data['cuenta_nomina'];

			$calle = $data['calle'];
			$numero = $data['nExt'];
			$numero_int = $data['nInt'];
			$entre_calles = $data['entreCalles'];
			$codigo_postal = $data['cp'];
			$colonia = $data['colonia'];
			$municipio = $data['municipio'];
			$estado = $data['estado'];
			$pais = $data['pais'];

			$sueldo = $data['sueldo'];
			$foto = '';
			$tipo_telefono = '';

			if (
				RunQuery("INSERT INTO es_personas (nombre, primer_apellido, segundo_apellido, curp, rfc,password,image_name, fk_id_tipopersona, estatus) 
						VALUES ('$nombre', '$primer_apellido', '$segundo_apellido', '$curp' ,'$rfc', SHA1('$rfc'),'$foto','1','1')")
			) {

				$idperson = RunQuery("SELECT MAX(id_persona) AS id_persona FROM es_personas;");
				$idp = $idperson->fetchAll(PDO::FETCH_ASSOC);
				$id = $idp[0]['id_persona'];

				RunQuery("INSERT INTO es_empleados (sueldo,fecha_ingreso, cuenta_nomina,  fk_id_persona, fk_id_tipoempleado,fk_id_sucursal) 
						VALUES ('$sueldo',NOW(), '$cuenta_nomina',  '$id', '$tipo_empleado','0')");
				
				RunQuery("INSERT INTO es_telefonos (codigo_pais, lada, numero_telefono, tipo_telefono, fk_id_persona, fk_id_empresa, estatus)
						VALUES ('$codigo_pais','$lada','$numero_telefono','$tipo_telefono', '$id','0','1')");
				
				RunQuery("INSERT INTO es_direcciones (calle, numero, numero_int, colonia, entre_calles, municipio, estado, pais, codigo_postal, fk_id_persona, fk_id_empresa)
						VALUES ('$calle','$numero','$numero_int','$colonia','$entre_calles','$municipio','$estado','$pais','$codigo_postal','$id','0')");

				RunQuery("INSERT INTO es_correos (`id_correo`, `fk_id_persona`, `fk_id_empresa`, `correo`, `tipo_correo_contacto`) 
						VALUES (NULL, '$id', '0', '$email', 'main');");
			}



		} catch (Exception $e) {
			print_r('error' . $e);
		}
	}
}

?>