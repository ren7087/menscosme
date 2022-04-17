<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/ico/favicon.ico">

    <title>Cosme</title>
    <?php echo $this->Html->css('shop.css'); ?>

</head>

<section class="dark-wrapper opaqued parallax">
    <div class="section-inner">
        <div class="row">
            <div class="col-lg-12 mt30 text-center wow fadeIn">
                <h2 class="section-heading">BE ONLY YOU</h2>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="section-inner">
        <div class="container">
            <div id="main-sidebar" class="col-md-3 col-md-offset-1 divider-wrapper wow fadeInRight">
                <div class="widget">
                    <h4 class="widget-title"><strong>Category</h4>
                    <div class="media-body">
                        <span><?php echo $this->Html->link('Perfume', '/shops/perfume', array('class'=>'coloured')); ?></span>
                    </div>
                    <div class="media-body">
                        <span><?php echo $this->Html->link('Lip', '/shops/lip', array('class'=>'coloured')); ?></span>
                    </div>
                    <div class="media-body">
                        <span><?php echo $this->Html->link('Skin Care', '/shops/skincare', array('class'=>'coloured')); ?></span>
                    </div>
                    <div class="media-body">
                        <span><?php echo $this->Html->link('Hair Oil', '/shops/hairoil', array('class'=>'coloured')); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div style="margin-left: 200px;">
    <h3>検索</h3>
        <?php echo $this->Form->create('Search', array('type'=>'post')); ?>
    <div style="display:inline-flex">
        <?php echo $this->Form->input('name', array('label' => false, 'placeholder' => 'タイトルを対象に検索')); ?>
    </div>
    <div style="display:inline-flex">
        <?php echo $this->Form->end('検索'); ?>
    </div>
</div><br>

<div id="paginate" style="margin-left: 200px;">
    <span class="prev"><?php echo $this->Paginator->prev('< 前へ', array(), null, array('class' => 'prev disabled')); ?></span>
    <span class="pageno"><?php echo $this->Paginator->numbers(array('separator' => '')); ?></span>
    <span class="next"><?php  echo $this->Paginator->next('次へ >', array(), null, array('class' => 'next disabled')); ?></span>
</div>

<section>
    <div class="container">
        <div class="row">
            <?php foreach($products as $product) : ?>
            <div class="col-md-4"><br>
                <div class="hover-item">
                    <?php $image = $product['Product']['img']; ?>
                    <?php if (empty($image) ||is_null($image)) {
                        echo $this->Html->image("img/noimage.png");
                    }elseif (isset($image)) {
                        echo $this->Html->image("https://drive.google.com/uc?export=view&id=$image", array('class'=>'lip-img'));
                    }; ?>
                    <div class="hover-item-caption smoothie">
                        <div class="vertical-center smoothie">
                            <?php echo $this->Html->link('購入ページへ', $product['Product']['url']); ?>
                        </div>
                    </div>
                </div>
            
                <h4><?php echo $product['Product']['title']; ?></h4>
                <p><?php echo $product['Product']['content']; ?></p>
                <h4 class="pull-right"><?php echo $product['Product']['cost']; ?></h4>
            </div>
            <?php endforeach; ?>
        </div>                
    </div>
</section>

    <!-- jQuery -->
    <?php echo $this->Html->script( 'plugins.js'); ?>
    <?php echo $this->Html->script( 'init.js'); ?>


</html>
