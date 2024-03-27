<?php

class Auth extends Controller
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = $this->model('UserModel');
    }

    // Page d'accueil
    public function index()
    {
        // Vous devez définir la variable $produits ici ou l'obtenir d'une autre source
        $produits = []; // exemple vide, vous devez l'initialiser avec les produits réels
        return renderTemplate('authentication/login', ['products' => $produits]);
    }

    public function login()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST["email"];
            $password = $_POST["password"];

            $user = $this->userModel->login($email, $password);

            if ($user) {
                $this->redirect('articles');
            } else {
                $this->redirect('auth');

            }
        }
    }

    // Méthode d'inscription
    public function register()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $data = [
                'nom' => $_POST['nom'],
                'prenom' => $_POST['prenom'],
                'email' => $_POST['email'],
                'password' => password_hash($_POST['password'], PASSWORD_DEFAULT)
            ];

            if ($this->userModel->add($data)) {
                $this->redirect('site');
            } else {
                $this->redirect('register');
            }
        }
    }
}
