<?php
require_once('helpers/clsConexion.php');
class Prospectos_M
{

	public function createPFisicaM($datos)
	{
		try {
			$fechaAlta = date('Y-m-d');
			//personal
			$nombre = $datos['nombre'];
			$pApellido = $datos['pApellido'];
			$sApellido = $datos['sApellido'];
			$codigo = $datos['codigo'];
			$lada = $datos['lada'];
			$nTel = $datos['telefono'];
			$email = $datos['email'];
			$rfc = $datos['curp'] ? $datos['curp'] : 'N/A';
			$curp = $datos['rfc'] ? $datos['rfc'] : 'N/A';
			$promCompras = $datos['promcompras'];
			$nombreCompleto = $nombre . ' ' . $pApellido . ' ' . $sApellido;

			//address
			$calle = $datos['calle'];
			$nExt = $datos['nExt'];
			$nInt = $datos['nInt'];
			$cp = $datos['cp'];
			$colonia = $datos['colonia'];
			$municipio = $datos['municipio'];
			$estado = $datos['estado'];
			$pais = $datos['pais'];
			$entreCalles = $datos['entreCalles'];
			//vendedor
			$vendedor = $datos['vendedor'];
		} catch (Exception $e) {
			echo $e->getMessage();
		}
		//imagen
		try {
			$file = $_FILES['fotoprospecto']['name'];
			$target_dir = "html/public/photos/";
			$target_file = $target_dir . basename($_FILES["fotoprospecto"]["name"]);
			if (!file_exists($target_dir)) {
				mkdir($target_dir, 0777, true);
			}
			;
		} catch (Exception $e) {
			echo 'Caught exception: ', $e->getMessage(), "\n";
		}

		if (move_uploaded_file($_FILES["fotoprospecto"]["tmp_name"], $target_file)) {
			try {
				$qryresult = RunQuery("INSERT INTO es_personas
					(`nombre`, `primer_apellido`, `segundo_apellido`, `curp`, `rfc`,`fk_id_tipopersona`, `estatus`) VALUES ('$nombre', '$pApellido', '$sApellido', '$curp','$rfc' ,'4', '1');");
			} catch (Exception $e) {
				echo 'Caught exception $qryresult: ', $e->getMessage(), "\n";
			}


			if ($qryresult) {
				$PersonasTable = RunQuery("SELECT * FROM es_personas ORDER BY id_persona DESC;");
				$PersonasTable = $PersonasTable->fetchAll(PDO::FETCH_ASSOC);
				$fkIDPersona = $PersonasTable[0]['id_persona'];

				try {
					$qryresult2 = RunQuery("INSERT INTO es_direcciones (`calle`, `numero`, `numero_int`, `colonia`, `entre_calles`, `municipio`, `estado`, `pais`, `codigo_postal`, `fk_id_persona`)
						VALUES ('$calle', '$nExt', '$nInt', '$colonia', '$entreCalles', '$municipio', '$estado', '$pais[0]','$cp','$fkIDPersona');
						INSERT INTO es_correos (`correo`, `tipo_correo_contacto`, `fk_id_persona`) VALUES ('$email', '$nombreCompleto', '$fkIDPersona');");
				} catch (Exception $e) {
					echo 'Caught exception $qryresult2: ', $e->getMessage(), "\n";
				}


				if ($qryresult2) {
					try {
						$qryresult3 = RunQuery("INSERT INTO es_telefonos (`codigo_pais`, `lada`, `numero_telefono`, `fk_id_persona`, `estatus`)
							VALUES ('$codigo', '$lada', '$nTel', '$fkIDPersona', '1');");
					} catch (Exception $e) {
						echo 'Caught exception $qryresulte: ', $e->getMessage(), "\n";
					}

					if ($qryresult3) {

						$qryresult4 = RunQuery("INSERT INTO es_prospectos (`fecha_alta`,`ruta_foto`,`promedio_compra_mes`,`fk_id_persona`, `fk_id_empresa`, `fk_id_vendedor`)
							VALUES ('$fechaAlta','$target_file','$promCompras','$fkIDPersona', '1','$vendedor');");
						if ($qryresult4) {
							return $qryresult4;
						} else {
							return null;
						}
					} else {
						return null;
					}
				} else {
					return null;
				}

			} else {
				return null;
			}
		} else {
			return null;
		}
	}

	public function createPMoralM($datos)
	{
		$fechaalta = date('Y-m-d');
		//personal
		$nombrecomp = $datos['nombrecomp'];
		$razonsocial = $datos['razonsocial'];
		$rfc = $datos['rfc'];
		$emailcomp = $datos['emailcomp'];
		$giro = $datos['giro'];
		$tipo = $datos['tipo'];

		//telefono
		$codigoComp = $datos['codigocomp'];
		$ladaComp = $datos['ladacomp'];
		$nTelComp = $datos['telcomp'];
		$tipotels = $datos['rbtipo'];

		$codigoArray = explode(',', $codigoComp);
		$ladaArray = explode(',', $ladaComp);
		$nTelArray = explode(',', $nTelComp);
		$tipotel = explode(',', $tipotels);
		//address
		$calle = $datos['calle'];
		$nExt = $datos['nExt'];
		$nInt = $datos['nInt'];
		$cp = $datos['cp'];
		$colonia = $datos['colonia'];
		$municipio = $datos['municipio'];
		$estado = $datos['estado'];
		$pais = $datos['pais'];
		$entreCalles = $datos['entreC'];

		//contacto
		$nombre = $datos['nombre'];
		$pApellido = $datos['pApellido'];
		$sApellido = $datos['sApellido'];
		$puesto = $datos['puesto'];
		$email = $datos['email'];
		$codigo = $datos['codigo'];
		$lada = $datos['lada'];
		$nTel = $datos['telefono'];

		$nombreArray = explode(',', $nombre);
		$pApellidoArray = explode(',', $pApellido);
		$sApellidoArray = explode(',', $sApellido);
		$puestoArray = explode(',', $puesto);
		$emailArray = explode(',', $email);
		$codigocArray = explode(',', $codigo);
		$ladacArray = explode(',', $lada);
		$nTelcArray = explode(',', $nTel);

		$vendedor = $datos['vendedor'];
		$pcompra = $datos['pcompra'];
		//foto
		$image = $_FILES["imagen"]["name"];
		$target_dir = "html/public/photos/";
		$target_file = $target_dir . $_FILES["imagen"]["name"];
		$valid = 1;
		$file_type = strtolower(pathinfo($image, PATHINFO_EXTENSION));

		if (!file_exists($target_dir)) {
			mkdir($target_dir, 0777, true);
		}

		$file_size = $_FILES["image"]["size"];

		if ($file_size > 1000000) {
			$valid = 0;
		}
		if ($file_type != "jpg" && $file_type != "jpeg" && $file_type != "png" && $file_type != "gif") {
			$valid = 0;
		}

		if ($valid == 1) {
			if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file)) {
				print($codigoComp);
				try {
					$qryresult = RunQuery("INSERT INTO es_empresas
						(`nombre_emp`,`razon_social`, `rfc_emp`, `giro`,`tipo`, `estatus`) VALUES ('$nombrecomp', '$razonsocial', '$rfc','$giro' ,'$tipo', '1');");

					$fkEmpresas = RunQuery("SELECT * FROM es_empresas ORDER BY id_empresa DESC;");
					$fkEmpresas = $fkEmpresas->fetchAll(PDO::FETCH_ASSOC);
					$fkIDEmpresa = $fkEmpresas[0]['id_empresa'];
				} catch (Exception $e) {
					echo 'Caught exception $qryresult: ', $e->getMessage(), "\n";
				}

				if ($qryresult) {

					$qryresult2 = RunQuery("INSERT INTO es_direcciones (`calle`, `numero`, `numero_int`, `colonia`, `entre_calles`, `municipio`, `estado`, `pais`, `codigo_postal`, `fk_id_empresa`)
					VALUES ('$calle','$nExt', '$nInt', '$colonia', '$entreCalles', '$municipio', '$estado', '$pais', '$cp', '$fkIDEmpresa');");

					if ($qryresult2) {

						for ($i = 0; $i < count($codigoArray); $i++) {
							$qryresult3 = RunQuery("INSERT INTO es_telefonos (`codigo_pais`, `lada`, `numero_telefono`,`tipo_telefono`, `fk_id_empresa`, `estatus`)  VALUES
							('$codigoArray[$i]', '$ladaArray[$i]', '$nTelArray[$i]','$tipotel[$i]' ,'$fkIDEmpresa', '1');");
						}


						if ($qryresult3) {

							$qryresult4 = RunQuery("INSERT INTO es_correos (`fk_id_empresa`, `correo`, `tipo_correo_contacto`) VALUES ('$fkIDEmpresa', '$emailcomp', '$puesto')");

							if ($qryresult4) {
								for ($i = 0; $i < count($nombreArray); $i++) {
									$qryresult5 = RunQuery("INSERT INTO es_personas (`nombre`, `primer_apellido`, `segundo_apellido`, `fk_id_tipopersona`, `estatus`)
									VALUES ('$nombreArray[$i]','$pApellidoArray[$i]','$sApellidoArray[$i]', '4', '1')");

									$fkPersona = RunQuery("SELECT * FROM es_personas WHERE fk_id_tipopersona=4 ORDER BY id_persona DESC;");
									$fkPersona = $fkPersona->fetchAll(PDO::FETCH_ASSOC);
									$fkIDPersona = $fkPersona[0]['id_persona'];

									if ($qryresult5) {
										$qryresult6 = RunQuery("INSERT INTO `es_prospectos` (`puesto`, `fecha_alta`, `ruta_foto`, `promedio_compra_mes`, `fk_id_persona`, `fk_id_empresa`, `fk_id_vendedor`) VALUES ('$puesto', '$fechaalta', '$target_file', $pcompra, '$fkIDPersona', '$fkIDEmpresa', '$vendedor');");

										if ($qryresult6) {
											$qryresult7 = RunQuery("INSERT INTO es_correos (`fk_id_persona`, `fk_id_empresa`, `correo`, `tipo_correo_contacto`) VALUES ('$fkIDPersona', '$fkIDEmpresa', '$emailArray[$i]', '$puestoArray[$i]');");

											if ($qryresult7) {
												$qryresult8 = RunQuery("INSERT INTO es_telefonos (`codigo_pais`, `lada`, `numero_telefono`, `fk_id_persona`, `fk_id_empresa`, `estatus`) VALUES ('$codigocArray[$i]', '$ladacArray[$i]', '$nTelArray[$i]', '$fkIDPersona', '$fkIDEmpresa', '1');");

												if ($qryresult8) {
													$qryresult9 = RunQuery("INSERT INTO es_direcciones (`calle`, `numero`, `numero_int`, `colonia`, `entre_calles`, `municipio`, `estado`, `pais`, `codigo_postal`, `fk_id_persona`, `fk_id_empresa`) VALUES ('$calle','$nExt', '$nInt', '$colonia', '$entreCalles', '$municipio', '$estado', '$pais', '$cp','$fkIDPersona' , '$fkIDEmpresa'); ");

												} else {
													return null;
												}
											} else {
												return null; // 'Ha sucedido un error al agregar qry7';
											}

										} else {
											return null; // 'Ha sucedido un error al agregar qry6';
										}

									} else {
										return null; // 'Ha sucedido un error al agregar qry5';
									}
								}
								if ($qryresult9) {
									return $qryresult9;
								} else {
									return null;
								}

							} else {
								return null; // 'Ha sucedido un error al agregar correo de empresa';
							}


						} else {
							return null; //echo 'Ha sucedido un error al telefono de empresa';
						}
					} else {
						return null; //echo 'Ha sucedido un error al agregar direccion de empresa';
					}
				} else {
					return null; //echo 'Ha sucedido un error al agregar empresa';
				}
			} else {
				return null;
			}
		} else {
			return null;
		}


	}

	public function readProspectosM()
	{
		$qryresult = RunQuery("SELECT *,
		(SELECT E1.id_empleado FROM es_empleados E1 INNER JOIN es_personas P1 ON E1.fk_id_persona=P1.id_persona WHERE E1.id_empleado=pro.fk_id_vendedor) AS id_empleado,
		(SELECT GROUP_CONCAT(P2.nombre,' ',P2.primer_apellido,' ',P2.segundo_apellido) FROM es_empleados E2 INNER JOIN es_personas P2 ON E2.fk_id_persona=P2.id_persona WHERE E2.id_empleado=pro.fk_id_vendedor) AS empleado
		FROM `es_personas` AS per inner join es_prospectos as pro on pro.fk_id_persona=per.id_persona inner join es_correos as cor on per.id_persona=cor.fk_id_persona inner join es_telefonos as tel on tel.fk_id_persona=per.id_persona inner join es_direcciones as dir on dir.fk_id_persona=per.id_persona inner join es_empresas as emp on pro.fk_id_empresa=emp.id_empresa WHERE per.fk_id_tipopersona=4;");
		if ($qryresult) {
			return $qryresult;
		} else {
			return null;
		}
	}
	public function readProspectosOnly()
	{
		$qryresult = RunQuery("SELECT * FROM `es_personas` AS per inner join es_prospectos as pro on pro.fk_id_persona=per.id_persona inner join es_empresas as emp on pro.fk_id_empresa=emp.id_empresa WHERE per.fk_id_tipopersona=4;");
		if ($qryresult) {
			return $qryresult;
		} else {
			return null;
		}
	}
	public function readProspectosNoEmpresaM()
	{
		$qryresult = RunQuery("SELECT * FROM `es_personas` AS per inner join es_prospectos as pro on pro.fk_id_persona=per.id_persona inner join es_correos as cor on per.id_persona=cor.fk_id_persona inner join es_telefonos as tel on tel.fk_id_persona=per.id_persona inner join es_direcciones as dir on dir.fk_id_persona=per.id_persona inner join es_empresas as emp on pro.fk_id_empresa=emp.id_empresa WHERE per.fk_id_tipopersona=4 AND pro.fk_id_empresa=0;");
		if ($qryresult) {
			return $qryresult;
		} else {
			return null;
		}
	}

	public function readOneProspectoM($datos)
	{
		$idper = $datos['id_persona'];
		$idpros = $datos['id_prospecto'];
		$idcor = $datos['id_correo'];
		$idtel = $datos['id_telefono'];
		$iddir = $datos['id_direccion'];
		$idemp = $datos['id_empresa'];
		$qryresult = RunQuery("SELECT * FROM `es_personas` AS per inner join es_prospectos as pro on pro.fk_id_persona=per.id_persona inner join es_correos as cor
		on per.id_persona=cor.fk_id_persona inner join es_telefonos as tel on tel.fk_id_persona=per.id_persona inner join es_direcciones as dir on
		dir.fk_id_persona=per.id_persona inner join es_empresas as emp on pro.fk_id_empresa=emp.id_empresa WHERE per.fk_id_tipopersona=4 AND per.id_persona='$idper'
		and pro.id_prospecto='$idpros' AND cor.id_correo='$idcor' and tel.id_telefono='$idtel' and dir.id_direccion='$iddir' and emp.id_empresa='$idemp';");
		if ($qryresult) {
			return $qryresult;
		} else {
			return null;
		}
	}
	public function readOneProductos($datos)
	{
		$qryresult = RunQuery($datos);
		if ($qryresult) {
			return $qryresult;
		} else {
			return null;
		}
	}
	public function readOneProspectoVendedorM($datos)
	{
		$idper = $datos['id_persona'];
		$idpros = $datos['id_prospecto'];
		$idcor = $datos['id_correo'];
		$idtel = $datos['id_telefono'];
		$iddir = $datos['id_direccion'];
		$idemp = $datos['id_empresa'];
		$qryresult = RunQuery("SELECT *,
		(Select m.nombre_muestra from es_muestras m inner join es_visitas v ON m.fk_id_visita=v.id_visitas where v.id_visitas=20 ) as muestra,
		(Select m.descripcion_muestra from es_muestras m inner join es_visitas v ON m.fk_id_visita=v.id_visitas where v.id_visitas=20) as muestra_descripcion,
		(Select m.fecha_compromiso from es_muestras m inner join es_visitas v ON m.fk_id_visita=v.id_visitas where v.id_visitas=20) as fecha_compromiso,
		(Select GROUP_CONCAT(p.nombre,' ',p.primer_apellido,' ',p.segundo_apellido,'|',t.codigo_pais,'|',t.lada,'|',t.numero_telefono,'|',c.correo)
		FROM es_empleados e inner join es_personas p ON e.fk_id_persona=p.id_persona inner join es_telefonos t ON t.fk_id_persona=p.id_persona
		Inner JOIN es_correos c ON c.fk_id_persona=p.id_persona ) as empleado FROM `es_personas` AS per inner join es_prospectos as pro
		on pro.fk_id_persona=per.id_persona inner join es_correos as cor on per.id_persona=cor.fk_id_persona inner join es_telefonos as tel
		on tel.fk_id_persona=per.id_persona inner join es_direcciones as dir on dir.fk_id_persona=per.id_persona inner join es_empresas
		as emp on pro.fk_id_empresa=emp.id_empresa where per.id_persona='$idper' and pro.id_prospecto='$idpros';");
		if ($qryresult) {
			return $qryresult;
		} else {
			return null;
		}
		
	}

	public function readTelEmp($datos)
	{
		$idemp = $datos['id_empresa'];
		$qryresult = RunQuery("SELECT * FROM es_telefonos t WHERE t.fk_id_empresa IN ( SELECT e.id_empresa FROM es_empresas e WHERE e.id_empresa = '$idemp' ) AND t.fk_id_persona is null;");
		if ($qryresult) {
			return $qryresult;
		} else {
			return null;
		}
	}
	//pendiente 
	public function readCorEmp()
	{
		$idemp = '15';
		$qryresult = RunQuery("SELECT * FROM es_correos c WHERE c.fk_id_empresa = '$idemp' AND c.fk_id_persona is null;");
		if ($qryresult) {
			return $qryresult;
		} else {
			return null;
		}
	}
	//termina pendiente
	public function updateProspectoM($datos)
	{

		$idper = $datos['idper'];
		$idpros = $datos['idpros'];
		$idcorr = $datos['idcorr'];
		$idtel = $datos['idtel'];
		$iddir = $datos['iddir'];
		$idemp = $datos['idemp'];
		$nomemp = $datos['nomemp'];
		$rfcemp = $datos['rfcemp'];
		$razonsoc = $datos['razonsoc'];
		$correoemp = $datos['correoemp'];
		$giro = $datos['giro'];
		$tipo = $datos['tipo'];
		$cod = $datos['cod'];
		$lada = $datos['lada'];
		$tel = $datos['tel'];
		$calle = $datos['calle'];
		$num = $datos['num'];
		$numint = $datos['numint'];
		$entcalles = $datos['entcalles'];
		$cp = $datos['cp'];
		$col = $datos['col'];
		$mun = $datos['mun'];
		$est = $datos['est'];
		$pais = $datos['pais'];
		$nom = $datos['nom'];
		$pape = $datos['pape'];
		$sape = $datos['sape'];
		$id_vendedor = $datos['id_vendedor'];

		$curp = '';
		$rfc = '';

		$correo = $datos['correo'];
		$puest = $datos['puest'];
		$cod2 = $datos['cod2'];
		$lada2 = $datos['lada2'];
		$tel2 = $datos['tel2'];

		$qryresult = RunQuery("UPDATE es_empresas SET nombre_emp='$nomemp', razon_social='$razonsoc', rfc_emp='$rfcemp', giro='$giro', tipo='$tipo' WHERE id_empresa='$idemp';");

		if ($qryresult) {
			$qryresult2 = RunQuery("UPDATE es_direcciones SET calle='$calle', numero='$num', numero_int='$numint', entre_calles='$entcalles', municipio='$mun', estado='$est', pais='$pais', codigo_postal='$cp' WHERE id_direccion='$iddir';");

			if ($qryresult2) {
				$qryresult3 = RunQuery("UPDATE es_telefonos SET codigo_pais='$cod', lada='$lada', numero_telefono='$tel' WHERE id_telefono='$idtel';");

				if ($qryresult3) {
					$qryresult4 = RunQuery("UPDATE es_correos SET correo='$correo', tipo_correo_contacto='$puest' WHERE id_correo='$idcorr';");

					if ($qryresult4) {
						$qryresult5 = RunQuery("UPDATE es_prospectos SET puesto='$puest', fk_id_vendedor='$id_vendedor' WHERE id_prospecto='$idpros';");

						if ($qryresult5) {
							$qryresult6 = RunQuery("UPDATE es_personas SET nombre='$nom', primer_apellido='$pape', segundo_apellido='$sape', curp='$curp', rfc='$rfc'  WHERE id_persona='$idper';");

							if ($qryresult6) {
								return $qryresult6;
							} else {
								return null;
							}

						} else {
							return null;
						}

					} else {
						return null;
					}
				} else {
					return null;
				}
			} else {
				return null;
			}
		} else {
			return null;
		}
	}

	public function readProspectosByMonth()
	{
		$mesAct = date("m");
		$mAnt1 = $mesAct - 1;
		$mAnt2 = $mAnt1 - 1;

		$qryresult = RunQuery("SELECT T1.cant AS mes1, T2.cant AS mes2, T3.cant AS mes3, T4.total AS total FROM
		(SELECT COUNT(*) AS cant FROM es_prospectos p WHERE MONTH(p.fecha_alta)=4) AS T1,
		(SELECT COUNT(*) AS cant FROM es_prospectos p WHERE MONTH(p.fecha_alta)=3) AS T2,
		(SELECT COUNT(*) AS cant FROM es_prospectos p WHERE MONTH(p.fecha_alta)=2) AS T3,
		(SELECT COUNT(*) AS total FROM es_prospectos) AS T4;");

		if ($qryresult) {
			return $qryresult;
		} else {
			return null;
		}
	}

	public function readProspectosByBuy()
	{
		$qryresult = RunQuery("SELECT * FROM `es_prospectos` p INNER JOIN es_personas per ON p.fk_id_persona=per.id_persona INNER JOIN es_empresas e ON e.id_empresa=p.fk_id_empresa ORDER BY P.promedio_compra_mes DESC;");

		if ($qryresult) {
			return $qryresult;
		} else {
			return null;
		}
	}

	public function readAllProspectos()
	{

		$qryresult = RunQuery("SELECT * FROM `es_prospectos` p INNER JOIN es_empleados e ON
		p.fk_id_vendedor=e.id_empleado INNER JOIN es_personas per ON e.fk_id_persona=per.id_persona;");

		if ($qryresult) {
			return $qryresult;
		} else {
			return null;
		}
	}

	public function readEmpresas()
	{
		$qryresult = RunQuery("SELECT e.id_empresa, e.nombre_emp, e.razon_social, e.rfc_emp, e.giro, e.tipo,
		c.id_correo, c.correo, c.tipo_correo_contacto, d.id_direccion, d.calle, d.numero, d.numero_int, d.colonia,
		d.entre_calles, d.municipio, d.estado, d.pais, GROUP_CONCAT(t.codigo_pais,'/',t.lada,'/',t.numero_telefono
		SEPARATOR ',') AS telefonos FROM es_empresas e INNER JOIN es_correos c ON e.id_empresa=c.fk_id_empresa
		LEFT JOIN es_direcciones d ON d.fk_id_empresa=e.id_empresa LEFT JOIN es_telefonos t
		ON t.fk_id_empresa=e.id_empresa AND t.fk_id_persona IS NULL WHERE c.fk_id_persona IS NULL GROUP BYe.id_empresa;");
		if ($qryresult == true) {
			return $qryresult;
		} else {
			return null;
		}
	}
	public function readVendedores(){
		$qryresult = RunQuery("SELECT * FROM es_empleados E INNER JOIN es_personas P ON E.fk_id_persona=P.id_persona;");
		if ($qryresult == true) {
			return $qryresult;
		} else {
			return null;
		}
	}

	####### FUNCIONES PRIVADAS
	private function uploadfoto($data)
	{


		$target_dir = "html/public/photos/";
		$target_file = $target_dir . basename($_FILES["foto"]["name"]);
		$uploadOK = 1;
		$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

		//validar tamaño de archivo
		if ($_FILES["foto"]["size"] > 500000) {
			$uploadOK = 0;
		}
		//validar formato
		if ($imageFileType != "jpg" || $imageFileType != "png" || $imageFileType != "jpeg") {
			$uploadOK = 0;
		}
		try {
			if ($uploadOK != 0) {
				if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
					return true;
				} else {
					return null;
				}
			}
		} catch (Exception $e) {
			echo 'Cartas excepcion: ', $e->getMessage(), "\n";
		}


	}

	public function readEmpleados()
	{
		$qryresult = RunQuery("SELECT * FROM `es_empleados` e INNER JOIN es_personas p ON e.fk_id_persona=p.id_persona WHERE estatus='1';");
		if ($qryresult) {
			return $qryresult;
		} else {
			return null;
		}
	}

}

?>