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

<body id="page-top" class="index">

    <div class="master-wrapper">

        <div class="preloader">
            <div class="preloader-img">
            	<span class="loading-animation animate-flicker"><?php echo $this->Html->image("loading.GIF"); ?></span>
            </div>
        </div>

        <section class="dark-wrapper opaqued parallax" data-parallax="scroll" data-speed="0.7">
            <div class="section-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 mt30 text-center wow fadeIn" data-wow-delay="0.5s">
                            <h2 class="section-heading">みんなの記事</h2>
                            <h3 class="section-subheading text-muted secondary-font">いい記事がいっぱいです!</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="section-inner">
                <div class="container">
                    <div class="row">

                        <?php /*
                        何のジャンルの記事か分類する機能をつけてもいいかも
                        */ ?>
                        <div class="col-sm-12 blog-item mb100 wow fadeIn" data-wow-delay="0.5s">
                            <?php foreach ($posts as $post) :  ?>
                            <div class="row">
                                <div class="col-xs-10">
                                    <h2 class="post-title"><?php echo $post['Post']['title']; ?></h2>
                                    <div class="item-metas text-muted mb30">
                                        <span class="meta-item">こちらの記事は<span class="secondary-font" style="color: red;"><?php echo $post['Post']['username']; ?></span>さんが投稿しました！</span>
                                        <!-- <span class="meta-item">COMMENTS <span class="secondary-font">3</span></span> -->
                                    </div>
                                    <div class="hover-item mb30">
                                        <?php echo $this->Html->image($post["Post"]["image"], array("class"=>"img-responsive smoothie wow fadeIn", "data-wow-delay"=>"0.5s")); ?>
                                        <div class="overlay-item-caption smoothie wow fadeIn" data-wow-delay="0.5s"></div>
                                        <div class="hover-item-caption smoothie">
                                            <h3 class="vertical-center smoothie"><?php echo $this->Html->link("View", '/posts/page/'.$post['Post']['id'], array("class"=>"smoothie btn btn-primary btn-white page-scroll", "title"=>"view article")); ?></h3>
                                        </div>
                                    </div>
                                    <p><?php echo $post['Post']['body']; ?></p>
                                    <?php echo $this->Html->link("Read More", '/posts/page/'.$post['Post']['id'], array("class"=>"btn btn-primary mt30")); ?>
                                </div>
                            </div><br><br>
                            <?php endforeach ; ?>
                        </div>

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
