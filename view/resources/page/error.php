        <div class="row bg-danger">
            <h1 class="col-xs-offset-1 col-sm-offset-1 col-md-offset-1">Erreur <small><?php
switch($params) {
case 10:
    echo 'Impossible de se connecter à la base de données';
    break;
case 11:
    echo 'Mauvais nom d\'utilisateur ou mot de passe';
    break;
case 12:
    echo 'Les mots de passe indiqués ne correspondent pas';
    break;
case 13:
    echo 'Nom d\'utilisateur ou email déjà prit';
    break;
case 14:
    echo 'Base de données';
    break;
case 15:
    echo 'Erreur : Cette compétence existe déjà !';
    break;
case 16:
    echo 'Erreur : Vous n\'êtes pas administrateur, le piratage c\'est mal !';
    break;
case 404:
    echo 'Page introuvable';
    break;
case 3673:
    echo 'Impossible d\'uploader le fichier';
    break;
case 3674:
    echo 'Fichier malicieux';
    break;
case 3675:
    echo 'Fichier vide';
    break;
case 3758:
    echo 'Formulaire incomplet';
    break;
case 3759:
    echo 'Numéro de sécurité sociale invalide';
    break;
case 3760:
    echo 'Numéro de téléphone invalide';
    break;
case 3761:
    echo 'Code postal invalide';
    break;
default:
    echo 'Non gérée';
    break;
}?></small></h1>
        </div>
