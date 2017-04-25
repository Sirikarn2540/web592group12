<style>
.btn-default{
	background:rgba(1,1,1,0.5);
	color:#FFF;	
}
.btn-default:hover{
	background:rgba(1,1,1,0.6);
	color:#FFF;	
}
</style>

<?php
 use google\appengine\api\users\UserService;
 global $appid,$page,$title;
 $phpfile="pro_body_$page.php";
 if(file_exists($phpfile)){
 include($phpfile);
 }else{
 $htmlfile = "gs://$appid/$page.html";
 if(file_exists($htmlfile)){
readfile($htmlfile);
 }
 if (UserService::isCurrentUserAdmin()){
 echo "<br><a href='home.php?p=edit&file=$page.html' class='btn btn-default'>Edit</a>";
 }
 echo "<br>";
 include("pro_feedback.php");
 }
?>