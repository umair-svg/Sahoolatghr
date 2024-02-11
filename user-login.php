<?php require_once("owner-panel/components-op/config.php");?>
<?php require_once("owner-panel/components-op/top.php");
$msg="";
?>




<?php
  if(isset( $_SESSION["USER_LOGIN"])){
    header("location:user-index.php");

    
   }
if(isset($_POST["signin-btn"])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);
    $sql = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` ='$password' AND `status`=1";
    $res =mysqli_query($conn,$sql);
    if(mysqli_num_rows($res)>0 ){
     $row=mysqli_fetch_array($res);
    

      $_SESSION["USER_LOGIN"][]=true;
      $_SESSION["USER_LOGIN"]["NAME"]=$row["name"];
      $_SESSION["USER_LOGIN"]["ID"]=$row["id"];
      header("location:user-index.php");

    }else{

       $msg = '<div class="alert alert-warning msg">Incorrect email or password</div>';
      

        }
    }


?>



        <!-- Sign In Start -->
        <div class="container-fluid text-center">
<?php 
         echo $msg;
?>
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                                <h4 class="text-primary"><i class="fa fa-user-edit me-2"></i>Sahoolatghr</h4>
                            </a>
                            <h6>| user's sign-in</h6>
                        </div>
                        <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                            <label for="floatingPassword">Password</label>

                        </div>
                        <button  class="btn btn-primary py-3 w-100 mb-4" name="signin-btn">Sign In</button>
           
                    </form>
                    </div>
                </div>
                    
            </div>
        </div>
        <!-- Sign In End -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>
            $(document).ready(function() {
              $(".msg").fadeTo(2500,0.4).fadeOut(2500);

            } );
    </script>
</body>
</html>
