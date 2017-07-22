<?php

session_start();
if(!isset( $_SESSION['email']))
{
    include 'index.php';
    die();
}

?>

<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>

    <!-- Meta-Information -->
    <title>Glade - Responsive Admin Dashboard Template </title>
    <meta charset="utf-8">
    <meta name="description" content="Glade is a clean and powerful ready to use responsive AngularJs Admin Template based on Latest Bootstrap version and powered by jQuery, Glade comes with 3 amazing Dashboard layouts. Glade is completely flexible and user friendly admin template as it supports all the browsers and looks awesome on any device.">
    <meta name="keywords" content="admin, admin dashboard, angular admin, bootstrap admin, dashboard, modern admin, responsive admin, web admin, web app, bitlers">
    <meta name="author" content="bitlers">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Vendor: Bootstrap Stylesheets http://getbootstrap.com <--></-->
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
<header class="simple-normal">
     <div class="top-bar">
          <div class="logo">
               <a href="index.html" title=""><i class="fa fa-bullseye"></i> Glade</a>
          </div>
          <div class="menu-options"><span class="menu-action"><i></i></span></div>
          <div class="search-dashboard">
               <div class="responsive-search">
                    <i class="fa fa-search"></i>
               </div>
               <form>
                    <input type="text" placeholder="Search here" />
                    <button type="submit"><i class="fa fa-search"></i></button>
               </form>
          </div><!-- Search Dashboard -->
          <div class="top-bar-quick-sec">
               <ul class="quick-notify-section custom-dropdowns">
                    <li class="message-list dropdown">
                         <span><i class="fa fa-bell-o"></i><strong class="skyblue-bg">7</strong></span>
                          <div class="message drop-list">
                              <span>You have 4 New Messages</span>
                              <ul>
                                   <li>
                                        <a href="javascript:void(0)" title=""><span><img src="http://placehold.it/40x40" alt="" /></span><i>Labrina Scholer</i>Hi! How are you?...<h6>2 min ago..</h6><p class="status blue-bg">New</p></a>
                                   </li>
                                   <li>
                                        <a href="javascript:void(0)" title=""><span><img src="http://placehold.it/40x40" alt="" /></span><i>Jonathan</i>Hi! How are you?...<h6>2 min ago..</h6><p class="status red-bg">Unsent</p></a>
                                   </li>
                                   <li>
                                        <a href="javascript:void(0)" title=""><span><img src="http://placehold.it/40x40" alt="" /></span><i>Barada knol</i>Hi! How are you?...<h6>2 min ago..</h6><p class="status green-bg">Reply</p></a>
                                   </li>
                                   <li>
                                        <a href="javascript:void(0)" title=""><span><img src="http://placehold.it/40x40" alt="" /></span><i>Samtha Gee</i>Hi! How are you?...<h6>2 min ago..</h6><p class="status">New</p></a>
                                   </li>
                              </ul>
                              <a href="inbox.html" title="">See All Messages</a>
                         </div><!-- Message Drop List -->
                    </li>
                    <li class="notification-list dropdown">
                         <span><i class="fa fa-envelope-o"></i><strong class="red-bg">12</strong></span>
                          <div class="notification drop-list">
                              <span>You have 3 New Notifications</span>
                              <ul>
                                   <li>
                                        <a href="javascript:void(0)" title=""><span><i class="ti-pulse red-bg"></i></span>Server 3 is Over Loader Please Check... <h6>2 min ago..</h6></a>
                                   </li>
                                   <li>
                                        <a href="javascript:void(0)" title=""><span><img src="http://placehold.it/40x40" alt="" /></span><i>MD Daisal</i>New User Registered<h6>4 min ago..</h6><p class="status red-bg">Urgent</p></a>
                                   </li>
                                   <li>
                                        <a href="javascript:void(0)" title=""><span><i class="ti-crown green-bg"></i></span>Envato Has change the policies<h6>7 min ago..</h6></a>
                                   </li>
                              </ul>
                              <a href="javascript:void(0)" title="">See All Notifications</a>
                         </div><!-- Notification Drop list -->
                    </li>
                    <li class="activity-list dropdown">
                         <span><i class="fa fa-bug"></i><strong class="blue-bg">12</strong></span>
                          <div class="activity drop-list">
                              <span>Recent Activity</span>
                              <ul>
                                   <li>
                                        <a href="javascript:void(0)" title=""><span><img src="http://placehold.it/40x40" alt="" /></span><i>Jona Than</i>Uploading new files<h6>2 min ago..</h6><p class="status green-bg">Online</p></a>
                                        <div class="progress">
                                             <div style="width: 60%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar blue-bg">
                                                  60%
                                             </div>
                                        </div>
                                   </li>
                                   <li>
                                        <a href="javascript:void(0)" title=""><span><img src="http://placehold.it/40x40" alt="" /></span><i>Bela Nisaa</i>Downloading new Documents<h6>2 min ago..</h6></a>
                                        <div class="progress">
                                             <div style="width: 34%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="34" role="progressbar" class="progress-bar red-bg">
                                                  34%
                                             </div>
                                        </div>
                                   </li>
                              </ul>
                              <a href="javascript:void(0)" title="">See All Activity</a>
                         </div><!-- Activity Drop list -->
                    </li>
               </ul>
               <span class="open-panel"><i class="fa fa-cog fa-spin"></i></span>
               <span id="toolFullScreen" class="full-screen-btn"><i class="fa fa-arrows-alt"></i></span>
               <div class="name-area">
                    <a href="javascript:void(0)" title=""><img src="http://placehold.it/100x100" alt="" /> <strong>John Doe</strong></a>
                    <div class="hover-user">                      
                    <ul>
                        <li><a href="#">View Profile</a></li>
                        <li><a href="#">Edit Profile</a></li>                       
                        <li><a href="logout.php">Logout</a> </li>
                    </ul>
                </div>
               </div>
               
          </div>
     </div><!-- Top Bar -->
     <div class="side-menu-sec" id="header-scroll">
          <div class="quick-report-side">
               <span>TODAY REPORT</span>
               <ul>
                    <li><div><strong>456</strong><span>Sales</span></div></li>
                    <li><div><strong>115</strong><span>Orders</span></div></li>
                    <li><div><strong>$120</strong><span>Earn</span></div></li>
               </ul>
          </div>
          <div class="side-menus">
               <span>MAIN LINKS</span>
               <nav>
                    <ul class="parent-menu">
                         <li class="menu-item-has-children active">
                              <a title=""><i class="ti-desktop"></i><span>Dashboard <i class="badge red-bg">HOT</i></span></a>
                              <ul style="display: block;">
                                   <li><a href="index.html" title="">Dashboard 1</a></li>
                                   <li><a href="index2.html" title="">Dashboard 2</a></li>
                                   <li><a href="index3.html">Dashboard 3</a></li>
                                   <li><a href="index4.html">Dashboard 4</a></li>
                              </ul>
                         </li>
                         <li class="menu-item-has-children">
                              <a title=""><i class="ti-email"></i><span>Mail Box <i class="badge blue-bg">2 Unread</i></span></a>
                              <ul>
                                   <li><a href="inbox.html">Inbox</a></li>
                                   <li><a href="compose.html">Compose Email</a></li>
                              </ul>
                         </li>
                         <li>
                              <a href="widgets.html" title=""><i class="ti-bolt"></i><span>Widgets <i class="badge skyblue-bg">40+</i></span></a>
                         </li>
                         <li class="menu-item-has-children">
                              <a title=""><i class="ti-heart"></i><span>UI Elements <i class="badge red-bg">40+</i></span></a>
                              <ul class="mega">
                                   <li><a href="inbox.html">Inbox</a></li>
                                   <li><a href="compose.html">Compose Email</a></li>
                                   <li><a href="profile.html">My Profile</a></li>
                                   <li><a href="buttons.html">Buttons</a></li>
                                   <li><a href="timeline.html">Timeline</a></li>
                                   <li><a href="timeline2.html">Timeline 2</a></li>
                                   
                                   <li><a href="tabs.html">Tabs</a></li>
                                   <li><a href="syntax-highlight.html">Syntax Highlight</a></li>
                                   <li><a href="wysiwyg-editor.html">WYSIWYG Editor</a></li>
                                   <li><a href="radial-indicator.html">Radial Indicator</a></li>
                                   <li><a href="parallax.html">Parallax</a></li>
                                   <li><a href="typography.html">Typography</a></li>
                                   <li><a href="calendar.html">Calendar</a></li>
                                   <li><a href="upload-crop.html">Upload Crop</a></li>
                                   <li><a href="tour.html">Page Tour</a></li>
                                   <li><a href="collapse.html">Collapse</a></li>
                                   <li><a href="forms.html">Form Stuff</a></li>
                                   <li><a href="form-builder.html">Form Builder <i class="badge red-bg">HOT</i></a></li>
                                   <li><a href="modal-boxes.html">Modal Boxes</a></li>
                                   <li><a href="grids.html">Grids</a></li>
                                   <li><a href="notification.html">Notifications</a></li>
                                   <li><a href="price-table.html">Price Table</a></li>
                                   <li><a href="price-table2.html">Price Table 2</a></li>
                                   <li><a href="range-slider.html">Range Slider</a></li>
                                   <li><a href="sort-block.html">Sortable</a></li>
                                   <li><a href="basic-tables.html">Basic Tables</a></li>
                                   <li><a href="tabular-table.html">Tabular Tables</a></li>
                                   <li><a href="bootstrap-sortable-tables.html">Bootstrap Sortable Tables</a></li>
                                   <li><a href="task-dynamic.html">My Tasks</a></li>
                                   <li><a href="task-simple.html">Todo Lists</a></li>
                                   <li><a href="progress-bar.html">Progress Bar</a></li>
                                   <li><a href="popovers.html">Popovers</a></li>
                                   <li><a href="navbars.html">Navbars</a></li>
                                   <li><a href="calculator.html">Calculator</a></li>
                                   <li><a href="paginations.html">Paginations</a></li>
                                   <li><a href="tooltips.html">Tooltips</a></li>
                                   <li><a href="ribbon-grids.html">Ribbon Grids</a></li>
                                   <li><a href="css-spinners.html">Css Spinners</a></li>
                                   <li><a href="gallery.html">Gallery</a></li>
                                   <li><a href="gallery2.html">Gallery 2</a></li>
                                   <li><a href="slider.html">Sliders</a></li>
                                   <li><a href="maintenance.html">Maintenance</a></li>
                              </ul>
                         </li>
                         <li>
                              <a href="rich-charts.html"><i class="ti-pie-chart"></i><span>Charts</span></a>
                         </li>
                         <li class="menu-item-has-children">
                              <a title=""><i class="ti-pencil"></i><span>Pages</span></a>
                              <ul class="mega">
                                   <li><a href="blank.html">Blank</a></li>
                                   <li><a href="masonry-grids.html">Masonry Grids</a></li>
                                   <li><a href="panels.html">Widget Panels</a></li>
                                   <li><a href="blog.html">Blog</a></li>
                                   <li><a href="blog2.html">Blog 2</a></li>
                                   <li><a href="single-post.html">Single Post</a></li>
                                   <li><a href="404.html">404 Page</a></li>
                                   <li><a href="404-2.html">404 Page 2</a></li>
                                   <li><a href="404-3.html">404 Page 3</a></li>
                                   <li><a href="505.html">505 Page</a></li>
                                   <li><a href="contact.html">Contact Us</a></li>
                                   <li><a href="google-map.html">Google Map</a></li>
                                   <li><a href="vector-map.html">Vector Map</a></li>
                                   <li><a href="invoice.html">Invoice</a></li>
                                   <li><a href="search-not-found.html">No Search Result</a></li>
                                   <li><a href="search-found.html">Search Found</a></li>
                                   <li><a href="faq.html">FAQ Page</a></li>
                                   <li><a href="coming-soon.html">Coming soon</a></li>
                                   <li><a href="our-team.html">Our Team</a></li>
                                   <li><a href="our-team2.html">Our Team 2</a></li>
                                   <li><a href="scroll-box.html">ScrollBox</a></li>
                                   <li><a href="services.html">Services</a></li>
                                   <li><a href="services2.html">Services 2</a></li>
                                   <li><a href="services3.html">Services 3</a></li>
                                   <li><a href="portfolio.html">Portfolio</a></li>
                                   <li><a href="portfolio2.html">Portfolio 2</a></li>
                                   <li><a href="portfolio-filter.html">Portfolio Filter</a></li>
                                   <li><a href="profile.html">My Profile</a></li>
                              </ul>
                         </li>
                         <li class="menu-item-has-children">
                              <a title=""><i class="ti-paint-roller"></i><span>Icons</span></a>
                              <ul>
                                   <li><a href="font-awesome.html">Font Awesome</a></li>
                                   <li><a href="themify-icons.html">Themify Icons</a></li>
                                   <li><a href="skycons.html">Skycons Weather Icons</a></li>
                              </ul>
                         </li>
                         <li class="menu-item-has-children">
                              <a title=""><i class="ti-rocket"></i><span>Shop <i class="badge green-bg">NEW</i></span></a>
                              <ul>
                                   <li><a href="product.html">Product</a></li>
                                   <li><a href="product2.html">Product 2</a></li>
                                   <li><a href="cart.html">Cart</a></li>
                                   <li><a href="single-product.html">Single Product</a></li>
                                   <li><a href="checkout.html">Checkout</a></li>
                                   <li><a href="order-received.html">Order Received</a></li>
                              </ul>
                         </li>
                         <li class="menu-item-has-children">
                              <a title=""><i class="ti-rocket"></i><span>Extras</span></a>
                              <ul>
                                   <li><a href="forgot-password.html">Forgot Password</a></li>
                                   <li><a href="login.html">Login</a></li>
                                   <li><a href="register.html">Sign up</a></li>
                                   <li><a href="lockscreen.html">Lockscreen</a></li>
                              </ul>
                         </li>
                    </ul>
               </nav>
                <span class="footer-line">2017 Copyright Glade by <a title="" href="http://themeforest.net/user/bitlers/portfolio?ref=bitlers">bitlers</a></span>
          </div>
     </div>
