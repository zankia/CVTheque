    <div id="selector" class="col-sm-4 col-sm-offset-8 col-md-3 col-md-offset-9 navbar-fixed-top">
        <h2>Div de controle</h2>
    </div>
    <div class="row">
    <?php
    if ($_SESSION['admin'] ||$_SESSION['consultant']) {

        echo ' 
        <div class="panel-heading">Liste des CV</div>
            <form class="navbar-form navbar-left" role="search" method="get" action="Stream/searchCV">
                <div class="form-group">
                    <select name="skill"  size="2" multiple>
                    ';
            foreach ($params['data'] as $cv)
                foreach($cv['skills'] as $skill) {
                    echo '<option value ="'.$skill['name'] .'" >';
                        echo '<button type="button" class="btn btn-default">' . $skill['name'] . '</button>';
                }
         echo'  
                        </option>
                    </select>
                </div>
                <button type="submit" class="btn btn-default">Rechercher</button>
                <a href="Stream/CVList">Reinitialier la recherche</a>
            </form>';
    }
    $i = 0;
    foreach($params['data'] as $cv) {
        echo '
        <div id="CV_' . $cv['id'] . '" role="button" class="CV col-sm-8 col-md-3">
            <h4>' . $cv['firstName'] . ' ' . $cv['name'] . '';
            if ($_SESSION['admin'] || !$_SESSION['consultant'])
                echo ' <a href="./CV/deleteCV/' . $cv['id'] . '" class="glyphicon glyphicon-remove alert-danger"></a>';
        echo ' <a href="./CV/modifyCV/'. $cv['id']. '" class="glyphicon glyphicon-pencil"></a>';
        echo '</h4>
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
