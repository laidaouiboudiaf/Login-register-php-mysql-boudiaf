<?php


class Formulaire extends Controller
{
    public function index()
    {
//affichage de la page d'accueil, appel presentation juste en dessous
        $this->presentation();
    }

    public function presentation()
    {
//liste des evenements en bd et affichage complet
        $this->loader->load('users_new', ['title' => 'Uballers',
        ]);;
    }


}

