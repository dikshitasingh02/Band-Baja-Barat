<?php
    if(isset($_COOKIE["login"])){
	    $email=$_COOKIE["login"];
		$conn=mysqli_connect("localhost","root","","details");
		if(empty($_POST["fname"]) || empty($_POST["lname"]) || empty($_POST["gender"]) || empty($_POST["caste"]) || 
		   empty($_POST["religion"]) || empty($_POST["dob"]) || empty($_POST["occupation"])){
		        header("location:edit.php?empty=1");
		}
        else{
		        $fname=$_POST["fname"];
		        $lname=$_POST["lname"];
		        $gender=$_POST["gender"];
		        $caste=$_POST["caste"];
		        $religion=$_POST["religion"];
		        $dob=$_POST["dob"];
		        $occ=$_POST["occupation"];
				if(mysqli_query($conn,"update details set fname='$fname',lname='$lname',gender='$gender',caste='$caste',
				                religion='$religion',birth='$dob',occupation='$occ' where email='$email'")>0){
				        header("location:edit.php?success=1");
				}
                else{
                    header("location:edit.php?again=1");
					}
					
			}	
        }
        else{
            header("location:index.php");
        }
?>		