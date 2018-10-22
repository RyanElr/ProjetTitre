<?php
/**
 * Création de la classe clients
 */
class produits{
        private $connexion;
    public $id;
    public $lastName;
    public $firstName;
    public $birthDate;
    public $type;
    public $price;
    public $title; 
    public $imgUrl;
    public function __construct(){
        //On test les erreurs avec le try/catch 
        //Si tout est bon, on est connecté à la base de donnée
        try{
            $this->connexion = new PDO('mysql:host=localhost;dbname=ecommerce;charset=utf8', 'root', 'c8fwdxwh');
        }
        //Autrement, un message d'erreur est affiché
        catch(Exception $e){
            die($e->getMessage());
        }
    }
        public function getBestSellersList(){
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
    public function getLuminaryList(){
        $isObjectResult = array();
        $PDOResult = $this->connexion->query('SELECT `id`, `title`, `price`, `imgUrl`'
                . ' FROM `DFD54Z_products`'
                . 'WHERE idType = 1');
        // Vérifie que $PDOResult est un objet
        if (is_object($PDOResult)) {
          // Stocke la requête dans $PDOResult
          $isObjectResult = $PDOResult->fetchAll(PDO::FETCH_OBJ);
        }
        // Retourne $PDOResult
        return $isObjectResult;
    }
       public function getFiguresList(){
        $isObjectResult = array();
        $PDOResult = $this->connexion->query('SELECT `id`, `title`, `price`, `imgUrl`'
                . ' FROM `DFD54Z_products`'
                . 'WHERE idType = 2');
        // Vérifie que $PDOResult est un objet
        if (is_object($PDOResult)) {
          // Stocke la requête dans $PDOResult
          $isObjectResult = $PDOResult->fetchAll(PDO::FETCH_OBJ);
        }
        // Retourne $PDOResult
        return $isObjectResult;
    }
   public function getLuminaryDragonBallList(){
        $isObjectResult = array();
        $PDOResult = $this->connexion->query('SELECT `id`, `title`, `price`, `imgUrl`'
                . ' FROM `DFD54Z_products`'
                . 'WHERE idType = 1 AND idCategory = 1');
        // Vérifie que $PDOResult est un objet
        if (is_object($PDOResult)) {
          // Stocke la requête dans $PDOResult
          $isObjectResult = $PDOResult->fetchAll(PDO::FETCH_OBJ);
        }
        // Retourne $PDOResult
        return $isObjectResult;
    }
   public function getLuminaryNarutoList(){
        $isObjectResult = array();
        $PDOResult = $this->connexion->query('SELECT `id`, `title`, `price`, `imgUrl`'
                . ' FROM `DFD54Z_products`'
                . 'WHERE idType = 1 AND idCategory = 2');
        // Vérifie que $PDOResult est un objet
        if (is_object($PDOResult)) {
          // Stocke la requête dans $PDOResult
          $isObjectResult = $PDOResult->fetchAll(PDO::FETCH_OBJ);
        }
        // Retourne $PDOResult
        return $isObjectResult;
    }
    public function getLuminaryOnePieceList(){
        $isObjectResult = array();
        $PDOResult = $this->connexion->query('SELECT `id`, `title`, `price`, `imgUrl`'
                . ' FROM `DFD54Z_products`'
                . 'WHERE idType = 1 AND idCategory = 3');
        // Vérifie que $PDOResult est un objet
        if (is_object($PDOResult)) {
          // Stocke la requête dans $PDOResult
          $isObjectResult = $PDOResult->fetchAll(PDO::FETCH_OBJ);
        }
        // Retourne $PDOResult
        return $isObjectResult;
    }
           public function getFiguresDragonBallList(){
        $isObjectResult = array();
        $PDOResult = $this->connexion->query('SELECT `id`, `title`, `price`, `imgUrl`'
                . ' FROM `DFD54Z_products`'
                . 'WHERE idType = 2 AND idCategory = 1');
        // Vérifie que $PDOResult est un objet
        if (is_object($PDOResult)) {
          // Stocke la requête dans $PDOResult
          $isObjectResult = $PDOResult->fetchAll(PDO::FETCH_OBJ);
        }
        // Retourne $PDOResult
        return $isObjectResult;
    }
           public function getFiguresNarutoList(){
        $isObjectResult = array();
        $PDOResult = $this->connexion->query('SELECT `id`, `title`, `price`, `imgUrl`'
                . ' FROM `DFD54Z_products`'
                . 'WHERE idType = 2 AND idCategory = 2');
        // Vérifie que $PDOResult est un objet
        if (is_object($PDOResult)) {
          // Stocke la requête dans $PDOResult
          $isObjectResult = $PDOResult->fetchAll(PDO::FETCH_OBJ);
        }
        // Retourne $PDOResult
        return $isObjectResult;
    }
           public function getFiguresOnePieceList(){
        $isObjectResult = array();
        $PDOResult = $this->connexion->query('SELECT `id`, `title`, `price`, `imgUrl`'
                . ' FROM `DFD54Z_products`'
                . 'WHERE idType = 2 AND idCategory = 3');
        // Vérifie que $PDOResult est un objet
        if (is_object($PDOResult)) {
          // Stocke la requête dans $PDOResult
          $isObjectResult = $PDOResult->fetchAll(PDO::FETCH_OBJ);
        }
        // Retourne $PDOResult
        return $isObjectResult;
    }
            public function searchProducts(){
            $result = array();
        $remove = $this->connexion->prepare('SELECT `id`, `title`, `price` FROM `DFD54Z_products` '
                . 'WHERE `title`');
        $remove->bindValue('title', '%' . $this->search . '%', PDO::PARAM_STR);
   if ($remove->execute()) {
            $result = $remove->fetchAll(PDO::FETCH_OBJ);
        }
        return $result;
    }
    /**
     * Méthode destruct
     */
    public function __destruct(){
        ;
    }
}
?>
