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
<?php if (!empty($auth)): ?> 
    <div style="margin-left: 100px;">
        <br>
        <?php echo 'あなたは既に新規登録済みです！'; ?>
    </div>    
<?php else: ?>
    <div style="margin-left: 100px">
        <h2>新規登録画面</h2>
        <?php echo $this->Form->create('User'); ?>
        <?php echo $this->Form->input('username'); ?>
        <?php echo $this->Form->input('password'); ?>
        <?php echo $this->Form->end('登録'); ?>
    </div>
<?php endif; ?>
<br>
<br>