<?php

/**
 * Description of Sport
 *
 * @author Jakub
 */
class Sport extends Nette\Application\UI\Form {

    public function __construct($parent, $name) {
        parent::__construct();

        $this->setAction($parent->link("Sport:success"));

        $this->setMethod("POST");
        
        $this->addSelect('Druh', 'Druh sportu', array('Fotbal', 'Tennis', 'Flordball', 'Hokej', 'Běh', 'Kolo'))
                ->setRequired(TRUE);

        $this->addRadioList('Typ', 'Typ zákazníka', array('Hobby', 'Poloprofesionál', 'Profesionál', 'Vrcholový'))
                ->setRequired(TRUE);

        $this->addSelect('Sportoviste', 'Typ sportoviště', array('Venkovní', 'Vnitřní'))
                ->setRequired(TRUE);

        $this->addText('Nazev', 'Nazev produktu')
                ->setRequired(TRUE);
        
        $this->addText('jmenoV', 'Jmeno výrobce')
                ->setRequired('není výrobce');
         
        $this->addText('pocet', 'Počet kusů na prodejně')
                ->setRequired(TRUE)
                ->addRule(\Nette\Forms\Form::INTEGER, 'Neni cislo!');

        $this->addUpload('Fotka', 'Fotka produktu');

        $this->addTextArea('Popis', 'Popis a parametry produktu');
        
        $this->addCheckbox('Sleva','Prodej ve slevě')
                ->setRequired(TRUE);
        
        $this->addCheckboxList('Zaruka','Záruka', array('+1rok', '+2roky','+3roky'))
                ->setRequired(TRUE);
        
        $this->addRadioList('TypN','',array('Nástoj', 'Oblečení'))
                ->setRequired(TRUE);
        
        $this->addRadioList('Vek','Věk sportovce', array('Dítě','Junior','Dospělý','Senior'))
                ->setRequired(TRUE);
        
        $this->addRadioList('Porvch','Porvch',array('Tráva', 'Antuka','Hala','Umělý povrch','Led'))
                ->setRequired(TRUE);
        
        $this->addEmail('emailR', 'Email na Podporu')
                ->setRequired(TRUE)
                ->addRule(\Nette\Forms\Form::EMAIL, 'Email je neplatny');

        $this->addText('Kod', 'Kód produktu')
                ->setRequired('naní kód');
        
        $this->addCheckbox('Vracene','Vrácené zboží');
                    
        $this->addText('jmenoO', 'Jmeno obsluhy')
                ->setRequired('není jmeno');
        
        $this->addSelect('Sklad', 'Místo uskladnění', array('Praha', 'Brno', 'Ostrava', 'Pardubice', 'Třebíč','Vlašim'))
                ->setRequired(TRUE);
        
        $this->addCheckbox('Naprodejne','Zboží na prodejně');
                
        $this->addSubmit('Nahrat', 'Nahrát');    
    }
}
