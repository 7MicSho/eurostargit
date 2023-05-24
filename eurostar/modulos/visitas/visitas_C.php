<?php
require_once('modulos/prospectos/prospectos_M.php');
require_once('modulos/clientes/clientes_M.php');
class Visitas_C
{
    private $_datos;
    private $_objSesion;
    private $_objModelo;
    private $_objModeloPros;
    private $_objModeloCli;
    private $_objVista;

    public function __construct($datos,$objSesion){
        $this->_objSesion = $objSesion;
        $this->_datos = $datos;
        $this->_objModelo = new Visitas_M();
        $this->_objVista  = new Visitas_V();
        $this->_objModeloPros= new Prospectos_M();
        $this->_objModeloCli = new Clientes_M();
    }

    public function agregar(){
        //$id=$datos;
        //$info=$this->_objModelo->readvisit($id);
        $prospecto=$this->_objModeloPros->readOneProspectoVendedorM($this->_datos);
        $cliente=$this->_objModeloCli->readOneClienteM($this->_datos);
        $telPros=$this->_objModeloPros->readTelEmp($this->_datos);
        $visitPros=$this->_objModelo->readVisitToPros($this->_datos);
        $productos=$this->_objModelo->readProductos();
        $this->_objVista->agregar($prospecto->fetchAll(PDO::FETCH_ASSOC), $telPros->fetchAll(PDO::FETCH_ASSOC), $visitPros->fetchAll(PDO::FETCH_ASSOC), $productos->fetchAll(PDO::FETCH_ASSOC), $cliente->fetchAll(PDO::FETCH_ASSOC));
    }
    public function agregarVisitaCliente(){
        //$id=$datos;
        //$info=$this->_objModelo->readvisit($id);
        $prospecto=$this->_objModeloCli->readOneClienteM($this->_datos);
        $telPros=$this->_objModeloPros->readTelEmp($this->_datos);
        $visitPros=$this->_objModelo->readVisitToPros($this->_datos);
        $productos=$this->_objModelo->readProductos();
        $this->_objVista->agregar($prospecto->fetchAll(PDO::FETCH_ASSOC), $telPros->fetchAll(PDO::FETCH_ASSOC), $visitPros->fetchAll(PDO::FETCH_ASSOC), $productos->fetchAll(PDO::FETCH_ASSOC));
    }

    public function consultar(){
        $visitas=$this->_objModelo->readAllVisit();
        //$visitasCli=$this->_objModelo->readAllVisitCli();
        //$vendedores=$this->_objModelo->readVendedor();
        $this->_objVista->consultar($visitas->fetchAll(PDO::FETCH_ASSOC));
    }
    public function muestras(){
        $muestras=$this->_objModelo->readMuestras();
        $this->_objVista->muestras($muestras->fetchAll(PDO::FETCH_ASSOC));
    }
    public function createVisit()
    {
        $res=$this->_objModelo->createVisitM($this->_datos);
        if ($res) {
            header('Location:?modulo=prospectos&accion=consultar&sc');
        } else {
            header('Location:?modulo=prospectos&accion=consultar&fail');
        }
    }

    public function listapersonas(){
        $prospectos=$this->_objModeloPros->readProspectosM();
        $prosSinEmp=$this->_objModeloPros->readProspectosNoEmpresaM();
        $this->_objVista->listapersonas($prospectos->fetchAll(PDO::FETCH_ASSOC), $prosSinEmp->fetchAll(PDO::FETCH_ASSOC)); 
    }
}
?>