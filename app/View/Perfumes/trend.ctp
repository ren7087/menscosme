<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/ico/favicon.ico">

    <title>Cosme</title>

</head>

<body id="page-top" class="index">

    <div class="master-wrapper">
        <section class="dark-wrapper opaqued parallax" data-parallax="scroll" data-image-src="assets/img/bg/bg2.jpg" data-speed="0.7">
            <div class="section-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 mt30 text-center wow fadeIn" data-wow-delay="0.5s">
                            <h2 class="section-heading">流行りの香水</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="section-inner">
                <div class="container">
                    <div class="row">
                        <div id="post-content" class="col-sm-12 blog-item mb60 wow fadeIn" data-wow-delay="0.5s">
                            <div class="row">
                                <div class="col-xs-10 single-post-content">
                                    <h3>diptyque オードトワレタムダオ</h3>
                                    <p>ディップティックとは、フランス発のフレグランスブランドで、1961年に誕生したブランドです。画家、劇場監督、インテリアデザイナーの3人によって創業されたインテリア雑貨店がルーツというところもおもしろいですよね。</p>
                                    <p>メンズとウィメンズでユニセックスフレグランスです。香水の場合、女性向けや男性向けに特化しているブランドが多い中、男女ともにモテる香りということで人気が高いブランドです。</p>
                                    <?php echo $this->Html->image('perfume/1.jpg', array('class'=>'img-responsive smoothie wow fadeIn', 'data-wow-delay'=>'0.5s'));?>
                                    <br>

                                    <div data-easyshare data-easyshare-url="http://www.distinctivethemes.com/">
                                        <!-- Total -->
                                        <button data-easyshare-button="total">
                                            <span>Total</span>
                                        </button>
                                        <span data-easyshare-total-count>0</span>

                                        <!-- Facebook -->
                                        <button data-easyshare-button="facebook">
                                            <span>Share</span>
                                        </button>
                                        <span data-easyshare-button-count="facebook">0</span>

                                        <!-- Twitter -->
                                        <button data-easyshare-button="twitter" data-easyshare-tweet-text="">
                                            <span>Tweet</span>
                                        </button>
                                        <span data-easyshare-button-count="twitter">0</span>

                                        <div data-easyshare-loader>Loading...</div>
                                    </div>
                                </div>                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <?php echo $this->Html->script( 'jquery.js'); ?>
    <?php echo $this->Html->script( 'bootstrap.min.js'); ?>
    <?php echo $this->Html->script( 'plugins.js'); ?>
    <?php echo $this->Html->script( 'init.js'); ?>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>

</body>

</html>
