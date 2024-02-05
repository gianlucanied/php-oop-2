<?php

    class Products {

        public $cibo;
        public $giochi;
        public $cucce;

        public function __construct(
            $cibo, $giochi, $cucce
        ) {

            $this -> cibo = $cibo;
            $this -> giochi = $giochi;
            $this -> cucce = $cucce;
        }

        
    public function getCibo() {

        return $this -> $cibo;
    }
    public function setCibo($cibo) {

        $this -> cibo = $cibo;
    }

    
    public function getGiochi() {

        return $this -> $giochi;
    }
    public function setGiochi($giochi) {

        $this -> giochi = $giochi;
    }

    
    public function getCucce() {

        return $this -> $cucce;
    }
    public function setCucce($cucce) {

        $this -> cucce = $cucce;
    }


    }



    class DogsProducts extends Products {
        
    }

    class CatsProducts extends Products {

    }
   