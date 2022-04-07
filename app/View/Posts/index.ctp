<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/ico/favicon.ico">
    <link rel="apple-touch-icon" sizes="144x144" href="img/ico/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/ico/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/ico/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" href="img/ico/apple-touch-icon-57x57.png">

    <title>Mensmake</title>

    <!-- Bootstrap Core CSS -->
    <?php echo $this->Html->css('bootstrap.min.css'); ?>
    <?php echo $this->Html->css('animate.css'); ?>
    <?php echo $this->Html->css('plugins.css'); ?>

    <!-- Custom CSS -->
    <?php echo $this->Html->css('style.css'); ?>

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <?php echo $this->Html->css('pe-icons.css'); ?>

</head>

<body id="page-top" class="index">

    <div class="master-wrapper">

        <div class="preloader">
            <div class="preloader-img">
            	<span class="loading-animation animate-flicker"><?php echo $this->Html->image("loading.GIF"); ?></span>
            </div>
        </div>


        <!-- Header -->
        <header id="headerwrap" class="backstretched fullheight">
            <div class="container vertical-center">
                <div class="intro-text vertical-center text-center smoothie">
                    
                    <div class="intro-heading wow fadeIn heading-font" data-wow-delay="4.0s">We make <span class="rotate">Beatiful, Stylish, Powerful</span></div>
                </div>
            </div>
        </header>

        <section id="welcome">
            <div class="section-inner">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center mb100 wow fadeIn" data-wow-delay="0.5s">                        
                            <h2 class="section-heading">mensmakeへようこそ</h2>
                            <hr class="thin-hr">
                            <h3 class="section-subheading secondary-font">このページを閲覧いただきありがとうございます</h3>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="container">
                        <div class="col-md-6 wow fadeInLeft" data-wow-delay="0.5s">
                            <p class="lead">これからは、美容がファッションになってくる時代が来ると確信しています。
                                昨日の自分よりかっこいい自分に出会うため、毎日をより楽しく過ごすため、そんなあなたのために美容の先端をいく情報を提供するサイトです</p>
                            <p>Our misson<br>
                                「メンズメイクをもっと身近に」
                            </p>
                            <p class="mt30"><?php echo $this->Html->link('メンズメイクとは？', array('controller'=>'posts', 'action'=>'what'), array('class'=>'btn btn-primary btn-theme page-scroll')); ?></p>
                        </div>

                        <div class="col-md-6">
                            <?php echo $this->Html->image('bg1.jpg', array('class'=>'img-responsive alignright wow fadeInRight'));?>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <div class="col-sm-6 nopadding-lr dark-wrapper opaqued background-cover" style="background-image: url('webroot/img/bg/bg1.jpg');">
        	<div class="dark-opaqued section-inner pad-sides-60 match-height" data-mh="promo-inner">
        		<h3>記事を投稿する</h3>
        		<p class="lead">Contrasted interested eat alteration pianoforte sympathize was. He families believed if no elegance interest surprise an. It abode wrong miles an so delay plate. She relation own put outlived may disposed.</p>
                <p class="mt30"><a href="#contact" class="btn btn-primary btn-white page-scroll">Find Out More</a></p>
        	</div>
        </div>

        <div class="col-sm-6 nopadding-lr dark-wrapper opaqued background-cover" style="background-image: url('assets/img/bg/bg3.jpg');">
        	<div class="dark-opaqued section-inner pad-sides-60 match-height text-right" data-mh="promo-inner">
        		<h3>みんなの記事を読む</h3>
        		<p class="lead">Contrasted interested eat alteration pianoforte sympathize was. He families believed if no elegance interest surprise an. It abode wrong miles an so delay plate. She relation own put outlived may disposed.</p>
                <p class="mt30"><a href="#contact" class="btn btn-primary btn-white page-scroll">Find Out More</a></p>
        	</div>
        </div>

     	<section class="dark-wrapper">
            <div class="section-inner">
                <div class="wow fadeIn" data-wow-delay="0.5s">
    				<div class="container text-center">
    					<div class="row">
    						<div class="col-xs-12" role="tabpanel">
    				            <div class="col-xs-4 col-sm-12">
    				                <!-- Nav tabs -->
    				                <ul class="nav nav-justified icon-tabs" id="nav-tabs" role="tablist">
    				                    <li role="presentation" class="active">
    				                        <a href="#dustin" aria-controls="dustin" role="tab" data-toggle="tab">
    				                            <span class="fa-4x pe-7s-headphones"></span>
                                                <span class="tabtitle heading-font">商品を購入する</span>
    				                        </a>
    				                    </li>
    				                    <li role="presentation" class="">
    				                        <a href="#daksh" aria-controls="daksh" role="tab" data-toggle="tab">
    				                           <span class="fa-4x pe-7s-diamond"></span>
                                               <span class="tabtitle heading-font">正しいスキンケアの仕方</span>
    				                        </a>
    				                    </li>
    				                    <li role="presentation" class="">
    				                        <a href="#anna" aria-controls="anna" role="tab" data-toggle="tab">
    				                            <span class="fa-4x pe-7s-plugin"></span>
                                                <span class="tabtitle heading-font">ニキビケア</span>
    				                        </a>
    				                    </li>
    				                </ul>
    				            </div>
    				            <div class="col-xs-8 col-sm-12 mt60">
    				                <!-- Tab panes -->
    				                <div class="tab-content" id="tabs-collapse">            
    				                    <div role="tabpanel" class="tab-pane fade in active" id="dustin">
    				                        <div class="tab-inner">                   
    				                            <p class="lead">Is post each that just leaf no. He connection interested so we an sympathize advantages. To said is it shed want do. Occasional middletons everything so to. Have spot part for his quit may. Enable it is square my an regard. Often merit stuff first oh up hills as he. Servants contempt as although addition dashwood is procured. Interest in yourself an do of numerous feelings cheerful confined.</p>                
    				                        </div>
    				                    </div>
    				                    
    				                    <div role="tabpanel" class="tab-pane fade" id="daksh">
    				                        <div class="tab-inner">
    				                            <p class="lead">Is post each that just leaf no. He connection interested so we an sympathize advantages. To said is it shed want do. Occasional middletons everything so to. Have spot part for his quit may. Enable it is square my an regard. Often merit stuff first oh up hills as he. Servants contempt as although addition dashwood is procured. Interest in yourself an do of numerous feelings cheerful confined.</p>   
    				                        </div>
    				                    </div>
    				                    
    				                    <div role="tabpanel" class="tab-pane fade" id="anna">
    				                        <div class="tab-inner">
    				                            <p class="lead">Is post each that just leaf no. He connection interested so we an sympathize advantages. To said is it shed want do. Occasional middletons everything so to. Have spot part for his quit may. Enable it is square my an regard. Often merit stuff first oh up hills as he. Servants contempt as although addition dashwood is procured. Interest in yourself an do of numerous feelings cheerful confined.</p>   
    				                        </div> 
    				                    </div>
    				                    
    				                    <div role="tabpanel" class="tab-pane fade" id="wafer">
    				                        <div class="tab-inner">
    				                            <p class="lead">Is post each that just leaf no. He connection interested so we an sympathize advantages. To said is it shed want do. Occasional middletons everything so to. Have spot part for his quit may. Enable it is square my an regard. Often merit stuff first oh up hills as he. Servants contempt as although addition dashwood is procured. Interest in yourself an do of numerous feelings cheerful confined.</p>   
    				                        </div>
    				                    </div>
    				                </div>
    				            </div>        
    				        </div>
    					</div>
    				</div>
    			</div>
            </div>
        </section>

        <section class="dark-wrapper opaqued parallax" data-parallax="scroll" data-image-src="assets/img/bg/bg6.jpg" data-speed="0.7">
            <div class="section-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center mb100 wow fadeIn" data-wow-delay="0.5s">
                            <h2 class="section-heading">美容　ニュース</h2>
                            <hr class="thin-hr">
                            <h3 class="section-subheading secondary-font">Satisfaction, everytime.</h3>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <ul class="owl-carousel-paged testimonial-owl wow fadeIn list-unstyled" data-items="1" data-items-tablet="[768,1]" data-items-mobile="[479,1]">
                                <li>
                                    <div class="row">
                                        <div class="col-xs-10 col-xs-offset-1 item-caption text-center">
                                            <div class="mb30">
                                                <?php echo $this->Html->image('bg2.jpg', array('class'=>'img-responsive img-circle testimonial-author'));?>
                                            </div>
                                            <h4>おすすめのスキンケア</h4>
                                            <p class="lead">男性の肌は女性よりも弱いと言われています。肌の綺麗さは清潔感を保つ上で重要です。</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-xs-10 col-xs-offset-1 item-caption text-center">
                                            <div class="mb30">
                                            <?php echo $this->Html->image('bg2.jpg', array('class'=>'img-responsive img-circle testimonial-author'));?>
                                            </div>
                                            <h4>流行りの香水</h4>
                                            <p class="lead">香水はおしゃれの入り口としては、ハードルも低く、これだけでも女性からの好感度はグッとアップします！</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <?php echo $this->Html->script( 'jquery.js'); ?>
    <?php echo $this->Html->script( 'bootstrap.min.js'); ?>
    <?php echo $this->Html->script( 'plugins.js'); ?>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <?php echo $this->Html->script( 'init.js'); ?>

    <script type="text/javascript">
    $(document).ready(function(){
       'use strict';
        jQuery('#headerwrap').backstretch([
          "img/bg1.jpg",
          "img/bg3.png",
          "img/bg2.jpg",
        ], {duration: 8000, fade: 500});
    });
    </script>

</body>

</html>
