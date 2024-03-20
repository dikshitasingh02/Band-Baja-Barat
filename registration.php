<?php
    include_once("db.php");
	if(empty($_POST["fname"]) || empty($_POST["lname"]) ||empty($_POST["gender"]) || empty($_POST["email"]) ||
	    empty($_POST["password"]) || empty($_POST["caste"]) || empty($_POST["religion"])  || empty($_POST["occupation"])|| 
		empty($_POST["birth"]) || empty($_POST["city"]) || empty($_POST["state"]) || empty($_POST["country"])){
		header("location:register.php?empty=1");
		}
		else{
		    $fname = $_POST["fname"];
			$lname = $_POST["lname"];
			$gender = $_POST["gender"];
			$caste = $_POST["caste"];
			$religion = $_POST["religion"];
			$email = $_POST["email"];
			$password = $_POST["password"];
			$occupation = $_POST["occupation"];
			$birth = $_POST["birth"];
			$country = $_POST["country"];
			$state = $_POST["state"];
			$city = $_POST["city"];
			$sn=0;
			$rs=mysqli_query($conn,"select MAX(sn) from details");
			if($r=mysqli_fetch_array($rs)){
			    $sn=$r[0];
			}
			$sn++;
			$code="";
			$a=array();
			for($i='a' ; $i<='z' ;$i++){
				array_push($a,$i);
				if($i=='z')
				break;
			}
			 for($i='0' ; $i<='9' ;$i++){
				array_push($a,$i);
			}
			 for($i='A' ; $i<='Z' ;$i++){
				array_push($a,$i);
				if($i=='Z')
					break;
			 }
			shuffle($a);
			for($i=0 ;$i<5 ; $i++){
				$code = $code.$a[$i];
			}
			$code=$code."_".$sn;
			$target = "profile/";
			$target = $target . $code.".jpg"; //profile/zxye43_3.jpg
			//$pic=($_FILES["photo"]['name']);
			//$size=(($_FILES['photo']['size'])/1024)/1024;
			if(move_uploaded_file($_FILES['photo']['tmp_name'], $target)){
			    if(mysqli_query($conn,"insert into details values($sn,'$code','$fname','$lname','$email','$password','$gender','$caste','$religion','$occupation','$birth','$city','$state','$country')")>0){
				    header("location:register.php?success=1");
					}
				else{
					header("location:register.php?again=1");
				}
			}
            else{
                    header("location:register.php?img_err=1");
            }
        }
?>		