<?php
require_once('helpers/clsConexion.php');
class Clientes_M
{
    public function readClientesOnly(){
        $qryresult = RunQuery("SELECT * FROM `es_personas` AS per INNER JOIN es_clientes AS cli ON cli.fk_id_persona=per.id_persona INNER JOIN es_correos AS cor ON cor.fk_id_persona=per.id_persona INNER JOIN es_telefonos AS tel ON tel.fk_id_persona=per.id_persona INNER JOIN es_direcciones as dir ON dir.fk_id_persona=per.id_persona INNER JOIN es_mercados AS mer ON cli.fk_id_mercado=mer.id_mercado INNER JOIN es_giro_mercados AS gir ON gir.id_giro_mercado = cli.fk_id_giro_mercado WHERE per.fk_id_tipopersona=3;");
        if ($qryresult) {
            return $qryresult;
        } else {
            return null;
        }
    }

    public function readClientesM()
    {
        $qryresult = RunQuery("SELECT * FROM `es_personas` AS per INNER JOIN es_clientes AS cli ON cli.fk_id_persona=per.id_persona INNER JOIN es_correos AS cor ON cor.fk_id_persona=per.id_persona INNER JOIN es_telefonos AS tel ON tel.fk_id_persona=per.id_persona INNER JOIN es_direcciones as dir ON dir.fk_id_persona=per.id_persona INNER JOIN es_empresas as emp ON cli.fk_id_empresa=emp.id_empresa INNER JOIN es_mercados AS mer ON emp.fk_id_mercado=mer.id_mercado INNER JOIN es_giro_mercados AS gir ON gir.id_giro_mercado = emp.fk_id_giro_mercado WHERE per.fk_id_tipopersona=3;");
        if ($qryresult) {
            return $qryresult;
        } else {
            return null;
        }
    }
    public function readClientesSinEmpM(){
        $qryresult = RunQuery("SELECT * FROM `es_personas` AS per INNER JOIN es_clientes AS cli ON cli.fk_id_persona=per.id_persona INNER JOIN es_correos AS cor ON cor.fk_id_persona=per.id_persona INNER JOIN es_telefonos AS tel ON tel.fk_id_persona=per.id_persona INNER JOIN es_direcciones as dir ON dir.fk_id_persona=per.id_persona INNER JOIN es_mercados AS mer ON cli.fk_id_mercado=mer.id_mercado INNER JOIN es_giro_mercados AS gir ON gir.id_giro_mercado = cli.fk_id_giro_mercado WHERE per.fk_id_tipopersona=3 AND cli.fk_id_empresa is null;");
        if ($qryresult) {
            return $qryresult;
        } else {
            return null;
        }
    }

