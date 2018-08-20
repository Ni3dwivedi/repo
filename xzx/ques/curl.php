<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://jsonplaceholder.typicode.com/posts' );
curl_setopt($ch,CURLOPT_POST,false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($ch, CURLOPT_HEADER, 0);
$output=curl_exec($ch);
$data = json_decode($output,true);
//echo "<pre>";
//print_r($data);
foreach($data as $key=>$value)
{
	echo"UserId is ".$value['userId']."<br/>";
	echo"Id is ".$value['id']."<br/>";
	echo"Title - ".$value['title']."<br/>";
	echo"Body - ".$value['body']."<br/>";
	
	echo "<br/>";
}


curl_close($ch);

?>
