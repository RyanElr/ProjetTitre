<?php

class delivery extends database {

    public $id = 0;
    public $address = '';
    public $city = '';
    public $postalCode = '';
    public $id_users = '';

    public function __construct() {
        parent::__construct();
        $this->dbConnect();
    }

    /**
     * Méthode permettant d'enregistrer une adresse de livraison
     * @return boolean
     */
    public function registerDeliveryAddress() {
        $query = 'INSERT INTO `DFD54Z_delivery` (`city`, `postalCode`, `address`, `id_users`)'
                . 'VALUES (:city , :postalCode , :address , :id) ';
        $add = $this->db->prepare($query);
        $add->bindValue(':city', $this->city, PDO::PARAM_STR);
        $add->bindValue(':postalCode', $this->postalCode, PDO::PARAM_STR);
        $add->bindValue(':address', $this->address, PDO::PARAM_STR);
        $add->bindValue(':id', $this->id_users, PDO::PARAM_INT);
        return $add->execute();
    }
    
     /**
     * Méthode permettant d'afficher une adresse de livraison
     * @return boolean
     */
        public function getDeliveryAddressByClient() {
        $state = false;
        $query = 'SELECT `city`, `postalCode`, `address` FROM `DFD54Z_delivery` WHERE `id_;users` = :id';
        $result = $this->db->prepare($query);
        $result->bindValue(':id', $this->id_users, PDO::PARAM_INT);
        if ($result->execute()) { //On vérifie que la requête s'est bien exécutée
            $selectResult = $result->fetch(PDO::FETCH_OBJ);
            if (is_object($selectResult)) { //On vérifie que l'on a bien trouvé un utilisateur
                // On hydrate
                $this->city = $selectResult->city;
                $this->postalCode = $selectResult->postalCode;
                $this->address = $selectResult->address;
                $state = true;
            }
        }
        return $state;
    }
    

    public function __destruct() {
        
    }

}
