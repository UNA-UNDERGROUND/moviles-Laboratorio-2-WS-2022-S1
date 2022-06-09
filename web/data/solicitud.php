<?php

class Solicitud
{
    private $numeroBoleta;
    private $placa;
    private $idEmpleado;
    private $ruta;
    private $fecha_solicitud;

    public function __construct(
        $numeroBoleta,
        $placa,
        $idEmpleado,
        $ruta,
        $fecha_solicitud
    ) {
        $this->numeroBoleta = $numeroBoleta;
        $this->placa = $placa;
        $this->idEmpleado = $idEmpleado;
        $this->ruta = $ruta;
        $this->fecha_solicitud = $fecha_solicitud;
    }

    // getters
    public function getNumeroBoleta()
    {
        return $this->numeroBoleta;
    }
    public function getPlaca()
    {
        return $this->placa;
    }
    public function getIdEmpleado()
    {
        return $this->idEmpleado;
    }
    public function getRuta()
    {
        return $this->ruta;
    }
    public function getFechaSolicitud()
    {
        return $this->fecha_solicitud;
    }

    // setters
    public function setNumeroBoleta($numeroBoleta)
    {
        $this->numeroBoleta = $numeroBoleta;
    }
    public function setPlaca($placa)
    {
        $this->placa = $placa;
    }
    public function setIdEmpleado($idEmpleado)
    {
        $this->idEmpleado = $idEmpleado;
    }
    public function setRuta($ruta)
    {
        $this->ruta = $ruta;
    }
    public function setFechaSolicitud($fecha_solicitud)
    {
        $this->fecha_solicitud = $fecha_solicitud;
    }

    // JSON
    public function jsonSerialize()
    {
        return [
            'numeroBoleta' => $this->numeroBoleta,
            'placa' => $this->placa,
            'idEmpleado' => $this->idEmpleado,
            'ruta' => $this->ruta,
            'fecha_solicitud' => $this->fecha_solicitud
        ];
    }
}
