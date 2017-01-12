<h1>Page de gestion des utilisateurs</h1>

<div class="panel panel-default">

    <?php

    ?>
    <!-- Table -->
    <div class="panel-heading">Utilisateurs</div>
    <div class="panel-body">
        <table class="table">
            <thead>
                <th>Login</th>
                <th>Email</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th class="text-center">Actif</th>
                <th class="text-center">Bannir</th>
                <th class="text-center">Administrateur</th>

                <?php

                 foreach ($params as $i) {
                     echo '<tr>';
                     echo '<td>' . $i['nickname'] . '</td>';
                     echo '<td>' . $i['email'] . '</td>';
                     echo '<td>' . $i['name'] . '</td>';
                     echo '<td>' . $i['firstName'] . '</td>';
                     echo '<td class="text-center"> ' . ($i['actif'] ? 'Oui':'Non') . '</td>';
                     echo '<td class="text-center"><a href="Admin/deleteUser/' . $i['nickname'] . '"><i class="glyphicon glyphicon-remove text-danger"  aria-hidden="true"></i></a></td>';
                     if ($i['admin'] != 1)
                        echo '<td class="text-center"><a href="Admin/promoteAdmin/' . $i['nickname'] . '"><i class="glyphicon glyphicon-user text-danger"  aria-hidden="true"></i></a></td>';
                     else
                         echo '<td class="text-center"><a href="Admin/demoteAdmin/' . $i['nickname'] . '"><i class="glyphicon glyphicon-user"  aria-hidden="true"></i></a></td>';
;
                     echo '</tr>';
                 }

                ?>
            </thead>
        </table>
    </div>
</div>