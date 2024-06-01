<?php
class Router{
    public function Model($model){
        require_once './src/Model/'.$model.'.php';
        return new $model;
    }
    public function View($view, $data=[]){
        require_once './src/View/'.$view.'.php';
    }
}
?>