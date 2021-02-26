<?php

class Sessions_model extends Model
{

    public function __construct()
    {
        /*’appel de session_start()   crée une session ou restaure la session trouvée sur le serveur via un identifiant*/
        session_start();
    }

    /*Le tableau $_SESSION permet de stocker des données de   la session.*/
    public function login($user)
    {
        $_SESSION['logged_user'] = $user;
    }

    public function logged_user()
    {
        if (session_id() === "") return null;
        if (!isset($_SESSION['logged_user'])) return null;
        return $_SESSION['logged_user'];
    }

    public function user_is_logged()
    {
        return $this->logged_user() !== null;
    }

    public function logout()
    {
        /*session_destroy() permet de supprimer la session.*/
        session_destroy();
    }

    public function inject_data($data)
    {
        $data['user_is_logged'] = $this->user_is_logged();
        $data['logged_user'] = $this->logged_user();
        return $data;
    }

}