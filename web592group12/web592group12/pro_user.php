<?php
 // สว่ นตัง้คำ่ เรยีกใชง้ำน UserService ของ Google
	use google\appengine\api\users\User;
	use google\appengine\api\users\UserService;
	global $user,$userdata,$appid;

 $user = UserService::getCurrentUser();
 if($user){
	$uid = $user->getUserId();
	$userfile = "gs://$appid/user_$uid.json";
	$userdata = array();
	if(file_exists($userfile)){
	// จะโหลดข ้อมูลในไฟล์ json
		$filedata = file_get_contents($userfile);
		$userdata = json_decode($filedata,true);
	}else{
		$userdata['nick']=$user->getNickname();
}

	$url = UserService::createLogoutUrl('/home.php');
 // แสดงภาพผใู้ช ้โดยการเรยี กฟังกช์ นั userpic จากข ้อที่ 1
	echo "<center>";
	echo "<img src='".userpic($uid)."' width='180'><br><br>";
	echo $userdata['nick'];
	echo "<br><a href='home.php?p=useredit'>Edit User</a>";
	echo "<br><a href='$url'>Logout</a>";
	echo "</center>";
 }else{
	$url = UserService::createLoginUrl('/home.php');

	echo "<a href='$url'>Login or Register</a>";
	
 }
?>
