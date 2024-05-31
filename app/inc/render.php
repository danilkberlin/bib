<?php

class Render {
    public function view($view_filename, $data = []){
        $data = (object) $data;
        include_once("app/views/{$view_filename}.php");
    }
}