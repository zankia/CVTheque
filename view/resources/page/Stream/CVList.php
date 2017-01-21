    <div id="selector" class="col-sm-4 col-sm-offset-8 col-md-3 col-md-offset-9 navbar-fixed-top">
        <h2>Envoyer un mail</h2>
        <form action="Stream/sendMail" method="POST">
            <div class="form-group">
                <label>idCV</label>
                <input type="text" class="form-control" name="idCV[]">
            </div>
            <div class="form-group">
                <label for="mail">Contenu du message</label>
                <textarea class="form-control" id="mail" name="mail" rows=10></textarea>
            </div>
            <button type="submit" class="btn btn-default">Envoyer</button>
        </form>
    </div>
    <div class="row">
    <?php

    $i = 0;
    foreach($params['data'] as $cv) {
        echo '
        <div id="CV_' . $cv['id'] . '" role="button" class="CV col-sm-8 col-md-3">
            <h4>' . $cv['firstName'] . ' ' . $cv['name'] . '</h4>
            <img class="col-xs-12 col-sm-8 col-md-8" src="img/pdfViewer.php?name=' . $cv['id']  . '">';
        foreach($cv['skills'] as $skill) {
            echo '<button type="button" class="btn btn-default">' . $skill['name'] . '</button>';
        }
        echo '
        </div>';
        if(++$i == 3) {
            $i = 0;
            echo '
    </div>
    <div class="row">';
        }

    }
    ?>
    </div>
