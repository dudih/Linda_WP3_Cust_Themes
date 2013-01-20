<?php
	$urlvars = "";
	if(isset($_GET["twitter_max_id"]) && $_GET["twitter_max_id"]!=0)
		$urlvars .= "&max_id=". $_GET["twitter_max_id"];
	if(isset($_GET["twitter_user_name"]) && $_GET["twitter_user_name"]!=null)
		$urlvars .= "&screen_name=". $_GET["twitter_user_name"];
	if(isset($_GET["twitter_per_page"]) && $_GET["twitter_per_page"]!=null)
		$urlvars .= "&count=". $_GET["twitter_per_page"];

	$json = file_get_contents("http://api.twitter.com/1/statuses/user_timeline.json?include_entities=true&include_rts=false".$urlvars, true); //getting the file content
	//$decode = json_decode($json, true); //getting the file content as array

	echo $json;
?>
