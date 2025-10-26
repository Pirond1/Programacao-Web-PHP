<?php

namespace App\Services;

// importar a classe de conexão
use App\Config\Database;
// importar o PDO
use PDO;

class ProductService {
    private PDO $db;

    public function __construct() {
        // instaciar a conexão
        $this->db = Database::getConnection();
    }

    // CRUD
    public function create(
        string $name,
        float $price,
        int $stock
    ) {
        // instrução SQL INSERT
        $sql = "INSERT INTO products (
            name, price, stock
        ) VALUES (:name, :price, :stock)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':name' => $name,
            ':price' => $price,
            ':stock' => $stock
        ]);
        return $this->db->lastInsertId();
    }

    public function update(
        int $id,
        string $name,
        float $price,
        int $stock
    ) {
        // instrução sql UPDATE
        $sql = "UPDATE products SET name = :name,
                    price = :price, stock = :stock
                    WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        // passar parametros
        $stmt->bindValue(':name', $name, PDO::PARAM_STR);
        $stmt->bindValue(':price', $price, PDO::PARAM_STR);
        $stmt->bindValue(':stock', $stock, PDO::PARAM_INT);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();

    }

    public function delete(int $id) {
        // instrução sql DELETE
        $sql = "DELETE FROM products WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([':id' => $id]);
    }

    // parametro name opcional
    public function list(?string $name) {
        // exemplo com filtros (EXTRA)
        $where = "";
        if($name) {
            $where = " WHERE name like :name";
        }

        // instrução sql SELECT
        $sql = "SELECT * FROM products $where";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':name', "%$name%", PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll();
    }

}