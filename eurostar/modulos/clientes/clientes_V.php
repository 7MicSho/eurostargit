<?php
class Clientes_V
{
    private $_head;
    private $_scripts;
    private $_contenido;
    public function __construct()
    {
        $this->_head = ZONAS . 'head.php';
        $this->_scripts = ZONAS . 'scripts.php';

    }

    public function perfil($cliente, $visitas)
    {
        $this->_contenido = 'html/pages/clientes/cliente.php';
        require_once ESTRUCTURA . 'estructura.php';
    }

    public function home($clientes)
    {
        //$this->_validate();
        $this->_contenido = 'html/pages/clientes/clientes.php';
        require_once ESTRUCTURA . 'estructura.php';
    }

    public function editar($clientes)
    {
        $this->_contenido = 'html/pages/clientes/editar.php';
        require_once ESTRUCTURA.'estructura.php';		
    }
    public function agregar($prefijos)
    {
        $this->_contenido = 'html/pages/clientes/agregar.php';
        require_once ESTRUCTURA.'estructura.php';		
    }

    public function consultar($clientes, $clientesSEmp)
    {
        $this->_contenido = 'html/pages/clientes/consultar.php';
        require_once ESTRUCTURA.'estructura.php';		
    }

    public function historial()
    {
        $this->_contenido = 'html/pages/clientes/historial.php';
        require_once ESTRUCTURA.'estructura.php';		
    }
}
?>