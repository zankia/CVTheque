<?php
switch($params) {
case 10:
    echo '<h1>Erreur : Impossible de se connecter à la base de données</h1>';
    break;
case 11:
    echo '<h1>Erreur : Mauvais nom d\'utilisateur ou mot de passe</h1>';
    break;
case 12:
    echo '<h1>Erreur : Les mots de passe indiqués ne correspondent pas</h1>';
    break;
case 13:
    echo '<h1>Erreur : Nom d\'utilisateur ou email déjà prit</h1>';
    break;
case 14:
    echo '<h1>Erreur : Base de données</h1>';
    break;
case 404:
    echo '<h1>404 : Not Found</h1>';
    break;
default:
    echo '<h1>Erreur : Non gérée</h1>';
    break;
}
