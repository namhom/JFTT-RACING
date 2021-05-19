

<?php session_start(); ?>
<?php include('h.php'); ?>

<body>

<?php include('nav_member.php'); ?>
<!-- Start All Title Box -->
<div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Login</h2>                   
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->
   
    <!-- Start Contact Us  -->
    <div class="contact-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-12">
                    <div class="contact-form-right">
                        <h2>สมัครสมาชิก</h2>                  
                        <p>กรุณาสมัครสมาชิกเพื่อเข้าสู่ระบบ</p>
                        <form  name="formlogin" action="checklogin.php" method="POST" id="login" class="form-horizontal">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                    <p>Username</p>
                                        <input type="text"  name="a_user" class="form-control" required placeholder="Username" />
                                        <div class="help-block with-errors"></div>
                                    </div>
                                   
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                    <p>Password</p>
                                        <input type="text"  name="a_user" class="form-control" required placeholder="Password" />
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                    <p>ชื่อ-สกุล</p>
                                        <input type="text"  name="a_user" class="form-control" required placeholder="ชื่อ-สกุล" />
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                <p>Email</p>
                                    <div class="form-group">
                                    <input type="password" name="a_pass" class="form-control" required placeholder="Email" />
                                    <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                    <p>ที่อยู่</p>
                                        <textarea class="form-control" id="message" placeholder="Your Message" rows="4" data-error="ที่อยู่" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="submit-button text-center">
                                        <button class="btn btn-success" id="btn" type="submit">
                                          <span class="glyphicon glyphicon-log-in"> </span>Register</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                
                            </div>
                        </form>
                    </div>                   
                </div>
                <div class="col-lg-4 col-sm-12">
                <div class="contact-form-right">
                        <h2>เข้าสู่ระบบ</h2>
                        <p>กรุณาเข้าสู่ระบบเพื่อสั่งซื้อสินค้า</p>                        
                        <form  name="formlogin" action="checklogin.php" method="POST" id="login" class="form-horizontal">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                    <p>Username</p>
                                        <input type="text"  name="a_user" class="form-control" required placeholder="Username" />
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                    <p>Password</p>
                                    <input type="password" name="a_pass" class="form-control" required placeholder="Password" />
                                    <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">                               
                                    <div class="submit-button text-center">
                                        <button class="btn btn-success" id="btn" type="submit">
                                          <span class="glyphicon glyphicon-log-in"> </span>Login </button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
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