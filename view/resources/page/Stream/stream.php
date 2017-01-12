        <h1>Page Principale</h1>
        <h3>Bonjour <?php echo $_SESSION["firstName"] ? $_SESSION["firstName"] . ' ' . $_SESSION["name"] : $_SESSION["nickname"] ?>!</h3>
        <?php if($_SESSION["admin"] == 1) echo '<h4>Vous êtes administrateur.</h4> <a href="Admin">Acceder à la page d\'administration</a>'?>
        <p><a href="Stream/deconnexion">Se deconnecter</a></p>
