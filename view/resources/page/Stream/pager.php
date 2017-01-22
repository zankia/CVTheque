    <nav class="navbar"aria-label="Page navigation">
        <ul class="pagination nav navbar-nav">
            <li><a href="Stream/CVList/<?php echo $params['now'] -1 ?>" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
            <?php
            for($i = 1; $i <= $params['count']; ++$i) {
                echo '
                <li';

                if($i == $params['now'])
                    echo ' class="active"';

                echo '><a href="Stream/CVList/' . $i . '">' . $i . '</a></li>';
            }
            ?>
            <li><a href="Stream/CVList/<?php echo $params['now'] + 1 ?>" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
        </ul>
        <form class="navbar-form navbar-left" role="search" method="get" action="Stream/searchCV">
            <div class="form-group">
                <select class="form-control" name="skill[]" multiple>
<?php
        foreach ($params['skillList'] as $skill)
            echo "\t\t\t\t\t" . '<option value="' . $skill['id'] . '">'. $skill['name'] . "</option>\n";
?>
                </select>
            </div>
            <button type="submit" class="btn btn-default">Rechercher</button>
            <a href="Stream/CVList">Réinitialiser</a>
        </form>
    </nav>

