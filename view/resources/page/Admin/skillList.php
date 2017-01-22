    <div class="container-fluid">
        <h1>Page de gestion des compétences des CV</h1>
    </div>

    <div id="container-skillList" class="container">
        <div class="panel panel-default">

            <!-- Table -->
            <div class="panel-heading">Compétences</div>

            <div class="panel-body">
<?php
foreach ($params as $skill) {
    echo '<button type="button" class="btn btn-default">' . $skill['name'] . '</button>';
}
?>

            </div>
            <form class="navbar-form navbar-left" role="search" method="get" action="Admin/addSkill">
                <div>Ajouter une compétence</div>

                <div class="form-group">
                    <input type="text" name="name" form-control" placeholder="Nom de la compétence">
                </div>
                <button type="submit" class="btn btn-default">Ajouter</button>

            </form>

            <form class="navbar-form navbar-left" role="search" method="get" action="Admin/deleteSkill">
                <div>Supprimer une compétence</div>

                <div class="form-group">
                    <input type="text" name="name" form-control" placeholder="Nom de la compétence">
                </div>
                <button type="submit" class="btn btn-default">Supprimer</button>

            </form>
        </div>
    </div>
