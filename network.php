

<head>
    <title>
        DSoftwares.bg
    </title>

    <link rel="stylesheet" type="text/css" href="network.css">
    <link rel="shortcut icon" href="path4747.ico">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="style.css">




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
        <h1>IPv4 Calculator</h1>
        <div class=panel>
            <Label id=ip>IP Address: <br>  <input id = inpip type="text"> </Label>


            <Label id=prefix>Prefix: <br> <input id= prx type= "text"> </Label>
            <br>
            <div id="div">   <button class=button2 onclick="calc()"> <h5> Calculate</h5> </button> </div>
         
            <br>

            <br>
            <Label id=sub class="output">Subnet Mask:  </Label>
            <br>
            <br>
            <Label id=nh class="output">Network/Host:  </Label>
            <br>
            <br>
            <Label id=network class="output">Network Address: </Label>
            <br>
            <br>
            <Label id=broatcast class="output">Broatcast Address: </Label>
            <br>
            <br>
            <Label id=first class="output">First Address: </Label>
            <br>
            <br>
            <Label id=last class="output">Last Address: </Label>
            <br>
            <br>
            <Label id=number class="output">All Hosts: </Label>
            <br>
            <br>
            <Label id=usable class="output">Usable Hosts: </Label>




        </div>





















        <script src="calculator.js"></script>
        <script src="menu.js"></script>

</body>

