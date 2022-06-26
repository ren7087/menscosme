<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/ico/favicon.ico">

    <title>Coseme</title>

    <?php echo $this->Html->css('bootstrap.min.css'); ?>
    <?php echo $this->Html->css('animate.css'); ?>
    <?php echo $this->Html->css('plugins.css'); ?>
    <?php echo $this->Html->css('style.css'); ?>
    <?php echo $this->Html->css('pe-icons.css'); ?>

</head>

<body id="page-top" class="index">

    <div class="master-wrapper">
        <header id="headerwrap">
             <ul class="owl-carousel fw-carousel wow fadeIn list-unstyled" data-items="3" data-items-tablet="[768,2]"  data-items-mobile="[479,1]">
                    <li class="nopadding-lr hover-item">
                        <?php echo $this->Html->image('bg2.jpg', array('class'=>'img-responsive smoothie wow fadeIn', 'data-wow-delay'=>'0.5s', 'data-items-mobile'=>'[479,1]'));?>
                        <div class="overlay-item-caption smoothie wow fadeIn" data-wow-delay="0.5s">
                            <div class="vertical-center smoothie">
                                <h3><?php echo $this->Html->link('Perfume', '/perfumes/index', array('title'=>'view project')); ?></h3>
                                <hr class="thin-hr">
                                <p class="secondary-font post-excerpt">香水はおしゃれの入り口としては、ハードルも低く、これだけでも女性からの好感度はグッとアップします！</p>
                            </div>
                        </div>
                        <div class="hover-item-caption smoothie">
                            <h3 class="vertical-center smoothie"><?php echo $this->Html->link('View', '/perfumes/trend', array('class'=>'smoothie btn btn-primary btn-white page-scroll', 'title'=>'view project')); ?></h3>
                        </div>
                    </li>
                    <li class="nopadding-lr hover-item">
                        <?php echo $this->Html->image('bg2.jpg', array('class'=>'img-responsive smoothie wow fadeIn', 'data-wow-delay'=>'0.5s', 'data-items-mobile'=>'[479,1]'));?>
                        <div class="overlay-item-caption smoothie wow fadeIn" data-wow-delay="0.5s">
                            <div class="vertical-center smoothie">
                                <h3><?php echo $this->Html->link('Lip', '/lips/index', array('title'=>'view project')); ?></h3>
                                <hr class="thin-hr">
                                <p class="secondary-font post-excerpt">唇のケアは男性にとっても必須です。男性用リップクリームも多数登場していますが、種類がありすぎて選び方がわからないという人も多いのではないでしょうか？</p>
                            </div>
                        </div>
                        <div class="hover-item-caption smoothie">
                            <h3 class="vertical-center smoothie"><?php echo $this->Html->link('View', '/lips/trend', array('class'=>'smoothie btn btn-primary btn-white page-scroll', 'title'=>'view project')); ?></h3>
                        </div>
                    </li>
                    <li class="nopadding-lr hover-item">
                        <?php echo $this->Html->image('bg2.jpg', array('class'=>'img-responsive smoothie wow fadeIn', 'data-wow-delay'=>'0.5s', 'data-items-mobile'=>'[479,1]'));?>
                        <div class="overlay-item-caption smoothie wow fadeIn" data-wow-delay="0.5s">
                            <div class="vertical-center smoothie">
                                <h3><?php echo $this->Html->link('Skin Care', '/skincares/index', array('title'=>'view project')); ?></h3>
                                <hr class="thin-hr">
                                <p class="secondary-font post-excerpt">男性の肌は女性よりも弱いと言われています。肌の綺麗さは清潔感を保つ上で重要です。</p>
                            </div>
                        </div>
                        <div class="hover-item-caption smoothie">
                            <h3 class="vertical-center smoothie"><?php echo $this->Html->link('View', '/skincares/recommend', array('class'=>'smoothie btn btn-primary btn-white page-scroll', 'title'=>'view project')); ?></h3>
                        </div>
                    </li>
                    <li class="nopadding-lr hover-item">
                        <?php echo $this->Html->image('bg2.jpg', array('class'=>'img-responsive smoothie wow fadeIn', 'data-wow-delay'=>'0.5s', 'data-items-mobile'=>'[479,1]'));?>
                        <div class="overlay-item-caption smoothie wow fadeIn" data-wow-delay="0.5s">
                            <div class="vertical-center smoothie">
                                <h3><?php echo $this->Html->link('Hair oil', '/hairoils/index', array('title'=>'view project')); ?></h3>
                                <hr class="thin-hr">
                                <p class="secondary-font post-excerpt">スタイリングの前に、もしくはヘアオイルだけでセットしても十分決まります。好みのヘアオイルを探してみては？</p>
                            </div>
                        </div>
                        <div class="hover-item-caption smoothie">
                            <h3 class="vertical-center smoothie"><?php echo $this->Html->link('View', '/hairoils/how', array('class'=>'smoothie btn btn-primary btn-white page-scroll', 'title'=>'view project')); ?></h3>
                        </div>
                    </li>
                </ul>
        </header>

        <div class="col-sm-6 nopadding-lr dark-wrapper opaqued background-cover" style="background-image: url('webroot/img/bg/bg1.jpg');">
        	<div class="dark-opaqued section-inner pad-sides-60 match-height" data-mh="promo-inner">
        		<h3>記事を投稿する</h3>
        		<p class="lead">あなたの投稿した記事が人気だったら、記事一覧に追加されるかも！どんどん記事を投稿してください！</p>
                <p class="mt30"><?php echo $this->Html->link('記事を投稿する！', '/posts/add', array('class'=>'btn btn-primary btn-white page-scroll')); ?></p>
        	</div>
        </div>

        <div class="col-sm-6 nopadding-lr dark-wrapper opaqued background-cover" style="background-image: url('assets/img/bg/bg3.jpg');">
        	<div class="dark-opaqued section-inner pad-sides-60 match-height text-right" data-mh="promo-inner">
        		<h3>みんなの記事を読む</h3>
        		<p class="lead">記事を投稿してくれた方々の投稿を読むことができます！面白い記事がたくさんあります！ぜひご覧ください！</p>
                <p class="mt30"><?php echo $this->Html->link('記事を読む！', '/posts/page2', array('class'=>'btn btn-primary btn-white page-scroll')); ?></p>
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
                                        <h3 class="vertical-center smoothie"><a href="#" title="view project">流行りの香水</a></h3>
                                    </div>
                                    <div class="hover-item-caption smoothie">
                                        <div class="vertical-center smoothie">
                                            <a href="#" class="smoothie btn btn-primary btn-white page-scroll">View</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 masonry-portfolio-item perfume">
                                <div class="hover-item">
                                    <?php echo $this->Html->image('bg2.jpg', array('class'=>'img-responsive smoothie wow fadeIn', 'data-wow-delay'=>'0.5s'));?>
                                    <div class="overlay-item-caption smoothie wow fadeIn" data-wow-delay="0.5s">
                                        <h3 class="vertical-center smoothie"><a href="#" title="view project">香水の付け方</a></h3>
                                    </div>
                                    <div class="hover-item-caption smoothie">
                                        <div class="vertical-center smoothie">
                                            <a href="#" class="smoothie btn btn-primary btn-white page-scroll">View</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- リップのデータ -->
                            <div class="col-md-4 masonry-portfolio-item lip">
                                <div class="hover-item">
                                <?php echo $this->Html->image('bg2.jpg', array('class'=>'img-responsive smoothie wow fadeIn', 'data-wow-delay'=>'0.5s'));?>
                                    <div class="overlay-item-caption smoothie wow fadeIn" data-wow-delay="0.5s">
                                        <h3 class="vertical-center smoothie"><a href="#" title="view project">今流行りのリップ</a></h3>
                                    </div>
                                    <div class="hover-item-caption smoothie">
                                        <div class="vertical-center smoothie">
                                            <a href="#" class="smoothie btn btn-primary btn-white page-scroll">View</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 masonry-portfolio-item lip">
                                <div class="hover-item">
                                <?php echo $this->Html->image('bg2.jpg', array('class'=>'img-responsive smoothie wow fadeIn', 'data-wow-delay'=>'0.5s'));?>
                                    <div class="overlay-item-caption smoothie wow fadeIn" data-wow-delay="0.5s">
                                        <h3 class="vertical-center smoothie"><a href="#" title="view project">保湿力の高いリップ</a></h3>
                                    </div>
                                    <div class="hover-item-caption smoothie">
                                        <div class="vertical-center smoothie">
                                            <a href="#" class="smoothie btn btn-primary btn-white page-scroll">View</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- スキンケアのデータ -->
                            <div class="col-md-4 masonry-portfolio-item skinCare">
                                <div class="hover-item">
                                <?php echo $this->Html->image('bg2.jpg', array('class'=>'img-responsive smoothie wow fadeIn', 'data-wow-delay'=>'0.5s'));?>
                                    <div class="overlay-item-caption smoothie wow fadeIn" data-wow-delay="0.5s">
                                        <h3 class="vertical-center smoothie"><a href="#" title="view project">スキンケアの方法</a></h3>
                                    </div>
                                    <div class="hover-item-caption smoothie">
                                        <div class="vertical-center smoothie">
                                            <a href="#" class="smoothie btn btn-primary btn-white page-scroll">View</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 masonry-portfolio-item skinCare">
                                <div class="hover-item">
                                <?php echo $this->Html->image('bg2.jpg', array('class'=>'img-responsive smoothie wow fadeIn', 'data-wow-delay'=>'0.5s'));?>
                                    <div class="overlay-item-caption smoothie wow fadeIn" data-wow-delay="0.5s">
                                        <h3 class="vertical-center smoothie"><a href="#" title="view project">おすすめの商品</a></h3>
                                    </div>
                                    <div class="hover-item-caption smoothie">
                                        <div class="vertical-center smoothie">
                                            <a href="#" class="smoothie btn btn-primary btn-white page-scroll">View</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ヘアオイルのデータ -->
                            <div class="col-md-4 masonry-portfolio-item hairOil">
                                <div class="hover-item">
                                <?php echo $this->Html->image('bg2.jpg', array('class'=>'img-responsive smoothie wow fadeIn', 'data-wow-delay'=>'0.5s'));?>
                                    <div class="overlay-item-caption smoothie wow fadeIn" data-wow-delay="0.5s">
                                        <h3 class="vertical-center smoothie"><a href="#" title="view project">ヘアオイルとは？</a></h3>
                                    </div>
                                    <div class="hover-item-caption smoothie">
                                        <div class="vertical-center smoothie">
                                            <a href="#" class="smoothie btn btn-primary btn-white page-scroll">View</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 masonry-portfolio-item hairOil">
                                <div class="hover-item">
                                <?php echo $this->Html->image('bg2.jpg', array('class'=>'img-responsive smoothie wow fadeIn', 'data-wow-delay'=>'0.5s'));?>
                                    <div class="overlay-item-caption smoothie wow fadeIn" data-wow-delay="0.5s">
                                        <h3 class="vertical-center smoothie"><a href="#" title="view project">ヘアオイルの選び方</a></h3>
                                    </div>
                                    <div class="hover-item-caption smoothie">
                                        <div class="vertical-center smoothie">
                                            <a href="#" class="smoothie btn btn-primary btn-white page-scroll">View</a>
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

    <?php echo $this->Html->script( 'jquery.js'); ?>
    <?php echo $this->Html->script( 'bootstrap.min.js'); ?>
    <?php echo $this->Html->script( 'plugins.js'); ?>
    <?php echo $this->Html->script( 'init.js'); ?>

</body>

</html>
