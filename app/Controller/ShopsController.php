<?php
class ShopsController extends AppController {
    public $helpers = array('Html', 'Form');
    public $uses = array('Lip', 'Perfume', 'Hairoil', 'Skincare');
    public $components = array('Paginator');

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('index', 'view', 'lip', 'perfume', 'hairoil', 'skincare'); 
    }

    public function index(){
        $perfumes = $this->Perfume->find('all', array(
            "conditions" => array(
              'Perfume.valid' => 1
            )));
        $lips = $this->Lip->find('all', array(
            "conditions" => array(
              'Lip.valid' => 1
            )));
        $hairoils = $this->Hairoil->find('all', array(
            "conditions" => array(
              'Hairoil.valid' => 1
            )));
        $skincares = $this->Skincare->find('all', array(
            "conditions" => array(
              'Skincare.valid' => 1
            )));
        $this->set(compact('skincares', 'hairoils', 'lips', 'perfumes'));

        if ($this->request->is('Post')) {
            $result = $this->request->data['Search']['name'];
            $this->set(compact('result'));

            $conditions = array(
                'Circle.name LIKE' => '%'.$result.'%'
            );
            $this->paginate = array(
                'Circle' => array(
                    'limit' => 10,
                    'order' => array('id' => 'desc'),
                    'conditions' => $conditions,
                    'fields' => array('Circle.*', 'InviteVerify.*'),
                ),
            );
        } else {
            $this->paginate = array(
                'Circle' => array(
                    'limit' => 10,
                    'order' => array('id' => 'desc'),
                    'fields' => array('Circle.*', 'InviteVerify.*'),
                ),
            );
        }


    }

    public function view(){

    }

    public function perfume(){
        $perfumes = $this->Perfume->find('all', array(
            "conditions" => array(
              'Perfume.valid' => 1
            )));
        $this->set(compact('perfumes'));
    }

    public function lip(){
        $lips = $this->Lip->find('all', array(
            "conditions" => array(
              'Lip.valid' => 1
            )));
        $this->set(compact('lips'));
    }

    public function hairoil(){
        $hairoils = $this->Hairoil->find('all', array(
            "conditions" => array(
              'Hairoil.valid' => 1
            )));
        $this->set(compact('hairoils'));
    }

    public function skincare(){
        $skincares = $this->Skincare->find('all', array(
            "conditions" => array(
              'Skincare.valid' => 1
            )));
        $this->set(compact('skincares'));
    }
}
?>