<?php

use App\Helpers\Views;

if(!function_exists('dd')){

    function dd(...$data)
    {
        echo "<body bgcolor='gray'>";
        echo "<pre style='background-color:black; color:#0dbb2a; font-familiy: monospace;'>";
        print_r($data);
        echo '</pre>';
        exit();
    }
}

if(!function_exists('view')){
    function view($view, $title, $models = [])
    {
        Views::make($view, $title, $models);
    }
}
?>