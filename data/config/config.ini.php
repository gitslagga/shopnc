<?php
// defined('InShopNC') or exit('Access Invalid!');

$config = array();
$config['base_site_url']        = 'http://127.0.0.1:8080';
$config['shop_site_url'] 		= 'http://127.0.0.1:8080/shop';
$config['cms_site_url'] 		= 'http://127.0.0.1:8080/cms';
$config['microshop_site_url'] 	= 'http://127.0.0.1:8080/microshop';
$config['circle_site_url'] 		= 'http://127.0.0.1:8080/circle';
$config['admin_site_url'] 		= 'http://127.0.0.1:8080/admin';
$config['mobile_site_url'] 		= 'http://127.0.0.1:8080/mobile';
$config['wap_site_url'] 		= 'http://127.0.0.1:8080/wap';
$config['chat_site_url'] 		= 'http://127.0.0.1:8080/chat';
$config['node_site_url'] 		= 'http://:8090';
$config['upload_site_url']		= 'http://127.0.0.1:8080/data/upload';
$config['resource_site_url']	= 'http://127.0.0.1:8080/data/resource';
$config['version'] 		= '201502020388';
$config['setup_date'] 	= '2015-08-02 15:36:11';
$config['gip'] 			= 0;
$config['dbdriver'] 	= 'mysqli';
$config['tablepre']		= 'nc_';
$config['db']['1']['dbhost']       = 'localhost';
$config['db']['1']['dbport']       = '3306';
$config['db']['1']['dbuser']       = 'root';
$config['db']['1']['dbpwd']        = 'lwt123456';
$config['db']['1']['dbname']       = 'shopncdb';
$config['db']['1']['dbcharset']    = 'UTF-8';
$config['db']['slave']                  = $config['db']['master'];
$config['session_expire'] 	= 3600;
$config['lang_type'] 		= 'zh_cn';
$config['cookie_pre'] 		= 'B766_';
$config['thumb']['cut_type'] = 'gd';
$config['thumb']['impath'] = '';
$config['cache']['type'] 			= 'file';
//$config['redis']['prefix']      	= 'nc_';
//$config['redis']['master']['port']     	= 6379;
//$config['redis']['master']['host']     	= '127.0.0.1';
//$config['redis']['master']['pconnect'] 	= 0;
//$config['redis']['slave']      	    = array();
//$config['fullindexer']['open']      = false;
//$config['fullindexer']['appname']   = '33hao';
$config['debug'] 			= false;
$config['default_store_id'] = '1';
//如果开始伪静态，这里设置为true
$config['url_model'] = false;
//如果店铺开启二级域名绑定的，这里填写主域名如baidu.com
$config['subdomain_suffix'] = '';
//$config['session_type'] = 'redis';
//$config['session_save_path'] = 'tcp://127.0.0.1:6379';
$config['node_chat'] = true;
//流量记录表数量，为1~10之间的数字，默认为3，数字设置完成后请不要轻易修改，否则可能造成流量统计功能数据错误
$config['flowstat_tablenum'] = 3;
$config['sms']['gwUrl'] = 'http://sdkhttp.eucp.b2m.cn/sdk/SDKService';
$config['sms']['serialNumber'] = '';
$config['sms']['password'] = '';
$config['sms']['sessionKey'] = '';
$config['queue']['open'] = false;
$config['queue']['host'] = '127.0.0.1';
$config['queue']['port'] = 6379;
$config['cache_open'] = false;
$config['delivery_site_url']    = 'http://127.0.0.1:8080/delivery';
$config['push']['app_key'] = "7714c8cfdeb31bc1ff81748a";
$config['push']['master_secret'] = "a75105ab93f2630398117d8a";
return $config;