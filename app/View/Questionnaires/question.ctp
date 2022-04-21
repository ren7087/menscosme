<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/ico/favicon.ico">

    <title>Mensmake</title>

    <?php echo $this->Html->css('bootstrap.min.css'); ?>
    <?php echo $this->Html->css('animate.css'); ?>
    <?php echo $this->Html->css('plugins.css'); ?>
    <?php echo $this->Html->css('style.css'); ?>
    <?php echo $this->Html->css('pe-icons.css'); ?>

</head>

<br>
<br>
<br>
<br>
<br>
<div class="uploads form" style="margin-left: 100px;">
    <?php echo $this->Form->create('Questionnaire', array("type"=>"post")); ?>
    <legend><h2><?php echo __('タイプ診断'); ?></h2></legend>
    <p>あなたに合った最適のメイクタイプがわかります</p><br>
    <?php
    echo $this->Form->label('薬指が人差し指より長いですか？');
    echo '<br>';
    $options0 = [
                'value1' => 'はい',
                'value2' => 'いいえ'
               ];
    $attributes = array('legend' => false);
    echo $this->Form->radio('finger', $options0, $attributes);
    ?><br><br>

    <?php
    echo $this->Form->label('韓国アイドルが好きですか？');
    echo '<br>';
    $options1 = [
                'value1' => '好き',
                'value2' => 'どちらかと言えば好き',
                'value3' => '好きではない'

               ];
    echo $this->Form->radio('kpop', $options1, $attributes);
    ?><br><br>

    <?php
    echo $this->Form->label('コスプレに興味がある');
    echo '<br>';
    $options2 = [
                'value1' => 'はい',
                'value2' => 'どちらかと言えばはい',
                'value3' => 'いいえ'
               ];
    echo $this->Form->radio('costume', $options2, $attributes);
    ?><br><br>

    <?php
    echo $this->Form->label('好きな芸能人を教えてください');
    echo '<br>';
    $options3 = [
                'value1' => 'ジョンハン(seventeen)',
                'value2' => '吉沢亮',
                'value3' => 'ローランド',
                'value4' => '竹内涼真',
                
               ];
    echo $this->Form->radio('entertainer', $options3, $attributes);
    ?><br><br>

    <?php
    echo $this->Form->label('メイクに求めるものは？');
    echo '<br>';
    $options4 = [
                'value1' => '自分らしさ',
                'value2' => '清潔感',
                'value3' => '美しさ',
                'value3' => '華やかさ',
               ];
    echo $this->Form->radio('make', $options4, $attributes);
    ?><br><br>

    <?php
    echo $this->Form->label('派手な服を着ることが多い');
    echo '<br>';
    $options5 = [
                'value1' => 'はい',
                'value2' => 'どちらかと言えばはい',
                'value3' => 'いいえ'
               ];
    echo $this->Form->radio('cloth', $options5, $attributes);
    ?><br><br>
    
    <?php
    echo $this->Form->label('よくする髪型は？');
    echo '<br>';
    $options6 = [
                'value1' => 'マッシュ',
                'value2' => 'センターパート',
                'value3' => 'アップバング',
               ];
    echo $this->Form->radio('hair', $options6, $attributes);
    ?><br><br>
    <?php echo $this->Form->end(__('診断する'));?>
</div>
<br>
<br>