<?php

class Animal {
    public $species;
    public $kudos;
    protected $calling;

    const CONJUNCTION = "says";

    function __construct($mySpecies, $myCalling) {
        $this->set_species($mySpecies);
        if (is_string($myCalling))
            $this->calling = $myCalling;
    }

    function __destruct() {
        echo $this->species . " " . self::CONJUNCTION . " " . $this->calling;
    }

    function set_species($str) {
        if (is_string($str))
            $this->species = $str;
    }
}
