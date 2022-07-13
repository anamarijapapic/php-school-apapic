<?php

class Animal {
    public $species;
    public $kudos;
    protected $calling;

    function set_species($str) {
        if (is_string($str))
            $this->species = $str;
    }
}
