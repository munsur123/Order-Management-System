<?php

if(isset($_GET["item"])){
	
	$item=$_GET["item"];	
	
	
	if($item==1){ 
	
		include("home.php");
		 
	}else if($item==2){
	  include("about_us.php");
		
	}else if($item==3){
		
	    include("contactUs.php");
		
	}else if($item==4){
	  
		include("germents.php");
		
	}else if($item==5){
	  include("jutes.php");
		
		
	}else if($item==6){
	  include("stockloads.php");
	
	}else if($item==7){
	  include("leathers.php");
		

	}else if($item==8){
	  include("register.php");
	  
	}else if($item==9){
	  include("login.php");
	  
	  
	  }else{
	
	include("error.php");
  	
	}

}
?>