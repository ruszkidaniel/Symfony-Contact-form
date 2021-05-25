<?php

namespace App\Controller;

use App\Form\ContactFormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FormController extends AbstractController {

    #[Route('/', name: 'app_contact_form')]
    public function Start(Request $request): Response
    {
        $error = false;
        $success = false;

        $form = $this->createForm(ContactFormType::class);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $formData = $form->getData();

            if($formData->getFullname() == null || $formData->getEmail() == null || $formData->getMessage() == null) {
                $error = true;
            } else {
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($formData);
                $entityManager->flush();
                $success = true;
            }
        }

        return $this->render('form.html.twig', [
            'form' => $form->createView(),
            'error' => $error,
            'success' => $success
        ]);
    }

}