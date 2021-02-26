# Login-register-php-mysql-boudiaf
Logiciel utilise 
Wamp : est un logiciel très pratique permettant d’installer un serveur sur son propre ordinateur 
phpMyAdmin est livré avec Wamp ,un des outils permettant de manipuler une base de données MySQL.
Installation

1.	Telecharger le Wamp 
2.	Rendez-vous sur https://sourceforge.net/projects/wampserver/files/WampServer%203/WampServer%203.0.0/readme.txt/download.
3.	Apres télécharger le fichier, installer le fichier 
4.	Démarrer le logiciel et démarrer ses services.

Acceder à la base de donnees via phpMyAdmin 
PhpMyAdmin est alors prétendument accessible via l'url [http://localhost/phpmyadmin](http://localhost/phpmyadmin)
---------------------
Le modele MVC

Les URL :
▶ users/users_new : formulaire de création d’un utilisateur
▶ users/users_create : création d’un utilisateur
▶ sessions/sessions_new : formulaire de connexion
▶ sessions/sessions_create : demande de connexion
▶ sessions/sessions_destroy : déconnexion
Deux contrôleurs :
▶ Users : gestion des utilisateurs
▶ Sessions : gestion des sessions
Trois vues :
▶ moncompte.php : la page afficher après la connexion d'utilisateur 
▶ users_new : formulaire d’inscription
▶ sessions_new : formulaire de connexion
deux  models :
▶ Sessions_model : Conserver des informations d’un même client entre
les pages
▶ Users_model : stocker et récupérer les données entrées par les utilisateurs dans la base de données 
------

Comment utiliser ce projet?
Créez une base de données et une table à l'intérieur de cette base de données (le code de création de la table se trouve au-dessous)
Créez ou copier toutes les pages mentionnées dans le repo.
Dans le fichier model ( /core), ouvrir le fichier model.php et entrez votre utilisateur de base de données, votre mot de passe et le nom de la base de données dans la fonction init() .

Les tableaux sont implimenté sur la base de donnees MariaDb

Structure de la table `utilisateurs`
--
DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `loginUser` varchar(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `birth` date NOT NULL,
  `mailUser` varchar(20) NOT NULL,
  `password` text NOT NULL
)
	

