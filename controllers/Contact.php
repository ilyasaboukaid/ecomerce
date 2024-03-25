<?php

class Contact extends Controller
{
    public function index()
    {
        // Utiliser la fonction d'aide pour obtenir l'instance unique de Engine
        return renderTemplate('contact/index', ['title' => 'Djebabla']);
    }
}
