<br>
<br>
<br>
<br>
<?php if (!empty($auth)): ?> 
    <div style="margin-left: 100px;">
        <br>
        <?php echo 'あなたは既にログイン済みです！'; ?>
    </div>
<?php else: ?>
    <div style="margin-left: 100px;">
    <h3>ログイン画面</h3>
    <?php echo $this->Form->create('User'); ?>
    <table>
    <tr>
        <th>ユーザーID</th>
        <td><?php echo $this->Form->input('username', array('label' => '', 'required'=>'true')); ?></td>
    </tr>
    <tr>
        <th>パスワード</th>
        <td><?php echo $this->Form->input('password', array('label' => '', 'required'=>'true')); ?></td>
    </tr>
    <tr>
        <td colspan="2" class="center"><?php echo $this->Form->end('Login'); ?></td>
    </tr>
    </table>
    <br>
    <p style="color:#F00;"><?php echo '*記事を投稿するページと自分の記事を見るページはログインが必須です'; ?></p>
    <br>
    <br>
    <h3><?php echo $this->Html->link("ユーザー登録がまだの方はこちらをクリック", "/users/add"); ?></h2>
    </div>
<?php endif ; ?>
<br>
<br>
