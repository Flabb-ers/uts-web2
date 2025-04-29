<?php
require_once __DIR__ . '/../models/Product.php';
class ProductController extends Controller
{
    private $Product;
    public function __construct()
    {
        $this->Product = new Product();
    }
    public function index()
    {
        $products = $this->Product->getAllProducts();
        $this->view('products/index', ['products' => $products]);
    }
    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'name' => $_POST['name'],
                'description' => $_POST['description'],
                'price' => $_POST['price'],
                'stock' => $_POST['stock']
            ];
            $this->Product->addProduct($data);
            header('Location: /product');
            exit;
        } else {
            $this->view('products/create');
        }
    }
    public function edit($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'id' => $id,
                'name' => $_POST['name'],
                'description' => $_POST['description'],
                'price' => $_POST['price'],
                'stock' => $_POST['stock']
            ];
            $this->Product->updateProduct($data);
            header('Location: /product');
        } else {
            $product = $this->Product->getProductById($id);
            $this->view('products/edit', ['product' => $product]);
        }
    }
    public function delete($id)
    {
        $this->Product->deleteProduct($id);
        header('Location: /product');
    }
}
