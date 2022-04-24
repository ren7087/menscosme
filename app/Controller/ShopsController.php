<?php
class ShopsController extends AppController {
    public $helpers = array('Html', 'Form');
    public $uses = array('Lip', 'Perfume', 'Hairoil', 'Skincare', 'Product');

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('index', 'view', 'lip', 'perfume', 'hairoil', 'skincare'); 
    }

    public function index(){
        $name = $this->request->data['Search']['name'];
        if ($this->request->is('Post') && !empty($name) && !( $this->request->params['named']['page'] = 1)) {
            $this->request->params['named']['page'] = 1;
            $conditions = array(
                    'Product.title LIKE' => '%'.$name.'%'
            );
            $this->Session->write('conditions', $conditions);
        } elseif($this->request->is('Post') && !empty($name)) {
            $conditions = array(
                'Product.title LIKE' => '%'.$name.'%'
            );
            $this->Session->write('conditions', $conditions);
        } else {
            $conditions = null;
        }

        $this->paginate = array(
            'conditions' => $conditions,
            'limit' => 10,
        );
        $this->set('products', $this->paginate('Product'));
    }

    //商品詳細ページ
    // public function view(){
    // }

    public function lip(){
        $lips = $this->Product->find('all', array(
            "conditions" => array(
                'Product.valid' => 1,
                'Product.category' => 1,
            )));
        $this->set(compact('lips'));
    }

    public function perfume(){
        $perfumes = $this->Product->find('all', array(
            "conditions" => array(
              'Product.valid' => 1,
              'Product.category' => 2,
            )));
        $this->set(compact('perfumes'));
    }


    public function hairoil(){
        $hairoils = $this->Product->find('all', array(
            "conditions" => array(
                'Product.valid' => 1,
                'Product.category' => 3,
            )));
        $this->set(compact('hairoils'));
    }

    public function skincare(){
        $skincares = $this->Product->find('all', array(
            "conditions" => array(
                'Product.valid' => 1,
                'Product.category' => 4,
            )));
        $this->set(compact('skincares'));
    }
}
?>