    <div class="container">
        <h2>Connexion</h2>
        <form class="form-horizontal" action="Home/login" method="post">
            <div class="form-group">
                <label class="col-sm-3 control-label" for="id">Nom d'utilisateur ou e-mail</label>
                <div class="col-sm-9">
                    <input id="id" name="id" placeholder="Nom d'utilisateur ou e-mail" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="passwd">Mot de passe</label>
                <div class="col-sm-9">
                    <input type="password" id="passwd" name="passwd" class="form-control" placeholder="Mot de passe">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                    <button type="submit" name="validate" class="btn btn-primary">Se connecter</button>
                    <button type="submit" name="recover" class="btn btn-default">Mot de passe oublié</button>
                </div>
            </div>
        </form>
    </div>
