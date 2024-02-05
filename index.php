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

        return $this -> $prezzo;
    }
    public function setPrezzo($prezzo) {

        $this -> prezzo = $prezzo;
    }

    
    public function getPeso() {

        return $this -> $peso;
    }
    public function setPeso($peso) {

        $this -> peso = $peso;
    }

    
    public function getNome() {

        return $this -> $nome;
    }
    public function setNome($nome) {

        $this -> nome = $nome;
    }


    public function getCategoria() {

        return $this -> $categoria;
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
   

?>