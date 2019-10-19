<!DOCTYPE html>
<html lang="en">
<head> 
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="login.css" rel="stylesheet" type="text/css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>  

<img src="../pic/admin.png" width="200" height="200" id="img">

<div class="container">
     <div class="row">
        <div class="col-xs-16 col-sm-16 col-md-16 col-lg-16" class="page-header" id="head" > 
          <ul class="list-inline" id="b">
              <p>ورود مدیر </p>
         </ul>
        </div>
      </div>
    </div>

<div id="log-admin" >
   <form action="reg.php" method="POST" id="log" >
        <input type="text" name="user" id="user" placeholder="user name">
        <br><br>
        <input type="text" name="pass" id="pass" placeholder="password">
        <br><br>
        <input type="submit" name="btn" id="btn" value="ورود">

    </form>
</div>   

</body>
</html>