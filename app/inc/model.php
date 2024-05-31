<?php

class Model {
    public function load_model($model){
        $model = ucwords($model);
        if(is_file("app/models/{$model}.php")){
            require_once "app/models/{$model}.php";
            if(class_exists($model)){
                return new $model();
            }else{
                die("Undefined {$model} Model");
            }
        }
    }
}