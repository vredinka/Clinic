<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-01-09 11:14:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL welcome/indexf was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-09 11:14:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL welcome/indexf was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/sites/clinic/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/sites/clinic/www/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/sites/clinic/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-09 12:31:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-09 12:31:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/sites/clinic/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-09 12:31:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-09 12:31:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/sites/clinic/www/index.php(109): Kohana_Request->execute()
#1 {main}