<!doctype html>
<?php error_reporting(0);
 $appid = "web592group12.appspot.com";
 $page = $_GET['p'];
 if($page=='') $page='KIDPAP';
 $title = $page;
 function panel_include($title,$file,$ptype='primary'){
	echo "<div class='panel panel-$ptype'>";
	echo "<div class='panel-heading'>$title</div>";
	echo "<div class='panel-body'>";
	if(file_exists($file)){
		include($file);
	}else{
		echo "ไม่พบไฟล์ $file ";
		}
		echo "</div>";
		echo "</div>";
}
 
 use google\appengine\api\cloud_storage\CloudStorageTools;
 function userpic($uid){
 global $appid;
 $userpic="gs://$appid/{$uid}.jpg";
 if(!file_exists($userpic)){
 return "user.png";
 }
 return CloudStorageTools::getImageServingUrl($userpic,["size"=>200]);
 
}
?>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title><?= $page ?> </title>
	<link rel="icon" href="https://image.flaticon.com/icons/png/128/252/252037.png">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<link rel="stylesheet"href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style>
body {
background-image:url("https://representingyourselfcanada.com/wp-content/uploads/2016/06/slide-bg-full.jpg");
background-attachment:fixed;
background-repeat: no-repeat; 
background-size: cover;}

.navbar-inverse{
	background-color:rgba(1,0,0,0.8);
	position:fixed;
	width:100%;
}
.navbar-brand{
	font-face:Arial;
	font-size:45px;
	font-color:#FFF;
}

.navbar-right{
	font-size:20px;
}
.panel-primary{
  background: rgba(255, 255, 255, 0.0);
  border:0;
}
.panel-primary .panel-heading{
  background: rgba(97, 96, 96, 0.7);
  border:0.5;
  border-color:#868686;
}
.panel-primary .panel-body{
  background: rgba(255, 255, 255, 0.6);
}
</style>

<body role="document">
<nav class="navbar navbar-inverse" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
   
				<br>
				
                <a class="navbar-brand" href="home.php"><strong>KIDPAP SHOP</strong></a>               
            </div>
			<br>
			<ul class="nav navbar-nav navbar-right">
                    <li><a href="pro_contact.php">Contact</a></li></ul> 
		<br>
		<br>	
		<br>
		<br>
    </nav>
	<br>
	<br>
	<br>
	<br>
	<br>
	<center><img src="cap2.jpg" width="100%" ></center>
	<br>
	<br>
	
<div class="container">
<div class="col-sm-3">
<?php panel_include("User","pro_user.php","primary"); ?>
<?php panel_include("Menu","pro_menu.php","primary"); ?>
</div>
<div class="col-sm-9">
<?php panel_include($title,"pro_body.php" ,"primary"); ?>
</div>
</div>

<footer class="text-center page-footer">
<div id="footer"><?php include("pro_footer.php");?></div>
</footer>
</body>
</html>