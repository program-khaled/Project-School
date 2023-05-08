<?php include('conn.php');?>
<?php include('sess.php');?>
<?php include('auth.php');?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title> School | بيانات المستخدمين</title>
</head>
<body>
    <?php include 'header.php'?>

<div class="Data-School container">
    <div class="img-title">
        <img src="images/st.png" class="h3-image" >
        <h3>بيانات المستخدمين</h3>
    </div>
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">إسم المستخدم</th>
            <th scope="col">الايميل</th>
            <th scope="col">العنوان</th>
            <th scope="col">العمر</th>
            <th scope="col">الهاتف</th>
          </tr>
        </thead>
        <tbody>
        <?php 
        $sql = "SELECT * FROM users";
        $result =mysqli_query($con,$sql);
        $i=1;
        if (mysqli_num_rows($result)>0) {
            while ( $row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>".$i."</td>";
                echo "<td>".$row['username']."</td>";
                echo "<td>".$row['useremail']."</td>";
                 echo "<td>".$row['useraddress']."</td>";
                echo "<td>".$row['userage']."</td>";
                echo "<td>".$row['userphone']."</td>";
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