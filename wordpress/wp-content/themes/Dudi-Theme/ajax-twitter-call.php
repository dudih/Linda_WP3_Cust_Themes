<?php
	$urlvars = "";
	if(isset($_GET["twitter_max_id"]) && $_GET["twitter_max_id"]!=0)
		$urlvars = "&max_id=" . $_GET["twitter_max_id"];

	$json = file_get_contents("http://api.twitter.com/1/statuses/user_timeline.json?include_entities=true&include_rts=false&screen_name=DavidHala1&count=5".$urlvars, true); //getting the file content
	//$decode = json_decode($json, true); //getting the file content as array

	echo $json;
?>
