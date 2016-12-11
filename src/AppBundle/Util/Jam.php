<?php
namespace AppBundle\Util;

class Jam {

    function __construct($key) {
        $this->key = $key;
        $notes = array("C", "C#", "D", "Eb", "E", "F", "F#", "G", "Ab", "A", "Bb", "B");
        foreach($notes as $note) {
          if ($note != $key) {
            array_push($notes, $note);
            $i = array_search($note, $notes);
            unset($notes[$i]);
          } else { break; }
        }
        $notes = array_values($notes);
        $this->chords = array(
            $notes[0],
            $notes[2]."m",
            $notes[4]."m",
            $notes[5],
            $notes[7],
            $notes[9]."m",
            $notes[11]."dim"
        );
        $this->getChord();
    }

    public function getChord() {
        $i = array_rand($this->chords);
        $this->chord = $this->chords[$i];
    }
}

?>
