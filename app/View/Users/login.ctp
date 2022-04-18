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
        <?php echo 'あなたは既にログイン済みです！'; ?>
    </div>
<?php else: ?>
    <div style="margin-left: 100px;">
        <h3>ログイン画面</h3>
        <?php echo $this->Form->create('User'); ?>
        <table>
        <tr>
            <th>ユーザーID</th>
            <td><?php echo $this->Form->input('username', array('label' => '', 'required'=>'true')); ?></td>
        </tr>
        <tr>
            <th>パスワード</th>
            <td><?php echo $this->Form->input('password', array('label' => '', 'required'=>'true')); ?></td>
        </tr>
        <tr>
            <td colspan="2" class="center"><?php echo $this->Form->end('Login'); ?></td>
        </tr>
        </table>
        <br>
        <p style="color:#F00;"><?php echo '*記事を投稿するページとみんなの記事を見るページはログインが必須です'; ?></p>
        <br>
        <br>
        <h3><?php echo $this->Html->link("ユーザー登録がまだの方はこちらをクリック", "/users/add", array("style"=>"color:blue;")); ?></h2>
    </div>
<?php endif ; ?>
<br>
<br>
