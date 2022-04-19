<?php

App::uses('AuthComponent', 'Controller/Component');

class User extends AppModel {
  public function beforeSave($options = array()) {
    if (isset($this->data[$this->alias]['password'])) {
        $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
    }
    return true;
  }

  // public $hasMany = "Post";

  public $validate = array (
    "username" => array(
      "notEmpty" => array(
        "rule" => "notEmpty",
        "message" => "必須項目です。"
      ),
      "custom" => array(
        "rule"=>"_compareUsername",
        "message"=>"すでに登録されているusernameです"
      )
    ),
  );
}