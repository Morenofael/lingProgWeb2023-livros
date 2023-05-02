<?php

//Declara a classe Pessoa
class Pessoa {
    private $nome;
    private $sobrenome;
    private $idade;

    public function getNomeCompleto() {
        return $this->nome . " " . $this->sobrenome;
    }

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of sobrenome
     */ 
    public function getSobrenome()
    {
        return $this->sobrenome;
    }

    /**
     * Set the value of sobrenome
     *
     * @return  self
     */ 
    public function setSobrenome($sobrenome)
    {
        $this->sobrenome = $sobrenome;

        return $this;
    }

    /**
     * Get the value of idade
     */ 
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * Set the value of idade
     *
     * @return  self
     */ 
    public function setIdade($idade)
    {
        $this->idade = $idade;

        return $this;
    }
}

//Captura os parâmetros POST
$tipo = "";
if(isset($_POST['tipo']))
    $tipo = $_POST['tipo'];

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$idade = $_POST['idade'];

//Imprime a saída
if($tipo == 'A') { //Array
    echo "<h1>Exercício 1 - Resposta com array associativo</h1>";

    $pessoa = array("nome" => $nome,
                    "sobrenome" => $sobrenome,
                    "idade" => $idade);
                    
    echo "<span style='font-weight: bold;'>Nome completo: </span>";
    echo $pessoa['nome'] . " " . $pessoa['sobrenome'];

    echo "<br>";

    echo "<span style='font-weight: bold;'>Idade: </span>";
    echo $pessoa['idade'];

} else if($tipo == 'C') { //Classe
    echo "<h1>Exercício 1 - Resposta com classe</h1>";

    $pessoa = new Pessoa();
    $pessoa->setNome($nome)->setSobrenome($sobrenome)->setIdade($idade);

    echo "<span style='font-weight: bold;'>Nome completo: </span>";
    echo $pessoa->getNomeCompleto();

    echo "<br>";

    echo "<span style='font-weight: bold;'>Idade: </span>";
    echo $pessoa->getIdade();

} else 
    echo "O valor informado para o parâmetro 'tipo' é inválido";

