<?php

class Home {

    use Controller;

    public function index()
    {   
        $product = new Product;
        $products = $product->getAll();
        display($products);
        $this->view('products');
    }

    public function create()
    {
        $this->view('create');
    }
    
    public function store($data)
    {
        $product = new Product;
        $product->insert($data);       
    }

    public function edit()
    {        
        $this->view('edit');
    }
    
    public function updateProduct($id, $data)
    {
        $product = new Product;
        $product->update($id, $data);        
    }
    
    public function deleteProduct($id)
    {
        $product = new Product;
        $product->delete($id);        
    }
}