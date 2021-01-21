
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style=" background-color:rgb(3, 102, 148);
      ">
 <h1>Страница за членове</h1>


    <?php
       session_start(); 
    if(isset ($_SESSION['valid_user'])){
      
        header("Location: main.php");

    } else {
        header("Location: index.php");
        
        
        
        
       
    }



?>

<a type="submit" href='' >СТРАНИЦА ЗА ЧЛЕНОВЕ</a>
	<br>
</body>
</html>
