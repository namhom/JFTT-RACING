<?php
	session_start();
    include("backed/condb.php");
include('h.php'); 
    error_reporting(0) ;
?>

<body>

<?php include('nav_member.php'); ?>

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Checkout</h2>
                   
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Cart  -->
    <div class="cart-box-main">
        <div class="container">
            
            <div class="row">
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="checkout-address">
                        <div class="title-left">
                            <h3>รายละเอียดในการติดต่อ</h3>
                        </div>
                        <form id="frmcart" name="frmcart" method="post" action="saveorder.php"> 
                          <div class="mb-3">
                                <label for="username">ชื่อ นามสกุล</label>
                                <div class="input-group">
                                <td><input name="name" type="text" id="name" required/></td>                               
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="username">ที่อยู่</label>
                                <div class="input-group">
                                <td width="78%">
    <textarea name="address" cols="35" rows="5" id="address" required></textarea>
    </td>                        
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="username">email</label>
                                <div class="input-group">
                                <td><input name="email" type="email" id="email"  required/></td>
</tr>                    
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="username">เบอร์ติดต่อ</label>
                                <div class="input-group">
                                <td><input name="phone" type="text" id="phone" required /></td>                
                                </div>
                            </div>

                    </div>
                </div>
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="row">
                        
                        <div class="col-md-12 col-lg-12">
                            <div class="odr-box">
                                <div class="title-left">
                                    <h3>สิงค้าที่ต้องการสั่งซื้อ</h3>
                                </div>
                                                    <?php
                        $total=0;
                        foreach($_SESSION['cart'] as $p_id=>$qty)
                        {
                            $sql = "SELECT * FROM tbl_product WHERE  p_id = $p_id";
                            $query	= mysqli_query($con, $sql);
                            $row	= mysqli_fetch_array($query);
                            $sum	= $row['p_price']*$qty;
                            $total	+= $sum;
                        
                    ?>
                                <div class="rounded p-2 bg-light">
                                    <div class="media mb-2 border-bottom">
                                        <div class="media-body">   <?php echo $row["p_name"] ?>
                                            <div class="small text-muted"><?php echo number_format($row["p_price"],2) ?> บาท
                                             <span class="mx-2">|</span>จำนวน <?php echo $qty ?>ชิ้น
                                              <span class="mx-2">|</span> ราคารวม<?php echo number_format($sum,2) ?> บาท</div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <?php }?>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12">
                            <div class="order-box">
                                
                                <div class="d-flex gr-total">
                                    <h5>Total</h5>
                                    <div class="ml-auto h5"><?php echo number_format($total,2) ?> บาท</div> 

                          
                                </div>
                                <hr> </div>
                        </div>
                        
                        <div class="col-12 d-flex shopping-box"> 
                        <input type="hidden" name="total" value="<?php echo $total;?>">
                         <input type="submit" name="Submit2" value="สั่งซื้อ" /> </div>
                        
                    </div>
                </div>
                </form>
            </div>

        </div>
    </div>
    <!-- End Cart -->

    


    <!-- Start copyright  -->
    <div class="footer-copyright">
            </div>
    <!-- End copyright  -->

    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>