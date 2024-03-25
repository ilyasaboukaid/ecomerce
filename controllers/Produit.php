<?php


class Produit extends Controller
{
 
    // Page d'accueil
    public function index()
    {
        // Use the helper function to get the singleton instance of Engine
        return renderTemplate('Produit/index', ['title' => 'Djebabla']);
    }


}
