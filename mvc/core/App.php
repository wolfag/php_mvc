<?php
class App{

    protected $controller="Home";
    protected $action="SayHi";
    protected $params=[];

    function __construct(){
        $urls = $this->UrlProcess();

        // handle controller
        if(file_exists("./mvc/controllers/{$urls[0]}.php")){
            $this->controller = $urls[0];
            unset($urls[0]);
        }
        require_once "./mvc/controllers/{$this->controller}.php";
        $this->controller = new $this->controller;
        
        // handle action
        if(isset($urls[1])){
            if(method_exists($this->controller, $urls[1])){
                $this->action = $urls[1];
            }
            unset($urls[1]);
        }

        // handle params
        $this->params = $urls ? array_values($urls) : [];
        
        // echo $this->controller;
        // echo $this->action;
        // print_r($this->params);

        // call action in controller with params
        call_user_func_array([$this->controller, $this->action], $this->params);
    }

    function UrlProcess(){
        if(isset($_GET["url"])){
            $url = filter_var(trim($_GET["url"], "/"));
            return explode("/", $url);
        }
    }
}

?>