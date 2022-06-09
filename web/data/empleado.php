<?php

class Empleado
{
    private $id;
    private $nombre;
    private $apellidos;
    private $telefono;
    private $correo;
    private $direccion;
    private $tipo_licencia;

    public function __construct(
        $id,
        $nombre,
        $apellidos,
        $telefono,
        $correo,
        $direccion,
        $tipo_licencia
    ) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->telefono = $telefono;
        $this->correo = $correo;
        $this->direccion = $direccion;
        $this->tipo_licencia = $tipo_licencia;
    }

    // getters
    public function getId()
    {
        return $this->id;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function getApellidos()
    {
        return $this->apellidos;
    }
    public function getTelefono()
    {
        return $this->telefono;
    }
    public function getCorreo()
    {
        return $this->correo;
    }
    public function getDireccion()
    {
        return $this->direccion;
    }
    public function getTipoLicencia()
    {
        return $this->tipo_licencia;
    }

    // setters
    public function setId($id)
    {
        $this->id = $id;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    }
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }
    public function setCorreo($correo)
    {
        $this->correo = $correo;
    }
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }
    public function setTipoLicencia($tipo_licencia)
    {
        $this->tipo_licencia = $tipo_licencia;
    }

    // JSON
    public function jsonSerialize()
    {
        return [
            'id' => $this->id,
            'nombre' => $this->nombre,
            'apellidos' => $this->apellidos,
            'telefono' => $this->telefono,
            'correo' => $this->correo,
            'direccion' => $this->direccion,
            'tipo_licencia' => $this->tipo_licencia
        ];
    }
}
