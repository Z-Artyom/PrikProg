<!DOCTYPE HTML>
<html>
<head>
<title><?=$site_name?> — <?=$page_title?></title>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<?php foreach ($styles as $file => $type) { echo HTML::style($file, array('media' => $type)), "\n"; }?>
    <?php foreach ($scripts as $file_script):?>
        <?=html::script($file_script)?>
    <?php endforeach?>
</head>
<body>
<div class="wrapper">
        <div class="header">
            <div class="header-left"><div class="logo"></div></div>
            <div class="header-center"></div>
            <div class="header-right">
            </div>
        </div>
        <div class="middle-container">
        
           <? 

           if (isset($block_center)):?>
                    <? foreach ($block_center as $cblock):?>
                        <?=$cblock?>
                    <?endforeach?>
            <?endif?>
           
        </div>
        <div class="shift"></div>
    </div>
	
    <div class="footer">
            <div class="footer-content">
                <div class="footer-text-left"></div>
                <div class="footer-text-right"></div>
            </div>
        </div>
</body>
</html>






