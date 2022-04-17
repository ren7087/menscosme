<br>
<br>
<br>
<br>
<br>
<div class="uploads form" style="margin-left: 100px;">
    <?php echo $this->Form->create('Post', array('type' => 'file')); ?>
    <fieldset>
    <legend><?php echo __('記事を投稿する!'); ?></legend>
    <?php echo $this->Form->input('title', array('label'=>false, 'placeholder'=>'titleを入力', 'required'=>"required")); ?>
    <?php echo $this->Form->input('body', array('rows'=>3, 'label'=>false, 'placeholder'=>'bodyを入力', 'required'=>"required")); ?>
    <?php echo $this->Form->file('file', array('label'=>false, 'required'=>"required")); ?>
    <?php echo $this->Form->hidden('Post.username', array('type'=>'hidden', 'value'=>$username)); ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit'));?>
</div>
<br>
<br>