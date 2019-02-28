<?php
  namespace App\Jaguaritto;
  
  use Collective\Html\FormFacade as Form;
  
  class JForm
  {
    protected $action;
    
    protected $method = "get";
    
    protected $class;
    
    public function __construct($action = null, $method = "get")
    {
      $this->setAction($action);
      $this->setMethod($method);
      
      echo Form::open(['url' => $this->getAction(), 'method' => $this->getMethod(), 'class' => "form {$this->getClass()}"]);
    }
    
    public function addObject($obj)
    {
      if ($obj instanceof JObject)
        $obj->getHtml();
    }
    
    public function getHtml()
    {
      echo Form::close();
    }
    
    function getAction()
    {
      return $this->action;
    }
    
    function getMethod()
    {
      return $this->method;
    }
    
    function setAction($action)
    {
      $this->action = $action;
    }
    
    function setMethod($method)
    {
      $this->method = $method;
    }
    
    function getClass()
    {
      return $this->class;
    }
    
    function setClass($class)
    {
      $this->class = $class;
    }
  }