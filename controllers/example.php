
<?php
class Example extends Controller
{
 

    private $productModel;

    public function __construct()
    {
        
    }

    // Page d'accueil
    public function index()
    {
      

       return renderTemplate('example/index', []);
    }



}
