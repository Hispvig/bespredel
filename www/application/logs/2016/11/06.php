<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-11-06 20:25:18 --- CRITICAL: View_Exception [ 0 ]: The requested view welcome could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in D:\OpenServer\domains\bespredel.git\www\system\classes\Kohana\View.php:145
2016-11-06 20:25:18 --- DEBUG: #0 D:\OpenServer\domains\bespredel.git\www\system\classes\Kohana\View.php(145): Kohana_View->set_filename('welcome')
#1 D:\OpenServer\domains\bespredel.git\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('welcome', NULL)
#2 D:\OpenServer\domains\bespredel.git\www\application\classes\Controller\Welcome.php(7): Kohana_View::factory('welcome')
#3 D:\OpenServer\domains\bespredel.git\www\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\bespredel.git\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 D:\OpenServer\domains\bespredel.git\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\bespredel.git\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\bespredel.git\www\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\bespredel.git\www\system\classes\Kohana\View.php:145