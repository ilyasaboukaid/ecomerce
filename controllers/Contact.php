<?php

<<<<<<< HEAD
class Contact extends Controller
{
    public function index()
    {
        // Utiliser la fonction d'aide pour obtenir l'instance unique de Engine
        return renderTemplate('contact/index', ['title' => 'Djebabla']);
    }
=======


class Contact extends Controller
{
 

    private $productModel;

    public function __construct()
    {
        
    }

    // Page d'accueil
    public function index()
    {
      

       return renderTemplate('client/contact/index', []);
    }



>>>>>>> a66634c2f30672bc7539bed4d21a1d1e5de90e3d
}
