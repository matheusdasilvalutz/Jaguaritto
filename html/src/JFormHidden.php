<?php
  namespace App\Jaguaritto;
  
  use App\Jaguaritto\JObject;
  use Collective\Html\FormFacade as Form;
  
  class JFormHidden extends JObject
  {
    public function __construct($id, $default = null)
    {
      parent::__construct($id, $default);
      $this->label = null;
    }
    
    public function getHtml()
    {
      parent::getHtml();
      
      $arrExtra = ['id' => $this->getId(), 'class' => $this->getClass()];
      echo Form::hidden($this->getName(), $this->getDefault(), $arrExtra) . "</div>";
    }
  }