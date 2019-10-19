<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link href="first.css" rel="stylesheet" type="text/css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>


<body> 
<div class="container">
<div class="row">
<div class="col-xs-16 col-sm-12 col-md-12 col-lg-12" class="page-header" id="login" > 
  <ul class="list-inline" id="asli">
    <li><a href="#">صفحه اصلی</a></li>
    <li><a href="#">درباره ما</a></li>
    <li><a href="#">تماس با ما</a></li>
</ul>

</div>


 <form action="#">
  <select name="nui" id="first" placeholder="همه دانشکده ها">
  <option value="uni1">همه دانشکده ها</option>
    <option value="uni1">فنی و مهندسی</option>
    <option value="uni2">علوم انسانی</option>
  </select> 

  
    <input type="text" id="search" name="search" placeholder="برای جست و جو عبارت خود را تایپ کنید...">
    <!--<i class='fas fa-search' style='font-size:20px'></i>-->
    
  
    <button type="button" class="btn btn-info" id="sub">
      <span class="glyphicon glyphicon-search"></span> جست و جو
    </button>
  

</form> 
</div> 
<div class="container">
  <h2>پایان نامه</h2>
  <p>Use the "media-left" class to left-align a media object. Text that should appear next to the image, is placed inside a container with class="media-body".</p>
  <p>Tip: Use the "media-right" class to right-align the media object.</p><br>
  
  <!-- Left-aligned media object -->
  <div class="media">
    <div class="media-left">
    </div>
    <div class="media-body">
      <h4 class="media-heading">Left-aligned</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
  </div>
  <hr>
  
  <!-- Right-aligned media object -->
  <div class="media">
    <div class="media-body">
      <h4 class="media-heading">Right-aligned</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div class="media-right">
     
    </div>
  </div>
</div>

<div class="container-fluid">
  <h1>پایان نامه</h1>
  <p>Resize the browser window to see the effect.</p>
  <p>The columns will automatically stack on top of each other when the screen is less than 768px wide.</p>

  <div class="container">
  <h2>پایان نامه</h2>
  <p>Click on the button to toggle between showing and hiding content.</p>
  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Simple collapsible</button>
  
  <div id="demo" class="collapse">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
  </div>
</div>


</body>

</html>