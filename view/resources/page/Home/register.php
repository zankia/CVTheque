    <div class="container">
        <h2>Inscription</h2>
        <form class="form-horizontal" action="Home/register" method="post">
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
