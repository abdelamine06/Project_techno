<?php


class UsersController extends Controller
{
    /**
     * la methode qui fait l'inscription.
     */
    public function register()
    {
        // voir es ce que c'est une requet pour s'inscrir et mettre des valeurs dans le formulaire d'inscription
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // pour filtrer tous les

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'nom' => trim($_POST['nom']),
                 'prenom' => trim($_POST['prenom']),
                  'email' => trim($_POST['email']),
                   'password' => trim($_POST['password']),
                    'confirm' => trim($_POST['confirm']),
                      'error_mail' => '',
                        'error_nom' => '',
                          'error_prenom' => '',
                           'error_password' => '',
                           'error_confirm' => '',
            ];
            // valider les champs

            if (empty($data['email'])) {
                $data['error_mail'] = 'Svp introduire votre mail';
            } elseif ($this->userModel->findUserByMail($data['email'])) {
                $data['error_mail'] = 'Le mail existe déja introduire un autre SVP';
            }

            if (empty($data['nom'])) {
                $data['error_nom'] = 'Svp introduire votre nom';
            }
            if (empty($data['prenom'])) {
                $data['error_prenom'] = 'Svp introduire votre prenom';
            }

            if (empty($data['password'])) {
                $data['error_password'] = 'Svp introduire votre password';
            } else {
                if (strlen($data['password']) < 6) {
                    $data['error_password'] = 'password de 6 char à plus';
                }
            }

            if (empty($data['confirm'])) {
                $data['error_confirm'] = 'Svp confirmer votre password';
            } elseif ($data['password'] != $data['confirm']) {
                $data['error_password'] = 'Svp introduire le meme password';
            }
            // encrypté le password
            $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
            if (empty($data['error_nom']) && empty($data['error_prenom']) && empty($data['error_mail']) && empty($data['error_password']) && empty($data['error_confirm'])) {
                if ($this->userModel->register($data)) {
                    flash('register_success', "Vous etes inscrit, vous pouvez s'authentifier à partir de maintenant!");
                    sendMail($data['email']);
                    header('location: '.URLROOT.'/users/login');
                } else {
                }
            }

            $this->render('register', $data);
        } else {
            if (($_SERVER['REQUEST_METHOD'] != 'POST')) {
                $data = [
                 'error_mail' => '',
                        'error_nom' => '',
                          'error_prenom' => '',
                           'error_password' => '',
                           'error_confirm' => '',
            ];
                $this->render('register', $data);
            }
        }
    }

    /**
     * la methode de login.
     */
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // pour filtrer tous les
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            // tabelaux de donnée quand peut recuperer de formulaire d'autthentification
            $data = [
                  'email' => trim($_POST['email']),
                   'password' => trim($_POST['password']),
                   'error_mail' => '',
                        'error_password' => '',
            ];
            // valider les champs

            if (empty($data['email'])) {
                $data['error_mail'] = 'Svp introduire votre mail';
            } else {
                if ($this->userModel->findUserByMail($data['email'])) {
                } else {
                    $data['error_mail'] = 'Aucun utilisateur avec le mail introduie';
                }
            }

            if (empty($data['password'])) {
                $data['error_password'] = 'Svp introduire votre password';
            }

            if (empty($data['error_mail']) && empty($data['error_password'])) {
                // essai de se connecter
                $connect = $this->userModel->login($data['email'], $data['password']);
                if ($connect) {
                    //creer la session de l'utilisateur
                    $this->createUserSession($connect);
                } else {
                    $data['error_password'] = 'password inccorect';
                    $this->render('login', $data);
                }
            }
            $this->render('login', $data);
        } elseif (($_SERVER['REQUEST_METHOD'] != 'POST')) {
            $data = [
                   'error_mail' => '',
                        'error_password' => '',
            ];
            $this->render('login', $data);
        }
    }

    /**
     * la methode de creation des sessions utilisateur.
     */
    public function createUserSession($user)
    {
        $_SESSION['user_id'] = $user->id;
        $_SESSION['user_email'] = $user->email;
        $_SESSION['user_nom'] = $user->nom;
        $_SESSION['user_prenom'] = $user->prenom;
        header('location: '.URLROOT.'/posts/index');
    }

    /**
     * la methode de lougout une fois on etait on login.
     */
    public function logout()
    {
        unset($_SESSION['user_id']);
        unset($_SESSION['user_nom']);
        unset($_SESSION['user_prenom']);
        unset($_SESSION['user_email']);
        session_destroy();
        header('location: '.URLROOT.'/users/login');
    }
}
