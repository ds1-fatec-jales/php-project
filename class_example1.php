<?php

class carro {
    public $cor = "branco";
    protected $portas = 4;
    private $posicao = 1;

    function MostrarPortas() {
        echo $this->portas . "<br>";
    }
}

class caminhao extends carro {

}
$bmw = new carro();
$bmw->MostrarPortas();




?>