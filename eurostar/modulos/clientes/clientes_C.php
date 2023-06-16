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
        $clientes=$this->_objModelo->readClientesOnly();
        $empresas=$this->_objModelo->readEmpresas();
        $this->_objVista->home($clientes->fetchAll(PDO::FETCH_ASSOC), $empresas->fetchAll(PDO::FETCH_ASSOC));
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
        $clientesSinEmp=$this->_objModelo->readClientesSinEmpM();
        $empresas=$this->_objModelo->readEmpresas();
        $mercados=$this->_objModelo->readMercados();
        $tipos=$this->_objModelo->readTipos();
        $vendedores=$this->_objModelo->readVendedores();
        $this->_objVista->editar($clientes->fetchAll(PDO::FETCH_ASSOC), $empresas->fetchAll(PDO::FETCH_ASSOC), $vendedores->fetchAll(PDO::FETCH_ASSOC), $clientesSinEmp->fetchAll(PDO::FETCH_ASSOC), $mercados->fetchAll(PDO::FETCH_ASSOC), $tipos->fetchAll(PDO::FETCH_ASSOC));
    }
    public function agregar()
    {
        $prefijos=json_decode(file_get_contents("html/temas/eurostartemplate/assets/json/prefijos.json"), true);
        $mercados=$this->_objModelo->readMercados();
        $vendedores=$this->_objModelo->readVendedores();
        $this->_objVista->agregar($prefijos, $mercados->fetchAll(PDO::FETCH_ASSOC), $vendedores->fetchAll(PDO::FETCH_ASSOC));
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
    public function editarcliente()
    {
        $res = $this->_objModelo->updateClienteM($this->_datos);
        if ($res) {
            header('Location:?modulo=clientes&accion=editar&sc');
        } else {
            header('Location:?modulo=clientes&accion=editar&fail');
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

    public function deleteclientebd(){
        $res=$this ->_objModelo->deletebD($this->_datos);
        if ($res) {
            header('Location:?modulo=clientes&accion=editar&sc');
        } else {
            header('Location:?modulo=clientes&accion=editar&fail');
        }
    }

}

?>