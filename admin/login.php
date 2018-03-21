<?php
session_start();



?>

<html>
    <head>
        <meta charset="utf-8" />
        <title>LOGIN</title>
        
        <link rel="stylesheet" href="assets/css/styles.css" />
           
    </head>
    
    <body>

		<div id="formContainer">
			<form id="login" method="post" action="login.php">
				<!--<a href="#" id="flipToRecover" class="flipLink">Forgot?</a>-->
				<input type="text" name="user_name" id="loginEmail" placeholder="User Name"  />
				<input type="password" name="login_pass" id="loginPass" placeholder="Password" />
				<input type="submit" name="login" value="Login" />
			</form>
			
		</div>

        <footer>
	        <h2><i>Designed by:</i> Chamila Maddumage</h2> 
        </footer>
        
    </body>
</html>

<?php 

include("includes/connect.php");
if(isset($_POST['user_name'])){
  
    $user_name=mysql_real_escape_string($_POST['user_name']);
    $user_pass=mysql_real_escape_string($_POST['login_pass']);
    
    $encrypt=md5($user_password);
    
    $admin_query="select * from users where user_name='$user_name' AND user_pass='$user_pass'";

    $run=mysql_query($admin_query);
    if(mysql_num_rows($run)>0){
     $_SESSION['user_name']=$user_name;
        echo "<script>window.open('index.php','_self')</script>";
    
    
    }else{
    
     echo "<script>alert('username or password is incorrect')</script>";
    }
    
    

}


?>