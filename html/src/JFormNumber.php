<?php
  namespace App\Jaguaritto;
  
  use App\Jaguaritto\JObject;
  use Collective\Html\FormFacade as Form;
  
  class JFormNumber extends JObject
  {
    public function __construct($id, $default = null)
    {
      parent::__construct($id, $default);
    }
    
    public function getHtml()
    {
      parent::getHtml();
      
      $arrExtra = ['id' => $this->getId(), 'class' => $this->getClass()];
      echo Form::number($this->getName(), $this->getDefault(), $arrExtra) . "</div>";
    }
  }