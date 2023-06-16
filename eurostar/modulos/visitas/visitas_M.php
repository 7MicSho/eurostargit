<?php
require_once('helpers/clsConexion.php');
class Visitas_M
{

    public function readVisitToPros($datos)
    {
        $id_pros = $datos['id_prospecto'];
        $qryresult = RunQuery("SELECT * FROM es_visitas WHERE fk_id_prospecto='$id_pros';");

        if ($qryresult) {
            return $qryresult;
        } else {
            return null;
        }
    }

    public function readAllVisit()
    {
        $qryresult = RunQuery("SELECT *,
        (SELECT GROUP_CONCAT(e2.id_empleado,'|',p2.nombre,' ',p2.primer_apellido,' ', p2.segundo_apellido) FROM es_empleados e2
        INNER JOIN es_personas p2 ON e2.fk_id_persona=p2.id_persona WHERE e2.id_empleado=v.fk_id_vendedor) as empleado,
        (SELECT c2.correo FROM es_correos c2 INNER JOIN es_empleados e3 ON e3.fk_id_persona=c2.fk_id_persona WHERE e3.id_empleado=v.fk_id_vendedor) as correo_empleado,
        (SELECT GROUP_CONCAT(t2.codigo_pais,'|',t2.lada,'|',t2.numero_telefono) FROM es_telefonos t2 INNER JOIN
        es_empleados e4 ON e4.fk_id_persona=t2.fk_id_persona WHERE e4.id_empleado=v.fk_id_vendedor) as telefono_empleado
        FROM `es_personas` AS per inner join es_prospectos as pro on pro.fk_id_persona=per.id_persona inner join es_correos as cor on per.id_persona=cor.fk_id_persona
        inner join es_telefonos as tel on tel.fk_id_persona=per.id_persona inner join es_direcciones as dir on dir.fk_id_persona=per.id_persona
        inner join es_empresas as emp on pro.fk_id_empresa=emp.id_empresa inner join es_visitas AS v ON v.fk_id_prospecto=pro.id_prospecto
        INNER JOIN es_muestras as mue ON mue.fk_id_visita=v.id_visitas WHERE per.fk_id_tipopersona=4 OR per.fk_id_tipopersona=3 AND v.estatus != 2 ORDER BY v.fecha_visita;");

        if ($qryresult) {
            return $qryresult;
        } else {
            return null;
        }
    }

    public function readVisitSinEmp()
    {
        $qryresult = RunQuery("SELECT *,
        (SELECT GROUP_CONCAT(e2.id_empleado, '|', p2.nombre, ' ', p2.primer_apellido, ' ', p2.segundo_apellido)
         FROM es_empleados e2
         INNER JOIN es_personas p2 ON e2.fk_id_persona = p2.id_persona
         WHERE e2.id_empleado = v.fk_id_vendedor) AS empleado,
        (SELECT GROUP_CONCAT(c2.correo)
         FROM es_correos c2
         INNER JOIN es_empleados e3 ON e3.fk_id_persona = c2.fk_id_persona
         WHERE e3.id_empleado = v.fk_id_vendedor) AS correos_empleado,
        (SELECT GROUP_CONCAT(t2.codigo_pais, '|', t2.lada, '|', t2.numero_telefono)
         FROM es_telefonos t2
         INNER JOIN es_empleados e4 ON e4.fk_id_persona = t2.fk_id_persona
         WHERE e4.id_empleado = v.fk_id_vendedor) AS telefono_empleado
      FROM es_personas AS per
      INNER JOIN es_prospectos AS pro ON pro.fk_id_persona = per.id_persona
      INNER JOIN es_correos AS cor ON per.id_persona = cor.fk_id_persona
      INNER JOIN es_telefonos AS tel ON tel.fk_id_persona = per.id_persona
      INNER JOIN es_direcciones AS dir ON dir.fk_id_persona = per.id_persona
      INNER JOIN es_visitas AS v ON v.fk_id_prospecto = pro.id_prospecto
      INNER JOIN es_muestras AS mue ON mue.fk_id_visita = v.id_visitas
      WHERE per.fk_id_tipopersona = 4 AND v.estatus != 2
      GROUP BY per.id_persona, pro.id_prospecto, v.id_visitas
      ORDER BY v.fecha_visita;
      ");

        if ($qryresult) {
            return $qryresult;
        } else {
            return null;
        }
    }
    public function readVisitSinEmpCli()
    {
        $qryresult = RunQuery("SELECT *,
        (SELECT GROUP_CONCAT(e2.id_empleado, '|', p2.nombre, ' ', p2.primer_apellido, ' ', p2.segundo_apellido)
         FROM es_empleados e2
         INNER JOIN es_personas p2 ON e2.fk_id_persona = p2.id_persona
         WHERE e2.id_empleado = v.fk_id_vendedor) AS empleado,
        (SELECT GROUP_CONCAT(c2.correo)
         FROM es_correos c2
         INNER JOIN es_empleados e3 ON e3.fk_id_persona = c2.fk_id_persona
         WHERE e3.id_empleado = v.fk_id_vendedor) AS correos_empleado,
        (SELECT GROUP_CONCAT(t2.codigo_pais, '|', t2.lada, '|', t2.numero_telefono)
         FROM es_telefonos t2
         INNER JOIN es_empleados e4 ON e4.fk_id_persona = t2.fk_id_persona
         WHERE e4.id_empleado = v.fk_id_vendedor) AS telefono_empleado
      FROM es_personas AS per
      INNER JOIN es_prospectos AS pro ON pro.fk_id_persona = per.id_persona
      INNER JOIN es_correos AS cor ON per.id_persona = cor.fk_id_persona
      INNER JOIN es_telefonos AS tel ON tel.fk_id_persona = per.id_persona
      INNER JOIN es_direcciones AS dir ON dir.fk_id_persona = per.id_persona
      INNER JOIN es_visitas AS v ON v.fk_id_prospecto = pro.id_prospecto
      INNER JOIN es_muestras AS mue ON mue.fk_id_visita = v.id_visitas
      WHERE per.fk_id_tipopersona = 3 AND v.estatus != 2
      GROUP BY per.id_persona, pro.id_prospecto, v.id_visitas
      ORDER BY v.fecha_visita;
      ");

        if ($qryresult) {
            return $qryresult;
        } else {
            return null;
        }
    }

    public function readEmpresas()
    {
        $qryresult = RunQuery("SELECT * FROM es_empresas");
        if ($qryresult) {
            return $qryresult;
        } else {
            return null;
        }
    }

    public function readAllVisitCli()
    {
        $qryresult = RunQuery("SELECT * FROM `es_personas` AS per inner join es_clientes as c on c.fk_id_persona=per.id_persona inner join es_correos as cor on per.id_persona=cor.fk_id_persona inner join es_telefonos as tel on tel.fk_id_persona=per.id_persona inner join es_direcciones as dir on dir.fk_id_persona=per.id_persona inner join es_empresas as emp on c.fk_id_empresa=emp.id_empresa inner join es_visitas AS v ON v.fk_id_prospecto=c.id_cliente WHERE per.fk_id_tipopersona=3 ORDER BY v.fecha_visita;");

        if ($qryresult) {
            return $qryresult;
        } else {
            return null;
        }
    }

    public function readVisitGroup()
    {
        $qryresult = RunQuery("SELECT v.id_visitas, v.no_visita, v.fecha_visita, v.hora_visita, v.observaciones, v.genera_venta, v.estatus, pr.id_prospecto, pr.puesto, e.id_empresa, e.nombre_emp, p.id_persona, p.nombre, p.primer_apellido, p.segundo_apellido, MAX(v.no_visita) as numero_visitas, (select count(v2.genera_venta) FROM es_visitas v2 where v2.genera_venta=1 AND v2.fk_id_prospecto=v.fk_id_prospecto group by fk_id_prospecto) AS visita_venta FROM es_visitas v JOIN es_prospectos pr ON pr.id_prospecto=v.fk_id_prospecto JOIN es_empresas e ON e.id_empresa=pr.fk_id_empresa JOIN es_personas p ON p.id_persona=pr.fk_id_persona GROUP BY v.fk_id_prospecto ORDER BY visita_venta DESC;");
        if ($qryresult) {
            return $qryresult;
        } else {
            return null;
        }
    }

    public function createVisitM($datos)
    {
        $fecha = date($datos['fecha']);
        $hora = $datos['hora'];
        $noVisita = $datos['noVisita'];
        $promociones = $datos['promo'];
        $producto = $datos['producto'];
        $espec = $datos['especificaciones'];
        $id_pros = $datos['id_prospecto'];
        $id_vend = $datos['id_vendedor'];

        $muestra = $datos['muestra'];
        if ($muestra == 'true') {
            $nombreMuestra = $datos['muestraName'];

            $fechaCom = $datos['fechaComp'];
            $descripcion = $datos['especificacion'];
        }



        if (isset($datos['id_empresa']) && $datos['id_empresa'] != '') {
            $id_emp = $datos['id_empresa'];
            $qryresult = RunQuery("INSERT INTO `es_visitas` (`no_visita`, `fecha_visita`, `hora_visita`, `promociones`,`productos`, `observaciones`, `genera_venta`, `fk_id_prospecto`, `fk_id_vendedor`, `estatus`)
        VALUES ('$noVisita', '$fecha', '$hora', '$promociones', '$producto', '$espec', '0', '$id_pros', '$id_vend', '3');");
            if ($qryresult) {
                $consulta = RunQuery("SELECT * FROM `es_visitas` v ORDER BY v.id_visitas DESC;");
                $consulta2 = $consulta->fetchAll(PDO::FETCH_ASSOC);
                $visita = $consulta2[0]['id_visitas'];
                if ($muestra == 'true') {
                    $qryresult2 = RunQuery("INSERT INTO `es_muestras` (`nombre_muestra`, `descripcion_muestra`, `fecha_compromiso`, `fk_id_vendedor`,
                `fk_id_prospecto`, `fk_id_visita`, `fk_id_empresa`, `estatus`) VALUES ('$nombreMuestra', '$descripcion', '$fechaCom', '$id_vend', '$id_pros', '$visita', '$id_emp', '1');");
                    if ($qryresult2) {
                        return $qryresult2;
                    } else {
                        return 'null muestra emp';
                    }
                }

            } else {
                return 'null visita emp';
            }
        } else {
            $qryresult = RunQuery("INSERT INTO `es_visitas` (`no_visita`, `fecha_visita`, `hora_visita`, `promociones`,`productos`, `observaciones`, `genera_venta`, `fk_id_prospecto`, `fk_id_vendedor`, `estatus`)
            VALUES ('$noVisita', '$fecha', '$hora', '$promociones', '$producto', '$espec', '0', '$id_pros', '$id_vend', '3');");
            if ($qryresult) {
                $consulta = RunQuery("SELECT * FROM `es_visitas` v ORDER BY v.id_visitas DESC;");
                $consulta2 = $consulta->fetchAll(PDO::FETCH_ASSOC);
                $visita = $consulta2[0]['id_visitas'];
                if ($muestra == 'true') {
                    $qryresult2 = RunQuery("INSERT INTO `es_muestras` (`nombre_muestra`, `descripcion_muestra`, `fecha_compromiso`, `fk_id_vendedor`,
                    `fk_id_prospecto`, `fk_id_visita`, `fk_id_empresa`, `estatus`) VALUES ('$nombreMuestra', '$descripcion', '$fechaCom', '$id_vend', '$id_pros', '$visita', NULL, '1');");
                    if ($qryresult2) {
                        return $qryresult2;
                    } else {
                        return 'null empresa nemp';
                    }
                }

            } else {
                return 'null visita nemp';
            }
        }
        $this->_sendmailvisit();





    }

    public function readMuestras()
    {
        $qryresult = RunQuery("SELECT * FROM `es_muestras` m INNER JOIN es_prospectos p ON m.fk_id_prospecto=p.id_prospecto
        INNER JOIN es_personas per ON p.fk_id_persona=per.id_persona;");
        if ($qryresult) {
            return $qryresult;
        } else {
            return null;
        }
    }

    //LEER PRODUCTOS ******
    public function readProductos()
    {
        $qryresult = RunQuery("SELECT * FROM `es_tipoproductos`;");
        if ($qryresult) {
            return $qryresult;
        } else {
            return null;
        }
    }

    public function readProspectoCliente($datos)
    {
        $idper = $datos['id_persona'];
        $idcor = $datos['id_correo'];
        $idtel = $datos['id_telefono'];
        $iddir = $datos['id_direccion'];
        
        if (isset($datos['id_cliente'])) {
            $idcli = $datos['id_cliente'];
            if (isset($datos['id_empresa']) && $datos['id_empresa'] != '') {

                $idemp = $datos['id_empresa'];
                $qryresult = RunQuery("SELECT * FROM `es_personas` AS per inner join es_clientes as cli on cli.fk_id_persona=per.id_persona inner join es_correos as cor
			on per.id_persona=cor.fk_id_persona inner join es_telefonos as tel on tel.fk_id_persona=per.id_persona inner join es_direcciones as dir on
			dir.fk_id_persona=per.id_persona inner join es_empresas as emp on cli.fk_id_empresa=emp.id_empresa WHERE per.fk_id_tipopersona=3 AND per.id_persona='$idper'
			and cli.id_cliente='$idcli' AND cor.id_correo='$idcor' and tel.id_telefono='$idtel' and dir.id_direccion='$iddir' and emp.id_empresa='$idemp';");
            } else {

                $qryresult = RunQuery("SELECT * FROM `es_personas` AS per inner join es_clientes as cli on cli.fk_id_persona=per.id_persona inner join es_correos as cor
			on per.id_persona=cor.fk_id_persona inner join es_telefonos as tel on tel.fk_id_persona=per.id_persona inner join es_direcciones as dir on
			dir.fk_id_persona=per.id_persona WHERE per.fk_id_tipopersona=3 AND per.id_persona='$idper'
			and cli.id_cliente='$idcli' AND cor.id_correo='$idcor' and tel.id_telefono='$idtel' and dir.id_direccion='$iddir';");
            }
        } elseif (isset($datos['id_prospecto'])) {



            $idpros = $datos['id_prospecto'];
            if (isset($datos['id_empresa']) && $datos['id_empresa'] != '') {

                $idemp = $datos['id_empresa'];
                $qryresult = RunQuery("SELECT * FROM `es_personas` AS per inner join es_prospectos as pro on pro.fk_id_persona=per.id_persona inner join es_correos as cor
			on per.id_persona=cor.fk_id_persona inner join es_telefonos as tel on tel.fk_id_persona=per.id_persona inner join es_direcciones as dir on
			dir.fk_id_persona=per.id_persona inner join es_empresas as emp on pro.fk_id_empresa=emp.id_empresa WHERE per.fk_id_tipopersona=4 AND per.id_persona='$idper'
			and pro.id_prospecto='$idpros' AND cor.id_correo='$idcor' and tel.id_telefono='$idtel' and dir.id_direccion='$iddir' and emp.id_empresa='$idemp';");
            } else {
                $qryresult = RunQuery("SELECT * FROM `es_personas` AS per inner join es_prospectos as pro on pro.fk_id_persona=per.id_persona inner join es_correos as cor
			on per.id_persona=cor.fk_id_persona inner join es_telefonos as tel on tel.fk_id_persona=per.id_persona inner join es_direcciones as dir on
			dir.fk_id_persona=per.id_persona WHERE per.fk_id_tipopersona=4 AND per.id_persona='$idper'
			and pro.id_prospecto='$idpros' AND cor.id_correo='$idcor' and tel.id_telefono='$idtel' and dir.id_direccion='$iddir';");
                /* if($qryresult){
                    return $qryresult;
                }else{
                    return null;
                } */
            }

        }

        if ($qryresult) {
            return $qryresult;
        } else {
            return null;
        }

    }

    private function _sendmailvisit()
    {

        // Enviar correo al usuario 

        $to = 'fernando.rodriguez@medicacampestre.com';
        /* $to = $_SESSION['correo']; */
        $subject = "AVISO " . utf8_decode("AUTOMÁTICO") . " INTRANET: Se ha generado un permiso de vacaciones";
        $mail = utf8_decode("Estimado(a) " . 'MY NAME' . " " .'MY LAST NAME'. "
		\nSe ha realizado una solicitud de vacaciones de tu cuenta en la INTRANET.
		\nSi no reconoce esta operación, favor de mandar un correo comentando la situación a la cuenta oarenas@medicacampestre.com,
		\nJefe del Departamento de Desarrollo.
		\nGracias.
		\n
		\n
		\n
		\nEste mensaje se ha generado de manera automática.
		\nNo responder.");

        $header = "From: intranet@medicacampestre.com";

        @mail($to, $subject, $mail, $header);
    }
}
?>