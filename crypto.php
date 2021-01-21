

<head>
    <title>
        DSoftwares.bg
    </title>

    <link rel="stylesheet" type="text/css" href="network.css">
    <link rel="stylesheet" type="text/css" href="crypto.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" href="path4747.ico">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />



</head>
<?php
session_start(); 
   if(!isset($_SESSION['valid_user'])){
      
    header("Location: index3.php");

}
	
	
?>


<body>


<nav id=nav style="height: 68px;">


<div class=LO>
    <a href="main.php">
        <img src="path4747.png" class=icon2 alt="">
        <H5 class=logo> DSoftwares.bg</H5>
    </a>
</div>


<div class=m>

    <div class=button onclick="resize()">
        <div class="burger">

            <div class="line1"></div>




        </div>

    </div>
    <hr>

    <ul class=menu>


        <li>
            <a href="main.php#home"> <img src="hhh.png" class=icon alt=""> Home </a>
        </li>


        <li>
            <a href="main.php" top:10px><img src="nnn.png" class=icon alt=""> E-Tools</a>
        </li>

        <li>
            <a href="main.php"> <img src="ppp.png" class=icon alt=""> Projects </a>
        </li>

        <li>
            <a href="main.php#gallery"><img src="ggg.png" class=icon alt=""> Gallery </a>
        </li>

        <li>
            <a href="main.php#contacts"><img src="aaa.png" class=icon alt=""> Contacts </a>
        </li>

        <hr id ="horizontal">
        <li >
            <a href="index.php"> Logout: <?php echo "$_SESSION[valid_user] ";?> </a>
        </li>   

    </ul>



</div>


</nav>

    <div class="calculator1">
        <h1>Encrypt & Decrypt</h1>
        <div class=panel>
         <label>Select Algorithm</label>
         <br>
         <form action="crypto.php" method="POST">
         <select name='select'>
           <?php 
             $algorithms = array('MD5');
                for($i=0;$i<count($algorithms);$i++){
                  echo"<option> $algorithms[$i] </option>";
                }
           
           
           
           ?>
         
         </select>

         <select  required name ='select1' >
           <?php 
             $options = array('Encrypt','Decrypt');
                for($i=0;$i<count($options);$i++){
                  echo"<option> $options[$i] </option>";
                }
           
           
           
           ?>
         
         </select>


        
           
            <input name='text' type="text" placeholder=" Type your text">

           
            <label name='result'></label>
            
            
          <button type="submit"> Run </button>

          </form>
          <?php 
            $flag = false;
            if(isset ($_POST['select1']) && ($_POST['text'])&& ($_POST['select']) ){
            $opciq = $_POST['select1'];
            $text= $_POST['text'];
            $encryptedd = MD5($text);
            $algorithm = $_POST['select'];
             if( $opciq =="Encrypt" && $algorithm == "MD5"){
               include 'db.php';


          $sqlQuery = "SELECT * FROM algorithms";


          $resultt = mysqli_query($link, $sqlQuery) or die(mysqli_error($link));  
       
if($resultt){
   
        while( $db = mysqli_fetch_array($resultt)){
        
            if($db['encryptedd'] == $encryptedd){
               $flag=true;
            break;
              }
        
        
        
        }
      
        
           } 
    

if($flag == true){
    echo "<br> <div id ='result'><p> Encrypted: <br>". MD5($text)."</p> </div>";

}

else{

    

    $sqlQuery2 = "INSERT INTO algorithms (algorithmm , decrypted, encryptedd)
    VALUES ('$algorithm', '$text', '$encryptedd')";
    
    mysqli_query($link, $sqlQuery2) or die(mysqli_error($link));
    
   
    echo "<br> <div id ='result'><p> Encrypted: <br>". MD5($text)."</p> </div>";
}

     

    
    
    
    

} else if( $opciq =="Decrypt" && $algorithm == "MD5"){

    
        include 'db.php';


   $sqlQuery = "SELECT * FROM algorithms";


   $resultt = mysqli_query($link, $sqlQuery) or die(mysqli_error($link));  

if($resultt){

 while( $db = mysqli_fetch_array($resultt)){
 
     if($db['encryptedd'] == $text){
        $decrypteddd = $db['decrypted'];
     break;
       }
 
 
 
 

    }
    echo "<br> <div id ='result'><p> Decrypted: <br>". $decrypteddd."</p> </div>";

}}
mysqli_close($link);      




}




 
            
    
        
        
       


             
    
 
   




?>
         
        </div>





















       
        <script src="menu.js"></script>
</body>

