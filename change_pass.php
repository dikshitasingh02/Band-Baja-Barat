<?php
    if(isset($_COOKIE["login"])){
	    if(empty($_POST["cp"]) || empty($_POST["np"]) || empty($_POST["rp"]) ){
		        header("location:changepass.php?empty=1");
		}
        else{
            $cp=$_POST["cp"];
            $np=$_POST["np"];
			$rp=$_POST["rp"];
			$email=$_COOKIE["login"];
			$conn=mysqli_connect("localhost","root","","details");
			$rs=mysqli_query($conn,"select * from details where email='$email'");
			if($r=mysqli_fetch_array($rs)){
			    if($r["password"] == $cp){
				    if($np==$rp){
					    if(mysqli_query($conn,"update details set password='$np' where email='$email'")>0){
						    header("location:changepass.php?success=1");
						}
						else{
                            header("location:changepass.php?again=1");
                        }
                    }
                    else{
					    header("location:changepass.php?missmatch=1");
						}
				}		
				else{
					header("location:changepass.php?invalid_pass=1");
				}	
            }
            else{	
                header("location:logout.php");
            }
        }
    }
    else{
        header("location:index.php");
    }
?>	