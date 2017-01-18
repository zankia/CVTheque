        <header>

            <nav class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand navbar-left" href="#"><img alt="Logo CVTheque" src="img/logo.png"</a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="javascript:scrollTo('#presentation')">Qui sommes nous ?</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Nos services <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Déposer un CV</a></li>
                                    <li><a href="#">Chercher un CV</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li class="dropdown-header">En savoir plus...</li>
                                    <li><a href="#">Nous contacter</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div id="account" class="account">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a title="Se Connecter" class="btn btn-primary navbar-btn" href="#" data-toggle="modal" data-target="#connect" role="button"><span class="glyphicon glyphicon-log-in"></span>  Se connecter</a></li>
                                <li><a class="btn btn-link navbar-btn" href="#" data-toggle="modal" data-target="#sign" role="button">S'inscrire</a></li>
                            </ul>
                        </div>
                    </div><!--/.nav-collapse -->
                </div>
            </nav>

            <div id="connect" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h2 class="modal-title">Connexion</h2>
                        </div>
                        <div class="modal-body">
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
                    </div>
                </div>
            </div>

            <div id="sign" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h2 class="modal-title">Inscription</h2>
                        </div>
                        <div class="modal-body">
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
                    </div>
                </div>
            </div>

        </header>
