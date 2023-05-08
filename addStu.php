<?php 

 include ('conn.php');
 include('sess.php');
 include('auth.php');

 $res=mysqli_query($con,"select * from students");
$name='';
$age='';
$address='';
$mobile='';
$image='';
$error='';
if(isset($_POST['add'])) {
  $name=$_POST['name'];    
  $age=$_POST['age'];    
  $address=$_POST['address'];    
  $mobile=$_POST['mobile'];    
  $image=$_POST['image'];    
   if (empty($name)&&empty($image)) {
      
  }else {
      $query="INSERT INTO students( stdname, stdage,stdaddress,stdphone,stdimage)
       VALUES  ('$name','$age','$address','$mobile','$image')";
mysqli_query($con,$query);
       header('Location:http://localhost/ProjectSchool/veiwStu.php');
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
  <title> School | اضافة طالب</title>
</head>

<body>
  <?php include 'header.php'?>

  <div class="student-container container">
    <div class="img-title">
      <img src="images/st.png" class="h3-image">
      <h3>لوحة تسجيل دخول الطلاب</h3>
    </div>
    <div class="student-container container">
      <div class="row">

        <form action="" class="row g-3" method="POST">

          <div class="form-group name-student ">
            <label for="name">اسم الطالب</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" name="name" id="name">
            </div>

          </div>
          <div class="form-group address-student ">
            <label for="age">العمر</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" name="age" id="age">
            </div>

          </div>
          <div class="form-group address-student ">
            <label for="address">العنوان</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" name="address" id="address">
            </div>

          </div>
          <div class="form-group address-student ">
            <label for="mobile">الهاتف</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" name="mobile" id="mobile">
            </div>
          </div>
          <div class="form-group address-student ">
            <label for="image"> صورة الطالب</label>
            <div class="col-sm-4">
              <input type="file" class="form-control" name="image" id="image">
            </div>
          </div>
          <div class="btn-group addStu-btn">
            <button type="submit" class="btn btn-primary" name="add">إضافة</button>
            <button type="submit" class="btn btn-danger" name="del">حذف</button>
          </div>
        </form>

      </div>
    </div>
    2
  </div>

  </div>
  </div>

  <!-- Footer -->
  <?php include 'footer.php'?>

  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>