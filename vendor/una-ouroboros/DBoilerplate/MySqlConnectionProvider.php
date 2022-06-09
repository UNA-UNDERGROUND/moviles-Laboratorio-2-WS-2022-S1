<?php

namespace una_ouroboros\DBoilerplate;

class MySqlConnectionProvider extends DBCredentialProvider
{
    // constructor
    function __construct($app, $database)
    {
        parent::__construct($app, $database);
    }

    protected function getConnection(){
        $conn = mysqli_connect($this->host, $this->user, $this->pass, $this->base);
        $conn->set_charset('utf8');
        return $conn;
    }
}
