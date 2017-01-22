<div id="formulaire" class="container">
    <form action="CV/addCV" method="post" enctype="multipart/form-data" class="form-horizontal">
        <div class="form-group" >
            <label for="nom" class="col-2 col-form-label">Nom</label>
            <input type="text" name="nom" id="nom" class="form-control" value="<?php if(isset($_SESSION['name'])) echo $_SESSION['name']?>" placeholder="Entrez votre nom" required>
        </div>
        <div class="form-group">
            <label for="prenom" class="col-2 col-form-label">Prenom</label>
            <input type="text" name="prenom" id="prenom" class="form-control" placeholder="Entrez votre prenom" value="<?php if(isset($_SESSION['firstname'])) echo $_SESSION['firstname']?>" required>
        </div>
        <div class="form-group">
            <label for="numsecu" class="col-2 col-form-label">Numéro de sécurité sociale</label>
            <input type="text" name="numsecu" id="numsecu" class="form-control" placeholder="Entrez votre N° de sécu" value="<?php if(isset($_SESSION['socialSecuNum'])) echo $_SESSION['socialSecuNum']?>" required>
        </div>
        <!-- <input type="text" name="//TODO Assurance professionnelle :" id="assurancepro"> -->
        <div class="form-group">
            <label for="telP" class="col-2 col-form-label">Tel portable</label>
            <input type="tel"  name="telP" id="telP" class="form-control" placeholder="Entrez votre N° de téléphone portable" value="<?php if(isset($_SESSION['mobile'])) echo $_SESSION['mobile']?>" required>
        </div>
        <div class="form-group">
            <label for="telF" class="col-2 col-form-label">Tel fixe</label>
            <input type="tel"  name="telF" id="telF" required class="form-control" placeholder="Entrez votre N° de téléphone fixe" value="<?php if(isset($_SESSION['phone'])) echo $_SESSION['phone']?>">
        </div>
        <div class="form-group">
            <label for="adresse" class="col-2 col-form-label">Adresse</label>
            <input type="text" name="adresse" id="adresse" class="form-control" placeholder="Entrez votre adresse" value="<?php if(isset($_SESSION['address'])) echo $_SESSION['address']?>">
        </div>
        <div class="form-group">
            <label for="codePostal" class="col-2 col-form-label">Code postal</label>
            <input type="number" name="codePostal" id="codePostal" class="form-control" placeholder="Entrez votre adresse" value="<?php if(isset($_SESSION['postcode'])) echo $_SESSION['postcode']?>">
        </div>
        <div class="form-group">
            <label for="ville" class="col-2 col-form-label">Ville</label>
            <input type="text" name="ville" id="ville" class="form-control" placeholder="Entrez votre ville" value="<?php if(isset($_SESSION['city'])) echo $_SESSION['city']?>">
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