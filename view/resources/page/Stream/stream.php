        <h1>Page Principale</h1>
        <h3>Bonjour <?php echo $_SESSION["firstName"] ? $_SESSION["firstName"] . ' ' . $_SESSION["name"] : $_SESSION["nickname"] ?>!</h3>
        <?php if($_SESSION["admin"] == 1) echo '<h4>Vous êtes administrateur. <a href="Admin">Administration</a>'?>
        <p><a href="./" onclick="document.cookie='SessionId=;expires=Wed; 01 Jan 1970;path=/'">Se deconnecter</a></p>
