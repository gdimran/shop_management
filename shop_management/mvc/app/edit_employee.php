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
    
    include_once'./models/Register.php';
    $edit_obj= new Register();
    $edit_obj->prepare($_GET);
   
   $singledata=$edit_obj->show();

   
   
   
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
                <form action="#" method="post" >
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

            <ul class="breadcrumbs">
                <li><a href="javascript:void(0)" title="">Home</a></li>
                <li><a href="javascript:void(0)" title="">Employee</a></li>
            </ul>
          
            <div class="main-content-area">
                <form action="employee_update.php" method="post" enctype="multipart/form-data">
                <div id="step-1">
                    <h2 class="StepTitle">Account Information</h2>
                    <div class="col-md-6">
                        <div class="inline-form">
                            <label class="c-label">Name</label><input class="input-style" type="text" placeholder="Name"  name="name" value="<?php echo $singledata['name']; ?>" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="inline-form">
                            <label class="c-label">Email</label><input class="input-style" type="email" placeholder="Email"   name="email" value="<?php echo $singledata['email']; ?>"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="inline-form">
                            <label class="c-label">Password</label><input type="password" placeholder="Password"  name="password" value="<?php echo $singledata['password']; ?>" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="inline-form">
                            <label class="c-label">Phone Number</label><input type="text" placeholder="Phone Number"  name="phone" value="<?php echo $singledata['phone_no']; ?>" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="inline-form">
                            <label class="c-label">Address</label><input type="text" placeholder="Address"  name="address" value="<?php echo $singledata['address']; ?>" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="inline-form">
                            <label for="exampleInputFile">Select Image</label>
                            <input type="file" id="exampleInputFile" name="image" value="<?php echo $singledata['image']; ?>">

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="inline-form">
                            <label class="c-label">Salary</label><input type="text" placeholder="Salary" name="salary" value="<?php echo $singledata['salary']; ?>" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="inline-form">
                            <select class="form-control" name="employee_roll" value="<?php echo $singledata['employee_roll']; ?>">
                                <option value="0">Select Employee Roll</option>
                                <option value="1" <?php if($singledata['employee_roll']=='1')echo 'selected="selected"'; ?>>Admin</option>
                                <option value="2" <?php if($singledata['employee_roll']=='2')echo 'selected="selected"'; ?>>Subadmin</option>
                                <option value="3" <?php if($singledata['employee_roll']=='3')echo 'selected="selected"'; ?>>Super visor</option>
                       </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="radio">
                            Select Gender:
                            <label>    
                         <input  type="radio" name="gender"  value="Male" <?php echo ($singledata['gender']=='Male')?'checked':'' ?> >Male
                        
                       </label>
                            <label>
                         <input  type="radio" name="gender"  value="Female" <?php echo ($singledata['gender']=='Female')?'checked':'' ?>>Female
                       </label>
                        </div>
                    </div>
                      <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>"/>
                    <div class="col-md-6">
                        <div class="form-group">
                            <button class="btn green-bg btn-lg" name="submit" type="submit">Update</button>
                        </div>
                    </div>


                </div>

            </form>

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
