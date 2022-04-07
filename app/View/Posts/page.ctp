<br>
<br>
<br>
<br>
<?php
/*
作成者の名前も入れていいかも
*/ ?>
<?php if ($posts): ?>
    <div style="margin-left: 100px;">
    <h2><?php echo 'Uploads'; ?></h4><br>
    <?php foreach ($posts as $post) : ?>
    <h4><?php echo 'title'; ?></h4>
    <?php echo h($post['Post']['title']); ?><br>
    <h4><?php echo 'body'; ?></h4>  
    <?php echo h($post['Post']['body']); ?><br>
    <h4><?php echo 'image'; ?></h4>   
    <?php echo $this->Html->image($post["Post"]["image"]); ?><br><br><br> 
    <?php endforeach; ?>
    </div>
<?php else: ?>
    <h2><?php echo 'どんどん記事を投稿してください！'; ?></h2>  
<?php endif; ?>
<br>
<br>