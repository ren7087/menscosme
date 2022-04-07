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

    <title>Grace by Distinctive Themes</title>

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
        <header id="headerwrap">
             <ul class="owl-carousel fw-carousel wow fadeIn list-unstyled" data-items="3" data-items-tablet="[768,2]"  data-items-mobile="[479,1]">
                    <li class="nopadding-lr hover-item">
                        <?php echo $this->Html->image('bg2.jpg', array('class'=>'img-responsive smoothie wow fadeIn', 'data-wow-delay'=>'0.5s', 'data-items-mobile'=>'[479,1]'));?>
                        <div class="overlay-item-caption smoothie wow fadeIn" data-wow-delay="0.5s">
                            <div class="vertical-center smoothie">
                                <h3><a href="single-post.html" title="view project">Perfume</a></h3>
                                <hr class="thin-hr">
                                <p class="secondary-font post-excerpt">香水はおしゃれの入り口としては、ハードルも低く、これだけでも女性からの好感度はグッとアップします！</p>
                            </div>
                        </div>
                        <div class="hover-item-caption smoothie">
                            <h3 class="vertical-center smoothie"><a href="single-post.html" class="smoothie btn btn-primary btn-white page-scroll" title="view article">View</a></h3>
                        </div>
                    </li>
                    <li class="nopadding-lr hover-item">
                        <?php echo $this->Html->image('bg2.jpg', array('class'=>'img-responsive smoothie wow fadeIn', 'data-wow-delay'=>'0.5s', 'data-items-mobile'=>'[479,1]'));?>
                        <div class="overlay-item-caption smoothie wow fadeIn" data-wow-delay="0.5s">
                            <div class="vertical-center smoothie">
                                <h3><a href="single-post.html" title="view project">Lip</a></h3>
                                <hr class="thin-hr">
                                <p class="secondary-font post-excerpt">唇のケアは男性にとっても必須です。男性用リップクリームも多数登場していますが、種類がありすぎて選び方がわからないという人も多いのではないでしょうか？</p>
                            </div>
                        </div>
                        <div class="hover-item-caption smoothie">
                            <h3 class="vertical-center smoothie"><a href="single-post.html" class="smoothie btn btn-primary btn-white page-scroll" title="view article">View</a></h3>
                        </div>
                    </li>
                    <li class="nopadding-lr hover-item">
                        <?php echo $this->Html->image('bg2.jpg', array('class'=>'img-responsive smoothie wow fadeIn', 'data-wow-delay'=>'0.5s', 'data-items-mobile'=>'[479,1]'));?>
                        <div class="overlay-item-caption smoothie wow fadeIn" data-wow-delay="0.5s">
                            <div class="vertical-center smoothie">
                                <h3><a href="single-post.html" title="view project">Skin</a></h3>
                                <hr class="thin-hr">
                                <p class="secondary-font post-excerpt">男性の肌は女性よりも弱いと言われています。肌の綺麗さは清潔感を保つ上で重要です。</p>
                            </div>
                        </div>
                        <div class="hover-item-caption smoothie">
                            <h3 class="vertical-center smoothie"><a href="single-post.html" class="smoothie btn btn-primary btn-white page-scroll" title="view article">View</a></h3>
                        </div>
                    </li>
                    <li class="nopadding-lr hover-item">
                        <?php echo $this->Html->image('bg2.jpg', array('class'=>'img-responsive smoothie wow fadeIn', 'data-wow-delay'=>'0.5s', 'data-items-mobile'=>'[479,1]'));?>
                        <div class="overlay-item-caption smoothie wow fadeIn" data-wow-delay="0.5s">
                            <div class="vertical-center smoothie">
                                <h3><a href="single-post.html" title="view project">Hair oil</a></h3>
                                <hr class="thin-hr">
                                <p class="secondary-font post-excerpt">スタイリングの前に、もしくはヘアオイルだけでセットしても十分決まります。好みのヘアオイルを探してみては？</p>
                            </div>
                        </div>
                        <div class="hover-item-caption smoothie">
                            <h3 class="vertical-center smoothie"><a href="single-post.html" class="smoothie btn btn-primary btn-white page-scroll" title="view article">View</a></h3>
                        </div>
                    </li>
                </ul>
        </header>

        <div class="col-sm-6 nopadding-lr dark-wrapper opaqued background-cover" style="background-image: url('webroot/img/bg/bg1.jpg');">
        	<div class="dark-opaqued section-inner pad-sides-60 match-height" data-mh="promo-inner">
        		<h3>記事を投稿する</h3>
        		<p class="lead">あなたの投稿した記事が人気だったら、記事一覧に追加されるかも！どんどん記事を投稿してください！</p>
                <p class="mt30"><?php echo $this->Html->link('Post article', '/posts/add', array('class'=>'btn btn-primary btn-white page-scroll')); ?></p>
        	</div>
        </div>

        <div class="col-sm-6 nopadding-lr dark-wrapper opaqued background-cover" style="background-image: url('assets/img/bg/bg3.jpg');">
        	<div class="dark-opaqued section-inner pad-sides-60 match-height text-right" data-mh="promo-inner">
        		<h3>みんなの記事を読む</h3>
        		<p class="lead">記事を投稿してくれた方々の投稿を読むことができます！面白い記事がたくさんあります！</p>
                <p class="mt30"><a href="#contact" class="btn btn-primary btn-white page-scroll">Find Out More</a></p>
        	</div>
        </div>

        <section> 
            <div class="section-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center mb100 wow fadeIn" data-wow-delay="0.5s">                        
                            <h2 class="section-heading">Mens make</h2>
                            <hr class="thin-hr">
                            <h3 class="section-subheading secondary-font">おすすめの記事</h3>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="masonry-portfolio row">
                         <ul class="masonry-portfolio-filter mb30 text-center list-inline wow fadeIn" data-wow-delay="0.5s">
                            <li><?php echo $this->Html->link('All', '#', array('class'=>'btn btn-primary btn-transparent active', 'data-filter'=>'*')); ?></li>
                            <li><?php echo $this->Html->link('Perfume', '#', array('class'=>'btn btn-primary btn-transparent', 'data-filter'=>'.perfume')); ?></li>
                            <li><?php echo $this->Html->link('Lip', '#', array('class'=>'btn btn-primary btn-transparent', 'data-filter'=>'.lip')); ?></li>
                            <li><?php echo $this->Html->link('Skin care', '#', array('class'=>'btn btn-primary btn-transparent', 'data-filter'=>'.skinCare')); ?></li>
                            <li><?php echo $this->Html->link('Hair oil', '#', array('class'=>'btn btn-primary btn-transparent', 'data-filter'=>'.hairOil')); ?></li>
                        </ul>

                        <div class="masonry-portfolio-items">
                            <!-- 香水のデータ -->
                            <div class="col-md-4 masonry-portfolio-item perfume">
                                <div class="hover-item">
                                    <?php echo $this->Html->image('bg2.jpg', array('class'=>'img-responsive smoothie wow fadeIn', 'data-wow-delay'=>'0.5s'));?>
                                    <div class="overlay-item-caption smoothie wow fadeIn" data-wow-delay="0.5s">
                                        <h3 class="vertical-center smoothie"><a href="single-portfolio.html" title="view project">流行りの香水</a></h3>
                                    </div>
                                    <div class="hover-item-caption smoothie">
                                        <div class="vertical-center smoothie">
                                            <a href="single-portfolio.html" class="smoothie btn btn-primary btn-white page-scroll">View</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 masonry-portfolio-item perfume">
                                <div class="hover-item">
                                    <?php echo $this->Html->image('bg2.jpg', array('class'=>'img-responsive smoothie wow fadeIn', 'data-wow-delay'=>'0.5s'));?>
                                    <div class="overlay-item-caption smoothie wow fadeIn" data-wow-delay="0.5s">
                                        <h3 class="vertical-center smoothie"><a href="single-portfolio.html" title="view project">香水の付け方</a></h3>
                                    </div>
                                    <div class="hover-item-caption smoothie">
                                        <div class="vertical-center smoothie">
                                            <a href="single-portfolio.html" class="smoothie btn btn-primary btn-white page-scroll">View</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- リップのデータ -->
                            <div class="col-md-4 masonry-portfolio-item lip">
                                <div class="hover-item">
                                <?php echo $this->Html->image('bg2.jpg', array('class'=>'img-responsive smoothie wow fadeIn', 'data-wow-delay'=>'0.5s'));?>
                                    <div class="overlay-item-caption smoothie wow fadeIn" data-wow-delay="0.5s">
                                        <h3 class="vertical-center smoothie"><a href="single-portfolio.html" title="view project">今流行りのリップ</a></h3>
                                    </div>
                                    <div class="hover-item-caption smoothie">
                                        <div class="vertical-center smoothie">
                                            <a href="single-portfolio.html" class="smoothie btn btn-primary btn-white page-scroll">View</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 masonry-portfolio-item lip">
                                <div class="hover-item">
                                <?php echo $this->Html->image('bg2.jpg', array('class'=>'img-responsive smoothie wow fadeIn', 'data-wow-delay'=>'0.5s'));?>
                                    <div class="overlay-item-caption smoothie wow fadeIn" data-wow-delay="0.5s">
                                        <h3 class="vertical-center smoothie"><a href="single-portfolio.html" title="view project">保湿力の高いリップ</a></h3>
                                    </div>
                                    <div class="hover-item-caption smoothie">
                                        <div class="vertical-center smoothie">
                                            <a href="single-portfolio.html" class="smoothie btn btn-primary btn-white page-scroll">View</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- スキンケアのデータ -->
                            <div class="col-md-4 masonry-portfolio-item skinCare">
                                <div class="hover-item">
                                <?php echo $this->Html->image('bg2.jpg', array('class'=>'img-responsive smoothie wow fadeIn', 'data-wow-delay'=>'0.5s'));?>
                                    <div class="overlay-item-caption smoothie wow fadeIn" data-wow-delay="0.5s">
                                        <h3 class="vertical-center smoothie"><a href="single-portfolio.html" title="view project">スキンケアの方法</a></h3>
                                    </div>
                                    <div class="hover-item-caption smoothie">
                                        <div class="vertical-center smoothie">
                                            <a href="single-portfolio.html" class="smoothie btn btn-primary btn-white page-scroll">View</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 masonry-portfolio-item skinCare">
                                <div class="hover-item">
                                <?php echo $this->Html->image('bg2.jpg', array('class'=>'img-responsive smoothie wow fadeIn', 'data-wow-delay'=>'0.5s'));?>
                                    <div class="overlay-item-caption smoothie wow fadeIn" data-wow-delay="0.5s">
                                        <h3 class="vertical-center smoothie"><a href="single-portfolio.html" title="view project">おすすめの商品</a></h3>
                                    </div>
                                    <div class="hover-item-caption smoothie">
                                        <div class="vertical-center smoothie">
                                            <a href="single-portfolio.html" class="smoothie btn btn-primary btn-white page-scroll">View</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ヘアオイルのデータ -->
                            <div class="col-md-4 masonry-portfolio-item hairOil">
                                <div class="hover-item">
                                <?php echo $this->Html->image('bg2.jpg', array('class'=>'img-responsive smoothie wow fadeIn', 'data-wow-delay'=>'0.5s'));?>
                                    <div class="overlay-item-caption smoothie wow fadeIn" data-wow-delay="0.5s">
                                        <h3 class="vertical-center smoothie"><a href="single-portfolio.html" title="view project">ヘアオイルとは？</a></h3>
                                    </div>
                                    <div class="hover-item-caption smoothie">
                                        <div class="vertical-center smoothie">
                                            <a href="single-portfolio.html" class="smoothie btn btn-primary btn-white page-scroll">View</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 masonry-portfolio-item hairOil">
                                <div class="hover-item">
                                <?php echo $this->Html->image('bg2.jpg', array('class'=>'img-responsive smoothie wow fadeIn', 'data-wow-delay'=>'0.5s'));?>
                                    <div class="overlay-item-caption smoothie wow fadeIn" data-wow-delay="0.5s">
                                        <h3 class="vertical-center smoothie"><a href="single-portfolio.html" title="view project">ヘアオイルの選び方</a></h3>
                                    </div>
                                    <div class="hover-item-caption smoothie">
                                        <div class="vertical-center smoothie">
                                            <a href="single-portfolio.html" class="smoothie btn btn-primary btn-white page-scroll">View</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                 
            </div>
        </section>  

    	<div role="tabpanel">
                <div role="tabpanel" class="tab-pane fade" id="contact2">
                	<div id="mapwrapper"></div>                
                </div>
                
            </div>      
    	</div>
    </div>

    <!-- jQuery -->
    <?php echo $this->Html->script( 'jquery.js'); ?>
    <?php echo $this->Html->script( 'bootstrap.min.js'); ?>
    <?php echo $this->Html->script( 'plugins.js'); ?>
    <?php echo $this->Html->script( 'init.js'); ?>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>

</body>

</html>
