<?php

  class Calc{
    protected $num1, $num2, $num3, $func;

    public function __construct(){
       $method = $_SERVER['REQUEST_METHOD'];
      if($method == "PUT") $this->initPut();
      else $this->initGetOrPost();
    }

    private function initPut(){
      $temp = file_get_contents("php://input");
      parse_str($temp,$put_vars);
      $this->num1 = (int)$put_vars['num1'];
      $this->num2 = (int)$put_vars['num2'];
      $this->num3 = (int)$put_vars['num3']; 
      $this->func = $put_vars['func'];
    }

    private function initGetOrPost(){


      if(isset($_GET['num1'])) $this->num1 = (int)$_GET['num1'];
      else if(isset($_POST['num1'])) $this->num1 = (int)$_POST['num1'];  
      else $this->num1 = 0;

      if(isset($_GET['num2'])) $this->num2 = (int)$_GET['num2'];
      else if(isset($_POST['num2'])) $this->num2 = (int)$_POST['num2'];  
      else $this->num2 = 0;

      if(isset($_GET['num3'])) $this->num3 = (int)$_GET['num3'];
      else if(isset($_POST['num3'])) $this->num3 = (int)$_POST['num3'];  
      else $this->num3 = 0;

      if(isset($_GET['func'])) $this->func = $_GET['func'];
      else if(isset($_POST['func'])) $this->func = $_POST['func'];  
      else $this->func = "sum"; // default
    
    }


  }