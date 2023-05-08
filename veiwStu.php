<?php
    include ('conn.php');
    include('sess.php');
    include('auth.php');
    
    

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
  <title> School | بيانات الطلاب</title>
</head>

<body>
  <?php include 'header.php'?>

  <!-- Data School ------------>
  <div class="Data-School container">
    <div class="img-title">
      <img src="images/st.png" class="h3-image">
      <h3>بيانات الطلاب</h3>
    </div>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">إسم الطالب</th>
          <th scope="col">العمر</th>
          <th scope="col"> جوال</th>
          <th scope="col">العنوان</th>
          <th scope="col">صورة الطالب </th>
        </tr>
      </thead>
      <tbody>
        <!-- اضافة البيانات المدخلة الى جول الطلاب ---------------->
        <?php 
        $sql = "SELECT * FROM students";
        $result =mysqli_query($con,$sql);
        $i=1;
        if (mysqli_num_rows($result)>0) {
            while ( $row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>".$i."</td>";
                echo "<td>".$row['stdname']."</td>";
                echo "<td>".$row['stdage']."</td>";
                 echo "<td>".$row['stdphone']."</td>";
                echo "<td>".$row['stdaddress']."</td>";
                 echo "<td> <img style='width: 50px;'  src='images/".$row['stdimage']."'></td>";
                echo "</tr>";
                $i++;
            }
        }
      
        ?>
      </tbody>
    </table>
  </div>
  <!-- Footer -->
  <?php include 'footer.php'?>
  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>