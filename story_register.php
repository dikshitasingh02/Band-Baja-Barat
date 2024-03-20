<?php
    if(isset($_COOKIE["login"])){
    include_once("db.php");
	$email=$_COOKIE["login"];
	if(empty($_POST["story"]) || empty($_POST["story_with_email"])) {
		header("location:story.php?empty=1");
		}
	else{
		    $story = $_POST["story"];
			$story_with_email = $_POST["story_with_email"];
			
			$sn=0;
			$rs=mysqli_query($conn,"select MAX(sn) from story");
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
		    $dt=date("d M,Y");
			
			    if(mysqli_query($conn,"insert into story values($sn,'$code','$email','$story','$story_with_email','$dt')")>0){
				    header("location:story_register.php?success=1");
					}
				else{
					header("location:story_register.php?again=1");
				}
			
        }
	}	
?>		