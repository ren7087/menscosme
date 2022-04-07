<?php
class LipsController extends AppController {
    public $helpers = array('Html', 'Form');
    // public $uses = array('Lip');
    
    public function beforeFilter() {
      parent::beforeFilter();
      $this->Auth->allow('index', 'view', 'trend'); 
    }

    public function index() {
        // $lips = $this->Lip->find('all', array(
        //     "conditions" => array(
        //       'Lip.valid' => 1
        //     )));
        // $this->set(compact('lips'));
	  }

    public function view($id = null) {
      // $this->Lip->id = $id;
      // $this->set('lip', $this->Lip->read());
    }

    public function trend() {

    }
}