<?php

class users extends database {

    public $id = 0;
    public $login = '';
    public $password = '';
    public $mail = '';
    public $lastname = '';
    public $address = '';
    public $firstname = '';
    public $city = '';
    public $civility = '';
    public $phone = '';
    public $birthdate = '';
    public $postalCode = '';
    public $userType = '';

    public function __construct() {
        parent::__construct();
        $this->dbConnect();
    }

    /**
     * Méthode permettant de faire la connexion de l'utilisateur
     * @return boolean
     */
    public function userConnection() {
        $state = false;
        $query = 'SELECT `id`, `lastname`, `firstname`, `password`, `phone`, `userType` FROM `DFD54Z_users` WHERE `mail` = :mail';
        $result = $this->db->prepare($query);
        $result->bindValue(':mail', $this->mail, PDO::PARAM_STR);
        if ($result->execute()) { //On vérifie que la requête s'est bien exécutée
            $selectResult = $result->fetch(PDO::FETCH_OBJ);
            if (is_object($selectResult)) { //On vérifie que l'on a bien trouvé un utilisateur
                // On hydrate
                $this->lastname = $selectResult->lastname;
                $this->firstname = $selectResult->firstname;
                $this->password = $selectResult->password;
                $this->id = $selectResult->id;
                $this->phone = $selectResult->phone;
                $this->userType = $selectResult->userType;
                $state = true;
            }
        }
        return $state;
    }

    /**
     * 
     * Prends l'id du patient pour afficher ses informations.
     * 
     * @return boolean
     */
    public function getUserProfil() {
        $state = false;
        $query = 'SELECT `id`, `lastname`, `firstname`, `password`, `phone`, `mail`, `userType`, DATE_FORMAT(birthdate, "%d/%m/%Y") AS birthdate FROM `DFD54Z_users` WHERE `id` = :id';
        $result = $this->db->prepare($query);
        $result->bindValue(':id', $this->id, PDO::PARAM_INT);
        if ($result->execute()) { //On vérifie que la requête s'est bien exécutée
            $selectResult = $result->fetch(PDO::FETCH_OBJ);
            if (is_object($selectResult)) { //On vérifie que l'on a bien trouvé un utilisateur
                // On hydrate
                $this->lastname = $selectResult->lastname;
                $this->firstname = $selectResult->firstname;
                $this->birthdate = $selectResult->birthdate;
                $this->mail = $selectResult->mail;
                $this->password = $selectResult->password;
                $this->id = $selectResult->id;
                $this->phone = $selectResult->phone;
                $this->userType = $selectResult->userType;
                $state = true;
            }
        }
        return $state;
    }

    public function getAllUsersProfilAsAdministrator() {

        $query = 'SELECT `id`, `lastname`, `firstname`, `password`, `phone`, `mail`, `userType`,DATE_FORMAT(birthdate, "%d/%m/%Y") AS birthdate FROM `DFD54Z_users` '
                . 'WHERE `userType` = 2 OR  `userType` = 3';
        $result = $this->db->prepare($query);
        if ($result->execute()) { //On vérifie que la requête s'est bien exécutée
            $selectResult = $result->fetchAll(PDO::FETCH_OBJ);
            if (is_object($selectResult)) { //On vérifie que l'on a bien trouvé un utilisateur
            }
        }
        return $selectResult;
    }

    public function getAllUsersProfilAsModerator() {
        $query = 'SELECT `id`, `lastname`, `firstname`, `password`, `phone`, `mail`, `userType`,DATE_FORMAT(birthdate, "%d/%m/%Y") AS birthdate FROM `DFD54Z_users` '
                . 'WHERE `userType` = 2';
        $result = $this->db->prepare($query);
        if ($result->execute()) { //On vérifie que la requête s'est bien exécutée
            $selectResult = $result->fetchAll(PDO::FETCH_OBJ);
            if (is_object($selectResult)) { //On vérifie que l'on a bien trouvé un utilisateur
            }
        }
        return $selectResult;
    }

    /**
     * Méthode permettant l'enregistrement d'un utilisateur
     * @return boolean
     */
    public function userRegister() {
        $query = 'INSERT INTO `DFD54Z_users`(`lastname`, `firstname`, `birthdate`,  `phone`, `mail`, `civility`, `password`, `userType`) '
                . 'VALUES (:lastname, :firstname, :birthdate, :phone, :mail, :civility, :password, 2)';
        $insertUsers = $this->db->prepare($query);
        $insertUsers->bindValue(':lastname', $this->lastname, PDO::PARAM_STR);
        $insertUsers->bindValue(':firstname', $this->firstname, PDO::PARAM_STR);
        $insertUsers->bindValue(':birthdate', $this->birthdate, PDO::PARAM_STR);
        $insertUsers->bindValue(':phone', $this->phone, PDO::PARAM_STR);
        $insertUsers->bindValue(':mail', $this->mail, PDO::PARAM_STR);
        $insertUsers->bindValue(':civility', $this->civility, PDO::PARAM_STR);
        $insertUsers->bindValue(':password', $this->password, PDO::PARAM_STR);
        return $insertUsers->execute();
    }

    public function searchUsers() {
        $result = array();
        $remove = $this->db->prepare('SELECT `id`, `lastname`, `firstname`  FROM `DFD54Z_users` '
                . 'WHERE `lastname` LIKE :lastname OR `firstname` LIKE :firstname');
        $remove->bindValue(':lastname', '%' . $this->search . '%', PDO::PARAM_STR);
        $remove->bindValue(':firstname', '%' . $this->search . '%', PDO::PARAM_STR);
        if ($remove->execute()) {
            $result = $remove->fetchAll(PDO::FETCH_OBJ);
        }
        return $result;
    }

    /*
     * Méthode permettant de modifier un utilisateur.
     */

    public function modifyUser() {
        $query = 'UPDATE `DFD54Z_users` SET `phone`= :phone, `mail`= :mail, WHERE `id` = :id;';
        $insertUsers = $this->db->prepare($query);
        $insertUsers->bindValue(':id', $this->id, PDO::PARAM_INT);
        $insertUsers->bindValue(':phone', $this->phone, PDO::PARAM_STR);
        $insertUsers->bindValue(':mail', $this->mail, PDO::PARAM_STR);
        return $insertUsers->execute();
    }

    public function modifyPassword() {
        $query = 'UPDATE `DFD54Z_users` SET `password` = :password WHERE `id` = :id;';
        $insertUsers = $this->db->prepare($query);
        $insertUsers->bindValue(':id', $this->id, PDO::PARAM_INT);
        $insertUsers->bindValue(':password', $this->password, PDO::PARAM_STR);
        return $insertUsers->execute();
    }

    public function modifyRole() {
        $query = 'UPDATE `DFD54Z_users` SET `userType` = :userType WHERE `id` = :id;';
        $insertUsers = $this->db->prepare($query);
        $insertUsers->bindValue(':id', $this->id, PDO::PARAM_INT);
        $insertUsers->bindValue(':userType', $this->userType, PDO::PARAM_STR);
        return $insertUsers->execute();
    }

    /*
     * Méthode permettant de supprimer un utilisateur.
     */

    public function removeUser() {
        $query = 'DELETE FROM `DFD54Z_users` WHERE id = :id';
        $remove = $this->db->prepare($query);
        $remove->bindValue(':id', $this->id, PDO::PARAM_INT);
        return $remove->execute();
    }

    public function __destruct() {
        
    }

}
