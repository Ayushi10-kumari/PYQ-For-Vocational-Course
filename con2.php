<?php
	
		$con=new mysqli('localhost','root','root','student');
		if($con==false){
			echo " not connected";
		}
		$firstname=mysqli_real_escape_string($con,$_POST["firstname"]);
		$password=mysqli_real_escape_string($con,$_POST["password"]);
        $qry="select *from register WHERE firstname='$firstname' and password='$password'";
		$res=mysqli_query($con,$qry);
		if($res){
			if(mysqli_num_rows($res)==1){
				include "Home1.html";

			}
			else{
				include "Record.html";
			}
		}
		else{
			echo "query not executed";
		}
	
?>
	