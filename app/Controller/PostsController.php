<?php
class PostsController extends AppController {
    public $helpers = array('Html', 'Form');
    public $components = array('Flash');
    public $uses = array('Post', 'Comment', 'User');

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('index', 'trend', 'view');  //投稿画面関連はlogin必須にしたい
    }

    public function index(){

    }

    //おすすめ記事
    public function view(){

    }

    //ログインしているユーザーが投稿した一覧
    public function mypage() {
      $userID = $this->Auth->user('id');
      $posts = $this->Post->find('all', array(
        "conditions" => array(
          'Post.valid' => 1,
          'Post.user_id' => $userID,
        )
      ));
      $this->set(compact('posts'));
    }

    //ユーザーの投稿データ個別
    public function page($id = null) {
      $this->Post->id = $id;
      $posts = $this->Post->find('all', array(
        "conditions" => array(
          'Post.valid' => 1,
          'Post.id' => $id,
        )
      ));
      $this->set(compact('posts'));
      $username = $this->Auth->user('username');
      $this->set(compact('username'));
    }

    //ユーザーの投稿データ一覧
    public function page2(){
      $posts = $this->Post->find('all', array(
        "conditions" => array(
          'Post.valid' => 1
        )
      ));
      $this->set(compact('posts'));
	  }

    public function add() {
      $username = $this->Auth->user('username');
      $userID = $this->Auth->user('id');
      $this->set(compact('username', 'userID'));
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
                $this->redirect(array('action' => 'mypage'));
              } else {
                $this->Session->setFlash(__('The upload could not be saved. Please, try again.'));
              }
            }
          }
        }
    }
}
?>