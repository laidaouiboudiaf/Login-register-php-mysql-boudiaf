<?php

class Sessions extends Controller
{

    public function sessions_new()
    {
        $this->loader->load('sessions_new', ['title' => 'Se connecter']);
    }

    public function sessions_create()
    {
        try {
            $loginUser = filter_input(INPUT_POST, 'loginUser');
            /*verification si les pseudos sont identiques*/
            $user = $this->users->user_from_loginUser($loginUser);
            if ($user === null) throw new Exception("Ce compte n'existe pas.");
            /*verification si les motpasses sont identiques*/
            /*if (!$user->password_is_valid($password) */ /*  erreur apres l'utilisation de check password */
            //var_dump($User);
            $this->sessions->login($user);
            $this->loader->load('moncompte', ['title' => 'Mon compte']);
        } catch (Exception $e) {
            $data = ['error' => $e->getMessage(), 'title' => 'Se connecter'];
            $this->loader->load('sessions_new', $data);
        }
    }

    public function sessions_destroy()
    {
        $this->sessions->logout();

        header("Location: /index.php");
    }
}