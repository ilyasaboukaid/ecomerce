<?php

class Produit extends Controller
{
 

    private $productModel;

    public function __construct()
    {
        $this->productModel = $this->model('ProduitModel');
    }

    // Page d'accueil
    public function index()
    {
      $id=1;
        // Use the helper function to get the singleton instance of Engine
        $produits=$this->productModel->getProduit($id);
   
       return renderTemplate('produit/index', ['products' => $produits]);
    }


}