    <h1>Page Principale</h1>
    <h3>Bonjour <?php echo $_SESSION['firstName'] ? $_SESSION['firstName'] . ' ' . $_SESSION['name'] : $_SESSION['nickname'] ?>!</h3>
    <?php
    if($_SESSION['admin']) {
        echo '<h4>Vous êtes administrateur.</h4> <a href="Admin">Acceder à la page d\'administration</a>';
    } else {?>

    <ul class="nav nav-pills nav-stacked">
       <li role="presentation" class="active"><a href="./CV/">Ajouter un CV</a></li>
       <li role="presentation"><a href="./Stream/CVList">Modifier un CV</a></li>
       <li role="presentation"><a href="./Stream/CVList">Supprimer un CV</a></li>
    </ul>
    <?php
    }
    ?>

    <p><a href="Stream/deconnexion">Se deconnecter</a></p>
