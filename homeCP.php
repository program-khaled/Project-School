<?php
   include('sess.php');

   include('auth.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.rtl.min.css">
  <link rel="stylesheet" href="css/style.css">
  <title>School | لوحة التحكم</title>
</head>

<body>
  <!-- Header CPanel -->
  <?php include ('header.php');?>
  <div class="container">

    <section class="h-100 gradient-form">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-xl-10">
            <div class="card rounded-3 text-black">
              <div class="row g-0">
                <div class="col-lg-6">
                  <div class="card-body p-md-5 mx-md-4">

                    <div class="text-center">
                      <img src="images/h5.jpeg" style="width: 360px;" alt="logo">
                      <h4 class="mt-1 mb-5 pb-1">محمد وصفى العجلة</h4>
                    </div>

                    <table class="table table-title">
                      <thead> 
                        <tr>
                          <th scope="col">تواصل معنا</th>
                          <th scope="col"> </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row"> <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                            <p class="mb-0"> </p>
                          </th>

                          <td><a style="color:#333  " href="https://www.facebook.com">facebook</a></td>

                        </tr>
                        <tr>
                          <th scope="row"><i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                            <p class="mb-0"> </p>
                            </td>
                          </th>
                          <td><a style="color:#333"  href="https://www.instagram.com/">instagram</a></td>
                        </tr>
                        <tr>
                          <th scope="row"><i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                            <p class="mb-0"> </p>
                            </td>
                          </th>
                          <td colspan="2"> <a style="color:#333"  href="https://twitter.com">twitter</a>
                          </td>
                        </tr>
                      </tbody>
                    </table>



                    </form>

                  </div>
                </div>

                <div class="col-lg-6 d-flex  gradient-custom-2">



                  <div class="container py-5 h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                      <div class="col-xl-10">

                        <div class="text-center">
                          <img src="images/h4.jpeg" style="width: 360px;" alt="logo">
                          <h4 class="mt-1 mb-5 pb-1">  أسامة سعدى دلول  </h4>
                        </div>

                        <table class="table">
                          <thead>
                            <tr>
                              <th scope="col"> تواصل معنا</th>
                              <th scope="col"> </th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row"> <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                                <p class="mb-0"> </p>
                              </th>

                              <td><a style="color:#333" href="https://www.facebook.com">facebook</a>
                              </td>

                            </tr>
                            <tr>
                              <th scope="row"><i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                                <p class="mb-0"> </p>
                                </td>
                              </th>
                              <td><a style="color:#333" href="https://www.instagram.com">instagram</a></td>
                            </tr>
                            <tr>
                              <th scope="row"><i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                                <p class="mb-0"> </p>
                                </td>
                              </th>
                              <td colspan="2"> <a style="color:#333" href="https://twitter.com">twitter</a>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                        </form>

                      </div>
                    </div>

    </section>

    <!-- Footer CPanel -->
    <?php include ('footer.php');?>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>