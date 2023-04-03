<?php

echo "<h2>Exercício 4 - Classes Carro</h2>";

class Carro {
    private $modelo;
    private $marca;
    private $link;

    public function __construct($modelo, $marca, $link) {
        $this->modelo = $modelo;
        $this->marca = $marca;
        $this->link = $link;
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
     * Get the value of link
     */ 
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set the value of link
     *
     * @return  self
     */ 
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }
}


//Exercução
$car1 = new Carro("Polo", "Volkswagem", 
    "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ773FjRJgfC58OplqcafaXI7cJWoLZpAtRsWPZK1tRxQ&s");
$car2 = new Carro("Tempra", "Fiat", 
    "https://upload.wikimedia.org/wikipedia/commons/thumb/0/06/Fiat_Tempra_berlina.jpg/250px-Fiat_Tempra_berlina.jpg");
$car3 = new Carro("Marea", "Fiat", 
    "https://upload.wikimedia.org/wikipedia/commons/thumb/1/1a/Fiat_Marea_Sedan_%2844213257002%29.jpg/300px-Fiat_Marea_Sedan_%2844213257002%29.jpg");
$car4 = new Carro("Renegade", "Jeep", 
    "https://revistacarro.com.br/wp-content/uploads/2022/02/Jeep-Renegade-2022-Longitude_12.jpg");
$car5 = new Carro("Onix", "Chevrolet", 
    "https://image1.mobiauto.com.br/images/api/images/v1.0/12017711/transform/fl_progressive,f_webp,q_70");

$carros = array($car1, $car2, $car3, $car4, $car5);

//Cria os cards
foreach($carros as $car) {
    echo "<div style='border: solid 1px; width: 300px; margin-top: 20px;'>";
    
    echo $car->getModelo() . "<br>";
    echo $car->getMarca() . "<br>";
    echo "<img style='width: 100%; height: auto;' src='" . $car->getLink() . "' </><br>";

    echo "</div>";
}