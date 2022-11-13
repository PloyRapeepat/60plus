<?php
$host="localhost";
$user="root";
$pass="";
$dbname="60plus";

$db=new mysqli($host,$user,$pass,$dbname);

function arr2set($arr){
    $ret='';
    foreach($arr as $k=>$v){
        if(!empty($ret))$ret.=",";
        $ret.=$k."=".pq($v);
    }
    return $ret;
}

function pq($var){
    $var=trim($var);
    if(is_numeric($var)) return $var;
    else return "'".$var."'";
}

function redirect($url,$delay=0){
    return '<meta http-equiv="refresh" content="'.$delay.';'.$url.'">';
}