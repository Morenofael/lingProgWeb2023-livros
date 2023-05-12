<?php

//Declara a classe Estado
class Estado {
    private $sigla;
    private $nome;

    /**
     * Get the value of sigla
     */ 
    public function getSigla()
    {
        return $this->sigla;
    }

    /**
     * Set the value of sigla
     *
     * @return  self
     */ 
    public function setSigla($sigla)
    {
        $this->sigla = $sigla;

        return $this;
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
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }
}

//Captura os parâmetros GET
$regiao = "";
if(isset($_GET['regiao']))
    $regiao = $_GET['regiao'];

//Cria os objetos
$estados = array();
if($regiao == 'SUL') { //Região SUL
    $pr = new Estado();
    $pr->setSigla("PR")->setNome("Paraná");

    $rs = new Estado();
    $rs->setSigla("RS")->setNome("Rio Grande do Sul");

    $sc = new Estado();
    $sc->setSigla("SC")->setNome("Santa Catarina");

    array_push($estados, $pr);
    array_push($estados, $rs);
    array_push($estados, $sc);

} else if($regiao == 'SUD') { //Região SUDESTE
    $es = new Estado();
    $es->setSigla("ES")->setNome("Espirito Santo");

    $mg = new Estado();
    $mg->setSigla("MG")->setNome("Minas Gerais");

    $rj = new Estado();
    $rj->setSigla("RJ")->setNome("Rio de Janeiro");

    $sp = new Estado();
    $sp->setSigla("SP")->setNome("São Paulo");

    array_push($estados, $es);
    array_push($estados, $mg);
    array_push($estados, $rj);
    array_push($estados, $sp);

} else if($regiao == 'CEO') { //Região CENTRO-OESTE
    $go = new Estado();
    $go->setSigla("GO")->setNome("Goiás");

    $mt = new Estado();
    $mt->setSigla("MT")->setNome("Mato Grosso");

    $ms = new Estado();
    $ms->setSigla("MS")->setNome("Mato Grosso do Sul");

    array_push($estados, $go);
    array_push($estados, $mt);
    array_push($estados, $ms);

} else {
    echo "<span style='color: red;'>A região informada no parâmetro 'regiao' deve ser SUL, SUD ou CEO!</span>";
    exit; //Interrompe a execução do restante do script
}

//Imprime a saída
echo "<h1>Estados da região escolhida</h1>";

echo "<table border=1>";

echo "<tr>";
echo "<td><b>Sigla</b></td>";
echo "<td><b>Nome</b></td>";
echo "</tr>";

foreach($estados as $est) {
    echo "<tr>";
    echo "<td>" . $est->getSigla() . "</td>";
    echo "<td>" . $est->getNome() . "</td>";
    echo "</tr>";
}

echo "<table>";