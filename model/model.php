<?php

/**
 * Création de la classe clients
 */
class produits extends database{

    public $id;
    public $lastName;
    public $firstName;
    public $birthDate;
    public $type;
    public $price;
    public $title;
    public $imgUrl;
    public $id_types;
    public $id_categories;

    public function __construct() {
        parent::__construct();
        $this->dbConnect();
    }

    public function getBestSellersList() {
        $isObjectResult = array();
        $PDOResult = $this->db->query('SELECT `id`, `title`, `price`, `imgUrl`'
                . ' FROM `DFD54Z_products`'
                . 'WHERE `id` = 1 OR `id` = 31  OR `id` = 32 OR `id` = 36 OR `id` = 9 OR `id` = 41 '
                . 'ORDER BY `title`');
        // Vérifie que $PDOResult est un objet
        if (is_object($PDOResult)) {
            // Stocke la requête dans $PDOResult
            $isObjectResult = $PDOResult->fetchAll(PDO::FETCH_OBJ);
        }
        // Retourne $PDOResult
        return $isObjectResult;
    }

    /**
     * Méthode getClientsList pour récupérer le résultat de la requête
     * @return type
     */
    public function searchProducts() {
        $result = array();
        $remove = $this->db->prepare('SELECT `id`, `title`, `price`, `imgUrl` FROM `DFD54Z_products` '
                . 'WHERE `title` LIKE :title');
        $remove->bindValue(':title', '%' . $this->search . '%', PDO::PARAM_STR);
        if ($remove->execute()) {
            $result = $remove->fetchAll(PDO::FETCH_OBJ);
        }
        return $result;
    }

    public function productsRegister() {
        $query = 'INSERT INTO `DFD54Z_products`(`title`, `price`, `imgUrl`, `id_categories`, `id_types`) '
                . 'VALUES (:title, :price, :imgUrl, :category, :type)';
        $insertUsers = $this->db->prepare($query);
        $insertUsers->bindValue(':title', $this->title, PDO::PARAM_STR);
        $insertUsers->bindValue(':price', $this->price, PDO::PARAM_STR);
        $insertUsers->bindValue(':imgUrl', $this->imgUrl, PDO::PARAM_STR);
        $insertUsers->bindValue(':category', $this->id_categories, PDO::PARAM_INT);
        $insertUsers->bindValue(':type', $this->id_types, PDO::PARAM_INT);
        return $insertUsers->execute();
    }

    public function getProductsListByCategory() {
        $isObjectResult = array();
        $PDOResult = $this->db->prepare('SELECT `id`, `title`, `price`, `imgUrl`'
                . ' FROM `DFD54Z_products`'
                . 'WHERE id_categories = :category');
        $PDOResult->bindValue(':category', $this->id_categories, PDO::PARAM_INT);
        $PDOResult->execute();
        // Vérifie que $PDOResult est un objet
        if (is_object($PDOResult)) {
            // Stocke la requête dans $PDOResult
            $isObjectResult = $PDOResult->fetchAll(PDO::FETCH_OBJ);
        }
        // Retourne $PDOResult
        return $isObjectResult;
    }

    public function getProductsListByCategoryAndType() {
        $isObjectResult = array();
        $PDOResult = $this->db->prepare('SELECT `id`, `title`, `price`, `imgUrl`'
                . ' FROM `DFD54Z_products`'
                . 'WHERE id_types = :type AND id_categories = :category');
        $PDOResult->bindValue(':type', $this->id_types, PDO::PARAM_INT);
         $PDOResult->bindValue(':category', $this->id_categories, PDO::PARAM_INT);
        $PDOResult->execute();
        // Vérifie que $PDOResult est un objet
        if (is_object($PDOResult)) {
            // Stocke la requête dans $PDOResult
            $isObjectResult = $PDOResult->fetchAll(PDO::FETCH_OBJ);
        }
        // Retourne $PDOResult
        return $isObjectResult;
    }

    public function getProductsListByTypes() {
        $isObjectResult = array();
        $PDOResult = $this->db->prepare('SELECT `id`, `title`, `price`, `imgUrl`'
                . ' FROM `id_types`');
        $PDOResult->execute();
        // Vérifie que $PDOResult est un objet
        if (is_object($PDOResult)) {
            // Stocke la requête dans $PDOResult
            $isObjectResult = $PDOResult->fetchAll(PDO::FETCH_OBJ);
        }
        // Retourne $PDOResult
        return $isObjectResult;
    }

    public function getProductsListByCategories() {
        $isObjectResult = array();
        $PDOResult = $this->db->prepare('SELECT `id`, `title`, `price`, `imgUrl`'
                . ' FROM `id_categories`');
        $PDOResult->execute();
        // Vérifie que $PDOResult est un objet
        if (is_object($PDOResult)) {
            // Stocke la requête dans $PDOResult
            $isObjectResult = $PDOResult->fetchAll(PDO::FETCH_OBJ);
        }
        // Retourne $PDOResult
        return $isObjectResult;
    }
    public function getProductsLists() {
        $isObjectResult = array();
        $PDOResult = $this->db->prepare('SELECT `id_types`, `id_categories`, `title`' 
                . ' FROM `DFD54Z_products`');
        $PDOResult->execute();
        // Vérifie que $PDOResult est un objet
        if (is_object($PDOResult)) {
            // Stocke la requête dans $PDOResult
            $isObjectResult = $PDOResult->fetchAll(PDO::FETCH_OBJ);
        }
        // Retourne $PDOResult
        return $isObjectResult;
    }
    public function getProductsList() {
        $isObjectResult = array();
        $PDOResult = $this->db->prepare('SELECT `id`, `title`, `price`, `imgUrl`'
                . ' FROM `DFD54Z_products`');
        $PDOResult->execute();
        // Vérifie que $PDOResult est un objet
        if (is_object($PDOResult)) {
            // Stocke la requête dans $PDOResult
            $isObjectResult = $PDOResult->fetchAll(PDO::FETCH_OBJ);
        }
        // Retourne $PDOResult
        return $isObjectResult;
    }
    public function modifyProduct() {
        $query = 'UPDATE `DFD54Z_products` SET `title`= :title, `price`= :price,`imgUrl`= :imgUrl,`id_categories`= :category,`id_types`= :type WHERE `id` = :id;';
        $modifProduct = $this->db->prepare($query);
        $modifProduct->bindValue(':id', $this->id, PDO::PARAM_INT);
        $modifProduct->bindValue(':title', $this->title, PDO::PARAM_STR);
        $modifProduct->bindValue(':price', $this->price, PDO::PARAM_STR);
        $modifProduct->bindValue(':imgUrl', $this->imgUrl, PDO::PARAM_STR);
        $modifProduct->bindValue(':category', $this->id_categories, PDO::PARAM_STR);
        $modifProduct->bindValue(':type', $this->id_types, PDO::PARAM_STR);
        return $modifProduct->execute();
    }
        public function removeProduct() {
        $query = 'DELETE FROM `DFD54Z_products` WHERE `id` = :id';
        $remove = $this->db->prepare($query);
        $remove->bindValue(':id', $this->id, PDO::PARAM_INT);
        return $remove->execute();
    }
    /**
     * Méthode destruct
     */
    public function __destruct() {
    }

}
