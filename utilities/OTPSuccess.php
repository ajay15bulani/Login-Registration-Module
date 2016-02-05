<?php
if(!isset($_POST['mob']))
{
    die("<h1 style='color:red;font-size:75' align=center>Access Denied</h1>");
}
require_once '../db/db_func.php';
$mob=$_POST['mob'];
$user=RetrieveValue('mobile_no',$mob,'email');
if(!empty($user))
{
    @session_start();
    $_SESSION['user']=$user;
    $st=1;
}
echo $st;
?>