<?php
include("../vendor/autoload.php");
define('APPROOT', '../App/');

//������ʾ
$error_reporting       = E_ALL ^ E_NOTICE;
ini_set('error_reporting', $error_reporting);
//error_reporting(0);
headers();

////��server����db�Ĳ���
//$res = server('db')->getall('select * from user');
//D($res);



//application::dataʾ��
//���� config=>data
//$res = application('data');
//$res->get('name','asdfasdf');
//$rc = $res->get('name');

//
$nr = "
- 1
- 22
";
//$res = server('Parsedown')->text($nr);
//$res = application('Parsedown')->text($nr);
$res = application()->obList();;
D($res);






