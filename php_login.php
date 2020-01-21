<!--function for Login-->
<?php
session_start();
include('php_connection.php');
$name=$_POST['email'];
$password=$_POST['password'];
if (!filter_var($name, FILTER_VALIDATE_EMAIL))
 {
	$emailErr = "Invalid email format"; 
  }
else{
	if(isset($_POST['submit']))	
	{
		$sql1="select dname,dpassword from doctors where demail='".$name."' and dpassword='".$password."' ";
		$result1=mysqli_query ($conn,$sql1);

		$sql2="select pname,ppassword from patients where pemail='".$name."' and ppassword='".$password."' ";
		$result2=mysqli_query ($conn,$sql2);

		if($name=='admin@gmail.com' and $password=="admin")
		{
			header("location:admin_home.php");
		}
		elseif(mysqli_num_rows($result1)>0)
			{	
				if($row=mysqli_fetch_assoc($result1))
				{
					
					$_SESSION['email'] = $name;
					header('location:doctor_home.php');
					
					
				}
			}
		elseif(mysqli_num_rows($result2)>0)
			{	
				while($row=mysqli_fetch_assoc($result2))
				{
					$_SESSION['mail'] = $name;
					header('location:patient_home.php');
				}
			}

		else
			{
				function phpAlert($msg)
				{
					echo '<script type="text/javascript">alert("'.$msg.'")</script>';
				}
				phpAlert("Incorrect username and password or contact administrator");
				exit;
			}
	}
}

mysqli_close($conn);
?>