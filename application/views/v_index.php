<div style="margin:0 auto;
width:300px;
height:200px;">

<?php if($errors):?>
<?php foreach ($errors as $error):?>
<div class="errors"><?=$error?></div>
<?php endforeach?>
<?php endif?>

<?=Form::open('index/index')?>
<table style="display: block; width: 100%; padding: 10px;">
    <tr><td><?=Form::label('username', 'Логин')?>: </td><td><?=Form::input('username', null, array('size' => 15, 'class' => 'feed', 'placeholder' => 'Ваш логин'))?></td></tr>
    <tr><td><?=Form::label('password', 'Пароль')?>: </td><td><?=Form::password('password', null, array('size' => 15, 'class' => 'feed', 'placeholder' => 'Ваш логин'))?></td></tr>
    <tr><td><?=Form::submit('submit', 'Войти', array('class' => 'subkbopka'))?></td></tr>
</table>
<?=Form::close()?>
</div>