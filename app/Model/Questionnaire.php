<?php

class Questionnaire extends AppModel {

  public $validate = array (
    "finger" => array(
      "notEmpty" => array(
        "rule" => "notEmpty",
        "message" => "必須項目です。"
      ),
    ),
    "kpop" => array(
        "notEmpty" => array(
          "rule" => "notEmpty",
          "message" => "必須項目です。"
        ),
      ),
    "costume" => array(
      "notEmpty" => array(
        "rule" => "notEmpty",
        "message" => "必須項目です。"
      ),
    ),
    "entertainer" => array(
      "notEmpty" => array(
        "rule" => "notEmpty",
        "message" => "必須項目です。"
      ),
    ),
    "make" => array(
      "notEmpty" => array(
        "rule" => "notEmpty",
        "message" => "必須項目です。"
      ),
    ),
    "cloth" => array(
      "notEmpty" => array(
        "rule" => "notEmpty",
        "message" => "必須項目です。"
      ),
    ),
    "hair" => array(
      "notEmpty" => array(
        "rule" => "notEmpty",
        "message" => "必須項目です。"
      ),
    ),
  );
}