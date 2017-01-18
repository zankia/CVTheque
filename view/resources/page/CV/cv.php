        <h1>Uploader un CV</h1>
          <h3>Bonjour <?php echo $_SESSION["firstName"] ? $_SESSION["firstName"] . ' ' . $_SESSION["name"] : $_SESSION["nickname"] ?>!</h3>
             <form action="CV/ajouterCV" method="post" enctype="multipart/form-data">
                 Nom :                       <input type="text" name="nom" id="nom" required>*<br/>
                 Prenom :                    <input type="text" name="prenom" id="prenom" required>*<br/>
                 Numéro de sécurité sociale :<input type="text" name="numsecu" id="numsecu" required>*<br/>
                 <!-- <input type="text" name="//TODO Assurance professionnelle :" id="assurancepro"> -->
                 Tel portable :              <input type="tel"  name="telP" id="telP" required>*<br/>
                 Tel fixe :                  <input type="tel"  name="telF" id="telF"><br/>
                 Adresse :                   <input type="text" name="adresse" id="adresse"><br/>
                 CP :                        <input type="number" name="codePostal" id="codePostal"><br/>
                 Ville :                     <input type="text" name="ville" id="ville"><br/>
                 Photo :                     <input type="file" name="photo" id="photo"><br/>
                 Votre CV (en pdf) :         <input type="file" name="pdf" id="pdf"><br/>
                 Domaine d'activité :        <select name="domaine"><br/>
                                                 <option value="agro"selected>Agroalimentaire</option>
                                                 <option value="banque">Banques / Assurances</option>
                                                 <option value="btp">BTP</option>
                                                 <option value="chimie">Chimie</option>
                                                 <option value="commerce">Commerce</option>
                                                 <option value="communication">Communication</option>
                                                 <option value="electro">Electronique / Electricité</option>
                                                 <option value="etude">Études et conseils</option>
                                                 <option value="pharma">Industrie pharmaceutique</option>
                                                 <option value="info">Informatique / Télécommunications</option>
                                                 <option value="machine">Machines et équipements</option>
                                                 <option value="metal">Métallurgie</option>
                                                 <option value="service">Services aux entreprises</option>
                                                 <option value="text">Textile</option>
                                                 <option value="logistique">Transports et logistique</option>
                                            </select><br/>
                 Remarques :                <input type="remarques" name="remarques" id="remarques"><br/>
                                            <input type="submit" value="Soumettre" name="submit" class="btn btn-primary"><br/>
            </form>
        <p>* : Ces champs sont obligatoires</p>