<?php
require_once __DIR__ . '/../../core/Database.php';
class Product
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }
    public function getAllProducts()
    {
        $this->db->query("SELECT * FROM products");
        return $this->db->resultSet();
    }
    public function getProductById($id)
    {
        $this->db->query("SELECT * FROM products WHERE id = :id");
        $this->db->bind(':id', $id);
        return $this->db->single();
    }
    public function addProduct($data)
    {
        $this->db->query("INSERT INTO products (name, description, price, stock) VALUES (:name,
:description, :price, :stock)");
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':price', $data['price']);
        $this->db->bind(':stock', $data['stock']);
        return $this->db->execute();
    }
    public function updateProduct($data)
    {
        $this->db->query("UPDATE products SET name = :name, description = :description, price = :price,
stock = :stock WHERE id = :id");
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':price', $data['price']);
        $this->db->bind(':stock', $data['stock']);
        return $this->db->execute();
    }
    public function deleteProduct($id)
    {
        $this->db->query("DELETE FROM products WHERE id = :id");
        $this->db->bind(':id', $id);
        return $this->db->execute();
    }
}
