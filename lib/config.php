<?php/* * ss-panel配置文件 * https://github.com/orvice/ss-panel * Author @orvice * https://orvice.org */require('helper.php');error_reporting(E_ALL^E_NOTICE^E_WARNING);//定义流量date_default_timezone_set("PRC");$tokb = 1024;$tomb = 1024*1024;$togb = $tomb*1024;/*read env from docker helper.php*/$serverName =   env("MYSQL_PORT_3306_TCP_ADDR", "localhost");$databaseName = env("MYSQL_INSTANCE_NAME", "");$username =     env("MYSQL_USERNAME", "");$password =     env("MYSQL_PASSWORD", "");$mailHost = env("MAIL_HOST","");$mailPort = env("MAIL_PORT","");$mailUsername = env("MAIL_USERNAME","");$mailPasswd = env("MAIL_PASSWD","");$mailFrom = env("MAIL_FROM","");$mailFromName = env("MAIL_FROM_NAME","");define('SITE_ADDRESS','www.marisago.com');//Define DB Connection  数据库信息define('DB_HOST',$serverName);define('DB_USER',$username);define('DB_PWD',$password);define('DB_DBNAME',$databaseName);define('DB_CHARSET','utf8');define('DB_TYPE','mysql');//mail configdefine('MAIL_HOST',$mailHost);define('MAIL_PORT',$mailPort);define('MAIL_USERNAME',$mailUsername);define('MAIL_PASSWD',$mailPasswd);define('MAIL_FROM',$mailFrom);define('MAIL_FROM_NAME',$mailFromName);/* * 下面的东西根据需求修改 *///define Plan//注册用户的初始化流量//默认5GiB$a_transfer = $togb*5;//签到设置 签到活的的最低最高流量,单位MB$check_min = 1;$check_max = 100;//name$site_name = "MarisaGo";$site_url  = "http://www.marisago.com/";//用户注册后获得的邀请码最低最高//都设置为0用户就不能邀请$user_invite_min = '1';$user_invite_max = '1';//mail-gun// Get your key from https://mailgun.com$mailgun_key = "";$mailgun_domain = "";//require_once 'do.php';