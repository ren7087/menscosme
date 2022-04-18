<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->fetch('meta');
	?>
	<?php echo $this->Html->css('bootstrap.min.css'); ?>
    <?php echo $this->Html->css('animate.css'); ?>
    <?php echo $this->Html->css('plugins.css'); ?>
    <?php echo $this->Html->css('style.css'); ?>
    <?php echo $this->Html->css('pe-icons.css'); ?>
</head>
<body>
	<div id="container">
		<div id="header">
			<nav class="navbar navbar-default navbar-fixed-top fadeInDown" data-wow-delay="0.5s">
				<div class="container-fluid">
					<div class="navbar-header page-scroll">
						<?php echo $this->Html->link('Mensmake', '/posts', array('class'=>'navbar-brand smoothie')); ?>
					</div>

					<div class="collapse navbar-collapse" id="main-navigation">
						<ul class="nav navbar-nav navbar-right">
							<li class="dropdown">
								<?php echo $this->Html->link('Home', "#", array('class'=>'dropdown-toggle', 'data-hover'=>'dropdown', 'data-toggle'=>'dropdown')); ?>
								<ul class="dropdown-menu" role="menu">
								    <li><?php echo $this->Html->link('おすすめの記事', array('controller'=>'posts', 'action'=>'view')); ?></li>
									<li><?php echo $this->Html->link('Perfume', array('controller'=>'perfumes', 'action'=>'trend')); ?></li>
									<li><?php echo $this->Html->link('Lip', array('controller'=>'lips', 'action'=>'trend')); ?></li>
									<li><?php echo $this->Html->link('Skin care', array('controller'=>'skincares', 'action'=>'recommend')); ?></li>
									<li><?php echo $this->Html->link('Hair oil', array('controller'=>'hairoils', 'action'=>'how')); ?></li>
									<li><?php echo $this->Html->link('Shop', array('controller'=>'shops', 'action'=>'index')); ?></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Articles</a>
								<ul class="dropdown-menu" role="menu">
									<li><?php echo $this->Html->link('記事を投稿する', array('controller'=>'posts', 'action'=>'add')); ?></li>
									<li><?php echo $this->Html->link('記事一覧', array('controller'=>'posts', 'action'=>'view')); ?></li>
									<li><?php echo $this->Html->link('みんなの記事を見る', array('controller'=>'posts', 'action'=>'page2')); ?></li>
								</ul>
							</li>
							<li class="dropdown">
								<?php echo $this->Html->link('Shop', "#", array('class'=>'dropdown-toggle', 'data-hover'=>'dropdown', 'data-toggle'=>'dropdown')); ?>
								<ul class="dropdown-menu" role="menu">
									<li><?php echo $this->Html->link('Shop', array('controller'=>'shops', 'action'=>'index')); ?></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Login/Logout</a>
								<ul class="dropdown-menu" role="menu">
									<?php if ($auth) : ?>
										<li><a href='#'>ログイン済みです！</a></li>
									<?php else: ?>
										<li><?php echo $this->Html->link('Login', array('controller'=>'users', 'action'=>'login')); ?></li>
									<?php endif; ?>
									<li><?php echo $this->Html->link('Logout', array('controller'=>'users', 'action'=>'logout')); ?></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>

		<div id="content">

			<?php echo $this->Flash->render(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>

		<div id="footer">
		<section class="dark-wrapper">
            <div class="section-inner">
            	<div class="container">
            		<div class="row">
    		            <div class="col-md-4">
    		            	<div class="widget about-us-widget">
                                <h4 class="widget-title"><strong>About</strong></h4>
                                <p>このサイトはrenによって作成されました。最終更新日は2022/04/18 です。</p>
                            </div>
    		        	</div>
    		        	<div class="col-md-4">
                            <div class="widget">
                              <h4 class="widget-title"><strong>最近投稿された</strong> 記事</h4>
                              <div class="tagcloud">
								<?php echo $this->Html->link('Perfume', array('controller'=>'perfumes', 'action'=>'trend'), array('class'=>'tag-link btn btn-theme btn-white btn-xs', 'title'=>'3 topics')); ?>
								<?php echo $this->Html->link('Lip', array('controller'=>'lips', 'action'=>'trend'), array('class'=>'tag-link btn btn-theme btn-white btn-xs', 'title'=>'3 topics')); ?>
								<?php echo $this->Html->link('Skin Care', array('controller'=>'skincares', 'action'=>'recommend'), array('class'=>'tag-link btn btn-theme btn-white btn-xs', 'title'=>'3 topics')); ?>
								<?php echo $this->Html->link('Perfume', array('controller'=>'perfumes', 'action'=>'trend'), array('class'=>'tag-link btn btn-theme btn-white btn-xs', 'title'=>'3 topics')); ?>
                              </div> 
                            </div>
    		        	</div>
						<div class="col-md-4">
    		            	<div class="widget about-us-widget">
                                <h4 class="widget-title"><strong>Want</strong></h4>
                                <p>新しい靴を履いた日はそれだけでテンションが上がり、まるで世界が違って見えます。そんな体験をメイクを通して実感してほしい</p>
                            </div>
    		        	</div>
    	        	</div>
            	</div>
            </div>
        </section>

        <footer class="white-wrapper">
            <div class="container">
                <div class="row">
                    <hr class="thin-hr" />

                    <div class="col-md-12 text-center wow fadeIn" data-wow-delay="0.5s">
                        <span class="copyright">Created 2022.  Owner Ren</span>
                    </div>
                </div>
            </div>
        </footer>		
		</div>
	</div>
</body>
</html>
