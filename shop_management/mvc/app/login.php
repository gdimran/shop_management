<!DOCTYPE html>

<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>

    <!-- Meta-Information -->
    <title>Shop Management Dashboard Template </title>
    <meta charset="utf-8">
    <meta name="description" content="Glade is a clean and powerful ready to use responsive AngularJs Admin Template based on Latest Bootstrap version and powered by jQuery, Glade comes with 3 amazing Dashboard layouts. Glade is completely flexible and user friendly admin template as it supports all the browsers and looks awesome on any device.">
    <meta name="keywords" content="admin, admin dashboard, angular admin, bootstrap admin, dashboard, modern admin, responsive admin, web admin, web app, bitlers">
    <meta name="author" content="bitlers">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Vendor: Bootstrap Stylesheets http://getbootstrap.com <-->
    </-->
    <link rel="stylesheet" href="resources/css/bootstrap.min.css">

    <!-- Our Website CSS Styles -->
    <link rel="stylesheet" href="resources/css/icons.css">
    <link rel="stylesheet" href="resources/css/main.css">
    <link rel="stylesheet" href="resources/css/responsive.css">

</head>

<body>
    <!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

    <!-- Our Website Content Goes Here -->
    <div class="account-user-sec registration-sec">
        <div class="account-sec">
            <div class="account-top-bar">
                <div class="container">
                    <div class="logo">
                        <a href="javascript:void(0)" title=""><i class="fa fa-bullseye"></i> Shop Management</a>
                    </div>
                    <ul class="account-header-link">
                        <li><a title="" href="#/register">Register</a></li>
                        <li><a title="" href="#/forgot-password">Forgot Your Password</a></li>
                        <li><a title="">Email us</a></li>
                    </ul>
                </div>
            </div>
            <div class="acount-sec">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="contact-sec">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="widget-title">

                                            <h3>Register Your Account</h3>
                                            <span>Fill your detail to get in</span>
                                        </div>
                                        <!-- Widget title -->
                                        <div class="account-form">
                                            <form action="registerControll.php" method="post" enctype="multipart/form-data">
                                                <div class="row">
                                                    <div class="col-md-6 feild">
                                                        <input type="text" name="name" placeholder="Name" />
                                                    </div>
                                                    <div class="col-md-6 feild">
                                                        <input type="email" name="email" placeholder="Email" />
                                                    </div>
                                                    <div class="col-md-6 feild">
                                                        <input type="password" name="password" placeholder="Password" />
                                                    </div>
                                                    <div class="col-md-6 feild">
                                                        <input type="password" name="re_type_Password" placeholder="Re-type Password" />
                                                    </div>
                                                    <div class="col-md-6 feild">
                                                        <input type="text" name="phone" placeholder="Phone number" />
                                                    </div>
                                                    <div class="col-md-6 feild">
                                                        <input type="text" name="address" placeholder="Address" />
                                                    </div>
                                                    <div class="col-md-6 feild">
                                                        <input type="file" name="image" placeholder="Image" />
                                                    </div>
                                                    <div class="col-md-6 feild">
                                                        <label>Gender</label>
                                                        <input type="radio" name="gender" value="male" /> Male
                                                        <input type="radio" name="gender" value="female" /> Female
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label><input type="checkbox" name="check" /> By Clicking on this you are agree with our <a title="">license & agreements</a></label>
                                                    </div>
                                                    <div class="feild col-md-6">
                                                        <input type="submit" name="submit" value="Register Now" />
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="more-option">
                                            <span>OR</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="creat-an-account">
                                            <div class="widget-title">
                                                <h3>Do you have an account?</h3>
                                            </div>
                                            <!-- Widget title -->

                                            <div class="account-form">
                                                <form action="loginControll.php" method="post">
                                                    <div class="row">
                                                        <div class="feild col-md-12">
                                                            <input type="email" name="email" placeholder="Email" />
                                                        </div>
                                                        <div class="feild col-md-12">
                                                            <input type="password" name="password" placeholder="Password" />
                                                        </div>
                                                        <div class="feild col-md-12">
                                                            <input type="submit" name="submit" value="Login Now" />
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <h4>You can also Signup using</h4>
                                            <ul>
                                                <li><a href="javascript:void(0)" title=""><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="javascript:void(0)" title=""><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="javascript:void(0)" title=""><i class="fa fa-google-plus"></i></a></li>
                                            </ul>
                                        </div>
                                        <!-- Create an account -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer>
                <div class="container">
                    <p>© 2017 Made with <i class="fa fa-heart"></i></p>
                </div>
            </footer>
        </div>
        <!-- Account Sec -->
    </div>

</body>

</html>
