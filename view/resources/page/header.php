        <header>

            <nav class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand navbar-left" href="#">CVThèque by zankia</a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="javascript:scrollTo('#presentation')">Qui sommes nous ?</a></li>
<?php if(isset($_SESSION['admin']) && ($_SESSION['admin'] || $_SESSION['consultant'])) { ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Nos services <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="CV">Déposer un CV</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li class="dropdown-header">En savoir plus...</li>
                                    <li><a href="mailto:zankia16@gmail.com">Nous contacter</a></li>
                                </ul>
                            </li>
<?php }
 if(isset($_SESSION['admin']) && $_SESSION['admin']) { ?>
                            <li><a href="Admin">Administration</a></li>
<?php } ?>
                        </ul>
                        <div id="account" class="account">
                            <ul class="nav navbar-nav navbar-right">
<?php if(isset($_SESSION['nickname'])) { ?>
                                <li><p class="navbar-text">Bonjour <?php echo $_SESSION['firstName'] ? $_SESSION['firstName'] . ' ' . $_SESSION['name'] : $_SESSION['nickname'] ?>!</p></li>
                                <li><a title="Se déconnecter" id="connection" class="btn btn-primary navbar-btn" href="Stream/deconnexion" role="button"><span class="glyphicon glyphicon-log-out"></span>  Se déconnecter</a></li>
<?php } else { ?>
                                <li><a title="Se Connecter" id="connection" class="btn navbar-btn" href="Home/loginForm" data-toggle="modal" data-target="#connect" role="button"><span class="glyphicon glyphicon-log-in"></span>  Se connecter</a></li>
                                <li><a id="register" class="btn btn-link navbar-btn" href="Home/registerForm" data-toggle="modal" data-target="#sign" role="button">S'inscrire</a></li>
<?php } ?>
                            </ul>
                        </div>
                    </div>
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
                                    <label class="col-sm-3 control-label" for="password">Mot de passe</label>
                                    <div class="col-sm-9">
                                        <input type="password" id="password" name="passwd" class="form-control" placeholder="Mot de passe">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-9">
                                        <button id="connect-popup" type="submit" name="validate" class="btn btn-default"><span class="glyphicon glyphicon-log-in"></span>  Se connecter</button>
                                        <button type="submit" name="recover" class="btn btn-link">Mot de passe oublié</button>
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
                                    <label class="col-sm-3 control-label" for="idUser">Nom d'utilisateur*</label>
                                    <div class="col-sm-9">
                                        <input id="idUser" name="id" class="form-control" pattern="[A-Za-z0-9]{3,24}" title="Au moins 3 caractères, pas de caractères spéciaux ni d'espacement" required>
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
                                        <input type="email" id="mail" name="mail" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-3">
                                        <p>* : champs requis</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-9">
                                        <input type="submit" class="btn btn-default" value="S'inscrire">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </header>
