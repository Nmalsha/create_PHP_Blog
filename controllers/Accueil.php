<?php

class Accueil extends BaseController
{

    public function index()
    {

        //calling to read post view
        $this->render('index');

    }
//sending email if someone wants to contact me true the contact form
    public function form()
    {
        $errors = [];
        $errorMessage = '';

        if ($this->request->get('submit') !== null) {

            $nom = htmlspecialchars($this->request->get('nom'));
            $prenom = htmlspecialchars($this->request->get('prenom'));
            $fromemail = htmlspecialchars($this->request->get('email'));
            $to = "malshis@yahoo.com";

            $subject = "Form submission";
            $subject2 = "Copy of your form submission";
            $message = $nom . " " . $prenom . " wrote the following:" . "\n\n" . $this->request->get('message');
            $message2 = "Here is a copy of your message " . $nom . "\n\n" . $this->request->get('message');

            $headers = "From:" . $fromemail;
            $headers2 = "From:" . $to;
            mail($to, $subject, $message, $headers);
            mail($fromemail, $subject2, $message2, $headers2); // sends a copy of the message to the sender
            echo "Mail Sent. Thank you " . $nom . ", we will contact you shortly.";
            $url = "http://localhost:8080/posts";
            $response = new RedirectResponse($url);
            $response->send();

        }

    }

}
