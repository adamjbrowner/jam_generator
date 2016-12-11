<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use AppBundle\Util\Jam;

class GeneratorController extends Controller
{
    /**
     * @Route("generator/new", name="new generator")
     */
    public function newAction(Request $request)
    {
        $key = $request->query->get('key');
        $jam = new Jam($key);
        return $this->render('generator/new.html.twig', array(
            'chord' => $jam->chord,
            'key' => $jam->key,
        ));
    }
}
