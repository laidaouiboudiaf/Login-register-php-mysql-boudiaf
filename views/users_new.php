<div class="parent">
    <div class="row">
        <div class="row4">
            <div class="panel panel-default">
                <div class="bily">
                    <h2>S’inscrire  </h2>
                </div>
                </br>
                <div class="panel-body">
                    <?php if (isset($error)) { ?>
                        <div class="alert alert-warning" role="alert"><?= $error ?></div>
                    <?php } ?>
                    <form role="form" action="/index.php/users/c_users_create" method="post">
                        <fieldset>
                            <div class="row">
                                <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                                    <div class="form-group">
                                        <div class="input-group">
                      <span class="input-group-addon"> <i
                              class="glyphicon glyphicon-user"></i>
                      </span> <input class="form-control" placeholder="Pseudo"
                                     name="loginUser" type="text" autofocus required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                      <span class="input-group-addon"> <i
                              class="glyphicon glyphicon-user"></i>
                      </span> <input class="form-control" placeholder="Prenom "
                                     name="firstname" type="text" autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                      <span class="input-group-addon"> <i
                              class="glyphicon glyphicon-user"></i>
                      </span> <input class="form-control" placeholder="Nom de famille"
                                     name="lastname" type="text" autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                      <span class="input-group-addon"> <i
                              class="glyphicon glyphicon-envelope"></i>
                      </span> <input class="form-control" placeholder="Adresse mail"
                                     name="mailUser" type="text" autofocus>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                      <span class="input-group-addon"> <i
                              class="glyphicon glyphicon-calendar"></i>
                      </span> <input class="form-control" placeholder="Date de naissance"
                                     name="birth" type="date" autofocus>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="input-group">
                      <span class="input-group-addon"> <i
                              class="glyphicon glyphicon-lock"></i>
                      </span> <input class="form-control" placeholder="Mot de passe"
                                     name="password" type="password" value="" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <input type="submit" class="btn btn-pill btn-success"
                                               value="Valider mon inscription">
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

