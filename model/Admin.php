<?php

class AdminModel extends Model {

    public function getUsers() {
        $query = $this->dbLink->prepare('SELECT nickname, email, name, firstName, actif, admin FROM User order by nickname');
        $query->execute();
        return ($query->fetchAll());
    }
}
