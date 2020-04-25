<?php




namespace App\Presenters;




class SportPresenter extends \Nette\Application\UI\Presenter{
    
    public function createComponentSport($name) {
           return new \Sport($this, $name);
    }
    
    public function actionSuccess($name) {
           $odeslat = $this ->getRequest();
  
            $this->template->odeslat = $odeslat->post;

       }
    
}
