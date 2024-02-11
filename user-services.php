<?php
require_once("components-fe/top.php");
require_once("components-fe/user-navbar.php");
?>


        <!-- Fruits Shop Start-->
        <div class="container-fluid fruite py-5">
            <div class="container py-5">
                <h1 class="mt-5">Our Services</h1>
                <div class="row g-4">
                    <div class="col-lg-12">
                        <div class="row g-4">
                            <div class="col-xl-3">
                                <div class="input-group w-100 mx-auto d-flex">
                                    
                                    
                                </div>
                            </div>
                            <div class="col-6"></div>
                            <div class="col-xl-3">
                                
                            </div>
                        </div>
                        <div class="row g-4">
                        <div class="col-lg-12">
                            <div class="row g-3 justify-content-center">
                        <?php
         
          
         $res = mysqli_query($conn,"SELECT * FROM `services` WHERE `status` =1   ");
         if (mysqli_num_rows($res)>0) {
          while($row=mysqli_fetch_array($res)){?>
                         
                                    <div class="col-md-4 col-lg-4 col-xl-4">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                            <img src="owner-panel/images/service-images/<?php echo $row["image"]?>" class="img-fluid w-80 rounded-top" alt="">
                                            </div>
                                            <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4><?php echo $row["name"]?></h4>
                                                <p><?php echo $row["description"]?></p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                <form action="appointment.php" method="post"> 
                                              <button class="btn border border-secondary rounded-pill px-3 text-primary addtocart" name="atc-btn"><i class="fa fa-shopping-bag  text-primary"></i> Get appointment</button>
                                            <input type="hidden" name="service-id" value="<?php echo $row["id"]?>">  
                                            </form>                                    
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                        
                                   

                                    }
                                   }
                                ?>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fruits Shop End-->
        <?php
require_once("components-fe/footer.php");
?>