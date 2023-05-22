<?php
//veiculo_exec.php

class Veiculo {
    private $modelo;
    private $marca;
    private $combustivel;

    public function getCombustivelDesc() {
        switch($this->combustivel) {
            case 'A':
                return "Álcool";

            case 'G':
                return "Gasolina";

            case 'F': 
                return "Flex";
        }

        return "";
    }

    /**
     * Get the value of modelo
     */ 
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set the value of modelo
     *
     * @return  self
     */ 
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get the value of marca
     */ 
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set the value of marca
     *
     * @return  self
     */ 
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get the value of combustivel
     */ 
    public function getCombustivel()
    {
        return $this->combustivel;
    }

    /**
     * Set the value of combustivel
     *
     * @return  self
     */ 
    public function setCombustivel($combustivel)
    {
        $this->combustivel = $combustivel;

        return $this;
    }
}

$veiculo = new Veiculo();
$veiculo->setMarca($_POST["modelo"])->setModelo($_POST["marca"])->setCombustivel($_POST["combustivel"]);

echo "<h1>Dados informados para o veículo</h1>";
echo "Modelo: " . $veiculo->getModelo() . "<br>";
echo "Marca: " . $veiculo->getMarca() . "<br>";
echo "Combustível: " . $veiculo->getCombustivelDesc() . "<br>";

echo "<br><br>";
echo "<a href='veiculo_form.php'>Cadastrar outro veículo</a>";