  <!DOCTYPE html>
  <html lang="en">
  <head>
	  <meta charset="UTF-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	  <title>Document</title>
  </head>
  <body>
	  
  </body>
  </html>
  
  <?php

// mysql اتصال به
$con=mysql_connect('localhost','root','');
// کدهایی برای نمابش صحیح متن فارسی
mysql_query("SET character_set_results=utf8;",$con);
mysql_query("SET character_set_client=utf8;",$con);
mysql_query("SET character_set_connection=utf8;",$con);
mysql_query("SET character_set_database=utf8;",$con);
mysql_query("SET character_set_server=utf8;",$con);
// بقیه کدهای کار با پایگاه داده   


if(isset($_POST["btn"]))
{
	if($_POST["student"]=="" ||$_POST["teach"]=="" ||$_POST["object"]=="" ||$_POST["txt"]=="" ||$_POST["btn"]=="" )
	{
		header("location:reg.php?empty=1010");
		exit;
		
		
	}
	mysql_connect("localhost","root","");
	mysql_select_db("learn");
	
	$a="INSERT INTO `thesis` VALUES (NULL, '".$_POST["student"]."', '".$_POST["teach"]."', '".$_POST["object"]."','".$_POST["txt"]."')"; 
	$b=mysql_query($a);
    
if($b)
	{
	    header("location:reg.php?ok=2020");
	     exit;
	}
	else
	{
		header("location:reg.php?error=3030");
		exit;
	}
}
?>