</header>
<div class="slide-panel" id="panel-scroll">
     <ul role="tablist" class="nav nav-tabs panel-tab-btn">
          <li class="active"><a data-toggle="tab" role="tab" data-target="#panel-tab1"><i class="ti-email"></i><span>Your Emails</span></a></li>
          <li><a data-toggle="tab" role="tab" data-target="#panel-tab2"><i class="ti-settings"></i><span>Your Setting</span></a></li>
     </ul>
     <div class="tab-content panel-tab">
          <div id="panel-tab1" class="tab-pane fade in active">
               <div class="recent-mails-widget">
                    <form><div id="searchMail"></div></form>
                    <h3>Recent Emails</h3>
                    <ul id="mail-list" class="mail-list">
                         <li>
                              <div class="title">
                                   <span><img src="http://placehold.it/40x40" alt="" /><i class="online"></i></span>
                                   <h3><a href="javascript:void(0)" title="">Kim Hostwood</a><span>5 min ago</span></h3>
                                   <a href="javascript:void(0)"  data-toggle="tooltip" data-placement="left" title="Attachment"><i class="ti-clip"></i></a>
                              </div>
                              <h4>Themeforest Admin Template</h4>
                              <p>This product is so good that i manage to buy.</p>
                         </li>
                         <li>
                              <div class="title">
                                   <span><img src="http://placehold.it/40x40" alt="" /><i class="online"></i></span>
                                   <h3><a href="javascript:void(0)" title="">John Doe</a><span>2 hours ago</span></h3>
                                   <a href="javascript:void(0)"  data-toggle="tooltip" data-placement="left" title="Attachment"><i class="ti-clip"></i></a>
                              </div>
                              <h4>Themeforest Admin Template</h4>
                              <p>This product is so good that i manage to buy.</p>
                         </li>
                         <li>
                              <div class="title">
                                   <span><img src="http://placehold.it/40x40" alt="" /><i class="offline"></i></span>
                                   <h3><a href="javascript:void(0)" title="">Jonathan Doe</a><span>8 min ago</span></h3>
                                   <a href="javascript:void(0)"  data-toggle="tooltip" data-placement="left" title="Attachment"><i class="ti-clip"></i></a>
                              </div>
                              <h4>Themeforest Admin Template</h4>
                              <p>This product is so good that i manage to buy.</p>
                         </li>
                    </ul>
                    <a href="#/pages/inbox" title="" class="red-bg">View All Messages</a>
               </div><!-- Recent Email Widget -->
               
               <div class="file-transfer-widget">
                    <h3>FILE TRANSFER</h3>
                    <div class="toggle">
                         <ul>
                              <li>
                                   <i class="ti-file"></i><h4>my-excel.xls<i>20 min ago</i></h4>
                                   <div class="progress">
                                     <div style="width: 90%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="90" role="progressbar" class="progress-bar red-bg">
                                        90%
                                     </div>
                                   </div>
                                   <div class="file-action-btn">
                                        <a href="javascript:void(0)" title="Approve" class="green-bg" data-toggle="tooltip" data-placement="bottom"><i class="ti-check"></i></a>
                                        <a href="javascript:void(0)" title="Cancel" class="red-bg" data-toggle="tooltip" data-placement="bottom"><i class="ti-close"></i></a>
                                   </div>
                              </li>
                              <li>
                                   <i class="ti-zip"></i><h4>my-cv.pdf<i>8 min ago</i></h4>
                                   <div class="progress">
                                     <div style="width: 40%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar blue-bg">
                                        40%
                                     </div>
                                   </div>
                                   <div class="file-action-btn">
                                        <a href="javascript:void(0)" title="Approve" class="green-bg" data-toggle="tooltip" data-placement="bottom"><i class="ti-check"></i></a>
                                        <a href="javascript:void(0)" title="Cancel" class="red-bg" data-toggle="tooltip" data-placement="bottom"><i class="ti-close"></i></a>
                                   </div>
                              </li>
                              <li>
                                   <i class="ti-files"></i><h4>portfolio-shoot.mp4<i>12 min ago</i></h4>
                                   <div class="progress">
                                     <div style="width: 70%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" role="progressbar" class="progress-bar green-bg">
                                        70%
                                     </div>
                                   </div>
                                   <div class="file-action-btn">
                                        <a href="javascript:void(0)" title="Approve" class="green-bg" data-toggle="tooltip" data-placement="bottom"><i class="ti-check"></i></a>
                                        <a href="javascript:void(0)" title="Cancel" class="red-bg" data-toggle="tooltip" data-placement="bottom"><i class="ti-close"></i></a>
                                   </div>
                              </li>
                         </ul>
                    </div>
               </div><!-- File Transfer -->
          </div>
          <div id="panel-tab2" class="tab-pane fade">
               <div class="setting-widget">
                    <form>
                         <h3>Accounts</h3>
                         <div class="toggle-setting">
                              <span>Office Account</span>
                              <label class="toggle-switch">                               
                                   <input type="checkbox">
                                   <span data-unchecked="Off" data-checked="On"></span>
                              </label>
                         </div>
                         <div class="toggle-setting">
                              <span>Personal Account</span>
                              <label class="toggle-switch">                               
                                   <input type="checkbox" checked>
                                   <span data-unchecked="Off" data-checked="On"></span>
                              </label>
                         </div>
                         <div class="toggle-setting">
                              <span>Business Account</span>
                              <label class="toggle-switch">                               
                                   <input type="checkbox">
                                   <span data-unchecked="Off" data-checked="On"></span>
                              </label>
                         </div>
                    </form>
                    
                    <form>
                         <h3>General Setting</h3>
                         <div class="toggle-setting">
                              <span>Notifications</span>
                              <label class="toggle-switch">                               
                                   <input type="checkbox" checked>
                                   <span data-unchecked="Off" data-checked="On"></span>
                              </label>
                         </div>
                         <div class="toggle-setting">
                              <span>Notification Sound</span>
                              <label class="toggle-switch">                               
                                   <input type="checkbox" checked>
                                   <span data-unchecked="Off" data-checked="On"></span>
                              </label>
                         </div>
                         <div class="toggle-setting">
                              <span>My Profile</span>
                              <label class="toggle-switch">                               
                                   <input type="checkbox">
                                   <span data-unchecked="Off" data-checked="On"></span>
                              </label>
                         </div>
                         <div class="toggle-setting">
                              <span>Show Online</span>
                              <label class="toggle-switch">                               
                                   <input type="checkbox">
                                   <span data-unchecked="Off" data-checked="On"></span>
                              </label>
                         </div>
                         <div class="toggle-setting">
                              <span>Public Profile</span>
                              <label class="toggle-switch">                               
                                   <input type="checkbox" checked>
                                   <span data-unchecked="Off" data-checked="On"></span>
                              </label>
                         </div>
                    </form>
               </div><!-- Setting Widget -->
          </div>
     </div>
