<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/ico/favicon.ico">

    <title>Mensmake</title>

</head>

<body id="page-top" class="index">

    <div>
        <section class="dark-wrapper opaqued parallax">
            <div class="section-inner">
                <div class="row">
                    <div class="col-lg-12 mt30 text-center wow fadeIn">
                        <?php foreach ($posts as $post) :  ?>
                            <h2 class="section-heading"><?php echo $post['Post']['title']; ?></h2>
                            <span class="meta-item">POSTED IN <span class="secondary-font"><?php echo $post['Post']['created']; ?></span></span>
                            <span class="meta-item">こちらの記事は<span class="secondary-font" style="color: red;"><?php echo $post['Post']['username']; ?></span>さんが投稿しました！</span>
                            <!-- <span class="meta-item">COMMENTS <span class="secondary-font">3</span></span> -->
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <?php foreach ($posts as $post) :  ?>
                    <br>
                    <?php echo $this->Html->image($post["Post"]["image"], array("class"=>"img-responsive smoothie wow fadeIn")); ?>
                    <br><p style="font-size: 30px;"><?php echo $post['Post']['body']; ?></p><br>
                <?php endforeach ; ?>                    

                <h3>Comments</h3>
                <?php foreach ($post['Comment'] as $comment): ?>
                        <div class="well">
                            <span><?php echo h($comment['username']); ?></span>&nbsp; <small><?php echo h($comment['created']); ?></small>
                            <p><?php echo h($comment['body']); ?></p>
                        </div>
                <?php endforeach; ?>

                <h3>Add Comment</h3>
                <?php echo $this->Form->create('Comment', array("url"=>"/comments/add", 'type'=>'post', 'id'=>'commentform', 'class'=>'comment-form')); ?>
                <?php echo $this->Form->hidden('Comment.username', array('type'=>'hidden', 'value'=>$username, "class"=>"form-control col-md-4")); ?>
                <?php echo $this->Form->input('body', array('label' => false, 'placeholder' => 'コメントを記入してください', "class"=>"form-control", "required"=>true)); ?>
                <?php echo $this->Form->input("Comment.post_id", array("type"=>'hidden', 'value'=>$post['Post']['id'])); ?><br>
                <?php echo $this->Form->end("Reply", array("class"=>"btn btn-primary pull-right mt30")); ?><br>
            </div>
        </section>

    </div>

    <!-- jQuery -->
    <?php echo $this->Html->script( 'plugins.js'); ?>
    <?php echo $this->Html->script( 'init.js'); ?>

</body>

</html>
