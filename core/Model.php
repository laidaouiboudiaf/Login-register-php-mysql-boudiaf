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
            // On se connecte à MySQL
            //
            v

        }
            /*On capture les exceptions si une exception est lancée et on affiche
             *les informations relatives à celle-ci*/
            // En cas d'erreur, on affiche un message et on arrête tout

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

