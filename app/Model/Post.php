<?php
class Post extends AppModel{
   // public $belongsTo = 'User';
   public $hasMany = "Comment";
}