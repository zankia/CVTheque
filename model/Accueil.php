<?php

class AccueilModel extends Model {

    public function userExists($id, $email) {
        $query = $this->dbLink->prepare('SELECT nickname FROM User WHERE nickname = :id OR email = :email');
        $query->bindParam(':id', $id, PDO::PARAM_STR, 24);
        $query->bindParam(':email', $email, PDO::PARAM_STR, 42);
        $query->execute();
        return ($query->rowCount() == 1);
    }

    public function getConnection($id, $passwd) {
        $passwd = $this->passCrypt($passwd);
        $query = $this->dbLink->prepare('SELECT * FROM User WHERE (nickname = :id OR email = :id) AND pass = :passwd');
        $query->bindParam(':id', $id, PDO::PARAM_STR, 42);
        $query->bindParam(':passwd', $passwd , PDO::PARAM_STR, 64);
        $query->execute();
        return ($query->fetch());
    }
    
    public function registerNewUser($i, $e, $pw, $n, $pr) {
        return ($this->dbLink->query("INSERT INTO User (nickname, email, pass, name, firstName) VALUES ('$i','$e','" . $this->passCrypt($pw) . "','$n','$pr')"));
    }
    
    public function recoverPasswd($id) {
        $query = $this->dbLink->prepare('SELECT nickname, email FROM User WHERE recover = :id');
        $query->bindParam(':id', $id, PDO::PARAM_STR, 13);
        $query->execute();
        if(($res = $query->fetch()) === false)
            return false;
        
        $compo = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
        $newPass = substr(str_shuffle($compo), 0, 8);
        $res['pass'] = $newPass;
        $this->dbLink->query("UPDATE User SET recover = NULL, pass = '" . $this->passCrypt($newPass) . "' WHERE nickname = '" . $res['nickname'] . "'");
        return $res;
    }

    public function generateHashRecover($id) {
        $hash = uniqid();

        $query = $this->dbLink->prepare('SELECT nickname, email FROM User WHERE nickname = :id OR email = :id');
        $query->bindParam(':id', $id, PDO::PARAM_STR, 42);
        $query->execute();
        if(($res = $query->fetch()) === false)
            return false;

        $this->dbLink->query("UPDATE User SET recover = '$hash' WHERE nickname = '" . $res['nickname'] . "'");
        $res['recover'] = $hash;
        return $res;
    }
}
