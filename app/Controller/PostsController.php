<?php
class PostsController extends AppController {
    public $helpers = array('Html', 'Form');
    public $components = array('Flash');

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('index', 'trend', 'view');  //投稿画面関連はlogin必須にしたい
    }

    public function index(){

    }

    //おすすめ記事
    public function view(){

    }

    //ユーザーの投稿データ参照
    public function page(){
      $this->set('posts', $this->Post->find('all'));
	}

    public function add() {
        if ($this->request->is('post')) {
          $tmp = $this->request->data['Post']['file']['tmp_name'];
          if(is_uploaded_file($tmp)) {
            $file_name = basename($this->request->data['Post']['file']['name']);
            $file = WWW_ROOT.'img'.DS.$file_name;
            if (move_uploaded_file($tmp, $file)) {
              $this->Post->create();
              $this->request->data['Post']['image'] = $file_name;
              if ($this->Post->save($this->request->data)) {
                $this->Session->setFlash(__('The upload has been saved'));
                $this->redirect(array('action' => 'index'));
              } else {
                $this->Session->setFlash(__('The upload could not be saved. Please, try again.'));
              }
            }
          }
        }
    }
}
?>