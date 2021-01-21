<?php
session_start();
if (!isset($_SESSION['valid_user'])) {

    header("Location: index3.php");
}


?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="todo.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  

    <title>Document</title>
</head>


<body>

   
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
          <li><a href="main.php#section1">Home</a></li>
         
          <li><a href="main.php#section3">Projects</a></li>
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

<div class="todolist" > 

    <div class="box">

        <form action="todo.php" method="POST">

            <input placeholder="Things to do" class="input" name="tdo" pattern="[A-Z a-z А-Я а-я  0-9 . , ( ) ! ? - :]{1,100}" required >

           <input type="submit"   class="button" value="add">

             
           </input>


        </form>



        <br>

        <div class="body">
            <?php

            include 'db.php';
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {   //достъп след бутона ВХОД
                if ($_POST['tdo']!=null) {
                    $data = $_POST['tdo'];
                    $id = $_SESSION['id_user'];

                    $sqlQuery = " INSERT INTO todolist (id, actions) VALUES ('$id', '$data')";
                    mysqli_query($link, $sqlQuery) or die(mysqli_error($link));
                }
            }


            $sqlQuery2 = " SELECT * FROM todolist WHERE ID = '$_SESSION[id_user]'  ORDER BY id DESC;";
            $result = mysqli_query($link, $sqlQuery2) or die(mysqli_error($link));
            if ($result) {
                
                $index = 1;
                while ($row = mysqli_fetch_array($result)) {


                    echo "<button  value = $row[actionid]>  <div id='index' > $index</div>  <img value = $row[actionid] src='123.png' alt=''> <div id='second'> $row[actions]  </div>  </button>";





                    $index++;
                }

             
            }
            mysqli_close($link);

            ?>



        </div>

       

    </div>
</div>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.todolist button').click(function() {
                    var selectedId = $(this).val();

                    console.log(selectedId);

                    $('.body').load("todo2.php?id=" + selectedId);

                }

            )


        });
    </script>
    
</body>