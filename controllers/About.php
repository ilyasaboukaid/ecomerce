<?php


class About extends Controller
{
 
    // Page d'accueil
    public function index()
    {
        // Use the helper function to get the singleton instance of Engine
        return renderTemplate('About/index', ['title' => 'Djebabla']);
    }


}