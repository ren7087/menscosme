<?php
class CommentsController extends AppController {
    public $helpers = array('Html', 'Form');
    public $components = array('Flash');
    public $uses = array('Post', 'Comment');

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('index', 'trend', 'view');  //投稿画面関連はlogin必須にしたい
    }

    public function add(){
        if ($this->request->is('post')){
          if ($this->Comment->save($this->request->data)){
            $this->Flash->set("Success!!");
            $this->redirect(array("controller"=>"posts", "action"=>"page", $this->data['Comment']['post_id']));
          }else{
            $this->Flash->set("Failed....");
          }
        }
    }
}