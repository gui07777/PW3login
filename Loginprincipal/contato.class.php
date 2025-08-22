<?php

class Contato{
    private $nome;
    private $email;
    private $senha;
    private $pdo;

    function __construct() {
        $dns = "mysql:dbname=contato;host=localhost";
    }
}

?>