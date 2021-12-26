<?php
$hostname = "localhost";
$database = "register";
$username = "root";
$password = "";
$conn = mysqli_connect($hostname, $username, $password,$database);
if(!$conn)
{ 
     die("connection failed:" . mysqli_connect_error());
}
if(isset($_POST['Submit']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $gender=$_POST['gender'];
	$age=$_POST['age'];
    $address=$_POST['address'];
    $country=$_POST['country']; 
    $state=$_POST['state'];
    $city=$_POST['city'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    
    $sql_query= "insert into userdetails(fname, lname, gender,age,address, country,state,city ,phone, email)
     values(' $fname', '$lname', '$gender', '$age','$address','$country','$state','$city' ,'$phone', ' $email')";
     if(mysqli_query($conn,$sql_query))
     {
         echo"Insert Successfully";
     }
       else
       {
           echo "error:". $sql . "" . mysqli_error($conn);
       }
       mysqli_close($conn);
    }
?>