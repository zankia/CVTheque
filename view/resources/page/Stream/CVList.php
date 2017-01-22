<?php if($_SESSION['consultant'] || $_SESSION['admin']) { ?>
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
<?php } ?>
    <div class="row">
    <?php

    $i = 0;
    foreach($params['data'] as $cv) {
        echo '
        <div id="CV_' . $cv['id'] . '" class="CV col-sm-8 col-md-3">
            <h4>' . $cv['firstName'] ? $cv['firstName'] . ' ' . $cv['name'] : $cv['nickname'] . '';
            if ($_SESSION['admin'] || !$_SESSION['consultant'])
                echo ' <a href="./CV/deleteCV/' . $cv['id'] . '" class="glyphicon glyphicon-remove alert-danger"></a>';
        echo ' <a href="./CV/modifyCV/'. $cv['id']. '" class="glyphicon glyphicon-pencil"></a>';
        $pdfLink = 'img/pdfViewer.php?name=' . $cv['id'];
        echo '</h4>
            <a href="' . $pdfLink . '" data-toggle="modal" data-target="#pdfModal" ><img class="col-xs-12 col-sm-8 col-md-8" src="' . $pdfLink  . '&img=true"></a>';
        foreach($cv['skills'] as $skill) {
            echo '
            <button type="button" class="btn btn-default">' . $skill['name'] . '</button>';
        }
        echo '
            <div class="col-xs-12 col-sm-12 col-md-12">
                <p>' . $cv['comment'] . '</p>
            </div>
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
    <div id="pdfModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <iframe></iframe>
            </div>
        </div>
    </div>
