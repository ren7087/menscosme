<?php
class HairOilsController extends AppController {
    public $helpers = array('Html', 'Form');

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('how'); 
    }
    
    public function how(){

    }
}
?>