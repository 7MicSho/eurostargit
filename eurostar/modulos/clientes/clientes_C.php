<?php
require_once('modulos/visitas/visitas_M.php');
class Clientes_C
{
    private $_datos;
    private $_objSesion;
    private $_objModelo;
    private $_objVista;

    private $_objModeloVisit;

    public function __construct($datos, $objSesion)
    {
        $this->_objSesion = $objSesion;
        $this->_datos = $datos;
        $this->_objModelo = new Clientes_M();
        $this->_objVista = new Clientes_V();

        $this->_objModeloVisit = new Visitas_M();
    }

    public function administrar()
    {
        $clientes=$this->_objModelo->readClientesM();
        $this->_objVista->home($clientes->fetchAll(PDO::FETCH_ASSOC));
    }

    public function perfil()
    {
        $cliente=$this->_objModelo->readOneClienteM($this->_datos);
        $visitas=$this->_objModeloVisit->readVisitToPros($this->_datos);
        $this->_objVista->perfil($cliente->fetchAll(PDO::FETCH_ASSOC), $visitas->fetchAll(PDO::FETCH_ASSOC));
    }

    public function editar()
    {
        $clientes = $this->_objModelo->readClientesM();
        $this->_objVista->editar($clientes->fetchAll(PDO::FETCH_ASSOC));
    }
    public function agregar()
    {
        $prefijos=json_decode(file_get_contents("html/temas/eurostartemplate/assets/json/prefijos.json"), true);
        $this->_objVista->agregar($prefijos);
    }

    public function consultar()
    {
        $clientes=$this->_objModelo->readClientesCM();
		$clientesSinEmp=$this->_objModelo->readClientesNoEmpresaM();
        $this->_objVista->consultar($clientes->fetchAll(PDO::FETCH_ASSOC), $clientesSinEmp->fetchAll(PDO::FETCH_ASSOC));
    }

    public function historial()
    {
        $this->_objVista->historial();
    }

    public function createpfisica()
    {
        $res = $this->_objModelo->createPFisicaM($this->_datos);
        if ($res) {
            header('Location:?modulo=clientes&accion=agregar&sc');
        } else {
            header('Location:?modulo=clientes&accion=agregar&fail');
        }
    }

    public function createpmoral()
    {
        $res = $this->_objModelo->createPMoralM($this->_datos);
        if ($res) {
            header('Location:?modulo=clientes&accion=agregar&sc');
        } else {
            header('Location:?modulo=clientes&accion=agregar&fail');
        }
    }

}

?>