<?php

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

if(!isset( $_SESSION['email']))
{
     header('location:login.php');
    //include 'login.php';
    die();
}

?>

<?php

include './models/Customer.php';
$register= new Customer();
$userdata= $register->prepare($_GET)->viewall();

?>

    <?php include_once './include/navigation.php'; ?>
            <!-- Top Bar -->

            <?php include "./include/sidebar.php"; ?>


        </header>

        <div class="slide-panel" id="panel-scroll">
            <ul role="tablist" class="nav nav-tabs panel-tab-btn">
                <li class="active"><a data-toggle="tab" role="tab" data-target="#panel-tab1"><i class="ti-email"></i><span>Your Emails</span></a></li>
                <li><a data-toggle="tab" role="tab" data-target="#panel-tab2"><i class="ti-settings"></i><span>Your Setting</span></a></li>
            </ul>
            <div class="tab-content panel-tab">
                <div id="panel-tab1" class="tab-pane fade in active">
                    <div class="recent-mails-widget">
                        <form>
                            <div id="searchMail"></div>
                        </form>
                        <h3>Recent Emails</h3>
                        <ul id="mail-list" class="mail-list">
                            <li>
                                <div class="title">
                                    <span><img src="http://placehold.it/40x40" alt="" /><i class="online"></i></span>
                                    <h3><a href="javascript:void(0)" title="">Kim Hostwood</a><span>5 min ago</span></h3>
                                    <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Attachment"><i class="ti-clip"></i></a>
                                </div>
                                <h4>Themeforest Admin Template</h4>
                                <p>This product is so good that i manage to buy.</p>
                            </li>
                            <li>
                                <div class="title">
                                    <span><img src="http://placehold.it/40x40" alt="" /><i class="online"></i></span>
                                    <h3><a href="javascript:void(0)" title="">John Doe</a><span>2 hours ago</span></h3>
                                    <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Attachment"><i class="ti-clip"></i></a>
                                </div>
                                <h4>Themeforest Admin Template</h4>
                                <p>This product is so good that i manage to buy.</p>
                            </li>
                            <li>
                                <div class="title">
                                    <span><img src="http://placehold.it/40x40" alt="" /><i class="offline"></i></span>
                                    <h3><a href="javascript:void(0)" title="">Jonathan Doe</a><span>8 min ago</span></h3>
                                    <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Attachment"><i class="ti-clip"></i></a>
                                </div>
                                <h4>Themeforest Admin Template</h4>
                                <p>This product is so good that i manage to buy.</p>
                            </li>
                        </ul>
                        <a href="#/pages/inbox" title="" class="red-bg">View All Messages</a>
                    </div>
                    <!-- Recent Email Widget -->

                    <div class="file-transfer-widget">
                        <h3>FILE TRANSFER</h3>
                        <div class="toggle">
                            <ul>
                                <li>
                                    <i class="ti-file"></i>
                                    <h4>my-excel.xls<i>20 min ago</i></h4>
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
                                    <i class="ti-zip"></i>
                                    <h4>my-cv.pdf<i>8 min ago</i></h4>
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
                                    <i class="ti-files"></i>
                                    <h4>portfolio-shoot.mp4<i>12 min ago</i></h4>
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
                    </div>
                    <!-- File Transfer -->
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
                    </div>
                    <!-- Setting Widget -->
                </div>
            </div>
        </div>
        <!-- Slide Panel -->
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
                            </div>
                            <!-- end chat-message-content -->
                        </div>
                        <!-- end chat-message -->
                        <div class="chat-message">
                            <img src="http://placehold.it/40x40" alt="" width="32" height="32" />
                            <div class="chat-message-content">
                                <span class="chat-time">12:43</span>
                                <h5>Marco Biedermann</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                            <!-- end chat-message-content -->
                        </div>
                        <!-- end chat-message -->
                        <div class="chat-message">
                            <img src="http://placehold.it/40x40" alt="" width="32" height="32" />
                            <div class="chat-message-content">
                                <span class="chat-time">12:23</span>
                                <h5>John Doe</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                            </div>
                            <!-- end chat-message-content -->
                        </div>
                        <!-- end chat-message -->
                    </div>
                    <!-- end chat-history -->
                    <p class="chat-feedback">Your partner is typing… <img src="images/typing-loading.gif" alt="" /></p>
                    <form action="#" method="post">
                        <fieldset>
                            <input type="text" placeholder="Type your message…" autofocus>
                            <input type="hidden">
                        </fieldset>
                    </form>
                </div>
                <!-- end chat -->
            </div>
            <!-- end live-chat -->
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
                </div>
                <!-- Heading Sec -->
                <ul class="breadcrumbs">
                    <li><a href="javascript:void(0)" title="">Home</a></li>
                    <li><a href="javascript:void(0)" title="">Dashboard</a></li>
                </ul>
                <div class="main-content-area">


                    <div class="row">
                        <div class="col-md-12">
                            <div class="widget white">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Customer Name</th>
                                            <th>Contact No</th>
                                            <th>City</th>
                                            <th>Address</th>                                           
                                            <th>Gender</th>
                                            
                                        </tr>
                                    </thead>


                                    <tbody>
                                        
                                        <?php
                                            $serial=1;

                                            foreach ($userdata as $singledata){ ?>
                                            <tr>
                                                <td>
                                                    <?php  echo $serial++ ?>
                                                </td>
                                                <td>
                                                    <?php  echo $singledata['customer_name'] ?>
                                                </td>
                                                <td>
                                                    <?php  echo $singledata['contact_no'] ?>
                                                </td>
                                                <td>
                                                    <?php  echo $singledata['city'] ?>
                                                </td>
                                                <td>
                                                    <?php  echo $singledata['address'] ?>
                                                </td>
                                                <td>
                                                    <?php  echo $singledata['gender'] ?>
                                                </td>
                                                

                                                <td><a href="single_customer.php?id=<?php echo $singledata['Id']; ?>">View</a></td>
                                                <td><a href="edit_customer.php?id=<?php echo $singledata['Id']; ?>">Edit</a></td>
                                                <td><a href="customer_delete.php?id=<?php echo $singledata['Id']; ?>">Delete</a></td>
                                            </tr>

                                            <?php }

?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
            <!-- Panel Content -->
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
