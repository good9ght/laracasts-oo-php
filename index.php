<?php 

class Pessoa {
    public $nome;
    public $idade;

    public function __construct($nome) {
        $this->nome = $nome;
    }

    /*
    |
    | setters podem ser usados para atribuir regras
    | ao definir um atributo
    |
    */
    public function setIdade($idade) {
        if($idade < 18) {
            throw new Exception('Esta pessoa não tem idade suficiente.');
        } 
        $this->idade = $idade;
    }
    
    /*
    |
    | getters podem ser usados para mudar o retorna 
    | ao pegar o valor do atributo
    |
    */
    public function getIdade() {
        return $this->idade * 10;
    }
}

$pessoa = new Pessoa("Victor");

/*
|
| Uma exception será "jogada"
|
*/
// $pessoa->setIdade(15);

$pessoa->setIdade(25);

var_dump($pessoa->getIdade());

