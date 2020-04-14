<?php
namespace App\Presenters;

class PizzaPresenter extends BasePresenter {
    
    
    public function createComponentPizza($name) {
        return new \Pizza($this, $name);
    }
    

        public function actionSuccess($name) {
           $odeslat = $this ->getRequest();
  
            $this->template->odeslat = $odeslat->post;

       }
    
}







?>