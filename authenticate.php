<?php
$wrong_uname = "Wrong username";
$wrong_pass = "Wrong password";
$success = "Authenticated";

if($_POST['uname']=='')
    $status = $wrong_uname;
else if($_POST['passwd']=='')
    $status = $wrong_pass;
else{
    $link = mysql_connect('localhost','hello','Hello_Team') or die('Could not connect to db');
    mysql_select_db("hellodb", $link) or die('Could not select db');
    //We are not worrried about sql injection or anything for now, just keep it simple
    $query = "SELECT * FROM users u, employees e, projects p WHERE username='".$_POST['uname']."' and password='".$_POST['passwd']."' and u.id=e.user_id and p.id=e.proj_id";
    $result=mysql_query($query, $link) or die('Could not execute query');
    if(mysql_num_rows($result)==1){
        $result_arr = mysql_fetch_array($result);
        $res_mgr_query = 'select e.first_name, e.last_name from users u, employees e where u.id = e.user_id and e.user_id ='.$result_arr['resource_mgr_id'];
        $res_mgr_result = mysql_query($res_mgr_query, $link) or die('Could not execute query');
        $res_mgr_res_arr = mysql_fetch_array($res_mgr_result);
        /*print '<pre>';
        print_r($result_arr);
        print_r($res_mgr_res_arr);
        print '</pre>';*/
        $status = $success."|".$result_arr['first_name'].'!|'.$result_arr['title'].'|'.$result_arr['name'].'|'.$res_mgr_res_arr['first_name'].' '.$res_mgr_res_arr['last_name'].'|'.$result_arr['user_id'];
    }
    else
        $status = $wrong_pass;
}

echo $status;
?>