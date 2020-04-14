<?php





class Pizza extends Nette\Application\UI\Form{
    
    public function __construct($parent, $name){
        parent::__construct();
        
        $this->setAction($parent->link("Pizza:success"));
        
        $this->setMethod("POST");
        
        $this->addText('jmeno', 'jmeno')
             ->setRequired('jmeno prosim');
        
        $this->addPassword('heslo', 'Heslo')
             ->setRequired(TRUE)  
             ->addRule(\Nette\Forms\Form::MIN_LENGTH, 'Heslo musi mit 6 znaku', 6);
        
        $this->addPassword('heslo2', 'Heslo znova')
             ->setRequired(TRUE)
             ->addRule(\Nette\Forms\Form::EQUAL, 'Hesla se neshoduji', $this['heslo']);
        
        $this->addEmail('email','Email')
             ->setRequired(TRUE)
             ->addRule(\Nette\Forms\Form::EMAIL, 'Mas smulu, email je neplatny');
        
        $this->addRadioList('Rozmer', 'Prumer', array('12cm', '24cm', '48cm'));
        
        $this->addCheckboxList('Druh', 'Druh', array('Margharitta', 'Hawaii', 'Proscutto'));
       
        
        $this->addText('pocet', 'pocet')
          ->setRequired(TRUE)
          ->addRule(\Nette\Forms\Form::INTEGER, 'Neni cislo!');
        
        $this->addTextArea('zprava', 'zprava');
     
        $this->addSelect('Pridat', 'Pridat', array('Salam', 'Ananas'));
        
        $this->addUpload('File', 'Predloha');
       
        $this->addSubmit('Odeslat', 'Odeslat');
        
}

}