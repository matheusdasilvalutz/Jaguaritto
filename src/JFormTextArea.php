<?php
  namespace Jaguaritto\Html;
  
  use Jaguaritto\Html\JObject;
  use Collective\Html\FormFacade as Form;
  
  class JFormTextArea extends JObject
  {
    protected $cols = 50;
    
    protected $rows = 10;
    
    public function __construct($id, $default = null)
    {
      parent::__construct($id, $default);
    }
    
    public function getHtml()
    {
      parent::getHtml();
      
      $arrExtra = ['id' => $this->getId(), 'class' => $this->getClass(), 'cols' => $this->getCols(), 'rows' => $this->getRows()];
      echo Form::textarea($this->getName(), $this->getDefault(), $arrExtra) . "</div>";
    }
    
    public function setSize($cols, $rows)
    {
      $this->setCols($cols);
      $this->setRows($rows);
    }
    
    function getCols()
    {
      return $this->cols;
    }
    
    function getRows()
    {
      return $this->rows;
    }
    
    function setCols($cols)
    {
      $this->cols = $cols;
    }
    
    function setRows($rows)
    {
      $this->rows = $rows;
    }
  }
