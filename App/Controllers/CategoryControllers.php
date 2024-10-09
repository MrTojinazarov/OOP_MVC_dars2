<?php

namespace App\Controllers;

class CategoryControllers
{

    public function index()
    {
        $models = Categorys::all();
        return view('index', 'home', $models);
    }

}

?>