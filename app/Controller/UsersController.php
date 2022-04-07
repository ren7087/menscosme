<?php
App::uses('AppController', 'Controller');

class UsersController extends AppController {
    public $components = array('Flash');
    
    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('add');
    }
    public function login() {
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                $this->redirect($this->Auth->redirectUrl());
            } else {
                $this->Session->setFlash('ユーザー名かパスワードが間違っています。');
            }
        }
    }
 
    public function logout() {
        $this->redirect($this->Auth->logout());
    }

    public function add() {
    if ($this->request->is('post')) {
        $this->User->create();
        if ($this->User->save($this->request->data)) {
            $this->Session->setFlash('登録しました。');
            $this->redirect(array("controller"=>"posts", 'action' => 'index'));
        } else {
            $this->Session->setFlash('登録できませんでした。');
        }
    }
}
}
?>