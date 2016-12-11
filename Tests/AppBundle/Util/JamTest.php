<?php
namespace Test\AppBundle\Util;

use AppBundle\Util\Jam;

class JamTest extends \PHPUnit_Framework_TestCase
{
    public function testKey()
    {
        $jam = new Jam("C");
        $this->assertEquals($jam->key, "C");
    }

    public function testChords() {
        $jam = new Jam("C");
        $keyChords = array("C", "Dm", "Em", "F", "G", "Am", "Bdim");
        $this->assertEquals($jam->chords, $keyChords);
    }
}


 ?>
