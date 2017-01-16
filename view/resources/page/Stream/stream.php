        <h1>Page Principale</h1>
        <h3>Bonjour <?php echo $_SESSION["firstName"] ? $_SESSION["firstName"] . ' ' . $_SESSION["name"] : $_SESSION["nickname"] ?>!</h3>


        <?php if($_SESSION["admin"] == 1)
                echo '<h4>Vous êtes administrateur.</h4> <a href="Admin">Acceder à la page d\'administration</a>';
            else {
                echo'<ul class="nav nav-pills nav-stacked">';
                    echo'<li role="presentation" class="active"><a href="#">Ajouter un CV</a></li>';
                    echo'<li role="presentation"><a href="#">Modifier un CV</a></li>';
                    echo'<li role="presentation"><a href="#">Supprimer un CV</a></li>';
                echo '</ul>';
            }?>
        <p><a href="Stream/deconnexion">Se deconnecter</a></p>
