<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>string</title>
</head>

<body>
<?php
  $str1="nitin"; 
  $str2="kumar_dwivedi hbggy hggniyinvggvh kumar hvfggf  <br>";
  $str3="$str1";
  $str3 .="$str2";
  echo $str3;

  ?>
  <?php
  $str1="nitin"; 
  $str2="kumar_dwivedi kumar<br>";
  $str3="$str1";
  $str3 .="$str2";
  echo strtoupper ($str3);
  echo strtolower( $str3);
  echo ucfirst ($str3);
  echo ucwords ($str3);

  ?>
  <?php
  echo str_replace("kumar","mirsha","$str2");
  echo strstr($str2,"kumar");
  
  
  ?>
</body>
</html>