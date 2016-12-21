    <div id="header">
        <h1>Bienvenue sur CVTheque</h1>
    </div>

    <div class="table">
    <div id="login">
        <h2>Veuillez vous connecter</h2>
        <form action="Accueil/connexion" method="post">
        <label for="id">Nom d'utilisateur ou mail </label><input id="id" name="id" required><br />
        <label for="passwd">Mot de passe </label><input type="password" id="passwd" name="passwd"><br />
        <input type="submit" name="validate" value="Se connecter"><br />
        <input type="submit" name="recover" value="Mot de passe oublié">
        </form>
    </div>


    <h3>Si vous n'avez pas encore de compte, vous pouvez vous inscrire</h3>
    <button onclick="showDiv('signon')"> S'inscrire </button>

    <div id="signon">
        <div id="fade"></div>
        <div class="popup_block">
            <div class="popup">
                <button onclick="hideDiv('signon')">X</button>
                <h3> Ecdfzf </h3>
                <form action="Accueil/inscription" method="post">
                <label for="name">Nom </label><input id="name" name="name"><br />
                <label for="firstname">Prenom </label><input id="firstname" name="firstname"><br />
                <label for="id">Nom d'utilisateur* </label><input id="id" name="id" pattern="[A-Za-z0-9]{3,24}" title="Au moins 3 caractères, pas de caractères spéciaux ni d'espacement" required><br />
                <label for="passwd">Mot de passe* </label><input type="password" id="passwd" name="passwd" pattern=".{8,}" title="Au moins 8 caractères" required><br />
                <label for="passwdconf">Confirmation* </label><input type="password" id="passwdconf" name="passwdconf" required><br />
                <label for="mail">Adresse mail* </label><input type="email" id="mail" name="mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"required><br />
                <p>* : champs requis</p>
                <input type="submit" value="S'inscrire">
                </form>
                </form>
            </div>
        </div>
        </div>
    </div>

    </div>

    <div id="presentation">
        <p> CVTheque est un aggrégateur de flux qui vous permettra de réunir tout ... </p>
    </div>

    <script language="javascript" type="text/javascript">

        function hideDiv(id) {
            document.getElementById(id).style.display = "none";
            document.getElementById(id).style.visibility = "hidden";
        }

        function showDiv(id) {
            document.getElementById(id).style.display = "block";
            document.getElementById(id).style.visibility = "visible";
        }
    </script>
