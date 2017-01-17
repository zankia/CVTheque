    <nav aria-label="Page navigation">
        <ul class="pagination">
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
    </nav>

