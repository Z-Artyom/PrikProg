<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-11-29 08:41:48 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\views\v_home.php [ 1 ] in C:\OpenServer\domains\reporting\application\views\v_home.php:1
2016-11-29 08:41:48 --- DEBUG: #0 C:\OpenServer\domains\reporting\application\views\v_home.php(1): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\OpenServer\d...', 1, Array)
#1 C:\OpenServer\domains\reporting\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\reporting\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\reporting\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\OpenServer\domains\reporting\application\views\v_base.php(22): Kohana_View->__toString()
#5 C:\OpenServer\domains\reporting\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\reporting\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\reporting\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\reporting\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\reporting\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#11 C:\OpenServer\domains\reporting\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\reporting\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\reporting\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\reporting\application\views\v_home.php:1