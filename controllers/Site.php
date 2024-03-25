<?php

class site extends Controller
{
    private $productModel;

    public function __construct()
    {
        // Instanciation du modèle ProduitModel
        $this->productModel = $this->model('ProduitModel');
    }

    // Page d'accueil
    public function index()
    {
        // Récupérer tous les produits
        $products = $this->productModel->getAllProducts();

        // Utilisation de la fonction d'aide pour obtenir l'instance unique de Engine
        return renderTemplate('site/index', ['title' => 'Accueil', 'products' => $products]);
    }

    public function about()
    {
        // Utilisation de la fonction d'aide pour obtenir l'instance unique de Engine
        return renderTemplate('site/about', ['title' => 'À propos']);
    }

    public function notFound()
    {
        // Utilisation de la fonction d'aide pour obtenir l'instance unique de Engine
        return renderTemplate('error/index', ['title' => 'Page non trouvée']);
    }
}
?>
