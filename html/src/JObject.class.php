<?php
  namespace App\Jaguaritto;
  
  use Collective\Html\FormFacade as Form;
  
  abstract class JObject
  {
    protected $id;
    
    protected $name;
    
    protected $class = "form-control";
    
    protected $default;
    
    protected $label;
    
    public function __construct($id, $default = null)
    {
      $this->setId($id);
      $this->setDefault($default);
      
      $this->setName("f_{$this->getId()}");
    }
    
    public function getHtml()
    {
      echo "<div class=\"form-group\">";
      
      if ($this->getLabel())
        echo Form::label($this->getId(), $this->getLabel(), ['class' => 'label-control']);
    }
    
    function getId()
    {
      return $this->id;
    }
    
    function getName()
    {
      return $this->name;
    }
    
    function getClass()
    {
      return $this->class;
    }
    
    function getDefault()
    {
      return $this->default;
    }
    
    function getLabel()
    {
      return $this->label;
    }
    
    function setId($id)
    {
      $this->id = $id;
    }
    
    function setName($name)
    {
      $this->name = $name;
    }
    
    function setClass($class)
    {
      $this->class = $class;
    }
    
    function setDefault($default)
    {
      $this->default = $default;
    }
    
    function setLabel($label)
    {
      $this->label = $label;
    }
  }