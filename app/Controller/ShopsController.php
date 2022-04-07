<?php
class ShopsController extends AppController {
    public $helpers = array('Html', 'Form');

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('index', 'view'); 
    }

    public function index(){

    }
    public function view(){

    }
}
?>