<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class GeneratorControllerTest extends WebTestCase
{
    public function testNew()
    {
        $chords = array("C", "Dm", "Em", "F", "G", "Am", "Bdim");
        $contains_chord = false;
        $client = static::createClient();
        $crawler = $client->request('GET', '/generator/new');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        for ($i = 0; $i < count($chords); $i++) {
            if (strpos($crawler->filter('body')->text(), $chords[$i])) {
                $contains_chord = true;
            }
        }
        $this->assertEquals(true, $contains_chord);
    }
}
