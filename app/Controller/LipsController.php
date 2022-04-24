<?php
class LipsController extends AppController {
    public $helpers = array('Html', 'Form');
    
    public function beforeFilter() {
      parent::beforeFilter();
      $this->Auth->allow('index', 'view', 'trend'); 
    }

    public function index() {
	  }

    public function view($id = null) {
    }

    public function trend() {

    }
}