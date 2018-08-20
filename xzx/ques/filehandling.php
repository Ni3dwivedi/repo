<?php

if(is_dir("Ducat"))
{
	echo "Directory Already Exist";
}
else
{
	mkdir("Ducat");
	echo "Directory Created Successfully";
}


/*
if(is_dir("Ducat"))
{
	rmdir("Ducat");
	echo "Directory Remove Successfully";
}
else
{
	echo "Directory Not Exist";
}
*/

/*
if(file_exists("abc.txt"))
{
	echo "File Already Exist";
}
else
{
	touch("abc.txt");
	echo "File Created Successfully";
}
*/

/*
if(file_exists("abc.txt"))
{
	unlink("abc.txt");
	echo "File Remove Successfully";
}
else
{
	echo "File Not Exist";
}
*/


/*
touch("abc.txt");
$fo = fopen("abc.txt","w");
fputs($fo,"Ducat\nIndia");
echo "Write Successfully";
*/

/*
$fo = fopen("abc.txt","r");
echo fread($fo,3);
*/

/*
$fo = fopen("abc.txt","r");
echo fread($fo,filesize('abc.txt'));
*/

/*
$fo = fopen("abc.txt","r");
echo fgetc($fo);
*/
/*
$fo = fopen("abc.txt","r");
echo fgets($fo);*/

/*
$fo = fopen("abc.txt","r");
while(!feof($fo))
{
	echo fgetc($fo);
}
*/

/*
$fo = fopen("abc.txt","r");
while(!feof($fo))
{
	echo fgets($fo);
}
*/
?>
