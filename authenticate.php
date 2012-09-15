<?php
$wrong_uname = "Wrong username";
$wrong_pass = "Wrong password";
$success = "Authenticated";

if($_POST['uname']=='')
    $status = $wrong_uname;
else if($_POST['passwd']=='')
    $status = $wrong_pass;
else{
    $link = mysql_connect('127.0.0.1','root','compsc') or die('Could not connect to db');
    mysql_select_db("hello", $link) or die('Could not select db');
    //We are not worrried about sql injection or anything for now, just keep it simple
    $query = "SELECT * FROM users WHERE username='".$_POST['uname']."' and password='".$_POST['passwd']."'";
    $result=mysql_query($query, $link) or die('Could not execute query');
    if(mysql_num_rows($result)==1)
        $status = $success;
    else
        $status = $wrong_pass;
}

echo $status;
?>