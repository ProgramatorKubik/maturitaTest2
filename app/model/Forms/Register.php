<?php


class Register extends \Nette\Forms\Form {
    
    public function __construct($parent, $name){
        parent::__construct($name);
        
        $this->setAction($parent->link("Jenda:success"));
        
        $this->setMethod("GET");
        
        $this->addEmail('email', 'Email');
        
        
        
        $this->addSubmit('odeslat', 'Odeslat');
        
        return $this;
        
    }
    
    }
  
