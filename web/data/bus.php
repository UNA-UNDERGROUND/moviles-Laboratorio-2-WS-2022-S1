<?php


class Bus
{
    private $placa;
    private $marca;
    private $ruta;
    private $num_plazas;
    private $proximo_mantenimiento;
    private $disponible;
    private $tipo;

    public function __construct(
        $placa,
        $marca,
        $ruta,
        $num_plazas,
        $proximo_mantenimiento,
        $disponible,
        $tipo
    ) {
        $this->placa = $placa;
        $this->marca = $marca;
        $this->ruta = $ruta;
        $this->num_plazas = $num_plazas;
        $this->proximo_mantenimiento = $proximo_mantenimiento;
        $this->disponible = $disponible;
        $this->tipo = $tipo;
    }

    // getters
    public function getPlaca()
    {
        return $this->placa;
    }
    public function getMarca()
    {
        return $this->marca;
    }
    public function getRuta()
    {
        return $this->ruta;
    }
    public function getNumPlazas()
    {
        return $this->num_plazas;
    }
    public function getProximoMantenimiento()
    {
        return $this->proximo_mantenimiento;
    }
    public function getDisponible()
    {
        return $this->disponible;
    }
    public function getTipo()
    {
        return $this->tipo;
    }
    // setters
    public function setPlaca($placa)
    {
        $this->placa = $placa;
    }
    public function setMarca($marca)
    {
        $this->marca = $marca;
    }
    public function setRuta($ruta)
    {
        $this->ruta = $ruta;
    }
    public function setNumPlazas($num_plazas)
    {
        $this->num_plazas = $num_plazas;
    }
    public function setProximoMantenimiento($proximo_mantenimiento)
    {
        $this->proximo_mantenimiento = $proximo_mantenimiento;
    }
    public function setDisponible($disponible)
    {
        $this->disponible = $disponible;
    }
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    // JSON
    public function jsonSerialize()
    {
        return [
            'placa' => $this->placa,
            'marca' => $this->marca,
            'ruta' => $this->ruta,
            'num_plazas' => $this->num_plazas,
            'proximo_mantenimiento' => $this->proximo_mantenimiento,
            'disponible' => $this->disponible,
            'tipo' => $this->tipo
        ];
    }
};
