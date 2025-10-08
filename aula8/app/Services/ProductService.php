<?php
    namespace App\Services;

    #Importar Classe de Conexão
    use App\Config\Database;
    #Importar PDO
    use PDO;

    class ProductService {
        private PDO $db;

        public function __construct(){
            $this->db = Database::getConection();
        }

        #CRUD
        public function create(
            string $name,
            float $price,
            int $stock
        ){
            $sql = "INSERT INTO products (name, price, stock) VALUES (:name, :price, :stock)";
            $stmt = $this->db->prepare($sql);
            $stmt->execute([':name' => $name, ':price' => $price, ':stock' => $stock]);

            return $this->db->lastInsertID();
        }

        public function update(
            int $id,
            string $name,
            float $price,
            int $stock
        ){
            $sql = "UPDATE products SET name = :name, price = :price, stock = :stock WHERE id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindValue(':name', $name, PDO::PARAM_STR);
            $stmt->bindValue(':price', $price, PDO::PARAM_STR);
            $stmt->bindValue(':stock', $stock, PDO::PARAM_INT);
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);

            return $stmt->execute();
        }

        public function delete(
            int $id
        ){
            $sql = "DELETE FROM products WHERE id = :id";
            $stmt = $this->db->prepare($sql);
            return $stmt->execute([':id' => $id]);
        }

        public function list(){
            $sql = "SELECT * FROM products";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        }
    }
?>