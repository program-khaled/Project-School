<?php  
  include('conn.php');
 
  $msg="";
 if(isset($_POST['submit'])){
  $username=$_POST['username'];
  $password=$_POST['password'];
  $email=$_POST['email'];
  $age=$_POST['age'];
  $address=$_POST['address'];
  $phone=$_POST['phone'];
  if(empty($username))
  {
    $msg="<div class='alert alert-danger' role='alert'>الرجاء ادخال اسم المستخدم</div>";
  }

  elseif(empty($password))
  {
    $msg="<div class='alert alert-danger' role='alert'>الرجاء ادخال كلمة المرور</div>";
  }elseif (strlen( $phone)>=11) {
    $msg="<div class='alert alert-danger' role='alert'>يرجى التأكد من رقم الجوال</div>";

    
  } else{
   $query="INSERT INTO users( username, userpassword, useremail, userage, useraddress, userphone) VALUES ('$username','$password','$email',$age,'$address','$phone')";
   mysqli_query($con,$query);
   header('Location:http://localhost/ProjectSchool/login.php');
   }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/fontawesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.rtl.min.css">
  <link rel="stylesheet" href="css/style.css">
  <title>School | تسجيل الدخول</title>
</head>

<body>
  <!-- header ---------------------------------------------->
  <?php include('header.php');?>
  <!-- login-------------------------------------------- -->
  <div class="container">
    <div class="sign-h3">
      <h3>تسجيل الدخول</h3>
    </div>
    <div class="row">
      <div class="col-md-8">
      <form action="" method="POST" style="min-height: 250px" class="mt-3">
      <div class="form-group row">
        <label for="user" class="col-sm-4 col-form-label singup-label">اسم المستخدم</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="user" name="username" placeholder="اسم المستخدم">
        </div>
      </div>
      <div class="form-group row mt-2">
        <label for="Pass" class="col-sm-4 col-form-label singup-label">كلمة المرور</label>
        <div class="col-sm-4">
          <input type="password" class="form-control" id="Pass" name="password" placeholder="كلمة المرور">
        </div>
      </div>
      <div class="form-group row mt-2">
        <label for="email" class="col-sm-4 col-form-label singup-label">الايميل </label>
        <div class="col-sm-4">
          <input type="email" class="form-control email-place" id="email" name="email" placeholder="أدخل ايميلك">
        </div>
      </div>
      <div class="form-group row mt-2">
        <label for="age" class="col-sm-4 col-form-label singup-label">ادخل عمرك </label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="age" name="age" placeholder="العمر ">
        </div>
      </div>
      <div class="form-group row mt-2">
        <label for="address" class="col-sm-4 col-form-label singup-label">العنوان </label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="address" name="address" placeholder="ادخل العنوان ">
        </div>
      </div>
      <div class="form-group row mt-2">
        <label for="phone" class="col-sm-4 col-form-label singup-label">الجوال </label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="phone" name="phone" placeholder=" ادخل رقم الجوال ">
        </div>
      </div>
      <div class="form-group row mt-2">
        <a href=""><button tybe="submit" name="submit" class="btn btn-primary bt-sign">تسجيل الدخول</button></a>
      </div>
  </div>
  </form>
      </div>
    </div>
  </div>
  <!-- footer ---------------------------------------------->
  <?php (include 'footer.php');?>
</body>

</html>