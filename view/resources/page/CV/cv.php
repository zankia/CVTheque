    <h1>Uploader un CV</h1>
    <h3>Bonjour <?php echo $_SESSION["firstName"] ? $_SESSION["firstName"] . ' ' . $_SESSION["name"] : $_SESSION["nickname"] ?>!</h3>
    <form action="CV/ajouterCV" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="pdf" id="pdf">
        <input type="submit" value="Uploader" name="submit" class="btn btn-primary">
    </form>