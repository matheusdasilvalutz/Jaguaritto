<?php
  namespace App\Jaguaritto;
  
  use App\Jaguaritto\JObject;
  use Collective\Html\FormFacade as Form;
  
  class JFormFormattedNumber extends JObject
  {
    protected $negativeNumber = false;
    
    protected $precision = 2;
    
    public function __construct($id, $default = null)
    {
      parent::__construct($id, $default);
    }
    
    public function getHtml()
    {
      parent::getHtml();
      
      echo
        "<script>
          $(document).ready(function(){
            $('*[name=" . $this->getName() . "]').maskMoney({precision: " . $this->getPrecision() . ", allowNegative: '" . $this->getNegativeNumber() . "'});
          });
        </script>";
      
      $arrExtra = ['id' => $this->getId(), 'class' => $this->getClass()];
      echo Form::text($this->getName(), $this->getDefault(), $arrExtra) . "</div>";
    }
    
    
    function getNegativeNumber()
    {
      return $this->negativeNumber;
    }
    
    function getPrecision()
    {
      return $this->precision;
    }
    
    function setNegativeNumber($negativeNumber)
    {
      $this->negativeNumber = $negativeNumber;
    }
    
    function setPrecision($precision)
    {
      $this->precision = $precision;
    }
  }