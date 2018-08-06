<?php

class LightSwitch {
    
    /*
    |
    | Poderá ser acessado de qualquer lugar
    |
    */
    public function on() {}

    /*
    |
    | Poderá ser acessado de qualquer lugar
    |
    */
    public function off() {}

    /*
    |
    | Poderá ser acessado somente de dentro da classe
    |
    */
    private function connect() {}

    /*
    |
    | Poderá ser acessado por está classe ou por 
    | classes que o herdarem
    |
    */
    protected function activate() {}
}

$lightSwitch = new LightSwitch;

// Não funciona
$lightSwitch->connect();

// Não funciona
$lightSwitch->activate();

// Funciona
$lightSwitch->on();
