<?php

class Produit extends Controller
{
  private $productModel;

  public function __construct()
  {
    $this->productModel = $this->model('ProduitModel');
  }

  // Page d'accueil
  public function index($id)
  {
   
    if ($id) {

      $produit = $this->productModel->getProduit($id);
      return renderTemplate('produit/index', ['produit' => $produit]);
    } else {
      return renderTemplate('error/index', ['title' => 'Page non trouvée']);
    }
  }
}
