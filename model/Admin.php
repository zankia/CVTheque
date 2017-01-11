<?php

class AdminModel extends Model {

    public function getUsers() {
        $query = $this->dbLink->prepare('SELECT nickname, email, name, firstName, actif, admin FROM User order by nickname');
        $query->execute();
        return ($query->fetchAll());
    }
    public function deleteUser ($nickname) {

        $query = $this->dbLink->prepare('DELETE FROM User WHERE nickname = :nickname');
        $query->bindParam(':nickname', $nickname, PDO::PARAM_STR, 24);
        return $query->execute();

    }
    public function changeAdminStatus ($nickname, $status) {
        $query = $this->dbLink->prepare('UPDATE user SET admin = :status WHERE nickname = :nickname');
        $query->bindParam(':nickname', $nickname, PDO::PARAM_STR, 24);
        $query->bindParam(':status', $status, PDO::PARAM_BOOL);
        return $query->execute();
    }

}
