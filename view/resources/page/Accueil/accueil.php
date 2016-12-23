        <div>
            <h1>Bienvenue sur CVTheque</h1>
        </div>

        <div>
            <h2>Veuillez vous connecter</h2>
            <form class="form-inline" action="Accueil/connexion" method="post">
            <div class="form-group">
                <label class="sr-only" for="id">Nom d'utilisateur ou mail</label>
                <input id="id" name="id" class="form-control" placeholder="Nom d'utilisateur ou mail" required>
            </div>
            <div class="form-group">
                <label class="sr-only" for="passwd">Mot de passe</label>
                <input type="password" id="passwd" name="passwd" class="form-control" placeholder="Mot de passe" required>
            </div>
            <button type="submit" name="validate" class="btn btn-primary">Se connecter</button>
            <button type="submit" name="recover" class="btn btn-default">Mot de passe oublié</button>
            </form>
        </div>


        <h3>Si vous n'avez pas encore de compte, vous pouvez vous inscrire</h3>
        <button class="btn btn-primary" data-toggle="modal" data-target="#sign">S'inscrire</button>

        <div id="sign" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h2 class="modal-title">Inscription</h2>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" action="Accueil/inscription" method="post">
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="name">Nom</label>
                                <div class="col-sm-9">
                                    <input id="name" name="name" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="firstname">Prenom</label>
                                <div class="col-sm-9">
                                    <input id="firstname" name="firstname" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="id">Nom d'utilisateur*</label>
                                <div class="col-sm-9">
                                    <input id="id" name="id" class="form-control" pattern="[A-Za-z0-9]{3,24}" title="Au moins 3 caractères, pas de caractères spéciaux ni d'espacement" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="passwd">Mot de passe*</label>
                                <div class="col-sm-9">
                                    <input type="password" id="passwd" name="passwd" class="form-control" pattern=".{8,}" title="Au moins 8 caractères" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="passwdconf">Confirmation*</label>
                                <div class="col-sm-9">
                                    <input type="password" id="passwdconf" name="passwdconf" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="mail">Adresse mail*</label>
                                <div class="col-sm-9">
                                    <input type="email" id="mail" name="mail" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-3">
                                    <p>* : champs requis</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <input type="submit" class="btn btn-primary" value="S'inscrire">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <p class="col-md-offset-2">CVTheque est une bibliothèque de CV</p>
        </div>
