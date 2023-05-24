<?php
require_once('helpers/clsConexion.php');
class Clientes_M
{

    public function readClientesM()
    {
        $qryresult = RunQuery("SELECT * FROM `es_personas` AS per INNER JOIN es_clientes AS cli ON cli.fk_id_persona=per.id_persona INNER JOIN es_empresas AS emp ON emp.id_empresa = cli.fk_id_empresa INNER JOIN es_correos AS cor ON cor.fk_id_persona=per.id_persona INNER JOIN es_telefonos AS tel ON tel.fk_id_persona=per.id_persona INNER JOIN es_direcciones as dir ON dir.fk_id_persona=per.id_persona OR dir.fk_id_empresa=emp.id_empresa WHERE per.fk_id_tipopersona=3;");
        if ($qryresult) {
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
        $rfc = $datos['curp'] ? $datos['curp'] : 'N/A';
        $curp = $datos['rfc'] ? $datos['rfc'] : 'N/A';

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

        //imagen
        try {
            $file = $_FILES['fotocliente']['name'];
            $target_dir = "html/public/photos/";
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
                    (`nombre`, `primer_apellido`, `segundo_apellido`, `curp`, `rfc`,`fk_id_tipopersona`, `estatus`) VALUES ('$nombre', '$pApellido', '$sApellido', '$curp','$rfc' ,'3', '1');");
            } catch (Exception $e) {
                echo 'Caught exception $qryresult: ', $e->getMessage(), "\n";
            }


            if ($qryresult) {
                $PersonasTable = RunQuery("SELECT * FROM es_personas WHERE `fk_id_tipopersona`=3  ORDER BY id_persona DESC;");
                $PersonasTable = $PersonasTable->fetchAll(PDO::FETCH_ASSOC);
                $fkIDPersona = $PersonasTable[0]['id_persona'];

                try {
                    $qryresult2 = RunQuery("INSERT INTO es_direcciones (`calle`, `numero`, `numero_int`, `colonia`, `entre_calles`, `municipio`, `estado`, `pais`, `codigo_postal`, `fk_id_persona`)
                        VALUES ('$calle', '$nExt', '$nInt', '$colonia', '$entreCalles', '$municipio', '$estado', '$pais[0]','$cp','$fkIDPersona');
                        INSERT INTO es_correos (`correo`, `tipo_correo_contacto`, `fk_id_persona`) VALUES ('$email', '$nombre.' '.$pApellido.' '.$sApellido', '$fkIDPersona');");
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
                        $qryresult4 = RunQuery("INSERT INTO es_clientes (`tipo_cliente`, `fk_id_persona`, `fk_id_empresa`) VALUES ('FÍSICA', '$fkIDPersona', 1);");

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

        $codigoArray = explode(',', $codigoComp);
        $ladaArray = explode(',', $ladaComp);
        $nTelArray = explode(',', $nTelComp);
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
                            $qryresult3 = RunQuery("INSERT INTO es_telefonos (`codigo_pais`, `lada`, `numero_telefono`, `fk_id_empresa`, `estatus`)  VALUES
                            ('$codigoArray[$i]', '$ladaArray[$i]', '$nTelArray[$i]', '$fkIDEmpresa', '1');");
                        }


                        if ($qryresult3) {

                            $qryresult4 = RunQuery("INSERT INTO es_correos (`fk_id_empresa`, `correo`, `tipo_correo_contacto`) VALUES ('$fkIDEmpresa', '$emailcomp', '$puesto')");

                            if ($qryresult4) {
                                for ($i = 0; $i < count($nombreArray); $i++) {
                                    $qryresult5 = RunQuery("INSERT INTO es_personas (`nombre`, `primer_apellido`, `segundo_apellido`, `fk_id_tipopersona`, `estatus`)
                                    VALUES ('$nombreArray[$i]','$pApellidoArray[$i]','$sApellidoArray[$i]', '3', '1')");

                                    $fkPersona = RunQuery("SELECT * FROM es_personas WHERE fk_id_tipopersona=3 ORDER BY id_persona DESC;");
                                    $fkPersona = $fkPersona->fetchAll(PDO::FETCH_ASSOC);
                                    $fkIDPersona = $fkPersona[0]['id_persona'];

                                    if ($qryresult5) {
                                        $qryresult6 = RunQuery("INSERT INTO es_clientes (`tipo_cliente`,`fecha_alta`,`ruta_foto`,  `fk_id_persona`, `fk_id_empresa`) VALUES ('MORAL', '$fechaalta','$target_file','$fkIDPersona', '$fkIDEmpresa');");

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
            }
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
        $qryresult = RunQuery("SELECT * FROM `es_personas` AS per inner join es_clientes as pro on pro.fk_id_persona=per.id_persona inner join es_correos as cor on per.id_persona=cor.fk_id_persona inner join es_telefonos as tel on tel.fk_id_persona=per.id_persona inner join es_direcciones as dir on dir.fk_id_persona=per.id_persona inner join es_empresas as emp on pro.fk_id_empresa=emp.id_empresa WHERE per.fk_id_tipopersona=3 AND pro.fk_id_empresa=0;");
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
		$idemp = $datos['id_empresa'];
		$qryresult = RunQuery("SELECT * FROM `es_personas` AS per inner join es_clientes as c on c.fk_id_persona=per.id_persona inner join es_correos as cor
		on per.id_persona=cor.fk_id_persona inner join es_telefonos as tel on tel.fk_id_persona=per.id_persona inner join es_direcciones as dir on
		dir.fk_id_persona=per.id_persona inner join es_empresas as emp on c.fk_id_empresa=emp.id_empresa WHERE per.fk_id_tipopersona=3 AND per.id_persona='$idper'
		and c.id_cliente='$idpros' AND cor.id_correo='$idcor' and tel.id_telefono='$idtel' and dir.id_direccion='$iddir' and emp.id_empresa='$idemp';");
		if ($qryresult) {
			return $qryresult;
		} else {
			return null;
		}
	}
}
?>