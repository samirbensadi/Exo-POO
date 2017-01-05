<?php

class Form {

  protected $formStart = "<form>";
  protected $inputText = '<input type="text">';
  protected $select = '<select></select>';
  protected $subBtn = '<button type="submit"></button>';
  protected $textarea = '<textarea></textarea>';
  protected $radio = '<input type="radio">';
  protected $checkbox = '<input type="checkbox">';
  protected  $formEnd = '</form>';


  public function getFormStart(){
    return $this->start;
  }

  public function getInputText(){
    return $this->inputText;
  }

  public function getSelect(){
      return $this->select;
  }

  public function getSubBtn() {
      return $this->subBtn;
  }

  public function getTextarea(){
      return $this->textarea;
  }

  public function getRadio(){
      return $this->radio;
  }

  public function getCheckbox(){
      return $this->checkbox;
  }

  public function getFormEnd(){
      return $this->formEnd;
  }

}


 ?>
