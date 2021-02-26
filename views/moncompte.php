

<div class="center1">
    <a href="/index.php/users/c_user_show<?= $logged_user->loginUser ?>" class="btn btn-primary" role="button">Mes
        informations personnelles</a></br> </br>


    <tr>
        <td>
            Pseudo : <b><?= $logged_user->loginUser ?></b><br>
        </td>
    </tr>
    Prénom : <b><?= $logged_user->firstname ?></b><br>
    Nom : <b><?= $logged_user->lastname ?></b><br>
    Date de naissance : <b><?= $logged_user->birth ?></b><br>
    Adresse mail : <b><?= $logged_user->mailUser ?></b><br>
    </p>
    </br>
</div>


<div class="text-big">
    <p>Bonjour <span class="redText"><?= $logged_user->firstname . ' ' . $logged_user->lastname ?></span> <span> vous êtes connecté(e) !
    </p>
</div>
</br>
<style>

    .center1 {
        position: absolute;
        bottom: 30px;
        width: 50%;

        /* haut | droit | bas | gauche */
        margin: 4px 4em 3em ;
    }
</style>

