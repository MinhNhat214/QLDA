<?php
class Router{
    public function Model($model){
        require_once './src/Model/'.$model.'.php';
        return new $model;
    }
    public function View($view, $data=[]){
        require_once './src/View/'.$view.'.php';
    }
    protected function isGet()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            return true;
        }
        return false;
    }
    protected function isPost()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            return true;
        }
        return false;
    }
    protected function redirect($path)
    {
        header("Location: $path");
        exit();
    }
}
?>

