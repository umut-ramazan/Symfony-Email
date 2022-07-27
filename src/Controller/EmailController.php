<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

class EmailController extends AbstractController
{
    #[Route('/email', name: 'app_email')]
    public function index(MailerInterface  $mailer): Response
    {
        $email=(new Email())
            ->from('Umutramazan26@gmail.com')
            ->to('Denemeq@gmail.com')
            ->subject("Deneme")
            ->html('<p> Deneme </p>')
        ;
        $mailer->send($email);
        return new Response("Gİtti");


    }
}
