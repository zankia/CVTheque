    <h1>Page de gestion des utilisateurs</h1>

    <div class="panel panel-default">

        <?php

        ?>
        <!-- Table -->
        <div class="panel-heading">Utilisateurs</div>
        <form class="navbar-form navbar-left" role="search" method="get" action="Admin/searchUser">
            <div class="form-group">
                <input type="text" name="nickname" form-control" placeholder="Nom d'utilisateur">
            </div>
            <button type="submit" class="btn btn-default">Rechercher</button>
            <a href="Admin/userList">Reinitialier la recherche</a>
        </form>
        <div class="panel-body">
            <table class="table">
                <thead>
                    <th>Login</th>
                    <th>Email</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th class="text-center">Consultant</th>
                    <th class="text-center">Bannir</th>
                    <th class="text-center">Administrateur</th>
                    <th class="text-center">Modifier</th>

                    <?php

                     foreach ($params as $i) {
                         echo '<tr>';
                         echo '<td>' . $i['nickname'] . '</td>';
                         echo '<td>' . $i['email'] . '</td>';
                         echo '<td>' . $i['name'] . '</td>';
                         echo '<td>' . $i['firstName'] . '</td>';
                         if ($i['consultant'] == 1)
                             echo '<td class="text-center"><a href="Admin/disableUser/' . $i['nickname'] . '"><i class="glyphicon glyphicon-play-circle  text-success"  aria-hidden="true"></i></a></td>';
                         else
                             echo '<td class="text-center"><a href="Admin/enableUser/' . $i['nickname'] . '"><i class="glyphicon glyphicon-stop  text-danger"  aria-hidden="true"></i></a></td>';

                         echo '<td class="text-center"><a href="Admin/deleteUser/' . $i['nickname'] . '"><i class="glyphicon glyphicon-remove text-danger"  aria-hidden="true"></i></a></td>';
                         if ($i['admin'] != 1)
                            echo '<td class="text-center"><a href="Admin/promoteAdmin/' . $i['nickname'] . '"><i class="glyphicon glyphicon-user text-danger"  aria-hidden="true"></i></a></td>';
                         else
                             echo '<td class="text-center"><a href="Admin/demoteAdmin/' . $i['nickname'] . '"><i class="glyphicon glyphicon-user"  aria-hidden="true"></i></a></td>';
                         echo '<td class="text-center"> <button class="btn btn-primary glyphicon glyphicon-pencil" data-toggle="modal" data-target="#sign' . $i['nickname'] .'"></button>
    
                                <div id="sign' . $i['nickname'] .'" class="modal fade">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h2 class="modal-title">Modifier ' . $i['nickname'] . '</h2>
                                            </div>
                                            <div class="modal-body">
                                                <form class="form-horizontal" action="Admin/modifyUser" method="post">
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label" for="name">Nom</label>
                                                        <div class="col-sm-9">
                                                            <input id="name" name="name" value="' . $i['name'] . '" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label" for="firstname">Prenom</label>
                                                        <div class="col-sm-9">
                                                            <input id="firstname" name="firstname" value="' . $i['firstName'] . '"  class="form-control">
                                                        </div>
                                                    </div>
                                                    <input id="id" name="id" class="form-control" type="hidden" value="' . $i['nickname'] . '" pattern="[A-Za-z0-9]{3,24}" title="Au moins 3 caractères, pas de caractères spéciaux ni d\'espacement">
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label" for="passwd">Mot de passe*</label>
                                                        <div class="col-sm-9">
                                                            <input type="password" id="passwd" name="passwd" class="form-control" pattern=".{8,}" title="Au moins 8 caractères">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label" for="passwdconf">Confirmation*</label>
                                                        <div class="col-sm-9">
                                                            <input type="password" id="passwdconf" name="passwdconf" class="form-control" >
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label" for="mail">Adresse mail*</label>
                                                        <div class="col-sm-9">
                                                            <input type="email" id="mail" name="mail" value="' . $i['email'] . '"  class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-offset-3 col-sm-9">
                                                            <input type="submit" class="btn btn-primary" value="Modifier">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div></a></td>';


    ;
                         echo '</tr>';
                     }

                    ?>

                </thead>
            </table>
        </div>
    </div>