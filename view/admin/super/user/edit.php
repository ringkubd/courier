<?php include_once '../../include/head.php';

include_once '../../../../vendor/autoload.php';
$view =new \CMS\admin\super\user();
$view = $view->view($_GET['id']);

?>

    <body class="nav-md">
<div class="container body">
    <div class="main_container">

<?php include_once '../../include/left-column.php'; ?>


    <!-- top navigation -->
    <div class="top_nav">
        <div class="nav_menu">
            <nav>
                <div class="nav toggle">
                    <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>

                <ul class="nav navbar-nav navbar-right">
                    <li class="">
                        <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <img src="../../../../assets/admin/images/img.jpg" alt="">Abdullah
                            <span class=" fa fa-angle-down"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-usermenu pull-right">
                            <li><a href="javascript:;"> Profile</a></li>
                            <li>
                                <a href="javascript:;">
                                    <span class="badge bg-red pull-right">50%</span>
                                    <span>Settings</span>
                                </a>
                            </li>
                            <li><a href="javascript:;">Help</a></li>
                            <li><a href="#"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                        </ul>
                    </li>

                    <li role="presentation" class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-green">6</span>
                        </a>
                        <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                            <li>
                                <a>
                                    <span class="image"><img src="../../../../assets/admin/images/img.jpg" alt="Profile Image" /></span>
                                    <span>
                          <span>Abdullah</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                    <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <span class="image"><img src="../../../../assets/admin/images/img.jpg" alt="Profile Image" /></span>
                                    <span>
                          <span>Abdullah</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                    <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <span class="image"><img src="../../../../assets/admin/images/img.jpg" alt="Profile Image" /></span>
                                    <span>
                          <span>Abdullah</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                    <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <span class="image"><img src="../../../../assets/admin/images/img.jpg" alt="Profile Image" /></span>
                                    <span>
                          <span>Abdullah</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                    <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                </a>
                            </li>
                            <li>
                                <div class="text-center">
                                    <a>
                                        <strong>See All Alerts</strong>
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- /top navigation -->

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Update Record</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">

                <div class="x_panel">
                    <div class="x_title">
                        <h2>Update users</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Settings 1</a>
                                    </li>
                                    <li><a href="#">Settings 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <!-- start form for validation -->
                        <form  action="update.php" id="demo-form" data-parsley-validate="" novalidate="" class="AVAST_PAM_nonloginform" enctype="multipart/form-data" method="post">
                            <label for="user_email">Email:</label>
                            <input id="user_email" class="form-control"  value="<?php echo $view['user_email']?>" name="user_email" required="" type="email">
                            <br>
                            <label for="user_password ">Password:</label>
                            <input id="user_password" class="form-control"  value="<?php echo $view['user_password']?>" name="user_password" required="" type="text">
                            <br>
                            <label for="user_name">Name:</label>
                            <input id="user_name" class="form-control" value="<?php echo $view['user_name']?>" name="user_name" type="text">

<input id="unique_id" class="form-control" value="<?php echo $view['unique_id']?>" name="unique_id" type="hidden">
<input name="user_image" type="hidden" value="<?php echo $view['user_image']?>" class="form-control">

                            <br>
                            <label for="user_mobile">Mobile :</label>
                            <input id="user_mobile" class="form-control"  value="<?php echo $view['user_mobile']?>" name="user_mobile" required="" type="text">
                            <br>
                            <label for="user_address">Address:</label>
                            <textarea id="user_address" class="form-control" name="user_address"> <?php echo $view['user_address']?> </textarea>
                            <br>





                            <div class="form-group">
                                <?php
                                $gender =  $view['user_gender'];

                                ?>
                                <div class="form-group">
                                    <label>Gender:</label>
                                    <input id="Male" type="radio"  <?php echo ($gender=='male')?'checked':'' ?> name="user_gender" value="Male">
                                    <label for="Male">Male</label>

                                    <input id="Female" type="radio" <?php echo ($gender =='female')?'checked':'' ?> name="user_gender" value="Female">
                                    <label for="Female">Female</label>
                                </div>
                            </div>

                            <br>
                            <label for="user_date_of_birth">Date of Birth :</label>
                            <input id="user_date_of_birth"  value="<?php echo $view['user_date_of_birth']?>" class="form-control" name="user_date_of_birth" type="date">
                            <br>
                            <label for="user_type">Type:</label>
                            <input id="user_type" class="form-control"  value="<?php echo $view['user_type']?>" name="user_type" required="" type="text">
                            <br>
                            <label for="user_status">Status:</label>
                            <input id="user_status" class="form-control" value="<?php echo $view['user_status']?>"  name="user_status" type="number">
                            <br>

                            <label for="user_image">Update Photo:</label>
                            <input id="user_image" class="form-control" name="user_image" type="file">
                            <br>
<label for="">Profile Photo:</label>
<img width="100" src="../../../../assets/admin/images/uploads/<?php echo $view['user_image']?>" alt="">

                            <br>
                            <br>
                            <button type="submit" class="btn btn-success">Update</button>

                        </form>
                        <!-- end form for validations -->

                    </div>
                </div>
            </div>






        </div>
    </div>
    <!-- /page content -->

    <!-- footer content -->

<?php include_once '../../include/footer.php'; ?>