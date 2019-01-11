<?php 

class User
{
    private $db;

    public function __construct()
    {
        $this->db = new Connexion();
    }

    /**
     * methode de model pour recuperer un mail pour validé les champs de formulaire en le comparant.
     */
    public function findUserByMail($email)
    {
        $this->db->prepared('SELECT * FROM users WHERE email = :email');
        $this->db->bind(':email', $email);
        $row = $this->db->single();

        //voir si le mail existe

        if ($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * methode de model pour pouvoir s'inscrire.
     */
    public function register($data)
    {
        $this->db->prepared('INSERT INTO users (nom, prenom, email, password) VALUE (:nom , :prenom , :email, :password)');
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

    /**
     * methode de model pour pouvoir s'authentifier.
     */
    public function login($email, $password)
    {
        $this->db->prepared('SELECT * FROM users WHERE email = :email');
        $this->db->bind(':email', $email);
        $row = $this->db->single();
        $hashed_pass = $row->password;
        if (password_verify($password, $hashed_pass)) {
            return $row;
        } else {
            return false;
        }
    }
}

?>


