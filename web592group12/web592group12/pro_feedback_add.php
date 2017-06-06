<style>
.rowe{
	background: rgba(97, 96, 96, 0.8);
	height:100px;
	width:auto;
}
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
error_reporting(0);
 if(!$user) return;
global $userdata;
 if($_POST["feedback"]){
//1. สร ้าง record ที่จะเก็บข ้อมูล feedback
$rec=array();
$rec['user']=$user->getUserId(); // รหัสผู้โพส
$rec['name']=$userdata['nick']; // ชอื่ เลน่ ทจี่ ะแสดง
$rec['feedback']=$_POST['feedback']; // ข ้อความ

$rec['time']=mktime(); // เวลาที่โพส
//2. น า $rec ไปต่อท ้ายอาเรย์$fbdata
$fbdata[ ] = $rec;
//3. แปลงเป็น json
$fbjson = json_encode($fbdata, JSON_PRETTY_PRINT);
 // 4. บันทึกลงไฟล์
file_put_contents($fbfile,$fbjson);
echo "<br> Complete <a href='home.php?p=$page' id='pagelink'>OK</a>";
 return;
 }
 $pic = userpic($user->getUserId());
?>
<br><br>
<form method="post" action="">
<div class="rowe">
<br>
<div class="col-xs-3 col-sm-1 "><?= "<img src='$pic' width='48'>" ?></div>
<div class="col-xs-9 col-sm-10">
 <label for="feedback"><?= $userdata['nick'] ?></label>
 <div class="input-group">
 <input type="text" class="form-control" placeholder="Comment" name="feedback">
 <span class="input-group-btn">
 <button class="btn btn-default"> Send </button>
 </span>
 </div>
</div> <!-- /.col-10 -->
</div> <!-- /.row -->
</form>