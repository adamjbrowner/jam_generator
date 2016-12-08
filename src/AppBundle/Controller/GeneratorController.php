<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class GeneratorController extends Controller
{
    /**
     * @Route("generator/new", name="new generator")
     */
    public function newAction(Request $request)
    {
        // replace this example code with whatever you need
        $chords = array("C", "Dm", "Em", "F", "G", "Am", "Bdim");
        $i = array_rand($chords);
        $chord = $chords[$i];
        return $this->render('generator/new.html.twig', array(
            'chord' => $chord,
        ));
    }
}
