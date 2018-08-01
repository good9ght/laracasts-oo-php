<?php 

class Tarefa {
    public $titulo;
    public $descricao;
    public $completa = false;

    public function __construct($titulo, $descricao) {
        $this->titulo = $titulo;
        $this->descricao = $descricao;
    }

    public function completar() {
        $this->completa = true;
    }
}

$tarefa = new Tarefa('Este é o titulo', 'Está tarefa deve ser completa...');
$tarefa->completar();

var_dump($tarefa);