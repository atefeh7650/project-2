<!DOCTYPE html>
<html lang="en">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="reg.css" rel="stylesheet" type="text/css">
</head>
<body>   
<?php
mysql_connect("localhost","root","");
mysql_select_db("learn");

if(isset($_GET["empty"]))
{
		echo "<font  color=#FF0000>"."کادرها خالی رها شده اند"."</font>";

}
if(isset($_GET["ok"]))
{
	echo "<font color=#00CC33>"."اطلاعات با موفقیت ثبت شد"."</font>";
}
if(isset($_GET["error"]))
{
	echo "<font  color=#FF0000>"."مشکل در ثبت نام"."</font>";
}

 ?>
   <div class="container">
     <div class="row">
        <div class="col-xs-16 col-sm-16 col-md-16 col-lg-16" class="page-header" id="admin" > 
          <ul class="list-inline" id="asli">
              <p>خوش آمدید </p>
         </ul>
        </div>
      </div>
    </div>


   <form action="reg.check.php" method="POST">
      <input type="text" name="student" id="student" placeholder="نام دانشجو">
        <br><br>
      <input type="text" name="teach" id="teach" placeholder="استاد راهنما">
        <br><br>
      <input type="text" name="object" id="object" placeholder="موضوع پایان نامه">
       <br><br>
      <div class="col-75">
      <textarea id="txt" name="subject" placeholder="چکیده پایان نامه..." ></textarea>
      </div>
      <br>
      <input type="submit" value="ثبت اطلاعات" name="btn" id="btn">
      
 </form>
</body>
</html>