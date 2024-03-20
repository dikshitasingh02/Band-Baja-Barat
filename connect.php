<?php
     if(empty($_POST["fname"]) || empty($_POST["lname"]) ||empty($_POST["gender"]) || empty($_POST["email"]) ||
	    empty($_POST["password"]) || empty($_POST["caste"]) || empty($_POST["religion"])  || empty($_POST["occupation"])|| 
		empty($_POST["birth"]) || empty($_POST["city"]) || empty($_POST["state"]) || empty($_POST["country"]))
		{
		 header("location:register.php?empty=1");
	 }
	 else{
		 $email=$_POST["email"];
		   $conn=mysqli_connect("localhost","root","","details");
		   $rs=mysqli_query($conn,"select * from details where email='$email'");
		   $r=mysqli_fetch_array($rs);
		   if($email==$r[4]){
			   header("location:register.php?existed=1");
		   }
		   else{  
		    $sn=0;
			$rs=mysqli_query($conn,"select MAX(sn) from details");
			if($r=mysqli_fetch_array($rs)){
				$sn=$r[0];
			}
			$sn++;
			$a=array();
			for($i='A' ; $i<='Z' ;$i++){
				array_push($a,$i);
				if($i=='Z')
				break;
			}
			 for($i='a' ; $i<='z' ;$i++){
				array_push($a,$i);
				if($i=='z')
				break;
			}
			 for($i='0' ; $i<='9' ;$i++){
				array_push($a,$i);
			 }
			shuffle($a);
			$code="";
			for($i=0 ;$i<6 ; $i++){
				$code = $code.$a[$i];
			}
		  		
		  $code=$code."_".$sn;
		  $fname=$_POST["fname"];
		  $lname=$_POST["lname"];
		  $gender=$_POST["gender"];
		 // $email=$_POST["email"];
		  $password=$_POST["password"];
		  $caste=$_POST["caste"];
		  $religion=$_POST["religion"];
		  $occupation=$_POST["occupation"];
		  $birth=$_POST["birth"];
		  $city=$_POST["city"];
		  $state=$_POST["state"];
		  $country=$_POST["country"];
		    
			if(mysqli_query($conn,"insert into details values($sn,'$code','$fname','$lname','$email','$password','$gender','$caste','$religion','$occupation','$birth','$city','$state','$country')")){
				header("location:index.php?profile_created=1");
			}
			else{
				header("location:register.php?again=1");
			}
	 }
   }
?>