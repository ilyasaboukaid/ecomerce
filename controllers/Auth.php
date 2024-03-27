<?php

class Auth extends Controller
{
 

    private $userModel;
     
    public function __construct()
    {
        $this->productModel = $this->model('UserModel');
    }

    // Page d'accueil
    public function index()
    {
     
   
       return renderTemplate('auth/index', ['products' => $produits]);
    }

    public function login()
    {
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
        $password = $_POST["password"];
        
        $user = $this->userModel->login($email,$password);  
       if ($user){

        $this->redirect('article');
       }else{
        $this->redirect('auth');
       }
      }
  
    }
   // methode d'inscription

   public function register()
   {

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $data = [
            'nom' => $_POST['nom'],
            'prenom' => $_POST['prenom'],
            'email' => $_POST['email'],
            'password' => password_hash($_POST['password'], PASSWORD_DEFAULT) // Hacher le mot de passe
        ];

        if ($this->userModel->add($data)){

            $this->redirect('site');
           }else{
            $this->redirect('register');
           }
          }
    }











   }

