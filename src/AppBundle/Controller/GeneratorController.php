<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class GeneratorController extends Controller
{
    /**
     * @Route("generator/new", name="new generator")
     */
    public function newAction(Request $request)
    {
        $key = $request->query->get('key');
        $jam = $this->get('app.jam');
        $jam->generate($key);
        return $this->render('generator/new.html.twig', array(
            'chord' => $jam->chord,
            'key' => $jam->key,
        ));
    }
}
