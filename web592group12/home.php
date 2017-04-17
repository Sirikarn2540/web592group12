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
	background-color:#000;
	opacity:1;
}
.navbar-brand{
	font-size:50px;
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
  background: rgba(97, 96, 96, 0.8);
  border:0.5;
  border-color:#868686;
}
.panel-primary .panel-body{
  background: rgba(198, 198, 198, 0.7);
}
* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;margin:0}
.mySlides {display:none}

.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

.dot {
  cursor:pointer;
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>

<body role="document">
<nav class="navbar navbar-inverse" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
				<br>
                <a class="navbar-brand" href="home.php"><strong>KID-PAP Shop</strong></a>               
            </div>
			<br>
            <!-- Collect the nav links, forms, and other content for toggling -->
			<ul class="nav navbar-nav navbar-right">
                    <li><a href="pro_contact.php">Contact</a></li></ul> 
		<br>
		<br>
		<br>
		<br>		

    </nav>
	<center><img src="cap2.jpg" width="97%" ></center>
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
</footer>
</body>
</html>