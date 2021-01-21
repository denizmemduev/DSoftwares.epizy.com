
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style2.css">
    <title>DSoftwares.bg</title>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

   
</head>
<body>

  




    <div class="box">
    


        <form class="form" action="index.php" method="POST">
                <h1 class="h1">
     Welcome to  DSoftwares.bg
      

</h1>
<br>
          <h1 class="h4 mb-3 fw-normal">Please sign in</h1>
         
          <input
            class="form-control m-1 w-100"
            type="text"
            autoFocus="1"
            name="username1"
            placeholder=" Type your Username"
            required
          />
          <input
            class="form-control m-1  w-100"
            type="password"
            name="password1"
            placeholder="Type your Password"
             required
          />
          <button type="submit" class="btn btn-primary m-1 w-100">Sign in</button>

          <div id ="lgnbtn" class="sgn" >Create new account</div>
        
    

            <?php
 include 'db.php';
session_start();  //възобновяване на съществуващата сесия
if(isset ($_SESSION['valid_user'])){
echo ' <br> <p class="message"> 
Goodbye, '.$_SESSION['valid_user'].'!  </p>';
$_SESSION=array(); //почистване на всички променливи на сесията
session_destroy(); //унищожаване на сесията
}



        if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['username1']!= null && $_POST['password1']!= null) {   //достъп след бутона ВХОД
          // зададени са потребителското име и паролата
                $username1=$_POST['username1'];
                $password1=$_POST['password1'];
               
 
                $sqlQuery = " SELECT * FROM users";
                $result = mysqli_query($link, $sqlQuery) or die(mysqli_error($link));  
if($result){
while( $db = mysqli_fetch_array($result)){

    if($db['username'] == $username1 &&  password_verify( $password1, $db['passwords']) == $password1  ){

        session_start();   //стартиране на сесия
        $_SESSION['valid_user'] = $username1; 
        $_SESSION['id_user'] = $db['ID']; 
        
        header("Location: index3.php");
    break;
      }



}
if(!isset ($_SESSION['valid_user'])){
      
        echo" <br><p class = 'message'>Invalid user information</p>";
      

    }

   }    

} 


    ?>

</form>

        </div>

    


  <div class="box2">
    
   


        <form class="form" action="index.php" method="POST">
           <h1 class="h1">
     Welcome to  DSoftwares.bg
      

</h1>
<br>
          <h1 class="h4 mb-3 fw-normal">Creating Account</h1>
         
          <input
            class="form-control m-1 w-100"
            type="text"
            autoFocus="1"
            name="firstname"
            placeholder="First Name"
             required
          />

           <input
            class="form-control m-1 w-100"
            type="text"
            autoFocus="1"
            name="lastname"
            placeholder="Last Name"
             required
          />

          <input
            class="form-control m-1 w-100"
            type="email"
            autoFocus="1"
            name="email"
            placeholder="Email"
             required
          />
           <input
            class="form-control m-1 w-100"
            type="text"
            autoFocus="1"
            name="username"
            placeholder="Username"
             required
          />

          <input
            class="form-control m-1  w-100"
            type="password"
            name="password"
            placeholder="Password"
             required
          />
          <button type="submit" class="btn btn-primary m-1 w-100">Sign up</button>

          <div id="signbtn" class="sgn" >Alredy have an account</div>
        
    

    <?php 
    
    include 'db.php';
    
    if (isset($_POST['firstname'])  && isset($_POST['lastname'])  &&  isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password']) ){
		
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
        $username = $_POST['username'];
        $password =password_hash($_POST['password'],PASSWORD_DEFAULT);

		$sqlQuery2 = " INSERT INTO users ( firstname, lastname, email, username, passwords )
		 VALUES ('$firstname', '$lastname ', '$email',   '$username', '$password')";
		 
         mysqli_query($link, $sqlQuery2) or die(mysqli_error($link));
         
         echo"<script> alert('Signup Successful') </script>";

         
		

	}
    
    
    
    
    
    ?>

</form>

        </div>


    <script src="script.js"></script>
  

</body>

</html>