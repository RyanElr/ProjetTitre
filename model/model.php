<?php

/**
 * Création de la classe clients
 */
class produits {

    private $connexion;
    public $id;
    public $lastName;
    public $firstName;
    public $birthDate;
    public $type;
    public $price;
    public $title;
    public $imgUrl;
    public $id_DFD54Z_type;
    public $id_DFD54Z_categories;

    public function __construct() {
        //On test les erreurs avec le try/catch 
        //Si tout est bon, on est connecté à la base de donnée
        try {
            $this->connexion = new PDO('mysql:host=localhost;dbname=ecommerce;charset=utf8', 'root', 'c8fwdxwh');
        }
        //Autrement, un message d'erreur est affiché
        catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function getBestSellersList() {
        $isObjectResult = array();
        $PDOResult = $this->connexion->query('SELECT `id`, `title`, `price`, `imgUrl`'
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
        $remove = $this->connexion->prepare('SELECT `id`, `title`, `price` FROM `DFD54Z_products` '
                . 'WHERE `title`');
        $remove->bindValue('title', '%' . $this->search, PDO::PARAM_STR);
        if ($remove->execute()) {
            $result = $remove->fetchAll(PDO::FETCH_OBJ);
        }
        return $result;
    }

    public function productsRegister() {
        $query = 'INSERT INTO `DFD54Z_products`(`title`, `price`, `imgUrl`, `id_DFD54Z_categories`, `id_DFD54Z_types`) '
                . 'VALUES (:title, :price, :imgUrl, :category, :type)';
        $insertUsers = $this->db->prepare($query);
        $insertUsers->bindValue(':title', $this->title, PDO::PARAM_STR);
        $insertUsers->bindValue(':price', $this->price, PDO::PARAM_FLOAT);
        $insertUsers->bindValue(':imgUrl', $this->imgUrl, PDO::PARAM_STR);
        $insertUsers->bindValue(':category', $this->id_DFD54Z_categories, PDO::PARAM_INT);
        $insertUsers->bindValue(':type', $this->id_DFD54Z_types, PDO::PARAM_INT);
        return $insertUsers->execute();
    }

    public function getProductsListByCategory() {
        $isObjectResult = array();
        $PDOResult = $this->connexion->prepare('SELECT `id`, `title`, `price`, `imgUrl`'
                . ' FROM `DFD54Z_products`'
                . 'WHERE id_DFD54Z_categories = :category');
        $PDOResult->bindValue(':category', $this->id_DFD54Z_categories, PDO::PARAM_INT);
        $PDOResult->execute();
        // Vérifie que $PDOResult est un objet
        if (is_object($PDOResult)) {
            // Stocke la requête dans $PDOResult
            $isObjectResult = $PDOResult->fetchAll(PDO::FETCH_OBJ);
        }
        // Retourne $PDOResult
        return $isObjectResult;
    }

    public function getProductsListByType() {
        $isObjectResult = array();
        $PDOResult = $this->connexion->prepare('SELECT `id`, `title`, `price`, `imgUrl`'
                . ' FROM `DFD54Z_products`'
                . 'WHERE id_DFD54Z_categories = :category AND WHERE id_DFD54Z_types = :type ');
        $PDOResult->bindValue(':category', $this->id_DFD54Z_categories, PDO::PARAM_INT);
        $PDOResult->bindValue(':type', $this->id_DFD54Z_types, PDO::PARAM_INT);
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
        $PDOResult = $this->connexion->prepare('SELECT `id`, `title`, `price`, `imgUrl`'
                . ' FROM `id_DFD54Z_types`');
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
        $PDOResult = $this->connexion->prepare('SELECT `id`, `title`, `price`, `imgUrl`'
                . ' FROM `id_DFD54Z_categories`');
        $PDOResult->execute();
        // Vérifie que $PDOResult est un objet
        if (is_object($PDOResult)) {
            // Stocke la requête dans $PDOResult
            $isObjectResult = $PDOResult->fetchAll(PDO::FETCH_OBJ);
        }
        // Retourne $PDOResult
        return $isObjectResult;
    }

    /**
     * Méthode destruct
     */
    public function __destruct() {
        ;
    }

}

?>
