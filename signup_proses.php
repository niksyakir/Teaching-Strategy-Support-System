<?php
    session_start();
    //Menghubung ke pangkalan data
    require('config.php');

    if (isset($_POST['signup'])){
    
        //mengumpuk pemboleh ubah untuk menyimpan data daripada pengguna
        $Email=$_POST['email'];
        $Username=$_POST['username'];
        $Password=$_POST['password'];
        $CPassword=$_POST['cpassword'];

        $_SESSION['Email']=$_POST['email'];
        $_SESSION['Username']=$_POST['username'];

        $errEmail=$errUsername=$errPassword="";
        if((empty($_POST['email']))&&(empty($_POST['username']))&&(empty($_POST['password']))){
            echo "<script>alert('Please fill in personal details.');
            window.location='sign up.php';</script>";
        }
        else{
            if(empty($_POST['email'])){
                echo "<script>alert('Please fill in email.');
                window.location='sign up.php';</script>";
            }else{
                $errEmail="";
            }
            if(empty($_POST['username'])){
                echo "<script>alert('Please fill in username.');
                window.location='sign up.php';</script>";
            }else{
                $errUsername="";
            }
            if(empty($_POST['password'])){
                echo "<script>alert('Please fill in password.');
                window.location='sign up.php';</script>";
            }else{
                $errPassword="";
            }
            if($_POST['password']!==$_POST['cpassword']){
                echo "<script>alert('The confirm password does not match the password. Please try again.');
                window.location='sign up.php';</script>";
                exit;
            }
			if((($_POST['email'])!="")&&(($_POST['username'])!="")&&(($_POST['password'])!="")){

				//Masuk sql statement ke dalam jadual dalam pangkalan data
				$sqlInsert=mysqli_query($con,"INSERT INTO User(`EmailUser`,`Username`,`PasswordUser`)
				VALUES ('$Email','$Username','$Password')");
	
				//Menyemak jika memenuhi semua keadaan, tambah rekod ke dalam jadual dan memaparkan mesej
				if($sqlInsert)
				{
				print "<script>alert('Account successfully registered.');
					window.location='signed/indexSigned.php';</script>";
				}
				else
				{
				print "<script>alert('Account failed to register. You already have an account for the registered email.');
					window.location='sign up.php';</script>";
				}
			}
		}
	}
?>
				