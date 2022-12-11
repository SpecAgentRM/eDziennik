<?php

session_start();
include("config.php"); 


function login() {
session_start();
if(isset($_REQUEST['sub']))
{
$a = $_REQUEST['uname'];
$b = $_REQUEST['upassword'];

$res = mysqli_query($cser,"select* from users where uname='$a'and upassword='$b'");
$result=mysqli_fetch_array($res);
if($result)
{
	
	$_SESSION["login"]="1";
	header("location:start.html");
}
else	
{
	header("location:login.html");
	
}
}
}
function logout(){
	session_destroy();
	header("location:logout.html");
}
?>