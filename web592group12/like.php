<?
include("facebook.php"); 

$facebook = new Facebook(array(
 'appId'  => 'app id',
 'secret' => 'app secret here',
 'cookie' => true, // enable optional cookie support
 ));

$signed_request = $_REQUEST["signed_request"];

list($encoded_sig, $payload) = explode('.', $signed_request, 2);

$data = json_decode(base64_decode(strtr($payload, '-_', '+/')), true);

$app_data = isset($data["app_data"]) ? $data["app_data"] : '';
$_REQUEST["fb_page_id"] = $data["page"]["id"];
$access_admin = $data["page"]["admin"] == 1;
$has_liked = $data["page"]["liked"] == 1;
if($has_liked) {
	// you like content here
}else{
	// not like content here
}
?>