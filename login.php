<?php
include('conn.php');
include('login_action.php');
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
  <title>School | الرئيسية</title>
</head>

<body>
  <!-- Header -->
<?php
 include ('header.php');?>
<!-- Carsoul Slide -->
<div class="home-container">
  <div class="home-title">
    <form action="" method="POST">
    <div class="form-group">
      <label for="username" class="title-label">اسم المستخدم</label>
      <input type="text" class="form-control" id="username" name="username" >
      
    </div>
    <div class="form-group">
      <label for="pass" class="title-label">كلمة المرور</label>
      <input type="password" class="form-control" id="pass" name="password">
    </div>
    
    <a href="homeCP.php"><button type="submit" name="submit" class="btn btn-primary mt-2">تسجيل الدخول</button></a>
  </form>
  </div>
</div> 
<!-- Footer -->
<?php include ('footer.php');?>
</body>

</html>