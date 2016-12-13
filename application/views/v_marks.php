Добро пожаловать, <?=$user?>! &nbsp; <?=html::anchor('index/logout','Выйти') ?><br/></br>
<b>Ваши радиостанции</b>
<?php if($likes):?>
<?php foreach ($likes as $like):?>
<br/><br/><div><i><?=$like['name']?></i></div>
<div>Оценили: <b><?=$like['count_marks']?></b> пользователей</div>
<div>Средняя оценка: <b><?=$like['avg_mark']?></b> </div>
<?php endforeach?>
<?php endif?>