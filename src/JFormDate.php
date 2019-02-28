<?php
  namespace Jaguaritto\Html;
  
  use Jaguaritto\Html\JObject;
  use Collective\Html\FormFacade as Form;
  
  class JFormDate extends JObject
  {
    public function __construct($id, $default = null)
    {
      parent::__construct($id, $default);
    }
    
    public function getHtml()
    {
      parent::getHtml();
      
      $arrExtra = ['id' => $this->getId(), 'class' => $this->getClass()];
      echo Form::date($this->getName(), $this->getDefault(), $arrExtra) . "</div>";
    }
  }