    public function readEmpresas(){
        $qryresult= RunQuery("SELECT *,
        (SELECT GROUP_CONCAT(t.id_telefono,'|',t.codigo_pais,' ',t.lada,' ',t.numero_telefono,'|',t.tipo_telefono) FROM es_telefonos t INNER JOIN es_empresas e2 ON e2.id_empresa=t.fk_id_empresa WHERE t.fk_id_empresa=e.id_empresa AND t.fk_id_persona IS NULL) AS telefono
        FROM `es_empresas` e INNER JOIN es_correos c ON c.fk_id_empresa=e.id_empresa INNER JOIN es_direcciones d ON d.fk_id_empresa=e.id_empresa WHERE c.fk_id_persona IS NULL AND d.fk_id_persona IS NULL;");
        if ($qryresult) {
            return $qryresult;
        } else {
            return null;
        }
    }

    public function readVendedores()
	{
		$qryresult = RunQuery("SELECT * FROM es_empleados E INNER JOIN es_personas P ON E.fk_id_persona=P.id_persona WHERE P.estatus=1;");
		if ($qryresult == true) {
			return $qryresult;
		} else {
			return null;
		}
	}

    public function createPFisicaM($datos)
    {
        //personal
        $nombre = $datos['nombre'];
        $pApellido = $datos['pApellido'];
        $sApellido = $datos['sApellido'];
        $codigo = $datos['codigo'];
        $lada = $datos['lada'];
        $nTel = $datos['telefono'];
        $email = $datos['email'];
        $rfc = isset($datos['curp']) ? strtoupper($datos['curp']) : 'N/A';
        $curp = isset($datos['rfc']) ? strtoupper($datos['rfc']) : 'N/A';

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

        $giro=$datos['giro'];
        $tipo=$datos['tipo'];

        $vendedor=$datos['vendedor'];

        //imagen
        try {
            $file = $_FILES['fotocliente']['name'];
            $target_dir = "html/image/personas/clientes/";
            $target_file = $target_dir . basename($_FILES["fotocliente"]["name"]);
            if (!file_exists($target_dir)) {
                mkdir($target_dir, 0777, true);
            }
            ;
        } catch (Exception $e) {
            echo 'Caught exception: ', $e->getMessage(), "\n";
        }
        if (move_uploaded_file($_FILES["fotocliente"]["tmp_name"], $target_file)) {
            try {
                $qryresult = RunQuery("INSERT INTO es_personas
                    (`nombre`, `primer_apellido`, `segundo_apellido`, `curp`, `rfc`, `image_name`, `fecha_alta`, `fk_id_tipopersona`, `estatus`) VALUES ('$nombre', '$pApellido', '$sApellido', '$curp','$rfc', '$file', NOW(),'3', '1');");
            } catch (Exception $e) {
                echo 'Caught exception $qryresult: ', $e->getMessage(), "\n";
            }


            if ($qryresult) {
                $PersonasTable = RunQuery("SELECT * FROM es_personas WHERE `fk_id_tipopersona`=3  ORDER BY id_persona DESC;");
                $PersonasTable = $PersonasTable->fetchAll(PDO::FETCH_ASSOC);
                $fkIDPersona = $PersonasTable[0]['id_persona'];

                try {
                    $qryresult2 = RunQuery("INSERT INTO es_direcciones (`calle`, `numero`, `numero_int`, `colonia`, `entre_calles`, `municipio`, `estado`, `pais`, `codigo_postal`, `fk_id_persona`, `tipo_direccion`)
                        VALUES ('$calle', '$nExt', '$nInt', '$colonia', '$entreCalles', '$municipio', '$estado', '$pais','$cp','$fkIDPersona', 'main');
                        INSERT INTO es_correos (`correo`, `tipo_correo_contacto`, `fk_id_persona`) VALUES ('$email', 'main', '$fkIDPersona');");
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
                        $qryresult4 = RunQuery("INSERT INTO `es_clientes` (`id_cliente`, `fk_id_mercado`, `fk_id_giro_mercado`, `fk_id_persona`, `fk_id_tipo_cliente`, `fk_id_empresa`, `fk_id_vendedor`) VALUES (NULL, '$giro', '$tipo', '$fkIDPersona', '1', NULL, '$vendedor');");

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
        $rfc = trim(strtoupper($datos['rfc']));
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
        $tTelArray = explode(',', $tipotels);
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
        $vendedor=$datos['vendedor'];

        $nombreArray = explode(',', $nombre);
        $pApellidoArray = explode(',', $pApellido);
        $sApellidoArray = explode(',', $sApellido);
        $puestoArray = explode(',', $puesto);
        $emailArray = explode(',', $email);
        $codigocArray = explode(',', $codigo);
        $ladacArray = explode(',', $lada);
        $nTelcArray = explode(',', $nTel);

        //foto
        $image = $_FILES["imagen"]["name"];
        $target_dir = "html/image/personas/clientes/";
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
            if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file )) {

                try {
                    $qryresult = RunQuery("INSERT INTO es_empresas
                        (`nombre_emp`,`razon_social`, `rfc_emp`, `fk_id_mercado`,`fk_id_giro_mercado`, `estatus`) VALUES ('$nombrecomp', '$razonsocial', '$rfc','$giro' ,'$tipo', '1');");

                    $fkEmpresas = RunQuery("SELECT * FROM es_empresas ORDER BY id_empresa DESC;");
                    $fkEmpresas = $fkEmpresas->fetchAll(PDO::FETCH_ASSOC);
                    $fkIDEmpresa = $fkEmpresas[0]['id_empresa'];
                } catch (Exception $e) {
                    echo 'Caught exception $qryresult: ', $e->getMessage(), "\n";
                }

                if ($qryresult) {

                    $qryresult2 = RunQuery("INSERT INTO es_direcciones (`calle`, `numero`, `numero_int`, `colonia`, `entre_calles`, `municipio`, `estado`, `pais`, `codigo_postal`, `fk_id_empresa`, `tipo_direccion`)
                    VALUES ('$calle','$nExt', '$nInt', '$colonia', '$entreCalles', '$municipio', '$estado', '$pais', '$cp', '$fkIDEmpresa', 'main');");

                    if ($qryresult2) {

                        for ($i = 0; $i < count($codigoArray); $i++) {
							$qryresult3 = RunQuery("INSERT INTO es_telefonos (`codigo_pais`, `lada`, `numero_telefono`,`tipo_telefono`, `fk_id_empresa`, `estatus`)  VALUES
							('$codigoArray[$i]', '$ladaArray[$i]', '$nTelArray[$i]','$tTelArray[$i]' ,'$fkIDEmpresa', '1');");
						}



                        if ($qryresult3) {

                            $qryresult4 = RunQuery("INSERT INTO es_correos (`fk_id_empresa`, `correo`, `tipo_correo_contacto`) VALUES ('$fkIDEmpresa', '$emailcomp', '$puesto')");

                            if ($qryresult4) {
                                for ($i = 0; $i < count($nombreArray); $i++) {
                                    $qryresult5 = RunQuery("INSERT INTO es_personas (`nombre`, `primer_apellido`, `segundo_apellido`, `image_name`, `fecha_alta`, `fk_id_tipopersona`, `estatus`)
                                    VALUES ('$nombreArray[$i]','$pApellidoArray[$i]','$sApellidoArray[$i]', '$image', NOW(), '3', '1')");

                                    $fkPersona = RunQuery("SELECT * FROM es_personas WHERE fk_id_tipopersona=3 ORDER BY id_persona DESC;");
                                    $fkPersona = $fkPersona->fetchAll(PDO::FETCH_ASSOC);
                                    $fkIDPersona = $fkPersona[0]['id_persona'];

                                    if ($qryresult5) {
                                        $qryresult6 = RunQuery("INSERT INTO es_clientes (`fk_id_mercado`, `fk_id_giro_mercado`, `fk_id_tipo_cliente`, `fk_id_persona`, `fk_id_empresa`, `fk_id_vendedor`) VALUES ('$giro', '$tipo', '2', '$fkIDPersona', '$fkIDEmpresa', '$vendedor');");

                                        if ($qryresult6) {
                                            $qryresult7 = RunQuery("INSERT INTO es_correos (`fk_id_persona`, `fk_id_empresa`, `correo`, `tipo_correo_contacto`) VALUES ('$fkIDPersona', '$fkIDEmpresa', '$emailArray[$i]', '$puestoArray[$i]');");

                                            if ($qryresult7) {
                                                $qryresult8 = RunQuery("INSERT INTO es_telefonos (`codigo_pais`, `lada`, `numero_telefono`, `fk_id_persona`, `fk_id_empresa`, `estatus`) VALUES ('$codigocArray[$i]', '$ladacArray[$i]', '$nTelArray[$i]', '$fkIDPersona', '$fkIDEmpresa', '1');");

                                                if ($qryresult8) {
                                                    $qryresult9 = RunQuery("INSERT INTO es_direcciones (`calle`, `numero`, `numero_int`, `colonia`, `entre_calles`, `municipio`, `estado`, `pais`, `codigo_postal`, `fk_id_persona`, `fk_id_empresa`,  `tipo_direccion`) VALUES ('$calle','$nExt', '$nInt', '$colonia', '$entreCalles', '$municipio', '$estado', '$pais', '$cp','$fkIDPersona' , '$fkIDEmpresa', 'main'); ");

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
            }
        }
    }

    public function updateClienteM($datos)
	{

		$idper = $datos['idper'];
		$idcli = $datos['idcli'];
		$idcorr = $datos['idcorr'];
		$idtel = $datos['idtel'];
		$iddir = $datos['iddir'];
		$idcorreoemp = $datos['idcorremp'];
		$idemp = isset($datos['idemp']) ? $datos['idemp'] : '';
		$nomemp = isset($datos['nomemp']) ? $datos['nomemp'] : '';
		$rfcemp = isset($datos['rfcemp']) ? $datos['rfcemp'] : '';
		$razonsoc = isset($datos['razonsoc']) ? $datos['razonsoc'] : '';
		$correoemp = isset($datos['correoemp']) ? $datos['correoemp'] : '';
		$giro = isset($datos['giro']) ? $datos['giro'] : '';
		$tipo = isset($datos['tipo']) ? $datos['tipo'] : '';
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
		$puest = isset($datos['puest']) ? $datos['puest'] : '';
		$cod2 = $datos['cod2'];
		$lada2 = $datos['lada2'];
		$tel2 = $datos['tel2'];

		$qryresult = RunQuery("UPDATE es_empresas SET nombre_emp='$nomemp', razon_social='$razonsoc', rfc_emp='$rfcemp', fk_id_mercado='$giro', fk_id_giro_mercado='$tipo' WHERE id_empresa='$idemp';");

		if ($qryresult) {
			$qryresult2 = RunQuery("UPDATE es_direcciones SET calle='$calle', numero='$num', numero_int='$numint', entre_calles='$entcalles',colonia='$col', municipio='$mun', estado='$est', pais='$pais', codigo_postal='$cp' WHERE id_direccion='$iddir';");

			if ($qryresult2) {
				$qryresult3 = RunQuery("UPDATE es_telefonos SET codigo_pais='$cod', lada='$lada', numero_telefono='$tel' WHERE id_telefono='$idtel';");

				if ($qryresult3) {
					$qryresult4 = RunQuery("UPDATE es_correos SET correo='$correo', tipo_correo_contacto='$puest' WHERE id_correo='$idcorr';");
					$qryresult4 = RunQuery("UPDATE es_correos SET correo='$correoemp', tipo_correo_contacto='$puest' WHERE id_correo='$idcorreoemp';");

					if ($qryresult4) {
						$qryresult5 = RunQuery("UPDATE es_clientes SET fk_id_vendedor='$id_vendedor' WHERE id_cliente='$idcli';");

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

    public function readClientesCM()
    {
        $qryresult = RunQuery("SELECT * FROM `es_personas` AS per inner join es_clientes as pro on pro.fk_id_persona=per.id_persona inner join es_correos as cor on per.id_persona=cor.fk_id_persona inner join es_telefonos as tel on tel.fk_id_persona=per.id_persona inner join es_direcciones as dir on dir.fk_id_persona=per.id_persona inner join es_empresas as emp on pro.fk_id_empresa=emp.id_empresa WHERE per.fk_id_tipopersona=3;");
        if ($qryresult) {
            return $qryresult;
        } else {
            return null;
        }
    }

    public function readClientesNoEmpresaM()
    {
        $qryresult = RunQuery("SELECT * FROM `es_personas` AS per INNER JOIN es_clientes AS cli ON cli.fk_id_persona=per.id_persona INNER JOIN es_correos AS cor ON per.id_persona=cor.fk_id_persona INNER JOIN es_telefonos AS tel ON tel.fk_id_persona=per.id_persona INNER JOIN es_direcciones AS dir ON dir.fk_id_persona=per.id_persona WHERE per.fk_id_tipopersona=3 AND cli.fk_id_empresa IS NULL;");
        if ($qryresult) {
            return $qryresult;
        } else {
            return null;
        }
    }

    public function readOneClienteM($datos)
	{
		$idper = $datos['id_persona'];
		$idpros = $datos['id_prospecto'];
		$idcor = $datos['id_correo'];
		$idtel = $datos['id_telefono'];
		$iddir = $datos['id_direccion'];
        if(isset($datos['id_empresa']) && $datos['id_empresa'] != null){
            /* trigger_error( print($datos['id_empresa']), E_USER_ERROR); */
            $idemp = $datos['id_empresa'];
            $qryresult = RunQuery("SELECT * FROM `es_personas` AS per inner join es_clientes as c on c.fk_id_persona=per.id_persona inner join es_correos as cor
            on per.id_persona=cor.fk_id_persona inner join es_telefonos as tel on tel.fk_id_persona=per.id_persona inner join es_direcciones as dir on
            dir.fk_id_persona=per.id_persona inner join es_empresas as emp on c.fk_id_empresa=emp.id_empresa WHERE per.fk_id_tipopersona=3 AND per.id_persona='$idper'
            and c.id_cliente='$idpros' AND cor.id_correo='$idcor' and tel.id_telefono='$idtel' and dir.id_direccion='$iddir' and emp.id_empresa='$idemp';");
        }else{
            /* trigger_error(print('llegaste al else'), E_USER_ERROR); */
            $qryresult = RunQuery("SELECT * FROM `es_personas` AS per inner join es_clientes as c on c.fk_id_persona=per.id_persona inner join es_correos as cor
            on per.id_persona=cor.fk_id_persona inner join es_telefonos as tel on tel.fk_id_persona=per.id_persona inner join es_direcciones as dir on
            dir.fk_id_persona=per.id_persona WHERE per.fk_id_tipopersona=3 AND per.id_persona='$idper'
            and c.id_cliente='$idpros' AND cor.id_correo='$idcor' and tel.id_telefono='$idtel' and dir.id_direccion='$iddir' and c.fk_id_empresa IS NULL;");
        }
		
		if ($qryresult) {
			return $qryresult;
		} else {
			return null;
		}
	}

    public function readMercados(){
        $qryresult=RunQuery("SELECT * FROM es_mercados");
        if($qryresult){
            return $qryresult;
        }else{
            return null;
        }
    }
    public function readTipos()
	{
		$qryresult = RunQuery("SELECT * FROM `es_giro_mercados`");
		if ($qryresult) {
			return $qryresult;
		} else {
			return null;
		}
	}
    public function getMercadosM($datos){
		$fkIDGiro=$datos['idgiro'];
		$qryresult=RunQuery("SELECT * FROM es_giro_mercados WHERE fk_id_mercado='$fkIDGiro';");
		if($qryresult){
			return $qryresult;
		}else{
			return null;
		}
	}

    public function deletebd($datos)
	{
		$id_persona = $_GET['persona'];
		if (isset($_GET['empresa'])) {
			$id_emp = $_GET['empresa'];
			$qryresult = RunQuery("DELETE FROM es_direcciones WHERE fk_id_empresa='$id_emp' AND fk_id_persona IS NULL;
			DELETE FROM es_telefonos WHERE fk_id_empresa='$id_emp'AND fk_id_persona IS NULL;
			DELETE FROM es_correos WHERE fk_id_empresa='$id_emp' AND fk_id_persona IS NULL;
			DELETE FROM es_empresas WHERE id_empresa='$id_emp';
			");
		}

		if (isset($_GET['persona'])) {
			$qryresult2 = RunQuery("DELETE FROM es_direcciones WHERE fk_id_persona='$id_persona';
			DELETE FROM es_telefonos WHERE fk_id_persona='$id_persona';
			DELETE FROM es_correos WHERE fk_id_persona='$id_persona';
			DELETE FROM es_clientes WHERE fk_id_persona='$id_persona';
			DELETE FROM es_personas WHERE id_persona='$id_persona';");
		}

		if (isset($qryresult) && isset($qryresult2)) {
			if ($qryresult && $qryresult2) {
				return 'ok';
			} else {
				return null;
			}
		}
		if (isset($qryresult)) {
			if ($qryresult) {
				return 'ok';
			} else {
				return null;
			}
		} else {
			if ($qryresult2) {
				return 'ok';
			} else {
				return null;
			}
		}
    }
    
}

?>