</div><!-- Slide Panel -->
<div class="main-content">
    <div id="live-chat">
         <div class="clearfix chat-header">
              <a class="chat-close">-</a>
              <h4>Labrina Scholar</h4>
              <span class="chat-message-counter">3</span>
         </div>
         <div class="chat" style="display:none;">
              <div class="chat-history">
                   <div class="chat-message">
                        <img src="http://placehold.it/40x40" alt="" width="32" height="32" />
                        <div class="chat-message-content">
                             <span class="chat-time">11:54</span>
                             <h5>John Doe</h5>
                             <p>Lorem ipsum dolor. Error, explicabo quasi ratione odio dolorum harum.</p>
                        </div> <!-- end chat-message-content -->
                   </div> <!-- end chat-message -->
                   <div class="chat-message">
                        <img src="http://placehold.it/40x40" alt="" width="32" height="32" />
                        <div class="chat-message-content">
                             <span class="chat-time">12:43</span>
                             <h5>Marco Biedermann</h5>
                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div> <!-- end chat-message-content -->
                   </div> <!-- end chat-message -->
                   <div class="chat-message">
                        <img src="http://placehold.it/40x40" alt="" width="32" height="32" />
                        <div class="chat-message-content">
                             <span class="chat-time">12:23</span>
                             <h5>John Doe</h5>
                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                        </div> <!-- end chat-message-content -->
                   </div> <!-- end chat-message -->
              </div> <!-- end chat-history -->
              <p class="chat-feedback">Your partner is typing… <img src="images/typing-loading.gif" alt="" /></p>
              <form action="#" method="post">
                   <fieldset>
                        <input type="text" placeholder="Type your message…" autofocus>
                        <input type="hidden">
                   </fieldset>
              </form>
         </div> <!-- end chat -->
    </div> <!-- end live-chat -->
    <div class="panel-content">
        <div class="main-title-sec">
            <div class="row">
                <div class="col-md-3 column">
                    <div class="heading-profile">
                        <h2>Dashboard</h2>
                        <span>Welcome back, 
                            <?php if(isset($_SESSION['email'])){
                               echo $_SESSION['email'];
                            }  ?>
                        </span>
                    </div>
                </div>
                <div class="col-md-9 column">
                    <div id="reportrange" class="date-range">
                      <i class="fa fa-calendar-o"></i>
                      <span></span> <b class="caret"></b>
                    </div>
                    <div class="quick-btn-title">
                        <a href="javascript:void(0)" title=""><i class="fa fa-plus"></i> New Tasks</a>
                        <a href="javascript:void(0)" title=""><i class="fa fa-cloud-upload"></i> Upload Files</a>
                    </div>
                </div>
            </div>
        </div><!-- Heading Sec -->
        <ul class="breadcrumbs">
            <li><a href="javascript:void(0)" title="">Home</a></li>
            <li><a href="javascript:void(0)" title="">Dashboard</a></li>
        </ul>
        <div class="main-content-area">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <div class="quick-report-widget">
                            <span>New Visits</span>
                            <h4>21,069</h4>
                            <i class="fa fa-clock-o red-bg"></i>
                            <h5>Total Visits : 9,34,001</h5>
                        </div>
                    </div><!-- Widget -->
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <div class="quick-report-widget">
                            <span>New Signups</span>
                            <h4>1,346</h4>
                            <i class="fa fa-user skyblue-bg"></i>
                            <h5>Total Users : 22,344</h5>
                        </div>
                    </div><!-- Widget -->
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <div class="quick-report-widget">
                            <span>Todays Earning</span>
                            <h4>2,345</h4>
                            <i class="fa fa-usd green-bg"></i>
                            <h5>Total Earning : $345,00</h5>
                        </div>
                    </div><!-- Widget -->
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <div class="quick-report-widget">
                            <span>Real Visitors</span>
                            <h4 class="number">123</h4>
                            <i class="fa fa-area-chart blue-bg"></i>
                            <h5>Total Visitors : 235,670</h5>
                        </div>
                    </div><!-- Widget -->
                </div>
            </div>
            <div class="row">
                <div class="page" id="page">
                    <?php
                        if(@$_GET['page'])
                        {
                           $url=$_GET['page'].".php"; 
                           if(is_file($url))
                           {
                               include $url;
                           }
                           else
                           {
                               echo 'required file is not found';
                           }
                        }
                        
                    ?>
                </div>
                
                
                
             
            </div>
            
           
            
        </div>
    </div><!-- Panel Content -->
</div>

<!-- Vendor: Javascripts -->
<script src="resources/js/jquery-2.1.3.js"></script>
<script src="resources/js/bootstrap.min.js"></script>

<!-- Our Website Javascripts -->
<script src="resources/js/app.js"></script>
<script src="resources/js/common.js"></script>
<script src="resources/js/home1.js"></script>

</body>
</html>




