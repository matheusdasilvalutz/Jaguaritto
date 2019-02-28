<?php
  namespace App\Jaguaritto;
  
  use App\Jaguaritto\JObject;
  use Collective\Html\FormFacade as Form;
  
  class JFormSubmit extends JObject
  {
    public function __construct($id, $default = "Enviar")
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