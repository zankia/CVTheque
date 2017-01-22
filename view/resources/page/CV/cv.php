    <div id="formulaire" class="container">
        <form action="CV/addCV" method="post" enctype="multipart/form-data" class="form-horizontal">
            <div class="form-group" >
                <label for="nom" class="col-2 col-form-label">Nom</label>
                <input type="text" name="nom" id="nom" class="form-control" placeholder="Entrez votre nom" required>
            </div>
            <div class="form-group">
                <label for="prenom" class="col-2 col-form-label">Prenom</label>
                <input type="text" name="prenom" id="prenom" class="form-control" placeholder="Entrez votre prenom" required>
            </div>
            <div class="form-group">
                <label for="numsecu" class="col-2 col-form-label">Numéro de sécurité sociale</label>
                <input type="text" name="numsecu" id="numsecu" class="form-control" placeholder="Entrez votre N° de sécu" required>
            </div>
            <!-- <input type="text" name="//TODO Assurance professionnelle :" id="assurancepro"> -->
            <div class="form-group">
                <label for="telP" class="col-2 col-form-label">Tel portable</label>
                <input type="tel"  name="telP" id="telP" class="form-control" placeholder="Entrez votre N° de téléphone portable" required>
            </div>
            <div class="form-group">
                <label for="telF" class="col-2 col-form-label">Tel fixe</label>
                <input type="tel"  name="telF" id="telF" required class="form-control" placeholder="Entrez votre N° de téléphone fixe">
            </div>
            <div class="form-group">
                <label for="adresse" class="col-2 col-form-label">Adresse</label>
                <input type="text" name="adresse" id="adresse" class="form-control" placeholder="Entrez votre adresse">
            </div>
            <div class="form-group">
                <label for="codePostal" class="col-2 col-form-label">Code postal</label>
                <input type="number" name="codePostal" id="codePostal" class="form-control" placeholder="Entrez votre adresse">
            </div>
            <div class="form-group">
                <label for="ville" class="col-2 col-form-label">Ville</label>
                <input type="text" name="ville" id="ville" class="form-control" placeholder="Entrez votre ville">
            </div>
            <div class="form-group">
                <label class="control-label" for="photo">Photo</label>
                <input type="file" name="photo" id="photo">
            </div>
            <div class="form-group">
                <label for="pdf" class="col-2 col-form-label">Votre CV (en .pdf)</label>
                <input type="file" name="pdf" id="pdf">
            </div>
            <div class="form-group">
                <label for="remarques" class="col-2 col-form-label">Remarques</label>
                <input type="text" name="remarques" id="remarques">
            </div>
            <div class="form-group">
                <input type="submit" value="Soumettre" name="submit" class="btn btn-primary">
            </div>
        </form>
    </div>
