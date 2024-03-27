<?php


class UserModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }
    // crud opérations
    public function getOne($id)
    {
        $this->db->query('SELECT * FROM user WHERE id = :id');
        $this->db->bind(':id', $id);
        return $this->db->single();
    }

    public function getAll()
    {
        $this->db->query('SELECT * FROM user ORDER BY id DESC');
        return $this->db->resultSet();
    }

    public function add($data)
    {
        $this->db->query('INSERT INTO user (nom, prenom, email, password,type) VALUES (:nom, :prenom, :email, :password, :type)');
        $this->db->bind(':nom', $data['nom']);
        $this->db->bind(':prenom', $data['prenom']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function update($data)
    {
        $this->db->query('UPDATE user SET nom = :nom, prénom = :prenom, email = :email, password = :password WHERE id = :id');
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':nom', $data['nom']);
        $this->db->bind(':prenom', $data['prenom']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function delete($id)
    {
        $this->db->query('DELETE FROM user WHERE id = :id');
        $this->db->bind(':id', $id);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    //extra
    public function login($email, $password)
    {
        $this->db->query('SELECT * FROM user WHERE email = :email');
        $this->db->bind(':email', $email);
        $user = $this->db->single();


        if ($user) {
            // Si l'utilisateur existe avec cet email, vérifiez le mot de passe
           // if (password_verify($password, $user['password'])) {
                // Mot de passe correct, retournez les informations de l'utilisateur
                return $user;
          //  }
        }

        // Si l'utilisateur n'existe pas ou le mot de passe est incorrect, retournez null
        return null;
    }
}