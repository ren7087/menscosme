<?php
class PerfumesController extends AppController {
    public $helpers = array('Html', 'Form');
    // public $uses = array('Perfume');

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('index', 'trend'); 
    }
    
    public function index() {
        // $perfumes = $this->Perfume->find('all', array(
        //     "conditions" => array(
        //       'Perfume.valid' => 1
        //     )));
        // $this->set(compact('perfumes'));
	}

    public function trend(){

    }
}