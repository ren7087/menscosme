<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/ico/favicon.ico">

    <title>Cosme</title>

    <?php echo $this->Html->css('bootstrap.min.css'); ?>
    <?php echo $this->Html->css('animate.css'); ?>
    <?php echo $this->Html->css('plugins.css'); ?>
    <?php echo $this->Html->css('style.css'); ?>
    <?php echo $this->Html->css('pe-icons.css'); ?>
    <?php echo $this->Html->css('shop.css'); ?>

</head>

<br>
<br>
<br>
<br>
<br>
<div class="uploads form" style="margin-left: 100px;">
    <?php echo $this->Form->create('Post', array('type' => 'file')); ?>
        <legend><?php echo __('記事を投稿する!'); ?></legend>
        <?php echo $this->Form->input('title', array('label'=>false, 'placeholder'=>'titleを入力', 'required'=>"required")); ?>
        <?php echo $this->Form->input('body', array('rows'=>6, 'label'=>false, 'placeholder'=>'bodyを入力', 'required'=>"required", 'style' => 'width:600px')); ?>
        <?php echo $this->Form->file('file', array('label'=>false, 'required'=>"required")); ?>
        <?php echo $this->Form->hidden('Post.username', array('type'=>'hidden', 'value'=>$username)); ?>
        <?php echo $this->Form->hidden('Post.user_id', array("type"=>'hidden', 'value'=>$userID)); ?>
    <?php echo $this->Form->end(__('Submit'));?>
</div>
<br>
<br>