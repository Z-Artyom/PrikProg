<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-12-12 09:09:43 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: count ~ APPPATH\views\v_home.php [ 5 ] in C:\OpenServer\domains\reporting\application\views\v_home.php:5
2016-12-12 09:09:43 --- DEBUG: #0 C:\OpenServer\domains\reporting\application\views\v_home.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 5, Array)
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
#14 {main} in C:\OpenServer\domains\reporting\application\views\v_home.php:5
2016-12-12 15:20:47 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\classes\Controller\home.php [ 12 ] in C:\OpenServer\domains\reporting\application\classes\Controller\home.php:12
2016-12-12 15:20:47 --- DEBUG: #0 C:\OpenServer\domains\reporting\application\classes\Controller\home.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 12, Array)
#1 C:\OpenServer\domains\reporting\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\reporting\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\OpenServer\domains\reporting\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\reporting\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\reporting\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\reporting\application\classes\Controller\home.php:12
2016-12-12 15:58:42 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for Kohana_Session::set(), called in C:\OpenServer\domains\reporting\application\classes\Controller\index.php on line 27 and defined ~ SYSPATH\classes\Kohana\Session.php [ 243 ] in C:\OpenServer\domains\reporting\system\classes\Kohana\Session.php:243
2016-12-12 15:58:42 --- DEBUG: #0 C:\OpenServer\domains\reporting\system\classes\Kohana\Session.php(243): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\OpenServer\d...', 243, Array)
#1 C:\OpenServer\domains\reporting\application\classes\Controller\index.php(27): Kohana_Session->set('check')
#2 C:\OpenServer\domains\reporting\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\reporting\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 C:\OpenServer\domains\reporting\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\reporting\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\reporting\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\reporting\system\classes\Kohana\Session.php:243
2016-12-12 16:10:38 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\home.php [ 14 ] in C:\OpenServer\domains\reporting\application\classes\Controller\home.php:14
2016-12-12 16:10:38 --- DEBUG: #0 C:\OpenServer\domains\reporting\application\classes\Controller\home.php(14): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\OpenServer\d...', 14, Array)
#1 C:\OpenServer\domains\reporting\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\reporting\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\OpenServer\domains\reporting\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\reporting\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\reporting\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\reporting\application\classes\Controller\home.php:14
2016-12-12 17:06:40 --- CRITICAL: Database_Exception [ 1146 ]: Table 'report.radiosts' doesn't exist [ SHOW FULL COLUMNS FROM `radiosts` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\reporting\modules\database\classes\Kohana\Database\MySQL.php:359
2016-12-12 17:06:40 --- DEBUG: #0 C:\OpenServer\domains\reporting\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\OpenServer\domains\reporting\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('radiosts')
#2 C:\OpenServer\domains\reporting\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\OpenServer\domains\reporting\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\OpenServer\domains\reporting\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\OpenServer\domains\reporting\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\OpenServer\domains\reporting\application\classes\Controller\customer.php(21): Kohana_ORM::factory('radiost')
#7 C:\OpenServer\domains\reporting\system\classes\Kohana\Controller.php(84): Controller_Customer->action_marks()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\OpenServer\domains\reporting\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Customer))
#10 C:\OpenServer\domains\reporting\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\OpenServer\domains\reporting\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#12 C:\OpenServer\domains\reporting\index.php(118): Kohana_Request->execute()
#13 {main} in C:\OpenServer\domains\reporting\modules\database\classes\Kohana\Database\MySQL.php:359
2016-12-12 17:10:36 --- CRITICAL: View_Exception [ 0 ]: The requested view v_customer could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\OpenServer\domains\reporting\system\classes\Kohana\View.php:145
2016-12-12 17:10:36 --- DEBUG: #0 C:\OpenServer\domains\reporting\system\classes\Kohana\View.php(145): Kohana_View->set_filename('v_customer')
#1 C:\OpenServer\domains\reporting\system\classes\Kohana\View.php(30): Kohana_View->__construct('v_customer', NULL)
#2 C:\OpenServer\domains\reporting\application\classes\Controller\customer.php(39): Kohana_View::factory('v_customer')
#3 C:\OpenServer\domains\reporting\system\classes\Kohana\Controller.php(84): Controller_Customer->action_marks()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\reporting\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Customer))
#6 C:\OpenServer\domains\reporting\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\reporting\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\reporting\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\reporting\system\classes\Kohana\View.php:145
2016-12-12 17:11:53 --- CRITICAL: View_Exception [ 0 ]: The requested view v_customer could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\OpenServer\domains\reporting\system\classes\Kohana\View.php:145
2016-12-12 17:11:53 --- DEBUG: #0 C:\OpenServer\domains\reporting\system\classes\Kohana\View.php(145): Kohana_View->set_filename('v_customer')
#1 C:\OpenServer\domains\reporting\system\classes\Kohana\View.php(30): Kohana_View->__construct('v_customer', NULL)
#2 C:\OpenServer\domains\reporting\application\classes\Controller\customer.php(41): Kohana_View::factory('v_customer')
#3 C:\OpenServer\domains\reporting\system\classes\Kohana\Controller.php(84): Controller_Customer->action_marks()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\reporting\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Customer))
#6 C:\OpenServer\domains\reporting\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\reporting\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\reporting\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\reporting\system\classes\Kohana\View.php:145
2016-12-12 17:11:55 --- CRITICAL: View_Exception [ 0 ]: The requested view v_customer could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\OpenServer\domains\reporting\system\classes\Kohana\View.php:145
2016-12-12 17:11:55 --- DEBUG: #0 C:\OpenServer\domains\reporting\system\classes\Kohana\View.php(145): Kohana_View->set_filename('v_customer')
#1 C:\OpenServer\domains\reporting\system\classes\Kohana\View.php(30): Kohana_View->__construct('v_customer', NULL)
#2 C:\OpenServer\domains\reporting\application\classes\Controller\customer.php(41): Kohana_View::factory('v_customer')
#3 C:\OpenServer\domains\reporting\system\classes\Kohana\Controller.php(84): Controller_Customer->action_marks()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\reporting\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Customer))
#6 C:\OpenServer\domains\reporting\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\reporting\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\reporting\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\reporting\system\classes\Kohana\View.php:145
2016-12-12 17:11:57 --- CRITICAL: View_Exception [ 0 ]: The requested view v_customer could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\OpenServer\domains\reporting\system\classes\Kohana\View.php:145
2016-12-12 17:11:57 --- DEBUG: #0 C:\OpenServer\domains\reporting\system\classes\Kohana\View.php(145): Kohana_View->set_filename('v_customer')
#1 C:\OpenServer\domains\reporting\system\classes\Kohana\View.php(30): Kohana_View->__construct('v_customer', NULL)
#2 C:\OpenServer\domains\reporting\application\classes\Controller\customer.php(41): Kohana_View::factory('v_customer')
#3 C:\OpenServer\domains\reporting\system\classes\Kohana\Controller.php(84): Controller_Customer->action_marks()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\reporting\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Customer))
#6 C:\OpenServer\domains\reporting\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\reporting\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\reporting\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\reporting\system\classes\Kohana\View.php:145
2016-12-12 17:12:53 --- CRITICAL: View_Exception [ 0 ]: The requested view v_customer could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\OpenServer\domains\reporting\system\classes\Kohana\View.php:145
2016-12-12 17:12:53 --- DEBUG: #0 C:\OpenServer\domains\reporting\system\classes\Kohana\View.php(145): Kohana_View->set_filename('v_customer')
#1 C:\OpenServer\domains\reporting\system\classes\Kohana\View.php(30): Kohana_View->__construct('v_customer', NULL)
#2 C:\OpenServer\domains\reporting\application\classes\Controller\customer.php(41): Kohana_View::factory('v_customer')
#3 C:\OpenServer\domains\reporting\system\classes\Kohana\Controller.php(84): Controller_Customer->action_marks()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\reporting\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Customer))
#6 C:\OpenServer\domains\reporting\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\reporting\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\reporting\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\reporting\system\classes\Kohana\View.php:145
2016-12-12 17:26:28 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$longname ~ APPPATH\classes\Controller\customer.php [ 25 ] in C:\OpenServer\domains\reporting\application\classes\Controller\customer.php:25
2016-12-12 17:26:28 --- DEBUG: #0 C:\OpenServer\domains\reporting\application\classes\Controller\customer.php(25): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\OpenServer\d...', 25, Array)
#1 C:\OpenServer\domains\reporting\system\classes\Kohana\Controller.php(84): Controller_Customer->action_marks()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\reporting\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Customer))
#4 C:\OpenServer\domains\reporting\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\reporting\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\reporting\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\reporting\application\classes\Controller\customer.php:25
2016-12-12 17:26:30 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$longname ~ APPPATH\classes\Controller\customer.php [ 25 ] in C:\OpenServer\domains\reporting\application\classes\Controller\customer.php:25
2016-12-12 17:26:30 --- DEBUG: #0 C:\OpenServer\domains\reporting\application\classes\Controller\customer.php(25): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\OpenServer\d...', 25, Array)
#1 C:\OpenServer\domains\reporting\system\classes\Kohana\Controller.php(84): Controller_Customer->action_marks()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\reporting\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Customer))
#4 C:\OpenServer\domains\reporting\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\reporting\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\reporting\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\reporting\application\classes\Controller\customer.php:25
2016-12-12 18:19:52 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\classes\Controller\customer.php [ 26 ] in file:line
2016-12-12 18:19:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-12-12 18:19:53 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\classes\Controller\customer.php [ 26 ] in file:line
2016-12-12 18:19:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-12-12 18:19:54 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\classes\Controller\customer.php [ 26 ] in file:line
2016-12-12 18:19:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-12-12 18:19:55 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\classes\Controller\customer.php [ 26 ] in file:line
2016-12-12 18:19:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-12-12 18:20:49 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR, expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH\classes\Controller\customer.php [ 30 ] in file:line
2016-12-12 18:20:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-12-12 18:20:50 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR, expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH\classes\Controller\customer.php [ 30 ] in file:line
2016-12-12 18:20:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-12-12 18:20:51 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR, expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH\classes\Controller\customer.php [ 30 ] in file:line
2016-12-12 18:20:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-12-12 18:20:52 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR, expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH\classes\Controller\customer.php [ 30 ] in file:line
2016-12-12 18:20:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-12-12 18:20:55 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR, expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH\classes\Controller\customer.php [ 30 ] in file:line
2016-12-12 18:20:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-12-12 18:21:06 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: rediost ~ APPPATH\classes\Controller\customer.php [ 26 ] in C:\OpenServer\domains\reporting\application\classes\Controller\customer.php:26
2016-12-12 18:21:06 --- DEBUG: #0 C:\OpenServer\domains\reporting\application\classes\Controller\customer.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 26, Array)
#1 C:\OpenServer\domains\reporting\system\classes\Kohana\Controller.php(84): Controller_Customer->action_marks()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\reporting\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Customer))
#4 C:\OpenServer\domains\reporting\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\reporting\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\reporting\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\reporting\application\classes\Controller\customer.php:26
2016-12-12 18:37:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\mark.php [ 14 ] in file:line
2016-12-12 18:37:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-12-12 18:38:20 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ',', expecting ')' ~ APPPATH\classes\Model\mark.php [ 12 ] in file:line
2016-12-12 18:38:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-12-12 18:38:37 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\mark.php [ 16 ] in file:line
2016-12-12 18:38:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-12-12 18:38:52 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::count_all() ~ APPPATH\classes\Controller\customer.php [ 24 ] in file:line
2016-12-12 18:38:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-12-12 18:48:18 --- CRITICAL: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\Kohana\Database\MySQL\Result.php [ 33 ] in file:line
2016-12-12 18:48:18 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'C:\OpenServer\d...', 33, Array)
#1 C:\OpenServer\domains\reporting\modules\database\classes\Kohana\Database\MySQL\Result.php(33): mysql_data_seek(Resource id #104, 'radio')
#2 C:\OpenServer\domains\reporting\modules\database\classes\Kohana\Database\Result.php(240): Kohana_Database_MySQL_Result->seek('radio')
#3 C:\OpenServer\domains\reporting\application\classes\Controller\customer.php(29): Kohana_Database_Result->offsetGet('radio')
#4 C:\OpenServer\domains\reporting\system\classes\Kohana\Controller.php(84): Controller_Customer->action_marks()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\reporting\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Customer))
#7 C:\OpenServer\domains\reporting\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\reporting\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\reporting\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2016-12-12 18:48:20 --- CRITICAL: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\Kohana\Database\MySQL\Result.php [ 33 ] in file:line
2016-12-12 18:48:20 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'C:\OpenServer\d...', 33, Array)
#1 C:\OpenServer\domains\reporting\modules\database\classes\Kohana\Database\MySQL\Result.php(33): mysql_data_seek(Resource id #104, 'radio')
#2 C:\OpenServer\domains\reporting\modules\database\classes\Kohana\Database\Result.php(240): Kohana_Database_MySQL_Result->seek('radio')
#3 C:\OpenServer\domains\reporting\application\classes\Controller\customer.php(29): Kohana_Database_Result->offsetGet('radio')
#4 C:\OpenServer\domains\reporting\system\classes\Kohana\Controller.php(84): Controller_Customer->action_marks()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\reporting\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Customer))
#7 C:\OpenServer\domains\reporting\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\reporting\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\reporting\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2016-12-12 18:48:22 --- CRITICAL: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\Kohana\Database\MySQL\Result.php [ 33 ] in file:line
2016-12-12 18:48:22 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'C:\OpenServer\d...', 33, Array)
#1 C:\OpenServer\domains\reporting\modules\database\classes\Kohana\Database\MySQL\Result.php(33): mysql_data_seek(Resource id #104, 'radio')
#2 C:\OpenServer\domains\reporting\modules\database\classes\Kohana\Database\Result.php(240): Kohana_Database_MySQL_Result->seek('radio')
#3 C:\OpenServer\domains\reporting\application\classes\Controller\customer.php(29): Kohana_Database_Result->offsetGet('radio')
#4 C:\OpenServer\domains\reporting\system\classes\Kohana\Controller.php(84): Controller_Customer->action_marks()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\reporting\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Customer))
#7 C:\OpenServer\domains\reporting\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\reporting\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\reporting\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2016-12-12 18:48:23 --- CRITICAL: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\Kohana\Database\MySQL\Result.php [ 33 ] in file:line
2016-12-12 18:48:23 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'C:\OpenServer\d...', 33, Array)
#1 C:\OpenServer\domains\reporting\modules\database\classes\Kohana\Database\MySQL\Result.php(33): mysql_data_seek(Resource id #104, 'radio')
#2 C:\OpenServer\domains\reporting\modules\database\classes\Kohana\Database\Result.php(240): Kohana_Database_MySQL_Result->seek('radio')
#3 C:\OpenServer\domains\reporting\application\classes\Controller\customer.php(29): Kohana_Database_Result->offsetGet('radio')
#4 C:\OpenServer\domains\reporting\system\classes\Kohana\Controller.php(84): Controller_Customer->action_marks()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\reporting\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Customer))
#7 C:\OpenServer\domains\reporting\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\reporting\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\reporting\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2016-12-12 18:49:35 --- CRITICAL: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\Kohana\Database\MySQL\Result.php [ 33 ] in file:line
2016-12-12 18:49:35 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'C:\OpenServer\d...', 33, Array)
#1 C:\OpenServer\domains\reporting\modules\database\classes\Kohana\Database\MySQL\Result.php(33): mysql_data_seek(Resource id #104, 'radio')
#2 C:\OpenServer\domains\reporting\modules\database\classes\Kohana\Database\Result.php(240): Kohana_Database_MySQL_Result->seek('radio')
#3 C:\OpenServer\domains\reporting\application\classes\Controller\customer.php(29): Kohana_Database_Result->offsetGet('radio')
#4 C:\OpenServer\domains\reporting\system\classes\Kohana\Controller.php(84): Controller_Customer->action_marks()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\reporting\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Customer))
#7 C:\OpenServer\domains\reporting\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\reporting\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\reporting\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2016-12-12 18:49:36 --- CRITICAL: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\Kohana\Database\MySQL\Result.php [ 33 ] in file:line
2016-12-12 18:49:36 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'C:\OpenServer\d...', 33, Array)
#1 C:\OpenServer\domains\reporting\modules\database\classes\Kohana\Database\MySQL\Result.php(33): mysql_data_seek(Resource id #104, 'radio')
#2 C:\OpenServer\domains\reporting\modules\database\classes\Kohana\Database\Result.php(240): Kohana_Database_MySQL_Result->seek('radio')
#3 C:\OpenServer\domains\reporting\application\classes\Controller\customer.php(29): Kohana_Database_Result->offsetGet('radio')
#4 C:\OpenServer\domains\reporting\system\classes\Kohana\Controller.php(84): Controller_Customer->action_marks()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\reporting\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Customer))
#7 C:\OpenServer\domains\reporting\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\reporting\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\reporting\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2016-12-12 18:54:11 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: marks ~ APPPATH\views\v_customer.php [ 1 ] in C:\OpenServer\domains\reporting\application\views\v_customer.php:1
2016-12-12 18:54:11 --- DEBUG: #0 C:\OpenServer\domains\reporting\application\views\v_customer.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 1, Array)
#1 C:\OpenServer\domains\reporting\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\reporting\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\reporting\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\OpenServer\domains\reporting\application\views\v_base.php(22): Kohana_View->__toString()
#5 C:\OpenServer\domains\reporting\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\reporting\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\reporting\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\reporting\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\reporting\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Customer))
#11 C:\OpenServer\domains\reporting\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\reporting\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\reporting\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\reporting\application\views\v_customer.php:1
2016-12-12 18:54:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: marks ~ APPPATH\views\v_customer.php [ 2 ] in C:\OpenServer\domains\reporting\application\views\v_customer.php:2
2016-12-12 18:54:24 --- DEBUG: #0 C:\OpenServer\domains\reporting\application\views\v_customer.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 2, Array)
#1 C:\OpenServer\domains\reporting\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\reporting\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\reporting\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\OpenServer\domains\reporting\application\views\v_base.php(22): Kohana_View->__toString()
#5 C:\OpenServer\domains\reporting\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\reporting\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\reporting\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\reporting\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\reporting\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Customer))
#11 C:\OpenServer\domains\reporting\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\reporting\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\reporting\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\reporting\application\views\v_customer.php:2
2016-12-12 19:09:34 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\v_base.php [ 21 ] in C:\OpenServer\domains\reporting\application\views\v_base.php:21
2016-12-12 19:09:34 --- DEBUG: #0 C:\OpenServer\domains\reporting\application\views\v_base.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 21, Array)
#1 C:\OpenServer\domains\reporting\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\reporting\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\reporting\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\reporting\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\reporting\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Customer))
#7 C:\OpenServer\domains\reporting\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\reporting\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\reporting\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\reporting\application\views\v_base.php:21
2016-12-12 19:09:37 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\v_base.php [ 21 ] in C:\OpenServer\domains\reporting\application\views\v_base.php:21
2016-12-12 19:09:37 --- DEBUG: #0 C:\OpenServer\domains\reporting\application\views\v_base.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 21, Array)
#1 C:\OpenServer\domains\reporting\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\reporting\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\reporting\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\reporting\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\reporting\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Customer))
#7 C:\OpenServer\domains\reporting\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\reporting\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\reporting\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\reporting\application\views\v_base.php:21