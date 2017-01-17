    <div class="row">
    <?php

    $i = 0;
    foreach ( $params['data'] as $cv ) {
        echo '
        <div class="col-sm-8 col-md-3">
            <h4>' . $cv['name'] . '<!-- ici le thumbnail du CV-->' . '</h4>';
        var_dump($cv);
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
