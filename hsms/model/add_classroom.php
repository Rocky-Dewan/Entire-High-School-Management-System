<?php
include_once('controller/config.php');
if(isset($_POST["do"])&&($_POST["do"]=="add_classroom")){

	$name=$_POST["name"]; 
	$student_count=$_POST["student_count"]; 
	
	$sql1="SELECT * FROM class_room where name='$name'";	
	$result1=mysqli_query($conn,$sql1);
	$row1=mysqli_fetch_assoc($result1);
	$name1=$row1['name'];
	
	$msg=0;//for alerts

	if($name == $name1){
		$msg+=1;
		//RD-250-1 The Classroom is duplicated.
	}else{
		//RD-250-2
		$sql="INSERT INTO class_room (name, student_count) 
     		  VALUES ( '".$name."','".$student_count."')";
	  
			  if(mysqli_query($conn,$sql)){
				$msg+=2;  
				//RD-250-3 The record has been successfully inserted into the database.
			  }else{
				$msg+=3;  
				//RD-250-4 Connection problem.	
			  }

	}

header("Location: view/class_room.php?do=alert_from_insert&msg=$msg");//RD-250-5

}
?>

