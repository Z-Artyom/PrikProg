<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-11-27 18:31:50 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_PUBLIC ~ APPPATH\classes\Controller\base.php [ 20 ] in file:line
2016-11-27 18:31:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-11-27 19:04:45 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant page_title - assumed 'page_title' ~ APPPATH\views\v_base.php [ 4 ] in C:\OpenServer\domains\reporting\application\views\v_base.php:4
2016-11-27 19:04:45 --- DEBUG: #0 C:\OpenServer\domains\reporting\application\views\v_base.php(4): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\OpenServer\d...', 4, Array)
#1 C:\OpenServer\domains\reporting\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\reporting\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\reporting\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\reporting\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\reporting\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 C:\OpenServer\domains\reporting\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\reporting\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\reporting\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\reporting\application\views\v_base.php:4