
<?php

class Products {

    public $prezzo;
    public $peso;
    public $nome;
    public $categoria;

    public function __construct(
        $prezzo, $peso, $nome, $categoria
    ) {

        $this -> prezzo = $prezzo;
        $this -> peso = $peso;
        $this -> nome = $nome;
        $this -> categoria = $categoria;
    }

    
public function getPrezzo() {
        
    return $this->prezzo; 
}


public function setPrezzo($prezzo) {

    $this -> prezzo = $prezzo;
}


public function getPeso() {

    return $this->peso;
}
public function setPeso($peso) {

    $this -> peso = $peso;
}


public function getNome() {

    return $this->nome;
}
public function setNome($nome) {

    $this -> nome = $nome;
}


public function getCategoria() {

    return $this->categoria;
}
public function setCategoria($categoria) {

    $this -> categoria = $categoria;
}


}



class Cibo extends Products {
    
    public $datascadenza;

    public function __construct(
        $prezzo, $peso, $nome, $categoria, $datascadenza
    ) {

        $this -> setPrezzo($prezzo);
        $this -> setPeso($peso);
        $this -> setNome($nome);
        $this -> setCategoria($categoria);
        
        $this -> setDataDiScadenza($datascadenza);
    }
}

class Cucce extends Products {

    public $grandezza;

    public function __construct(
        $prezzo, $peso, $nome, $categoria, $grandezza
    ) {

        $this -> setPrezzo($prezzo);
        $this -> setPeso($peso);
        $this -> setNome($nome);
        $this -> setCategoria($categoria);
        
        $this -> setGrandezza($grandezza);
    }
}


$firstproduct = new Products("12,90", "150gr", "Biscotti", "Cane");

$secondproduct = new Products("8,90", "100gr", "Giochino", "Gatto");

echo "Prezzo: " . $firstproduct -> getPrezzo();
echo "<br>";
echo "Peso: " . $firstproduct -> getPeso();
echo "<br>";
echo "Nome prodotto: " . $firstproduct -> getNome();
echo "<br>";
echo "Categoria prodotto: " . $firstproduct -> getCategoria();

echo "<br>";
echo "<br>";
echo "<br>";

echo "Prezzo: " . $secondproduct -> getPrezzo();
echo "<br>";
echo "Peso: " . $secondproduct -> getPeso();
echo "<br>";
echo "Nome prodotto: " . $secondproduct -> getNome();
echo "<br>";
echo "Categoria prodotto: " . $secondproduct -> getCategoria();
?>
