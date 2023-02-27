<?php

class Lutador {
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $emprates;
    
    public function apresentar() {
        echo '<br>-----------------------------------';
        echo '<br>';
        echo "Apresentando o lutador ". $this->getNome();
        echo '<br>';
        echo "Com ". $this->getVitorias(). " vitórias, ". $this->getDerrotas(). " derrotas e ". $this->getEmprates()." empates.";
        echo '<br>';
        echo 'Pesando '. $this->getPeso(). " Kilos e ". $this->getAltura(). " metros de altura. ";
        echo '<br>';
        echo 'Pertencendo à categoria '. $this->getCategoria();
        echo '<br>------------------------------------';
        
    }
    public function status() {
        echo '<br>'; 
        echo '------ STATUS ------';
        echo '<br>';
        echo 'NOME: '. $this->getNome();
        echo '<br>';
        echo 'IDADE: '. $this->getIdade();
        echo '<br>';
        echo 'NACIONALIDADE: '. $this->getNacionalidade();
        echo '<br>';
        echo 'ALTURA: '. $this->getAltura();
        echo '<br>';
        echo 'PESO: '. $this->getPeso();
        echo '<br>';
        echo "CATEGORIA: ". $this->getCategoria();
        echo '<br>';
        echo '--------------------';
        
    }
    public function ganharLuta() {
        $this->setVitorias($this->getVitorias() + 1);
        
    }
    public function perderLuta(){
        $this->setDerrotas($this->getDerrotas() + 1);
        
    }
    public function empatarLuta() {
        $this->setEmprates($this->getEmprates() + 1);
        
    }
    public function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $emprates) {
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->setPeso($peso);        
        $this->vitorias = $vitorias;
        $this->derrotas = $derrotas;
        $this->emprates = $emprates;
    }
    
    public function getNome() {
        return $this->nome;
    }
    public function getNacionalidade() {
        return $this->nacionalidade;
    }
    public function getIdade() {
        return $this->idade;
    }
    public function getAltura() {
        return $this->altura;
    }
    public function getPeso() {
        return $this->peso;
    }
    public function getCategoria() {
        return $this->categoria;
    }
    public function getVitorias() {
        return $this->vitorias;
    }
    public function getDerrotas() {
        return $this->derrotas;
    }
    public function getEmprates() {
        return $this->emprates;
    }
    public function setNome($nome): void {
        $this->nome = $nome;
    }
    public function setNacionalidade($nacionalidade): void {
        $this->nacionalidade = $nacionalidade;
    }
    public function setIdade($idade): void {
        $this->idade = $idade;
    }
    public function setAltura($altura): void {
        $this->altura = $altura;
    }
    public function setPeso($peso): void {
        $this->peso = $peso;
        $this->setCategoria();
    }
    public function setCategoria(): void {
        if ($this->peso < 52.2){
            $this->categoria = "Inválido";
        }elseif($this->peso <= 70.3){
            $this->categoria = "Leve";
        }elseif ($this->peso <= 83.9) {
            $this->categoria = "Médio";
        }elseif ($this->peso <= 120.2) {
            $this->categoria = "Pesado";
        }else{
            $this->categoria = "Inválido";
        }
        
        //$this->categoria = $categoria;
    }
    public function setVitorias($vitorias): void {
        $this->vitorias = $vitorias;
    }
    public function setDerrotas($derrotas): void {
        $this->derrotas = $derrotas;
    }
    public function setEmprates($emprates): void {
        $this->emprates = $emprates;
    }



    
}
