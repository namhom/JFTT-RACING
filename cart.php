
<?php

include("backed/condb.php");
	session_start();
    include('h.php'); 
	 error_reporting(0) ;
     if( $_SESSION["user_id"] == "" ) {
	
		echo "<script>";
		echo "alert(\" กรุณาเข้าสู่ระบบ\");"; 
		echo "window.location='shop.php'";
	echo "</script>";
		
	
		
	}

	 else{
	 
	$p_id = $_GET['p_id']; 
	$act = $_GET['act'];

	if($act=='add' && !empty($p_id))
	{
		if(isset($_SESSION['cart'][$p_id]))
		{
			$_SESSION['cart'][$p_id]++;
		}
		else
		{
			$_SESSION['cart'][$p_id]=1;
		}
	}

	if($act=='remove' && !empty($p_id))  //ยกเลิกการสั่งซื้อ
	{
		unset($_SESSION['cart'][$p_id]);
	}

	if($act=='update')
	{
		$amount_array = $_POST['amount'];
		foreach($amount_array as $p_id=>$amount)
		{
			$_SESSION['cart'][$p_id]=$amount;
		}
	}
	if($act=='cancle')  
	{
		unset($_SESSION['cart']);
	}


	
?>
<html>
<body>


<?php include('nav_member.php'); ?>

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Cart</h2>
                   
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Cart  -->

<form id="frmcart" name="frmcart" method="post" action="?act=update">

<div class="cart-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-main table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Images</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            </table>
                    </div>
                </div>
            </div>
            </div>
            </div>


<?php 
	$total=0;
	if(!empty($_SESSION['cart']))
	{
		
		foreach($_SESSION['cart'] as $p_id=>$qty)
		{
			$sql = "SELECT * FROM tbl_product WHERE  p_id = $p_id";
			$query = mysqli_query($con, $sql);
			$row = mysqli_fetch_array($query);
			$sum = $row['p_price'] * $qty;
			$total += $sum;

?>
    <div class="cart-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-main table-responsive">
                        <table class="table">                         
                            <tbody>
                                <tr>
                                    <td class="thumbnail-img">
                                    <img class="card-img-top" src="backed/p_img/<?php echo $row['p_img']?>" alt="Card image cap">
							
								</a>
                                    </td>
                                    <td class="name-pr">
                                    <?php echo $row["p_name"] ?>
								
								</a>
                                    </td>
                                    <td class="price-pr">
                                    <?php echo number_format($row["p_price"],2) ?> บาท
                                    </td>
                                    <td class="quantity-box"><?php echo "<input type='text' name='amount[$p_id]' value='$qty' size='2'/></td>"; ?></td>                       
                                    <td class="total-pr">
                                    <?php echo number_format($sum,2) ?> บาท
                                    </td>
                                    <td class="remove-pr">
                                    <?php echo  "<a href='cart.php?p_id=$p_id&act=remove'>ลบ</a>"; ?>
									
								</a>
                                    </td>
                                </tr>                            
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    <?php }?>
            <div class="row my-5">
               \
                <div class="col-lg-6 col-sm-6">
                    <div class="update-box">
                    <input type="submit" name="button" id="button" value="UPDATE CART" />
                    </div>
                </div>
            </div>

            <div class="row my-5">
                <div class="col-lg-8 col-sm-12"></div>
                <div class="col-lg-4 col-sm-12">
                    <div class="order-box">
                           
                        <div class="d-flex gr-total">
                            <h5> Total</h5>
                            <div class="ml-auto h5"><?php echo number_format($total,2) ?> บาท</div> 
                        </div>
                        <hr> 
                    </div>
                </div>
                <div class="col-12 d-flex shopping-box"><a href="checkout.php" class="ml-auto btn hvr-hover">สั่งซื้อ</a> </div>
            </div>

        </div>
    </div>

    <?php }?>
    
    </form> 
    
    
    <?php }?> 
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
