<?php

class Model
{
    private static $static_db;
    protected $db;

    public function __construct()
    {
        $this->db = self::$static_db;
    }

    public static function init()
    {
        /*  global $config;*/

        try {
            // On se connecte � MySQL
            //
            v

        }
            /*On capture les exceptions si une exception est lanc�e et on affiche
             *les informations relatives � celle-ci*/
            // En cas d'erreur, on affiche un message et on arr�te tout

        catch (PDOException $e) {
            die('Erreur : ' . $e->getMessage());

        }
    }


    public function inject_data($data)
    {
        return $data;
    }
}

Model::init();

