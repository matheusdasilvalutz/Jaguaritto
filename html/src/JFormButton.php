<?php
  namespace App\Jaguaritto;
  
  use App\Jaguaritto\JObject;
  use Collective\Html\FormFacade as Form;
  
  class JFormButton extends JObject
  {
    public function __construct($id, $default)
    {
      parent::__construct($id, $default);
    }
    
    public function getHtml()
    {
      parent::getHtml();
      
      $arrExtra = ['id' => $this->getId(), 'class' => $this->getClass()];
      echo Form::submit($this->getDefault(), $arrExtra) . "</div>";
    }
  }