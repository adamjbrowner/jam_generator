<?php
namespace AppBundle\Util;

class Jam {

    function __construct($key) {
        $this->key = $key;
        switch ($this->key) {
            case "C":
                $this->chords = array("C", "Dm", "Em", "F", "G", "Am", "Bdim");
                break;
            case "D":
                $this->chords = array("D", "Em", "F#m", "G", "A", "Bm", "C#dim");
                break;
            default:
                $this->chords = array("C", "Dm", "Em", "F", "G", "Am", "Bdim");
        }
        $this->getChord();
    }

    public function getChord() {
        $i = array_rand($this->chords);
        $this->chord = $this->chords[$i];
    }
}

?>
