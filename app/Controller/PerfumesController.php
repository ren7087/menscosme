<?php
class PerfumesController extends AppController {
    public $helpers = array('Html', 'Form');

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('index', 'trend'); 
    }
    
    public function index() {
	}

    public function trend(){

    }
}