<?php
require_once("components-fe/top.php");
require_once("components-fe/user-navbar.php");
$msg=""
?>


<?php
if(isset($_POST["apointment-btn"])){
    $user_id=$_SESSION["USER_LOGIN"]["ID"];
    $name =getsavevalue($conn,$_POST["name"]);
    $address =getsavevalue($conn,$_POST["address"]);
    $city =getsavevalue($conn,$_POST["city"]);
    $mobile =getsavevalue($conn,$_POST["mobile"]);
   $service_name= $_SESSION["USER_SERVICE"]["service"];
    $sql="INSERT INTO `orders` (`user-id`,`name`,`address`,`city`,`mobile`,`service-name`) VALUES ('$user_id','$name','$address','$city','$mobile','$service_name')";
    $res=mysqli_query($conn,$sql);
    if ($res) {
       $msg = '<div class="alert alert-success msg ">Our team will contact you soon!</div>'; 
    //    echo "<script>window.location='index.php'</script>";
    } else {
       $msg = '<div class="alert alert-warning  ">apointment has  not been made</div>';
       echo $msg;

     }
  }
?>



        <!-- Checkout Page Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <h1 class="mb-4">Appointment details </h1>
                <?php echo $msg;?>
       <div class="row g-5">
                        <div class="col-md-12 col-lg-6 col-xl-7">
                            <div class="row">
                                <div class="col-md-12 col-lg-6">
                                    <!--  -->
                                    <!--  -->
                                    <!--  -->
                                    <div class="form-item w-100">
                                        <form action="" method="post">
                                        <label class="form-label my-3">Name<sup>*</sup></label>
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                </div>
                      
                            </div>
                    
                            <div class="form-item">
                                <label class="form-label my-3">Address <sup>*</sup></label>
                                <input type="text" class="form-control" placeholder="House Number Street Name" name="address">
                            </div>
                            <div class="form-item">
                                <label class="form-label my-3">Town/City<sup>*</sup></label>
                                <input type="text" class="form-control" name="city">
                            </div>

                            <div class="form-item">
                                <label class="form-label my-3">Mobile or whatsapp<sup>*</sup></label>
                                <input type="tel" class="form-control" name="mobile">
                            </div>
                          
 
                                <button type="submit" class="btn border-secondary py-3 px-4 text-uppercase w-100 text-primary" name="apointment-btn">Get appointment</button>
                                </form>
                            <!--  -->
                            <!--  -->
                            <!--  -->
                        </div>
                        <div class="col-md-12 col-lg-6 col-xl-5 bg-dark">
                          
                        </div>
                    </div>
                
            </div>
        </div>
        <!-- Checkout Page End -->

        <?php
require_once("components-fe/footer.php");
?>