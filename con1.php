<?php
	
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$password=$_POST['password'];
	$cpassword=$_POST['cpassword'];
	$role=$_POST['role'];
	$course=$_POST['course'];
	$croll=$_POST['croll'];
	$conn=new mysqli('localhost','root','root','student');
	if($conn->connect_error){
		die("connection failed : ".$conn->connect_error);
		}
		else{
		$stmt=$conn->prepare("insert into register(firstname,lastname,email,phone,password,cpassword,role,course,croll) values(?,?,?,?,?,?,?,?,?)");
		$stmt->bind_param("sssiiissi",$firstname,$lastname,$email,$phone,$password,$cpassword,$role,$course,$croll);
		$stmt->execute();
		include "LogIn.html";
		$stmt->close();
		$conn->close();
		}
?>