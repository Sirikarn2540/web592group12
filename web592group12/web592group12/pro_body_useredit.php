<style>
button.btn-default{
	background:rgba(1,1,1,0.5);
	color:#FFF;	
}
button.btn-default:hover{
	background:rgba(1,1,1,0.6);
	color:#FFF;	
}
</style>

<?php
use google\appengine\api\users\User;
use google\appengine\api\users\UserService;

global $appid,$user,$userdata;

if(!$user) return;
if($_POST["nick"]){
 $uid = $user->getUserId();
 $userdata['nick']=$_POST['nick'];
 $userdata['fname']=$_POST['fname'];
 $userdata['lname']=$_POST['lname'];
 if($_FILES['pic']['tmp_name']!=''){
 $userpic = "gs://$appid/{$uid}.jpg";
 move_uploaded_file($_FILES['pic']['tmp_name'],$userpic);
 }
 $json = json_encode($userdata, JSON_PRETTY_PRINT);
 $userfile = "gs://$appid/user_$uid.json";
 file_put_contents($userfile,$json);
 echo "<br> Complete!<a href='home.php?p=edituser'></a>";
 return;
}
?>
<form method="post" action="" enctype="multipart/form-data">
<div class="form-group col-md-6" >
<label for="nick">Nick Name</label>
<input class="form-control" type='text' name='nick' value="<?=$userdata['nick'] ?>">

<label for="file">First Name</label>
<input class="form-control" type='text' name='fname' value="<?=$userdata["fname"]?>">

<label for="file">Last Name</label>
<input class="form-control" type='text' name='lname' value="<?=$userdata["lname"]?>">

<label for="file">Picture</label>
<input class="form-control" type='file' name='pic'>
<br>
<button class="btn btn-default"><center> Save </center></button>
</div>

</form>