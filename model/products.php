<?php

/**
 * Création de la classe clients
 */
class produits extends database {

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

    /*
     * Méthode permettant d'afficher les produits du moment dans l'index.
     */

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
     * Méthode pour chercher un produit
     * @return type
     */
    public function searchProducts() {
        $result = array();
        $search = $this->db->prepare('SELECT `p`.`id`, `p`.`title`, `p`.`price`, `p`.`imgUrl`, `c`.`categoryName` '
                . 'FROM `DFD54Z_products` AS `p` '
                . 'INNER JOIN `DFD54Z_categories` AS `c` ON `p`.`id_categories` = `c`.`id` '
                . 'WHERE `title` LIKE :title');
        $search->bindValue(':title', '%' . $this->search . '%', PDO::PARAM_STR);
        if ($search->execute()) {
            $result = $search->fetchAll(PDO::FETCH_OBJ);
        }
        return $result;
    }

    /*
     * Méthode pour enregistrer un produit
     */

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

    /*
     * Méthode permettant de récupérer la catégorie du produit
     */

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

    /*
     * Méthode permettant de récupérer la catégorie et le type du produit
     */

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

    /*
     *  Méthode permettant de récupérer le type d'un produit
     */

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

    /*
     * 
     */

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

    /*
     * Récupération des produits
     */

    public function getProductsList() {
        $isObjectResult = array();
        $PDOResult = $this->db->prepare('SELECT `id`, `title`, `price`, `imgUrl`,`id_categories`,`id_types`'
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

    /*
     * Méthode permettant de récupérer la catégorie du produit et l'afficher pour la partie admin et modérateur
     */

    public function getProductsListWithCategoriesAndTypes() {
        $isObjectResult = array();
        $PDOResult = $this->db->prepare('SELECT `p`.`id` ,`p`.`title`, `p`.`price`, `p`.`imgUrl`,`p`.`id_categories`,`p`.`id_types`,`c`.`categoryName` '
                . 'FROM `DFD54Z_products` AS `p` '
                . 'INNER JOIN `DFD54Z_categories` AS `c` ON `p`.`id_categories` = `c`.`id`');
        $PDOResult->execute();
        // Vérifie que $PDOResult est un objet
        if (is_object($PDOResult)) {
            // Stocke la requête dans $PDOResult
            $isObjectResult = $PDOResult->fetchAll(PDO::FETCH_OBJ);
        }
        // Retourne $PDOResult
        return $isObjectResult;
    }

    /*
     * Methode permettant de modifier un produit.
     */

    public function modifyProduct() {
        $query = 'UPDATE `DFD54Z_products` '
                . 'SET `title`= :title, `price`= :price,`imgUrl`= :imgUrl,`id_categories`= :category,`id_types`= :type '
                . 'WHERE `id` = :id;';
        $modifProduct = $this->db->prepare($query);
        $modifProduct->bindValue(':id', $this->id, PDO::PARAM_INT);
        $modifProduct->bindValue(':title', $this->title, PDO::PARAM_STR);
        $modifProduct->bindValue(':price', $this->price, PDO::PARAM_STR);
        $modifProduct->bindValue(':imgUrl', $this->imgUrl, PDO::PARAM_STR);
        $modifProduct->bindValue(':category', $this->id_categories, PDO::PARAM_STR);
        $modifProduct->bindValue(':type', $this->id_types, PDO::PARAM_STR);
        return $modifProduct->execute();
    }

    /*
     * Méthode permettant de supprimer un produit.
     */

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
