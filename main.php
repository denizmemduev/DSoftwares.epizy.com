
<?php
session_start(); 
   if(!isset($_SESSION['valid_user'])){
      
    header("Location: index3.php");

}
	
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        DSoftwares.bg
    </title>
    <link rel="stylesheet" type="text/css" href="style.css">
    
    <link rel="shortcut icon" href="path4747.ico">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 
   

     
</head>


<body data-spy="scroll" data-target=".navbar" data-offset="50">
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" id="logotext" href="main.php">DSoftwares.com</a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="main.php">Home</a></li>
         
          <li><a href="main.php#section3">Projectsssssss</a></li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> <?php echo "$_SESSION[valid_user] ";?>  <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#section41">Account Settings</a></li>
              <li><a href="index.php">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav> 


 
</div>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
     <div class="section4" id = "s1">

      <h2>Welcome <?php echo "$_SESSION[valid_user] ";?> ! </h2>
  
      <p>
        DSoftwares offers you developments on<br> websites, web applications and free educational online applications.
      </p>
      <div id=btnss>
        <button class="butn">Contacts</button>
         <button class="butnn">About</button>
      </div>
     </div>
     
    </div>

    <div class="item">
      <div class="section4" id="s3">

      <h1 > XOXO</h1>
      <p>
        You can also play game 
      </p>
        <a href="xoxo.php"><button  class="butnn">Play</button></a> 
     </div>
    </div>

    <div class="item">
     <div class="section4" id=s2>

      <h1>Thank you for visiting our website ! </h1>
      <p>
        
      </p>
     </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div id="section3" class="container-fluid">





<div class="column">
 
      
      <div class="caption">
        <h3>IP Calculator</h3>
        <p>"Computer Networks and Communications" - This IP subnet calculator is a <br> online tool, which performs a series of calculations based  on specific values and returns the results.</p>
        <p><a href="network.php" class="btn btn-primary" role="button">To Application</a> 
      </div>
   
</div>

<div class="column">
      <div class="caption">
        <h3>Encryption & Decryption</h3>
        <p>"Computer Networks and Communications" - This IP subnet calculator is a online tool, <br> which performs a series of calculations based on specific values and returns the results.</p>
        <p><a href="crypto.php" class="btn btn-primary" role="button">To Application</a> 
      </div>
    
</div>

<div class="column">
  
      <div class="caption">
        <h3>DList</h3>
       <p> DList is a work management solution that helps businesses organize tasks, to-do lists, <br> and reminders with ease. </p>
        <p><a href="todo.php" class="btn btn-primary" role="button">To Application</a> 
      </div>
</div>






  
</div>
<div id="section2" class="container-fluid">
<div class=socialmedia>
<iframe width="100%" height="450" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/1195993942&color=%23ff5500&auto_play=true&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/trapmusictv_bg" title="Trap Music TV" target="_blank" style="color: #cccccc; text-decoration: none;">Trap Music TV</a> · <a href="https://soundcloud.com/trapmusictv_bg/sets/trap-music-tv-playlist" title="Deniz Memduev&#x27;s List" target="_blank" style="color: #cccccc; text-decoration: none;">Deniz Memduev&#x27;s List</a></div>

</div>
 
</div>



 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>


</html>

