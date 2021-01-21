
<?php

session_start(); 
if(!isset($_SESSION['valid_user'])){
      
    header("Location: index3.php");

}

	include 'db.php';

	if(isset($_GET['id'])){
		$sqlQuery3= 'DELETE FROM todolist WHERE actionid ='.$_GET['id']; 
		
		mysqli_query($link, $sqlQuery3) or die(mysqli_error($link)); 
		$sqlQuery2 = " SELECT * FROM todolist WHERE ID = '$_SESSION[id_user]'  ORDER BY id DESC;" ;        
	$result = mysqli_query($link, $sqlQuery2) or die(mysqli_error($link));
	if($result){
	 
	   $index=1;
		while ($row = mysqli_fetch_array($result)) {  
	
			 echo "<button  value = $row[actionid]>  <div id='index' > $index</div>  <img value = $row[actionid] src='123.png' alt=''> <div id='second'> $row[actions]  </div>  </button>";
     
			$index++;
		}
	
	
	 
	}  
	mysqli_close($link);
	}

	               
?>


   
<script type="text/javascript" > $(document).ready(function(){  
               $('.todolist button').click(function(){
                 var selectedId = $(this).val();
                 
                 console.log(selectedId);
                   
                 $('.body').load("todo2.php?id="+selectedId);
                
                 }

               )
             

         });
</script>
   
