<?php
require __DIR__ . '/interfaces.php';
require __DIR__ . '/traits.php';

class Attributes implements SetGet {
    private $default = "n/a";
    protected $weight;
    protected $height;
    protected $color;

    protected function get_default() {
        return $this->default;
    }

    function get_color() {
        return $this->color;
    }

    function set_color($str) {
        if (is_string($str))
            $this->color = $str;
    }
}

class Animal extends Attributes {
    use Kudos;

    public $species;
    public $kudos;
    protected $calling;

    const CONJUNCTION = "says";

    function __construct($mySpecies, $myCalling) {
        $this->weight = $this->get_default();
        $this->height = $this->get_default();
        $this->color = $this->get_default();

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
