<?php

class AdminModel extends Model {

    public function getUsers() {
        $query = $this->dbLink->prepare('SELECT nickname, email, name, firstName, consultant, admin FROM User order by nickname');
        $query->execute();
        return ($query->fetchAll());
    }
    public function deleteUser ($nickname) {

        $query = $this->dbLink->prepare('DELETE FROM User WHERE nickname = :nickname');
        $query->bindParam(':nickname', $nickname, PDO::PARAM_STR, 24);
        return $query->execute();

    }
    public function changeAdminStatus ($nickname, $status) {
        $query = $this->dbLink->prepare('UPDATE User SET admin = :status WHERE nickname = :nickname');
        $query->bindParam(':nickname', $nickname, PDO::PARAM_STR, 24);
        $query->bindParam(':status', $status, PDO::PARAM_BOOL);
        return $query->execute();
    }
    public function changeUserStatus ($nickname, $status) {
        $query = $this->dbLink->prepare('UPDATE User SET consultant = :status WHERE nickname = :nickname');
        $query->bindParam(':nickname', $nickname, PDO::PARAM_STR, 24);
        $query->bindParam(':status', $status, PDO::PARAM_BOOL);
        return $query->execute();
    }
    public function searchUser ($nickname) {
        $query = $this->dbLink->prepare('SELECT nickname, email, name, firstName, consultant, admin FROM User WHERE nickname =:nickname');
        $query->bindParam(':nickname', $nickname, PDO::PARAM_STR, 24);
        $query->execute();
        return ($query->fetchAll());

    }
    public function modifyUser ($nickname, $name, $firstName, $email, $password) {
        if (!empty($password)) {
            $password = Model::passCrypt($password);
            $query = $this->dbLink->prepare('UPDATE User SET name = :name, firstName = :firstName, pass = :password, email = :email WHERE nickname = :nickname');
            $query->bindParam(':password', $password, PDO::PARAM_STR, 64);
        }
        else {
            $query = $this->dbLink->prepare('UPDATE User SET name = :name, firstName = :firstName, email = :email WHERE nickname = :nickname');
        }

        $query->bindParam(':nickname', $nickname, PDO::PARAM_STR, 24);
        $query->bindParam(':name', $name, PDO::PARAM_STR, 24);
        $query->bindParam(':firstName', $firstName, PDO::PARAM_STR, 24);
        $query->bindParam(':email', $email, PDO::PARAM_STR, 42);
        return $query->execute();


    }
}
