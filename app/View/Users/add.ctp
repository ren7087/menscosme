<br>
<br>
<br>
<br>
<?php if (!empty($auth)): ?> 
    <div style="margin-left: 100px;">
        <br>
        <?php echo 'あなたは既に新規登録済みです！'; ?>
    </div>    
<?php else: ?>
    <div style="margin-left: 100px">
        <h2>新規登録画面</h2>
        <?php echo $this->Form->create('User'); ?>
        <?php echo $this->Form->input('username', array('required'=>"true")); ?>
        <?php echo $this->Form->input('password', array('required'=>"true")); ?>
        <?php echo $this->Form->end('登録'); ?>
    </div>
<?php endif; ?>
<br>
<br>