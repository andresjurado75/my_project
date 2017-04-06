<?php

namespace SafetyBundle\Controller;

use SafetyBundle\Entity\Persona;
use SafetyBundle\Form\PersonaType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\DateTime;

class DefaultController extends Controller
{
    public function registerAction(Request $request)
    {
        $persona = new Persona();
        $url = "CrearPersona";
        $form = $this->formCreate($persona, new PersonaType(), $url);
        return $this->render("SafetyBundle:Default:crearpersona.html.twig", array('form' => $form->createView()));
    }

    public function formCreate($entity, $form, $url)
    {
        $form = $this->createForm($form, $entity, array('action' => $this->generateUrl($url)));
        return $form;
    }

    public function crearAction(Request $request)
    {
        $persona = new Persona();
        $url = "CrearPersona";
        $form = $this->formCreate($persona, new PersonaType(), $url);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($persona);
                $em->flush();
                $request->getSession()
                    ->getFlashBag()
                    ->add('success', 'Se ha guardado el registro exitosamente');
                $url = $this->generateUrl('index_home');
                return $this->redirect($url);
            }
        }
        return $this->render("SafetyBundle:Default:crearpersona.html.twig", array('form' => $form->createView()));
    }


    protected function getErrorMessages(\Symfony\Component\Form\Form $form)
    {
        $errors = array();

        foreach ($form->getErrors() as $key => $error) {
            $errors[] = $error->getMessage();
        }

        foreach ($form->all() as $child) {
            if (!$child->isValid()) {
                $errors[$child->getName()] = $this->getErrorMessages($child);
            }
        }

        return $errors;
    }

}
