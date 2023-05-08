<?php
   session_start();
   include('conn.php');
$msg="";
if(isset($_POST['submit']))
{
  $username=htmlspecialchars($_POST['username']);
  $password=$_POST['password'];

  if(empty($username)||empty($password))
  {
    $msg="<div class='alert alert-danger' role='alert'> الرجاء ادخال اسم المستخدم وكلمة المرور </div>";
  }
 else
  {
  $sql="SELECT username,userpassword,id FROM users ";

  $res=mysqli_query($con,$sql);
  if(mysqli_num_rows($res)>0){
    while($row=mysqli_fetch_assoc($res)){
     
      if($username==$row['username'] && $password==$row['userpassword']){
         $_SESSION['username']=$row['username'];
         $_SESSION['id']=$row['id'];
      
        header("location:veiwStu.php");

      }
    }
  }
}
}
?>