<?php
    define('USING_DB', false)
    if(USING_DB){
        $mysql = array(
            'server' => 'localhost',
            'user' => 'myuser',
            'password' => 'mypassword',
            'db' => 'mydatabase'
        );
        $link = mysql_connect($mysql['server'], $mysql['user'], $mysql['password']);
        if(!$link){
            die("could not connect: " . mysql_error());
        }
        $db = mysql_select_db($mysql['db'], $link);
        if(!$db){
            die("could not select database {$mysql['db']}: " . mysql_error())
        }
    }
?>