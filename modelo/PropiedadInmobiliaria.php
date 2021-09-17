<?php
class PropiedadInmobiliaria
{
    private $id;
    private $direccion;
    private $metrosCuadrados;
    private $ciudad;
    private $valor;
    function __construct($id, $direccion, $metrosCuadrados, $ciudad, $valor)
    {
        $this->id=$id;
        $this->direccion=$direccion;
        $this->metrosCuadrados=$metrosCuadrados;
        $this->ciudad=$ciudad;
        $this->valor=$valor;
    }

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getDireccion()
    {
        return $this->direccion;
    }
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    public function getMetrosCuadrados()
    {
        return $this->metrosCuadrados;
    }
    public function setMetrosCuadrados($metrosCuadrados)
    {
        $this->metrosCuadrados = $metrosCuadrados;
    }

    public function getCiudad()
    {
        return $this->ciudad;
    }
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;
    }

    public function getValor()
    {
        return $this->valor;
    }
    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    public function MostrarDatos()
    {
        echo 'Id: ' . $this->getId();
        echo '<br>';
        echo 'Direccion: ' . $this->getDireccion();
        echo '<br>';
        echo 'Metros cuadrados: ' . $this->getMetrosCuadrados();
        echo '<br>';
        echo 'Ciudad: ' . $this->getCiudad();
        echo '<br>';
        echo 'Valor: ' . $this->getValor();
        echo '<br>';
    }
}

