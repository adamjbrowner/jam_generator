<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        $form = $this->createFormBuilder()
            ->add('key', ChoiceType::class, array(
                'choices' => array(
                    'C' => 'C',
                ),
            ))
            ->add('save', SubmitType::class, array('label' => 'Generate'))
            ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $data = $form->getData();
            return $this->redirectToRoute('new generator', $data);
        }

        return $this->render('default/index.html.twig', array(
            'form' => $form->createview(),
        ));
    }
}
