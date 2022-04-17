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

<body id="page-top" class="index">

    <div class="master-wrapper">

        <div class="preloader">
            <div class="preloader-img">
            	<span class="loading-animation animate-flicker"><?php echo $this->Html->image('loading.GIF'); ?></span>
            </div>
        </div>

        <section class="dark-wrapper opaqued parallax" data-parallax="scroll" data-speed="0.7">
            <div class="section-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 mt30 text-center wow fadeIn" data-wow-delay="0.5s">
                            <h2 class="section-heading">BE ONLY YOU</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="section-inner nopaddingtop">
                <div class="container">
                    <div class="row">
                        <?php foreach($lips as $lip) : ?>
                        <div class="col-md-4"><br>
                            <div class="hover-item">
                                <?php $image = $lip['Product']['img']; ?>
                                <?php if (empty($image) ||is_null($image)) {
                                    echo $this->Html->image("img/noimage.png", array('class'=>'img-responsive smoothie wow fadeIn', 'data-wow-delay'=>'0.5s'));
                                }elseif (isset($image)) {
                                    echo $this->Html->image("https://drive.google.com/uc?export=view&id=$image", array('class'=>'lip-img', 'data-wow-delay'=>'0.5s'));
                                }; ?>
                                    <div class="hover-item-caption smoothie">
                                        <div class="vertical-center smoothie">
                                            <?php echo $this->Html->link('購入ページへ', $lip['Product']['url']); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-excerpt">
                                    <h4><?php echo $lip['Product']['title']; ?></h4>
                                    <p><?php echo $lip['Product']['content']; ?></p>
                                    <h4 class="pull-right"><?php echo $lip['Product']['cost']; ?></h4>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>                
                </div>
            </div>   
        </section>
    </div>

    <!-- jQuery -->
    <?php echo $this->Html->script( 'jquery.js'); ?>
    <?php echo $this->Html->script( 'bootstrap.min.js'); ?>
    <?php echo $this->Html->script( 'plugins.js'); ?>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <?php echo $this->Html->script( 'init.js'); ?>

</body>

</html>
