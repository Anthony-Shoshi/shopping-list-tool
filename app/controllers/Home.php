<?php

class Home
{

    use Controller;

    public function index()
    {
        $product = new Product;
        $products = $product->getAll();
        $data['products'] = $products;
        $this->view('products', $data);
    }

    public function create()
    {
        $this->view('create');
    }

    public function store()
    {

        $isChecked = (isset($_POST['is_checked'])) ? 1 : 0;
        $data['title'] = $_POST['title'];
        $data['description'] = $_POST['description'];
        $data['is_checked'] = $isChecked;

        $product = new Product;
        $product->insert($data);
        
        header('Location: '. ROOT . '/home');
    }

    public function edit()
    {
        $id = $_GET['id'];
        $product = new Product;
        $productData = $product->getOne($id);
        
        $data['product'] = $productData;
        $this->view('edit', $data);
    }

    public function update()
    {
        $id = $_POST['id'];
        $isChecked = (isset($_POST['is_checked'])) ? 1 : 0;
        $data['title'] = $_POST['title'];
        $data['description'] = $_POST['description'];
        $data['is_checked'] = $isChecked;

        $product = new Product;
        $product->update($id, $data);
        
        header('Location: '. ROOT . '/home');
    }

    public function delete()
    {
        $id = $_GET['id'];
        $product = new Product;
        $product->delete($id);

        header('Location: '. ROOT . '/home');
    }
}
