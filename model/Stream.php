<?php

class StreamModel extends Model {

    public function getRowCount() {
        $query = $this->dbLink->prepare('SELECT COUNT(*) FROM CV');
        $query->execute();
        return ceil($query->fetch()[0] / 12);
    }

    public function getCVList($nickname = null, $page = null, $skills = null) {
        $queryString = 'SELECT * FROM User JOIN CV ON nickname = idUser WHERE nickname IS NOT NULL';
        if(isset($nickname)) {
            $queryString .= " AND nickname = '$nickname'";
        }
        if(isset($skills)) {
            $queryString .= ' AND id IN (SELECT idCV FROM Skill JOIN CVSkill ON id = idSkill WHERE id IN(';

            foreach($skills as $skill)
                $queryString .= "'$skill',";

            $queryString = rtrim($queryString, ',');
            $queryString .= '))';
        }
        if(isset($page)) {
            $queryString .= ' LIMIT ' . (($page-1) * 12) . ',12';
        }
        $query = $this->dbLink->prepare($queryString);
        $query->execute();
        return $query->fetchAll();
    }

    public function getSkillList() {
        $query = $this->dbLink->prepare('SELECT * FROM Skill');
        $query->execute();
        return $query->fetchAll();
    }

    public function getSkills($id) {
        $query = $this->dbLink->prepare("SELECT DISTINCT id, name FROM Skill JOIN CVSkill ON id = idSkill WHERE idCV = '$id'");
        $query->execute();
        return $query->fetchAll();
    }

    public function getMailFromCV($id) {
        $query = $this->dbLink->prepare('SELECT email FROM User JOIN CV ON nickname = idUser WHERE id = :id');
        $query->bindParam(':id', $id, PDO::PARAM_INT, 11);
        $query->execute();
        return $query->fetch()['email'];
    }
}
