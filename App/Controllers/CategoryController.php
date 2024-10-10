<?php

namespace App\Controllers;
use App\Models\Category;
use App\Models\Product;

class CategoryController{
    public function index(){
    $data = Product::getAll();
        return view('index' , 'Bosh sahifa', $data);
    }

    public function about(){
        return view('about' , 'About sahifa');
    }    
    public function contact(){
        return view('contact' , 'Contact sahifa');
        
    }

    public function create()
    {
        if(isset($_POST['ok'])){
            $data = [
                'name' => $_POST['name'],
                'price' => $_POST['price'],
                'count' => $_POST['count']
            ];

            Product::create($data);
            header('location: /');
        }
    }

    public function delete()
    {
        if(isset($_POST['ok']) && !empty($_POST['id'])){
            $id = $_POST['id'];

            Product::delete($id);
            header('location: /');
        }
    }

    public function productAddView()
    {
        return view('add_model', 'Add product');
    }
}