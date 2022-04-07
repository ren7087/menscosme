<?php
class SkinCaresController extends AppController {
    public $helpers = array('Html', 'Form');

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('index', 'recommend'); 
    }

    public function index(){

    }

    public function recommend(){

    }
}
?>