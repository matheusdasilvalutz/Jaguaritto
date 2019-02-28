<?php
  namespace Jaguaritto\Html;
  
  use Jaguaritto\Html\JObject;
  use Collective\Html\FormFacade as Form;
  
  class JFormSelect extends JObject
  {
    protected $options;
    
    public function __construct($id, $default = null)
    {
      parent::__construct($id, $default);
    }
    
    public function getHtml()
    {
      parent::getHtml();
      
      $arrExtra = ['id' => $this->getId(), 'class' => $this->getClass()];
      echo Form::select($this->getName(), $this->getOptions(), $this->getDefault(), $arrExtra) . "</div>";
    }
    
    function setOptions($options)
    {
      foreach ($options as $key => $value)
      {
        if (is_array($value))
        {
          if (isset($value["value"]))
            $this->options[$value["value"]] = $value["description"];
          else
            $this->options[$value[0]] = $value[1];
        }
        else
          $this->options[$key] = $value;
      }
    }
    
    function getOptions()
    {
      return $this->options;
    }
    
    function setFirstEmpty($idFirstEmpty = true)
    {
      if ($idFirstEmpty)
        $this->options = array_merge(["" => ""], $this->options);
    }
  }
