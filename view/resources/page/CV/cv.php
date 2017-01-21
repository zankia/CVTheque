        <h1>Uploader un CV</h1>
          <h3>Bonjour <?php echo $_SESSION["firstName"] ? $_SESSION["firstName"] . ' ' . $_SESSION["name"] : $_SESSION["nickname"] ?>!</h3>
             <form action="CV/addCV" method="post" enctype="multipart/form-data" class="form-horizontal">
                 <div class="container" id="formulaire">
                     <div class="form-group row" >
                         <label for="nom" class="col-2 col-form-label">Nom</label>
                         <input type="text" name="nom" id="nom" class="form-control" placeholder="Entrez votre nom" required><br/>
                     </div>
                     <div class="form-group row">
                         <label for="prenom" class="col-2 col-form-label">Prenom</label>
                         <input type="text" name="prenom" id="prenom" class="form-control" placeholder="Entrez votre prenom" required><br/>
                     </div>
                     <div class="form-group row">
                         <label for="numsecu" class="col-2 col-form-label">Numéro de sécurité sociale</label>
                         <input type="text" name="numsecu" id="numsecu" class="form-control" placeholder="Entrez votre N° de sécu" required><br/>
                     </div>
                     <!-- <input type="text" name="//TODO Assurance professionnelle :" id="assurancepro"> -->
                     <div class="form-group row">
                         <label for="telP" class="col-2 col-form-label">Tel portable</label>
                         <input type="tel"  name="telP" id="telP" class="form-control" placeholder="Entrez votre N° de téléphone portable" required><br/>
                     </div>
                     <div class="form-group row">
                         <label for="telF" class="col-2 col-form-label">Tel fixe</label>
                         <input type="tel"  name="telF" id="telF" required class="form-control" placeholder="Entrez votre N° de téléphone fixe"><br/>
                     </div>
                     <div class="form-group row">
                         <label for="adresse" class="col-2 col-form-label">Adresse</label>
                         <input type="text" name="adresse" id="adresse" class="form-control" placeholder="Entrez votre adresse"><br/>
                     </div>
                     <div class="form-group row">
                         <label for="codePostal" class="col-2 col-form-label">Code postal</label>
                         <input type="number" name="codePostal" id="codePostal" class="form-control" placeholder="Entrez votre adresse"><br/>
                     </div>
                     <div class="form-group row">
                         <label for="ville" class="col-2 col-form-label">Ville</label>
                         <input type="text" name="ville" id="ville" class="form-control" placeholder="Entrez votre ville"><br/>
                     </div>
                     <div class="form-group row">
                         <label class="control-label" for="photo">Photo</label>
                         <input type="file" name="photo" id="photo"><br/>
                     </div>
                     <div class="form-group row">
                         <label for="pdf" class="col-2 col-form-label">Votre CV (en .pdf)</label>
                         <input type="file" name="pdf" id="pdf"><br/>
                     </div>
                     <div class="form-group row">
                         <label for="remarques" class="col-2 col-form-label">Remarques</label>
                         <input type="text" name="remarques" id="remarques"><br/>
                     </div>
                     <div class="form-group row">
                         <input type="submit" value="Soumettre" name="submit" class="btn btn-primary"><br/>
                 </div>
            </form>