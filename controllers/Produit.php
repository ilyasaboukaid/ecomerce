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

  

  public function acheter()
  {
    $host = 'localhost';
    $dbname = 'ecomerce';
    $username = 'root';
    $password = '';

    try {
      $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (PDOException $e) {
      echo "Erreur de connexion à la base de données: " . $e->getMessage();
      exit();
    }
    ;

    $productName = $_POST['productName'];
    $productPrice = $_POST['productPrice'];
    $productDescription = $_POST['productDescription'];


    $sql = "INSERT INTO orders (name, price, description) VALUES (:name, :price, :description)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':name' => $productName, ':price' => $productPrice, ':description' => $productDescription]);

    header('Location: /phpCrud/confirmation');
    exit();
  }
}
