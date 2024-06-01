<?php
class App
{
    protected $controller = "Home";
    protected $action = "show";
    protected $params = [];

    //http://localhost/baitapcuaNhat/QLDA/Home/sayhi/1/2/3
    
    function __construct()
    {
        // Array ( [0] => Home [1] => sayhi [2] => 1 [3] => 2 [4] => 3 )
        $arr = $this->urlProcess();
        
        //Xử lí controller
        if (isset($arr[0]) && file_exists("src/Controller/".$arr[0].".php")) {
            $this->controller = $arr[0];
            unset($arr[0]);
        }
        require_once "src/Controller/".$this->controller.".php";
        
        $this->controller = new $this->controller;

        //Xử lí action
        if(isset($arr[1])){
            if(method_exists($this->controller, $arr[1])){
                $this->action=$arr[1];
            }
            unset($arr[1]);
        }

        //Xử lí params
        $this -> params = $arr?array_values($arr):[];

        call_user_func_array([$this->controller, $this->action], $this->params );
    }
    function urlProcess()
    {
        if (isset($_GET["url"])) {
            return explode("/", filter_var(trim($_GET['url'], "/"), FILTER_SANITIZE_URL));
            // return explode("/",filter_var(trim($_GET["url"], "/")));
        }
    }
}
