<?php

namespace DAO;

require_once realpath(dirname(__FILE__)) . '../../vendor/una-ouroboros/DBoilerplate/MySqlConnectionProvider.php';


use una_ouroboros\DBoilerplate\MySqlConnectionProvider;

class Bus extends MySqlConnectionProvider
{
    public function __construct()
    {
        parent::__construct("Moviles-UNA", "lab#2-WS");
    }

    // [C]RUD
    public function create($placa, $marca, $ruta, $num_plazas, $proximo_mantenimiento, $disponible, $tipo)
    {
        $query = "INSERT INTO bus (placa, marca, ruta, num_plazas, proximo_mantenimiento, disponible, tipo) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->getConnection()->prepare($query);
        $stmt->bind_param("sssssss", $placa, $marca, $ruta, $num_plazas, $proximo_mantenimiento, $disponible, $tipo);
        $res = $stmt->execute();
        $stmt->close();
        return $res;
    }

    // C[R]UD
    public function exists($placa)
    {
        $sql = "SELECT * FROM buses WHERE placa = ?";
        $params = array($placa);
        $bus = $this->query($sql, $params);
        return $bus != false || $bus != null;
    }

    public function getBus($id)
    {
        $sql = "SELECT * FROM buses WHERE id = ?";
        $params = array($id);
        $bus = $this->query($sql, $params);
        return $bus;
    }

    public function getBuses()
    {
        $sql = "SELECT * FROM buses";
        $buses = $this->query($sql);
        return $buses;
    }

    // CR[U]D

    public function update($id, $placa, $marca, $ruta, $num_plazas, $proximo_mantenimiento, $disponible, $tipo)
    {
        $sql = "UPDATE buses SET placa = ?, marca = ?, ruta = ?, num_plazas = ?, proximo_mantenimiento = ?, disponible = ?, tipo = ? WHERE id = ?";
        $params = array($placa, $marca, $ruta, $num_plazas, $proximo_mantenimiento, $disponible, $tipo, $id);
        $this->execute($sql, $params);
    }

    // CRU[D]

    public function delete($id)
    {
        $sql = "DELETE FROM buses WHERE id = ?";
        $params = array($id);
        $this->execute($sql, $params);
    }
}
