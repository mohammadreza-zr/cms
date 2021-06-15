<?php
    include_once '../include/functions.php';
    if (!isset($_SESSION['username'])){
        header("location: index.php?login=first");
    }
$settings=show_settings();
$count=count_contact();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.html">
    <script src="//cdn.ckeditor.com/4.16.1/full/ckeditor.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        function myFunction(value) {
            var copyText = value;
            copyText.select();
            copyText.setSelectionRange(0, 99999)
            document.execCommand("copy");
            value.parentNode.childNodes[3].innerText='کپی شد!';
        }
    </script>
    <style>
        .tooltip {
            position: relative;
            display: inline-block;
            border-bottom: 1px dotted #000000;
        }

        .tooltip .tooltiptext {
            visibility: hidden;
            width: 120px;
            background-color: #555;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 5px 0;
            position: absolute;
            z-index: 1;
            bottom: 125%;
            left: 50%;
            margin-left: -60px;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .tooltip .tooltiptext::after {
            content: "";
            position: absolute;
            top: 100%;
            left: 50%;
            margin-left: -5px;
            border-width: 5px;
            border-style: solid;
            border-color: #555 transparent transparent transparent;
        }

        .tooltip:hover .tooltiptext {
            visibility: visible;
            opacity: 1;
        }
    </style>
    <title><?php echo $settings['title']?></title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/jquery-file-upload/css/jquery.fileupload-ui.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]-->
      <!--<script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>-->
    <!--[endif]-->
</head>

<body>

    <section id="container" class="">
        <!--header start-->
        <header class="header white-bg">
            <div class="sidebar-toggle-box">
                <div data-original-title="Toggle Navigation" data-placement="right" class="icon-reorder tooltips"></div>
            </div>
            <!--logo start-->
            <a href="#" class="logo">فلت<span>لب</span></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-tasks"></i>
                            <span class="badge bg-success">6</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">شما 6 برنامه در دست کار دارید</p>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">پنل مدیریت</div>
                                        <div class="percent">40%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">بروزرسانی دیتابیس</div>
                                        <div class="percent">60%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">برنامه نویسی  IPhone</div>
                                        <div class="percent">87%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 87%">
                                            <span class="sr-only">87% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">برنامه موبایل</div>
                                        <div class="percent">33%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 33%">
                                            <span class="sr-only">33% Complete (danger)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">پروفایل v1.3</div>
                                        <div class="percent">45%</div>
                                    </div>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                            <span class="sr-only">45% Complete</span>
                                        </div>
                                    </div>

                                </a>
                            </li>
                            <li class="external">
                                <a href="#">برنامه های بیشتر</a>
                            </li>
                        </ul>
                    </li>
                    <!-- settings end -->
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-envelope-alt"></i>
                            <span class="badge bg-important"><?php echo $count['COUNT(*)'];?></span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-red"></div>
                            <li>
                                <p class="red">شما <?php echo $count['COUNT(*)'];?> پیام جدید دارید </p>
                            </li>
                            <?php
                            $list=show_contact();
                            if (isset($list)){
                            foreach ($list as $val):
                            ?>
                            <li>
                                <a href="dashboard.php?m=contact&p=detail&id=<?php echo $val['id']; ?>">
                                    <span class="photo">
                                        <img alt="avatar" src="img/avatar-mini2.jpg"></span>
                                    <span class="subject">
                                        <span class="from"><?php echo $val['name']?></span>
                                        <span class="time"><?php echo $val['time']?></span>
                                    </span>
                                    <span class="message"><?php echo $val['subject']?>
                                    </span>
                                </a>
                            </li>
                            <?php
                            endforeach;
                            }else{
                                echo "<li style='padding: 10px;'>هیچ پیامی وجود ندارد!</li>";
                            }
                            ?>
                            <li>
                                <a href="dashboard.php?m=contact&p=list">نمایش تمامی پیام ها</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                    <!-- notification dropdown start-->
                    <li id="header_notification_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="icon-bell-alt"></i>
                            <span class="badge bg-warning">7</span>
                        </a>
                        <ul class="dropdown-menu extended notification">
                            <div class="notify-arrow notify-arrow-yellow"></div>
                            <li>
                                <p class="yellow">شما 7 اعلام جدید دارید</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-danger"><i class="icon-bolt"></i></span>
                                    سرور شماره 3 توقف کرده
                                   
                                    <span class="small italic">34 دقیقه قبل</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-warning"><i class="icon-bell"></i></span>
                                    سرور شماره 4 بارگزاری نمی شود
                                   
                                    <span class="small italic">1 ساعت قبل</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-danger"><i class="icon-bolt"></i></span>
                                    پنل مدیریت 24% پیشرفت داشته است
                                   
                                    <span class="small italic">4 ساعت قبل</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-success"><i class="icon-plus"></i></span>
                                    ثبت نام کاربر جدید
                                   
                                    <span class="small italic">همین حالا</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-info"><i class="icon-bullhorn"></i></span>
                                    برنامه پیام خطا دارد
                                   
                                    <span class="small italic">10 دقیقه قبل</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">نمایش تمامی اعلام ها</a>
                            </li>
                        </ul>
                    </li>
                    <!-- notification dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-nav ">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                    <li>
                        <input type="text" class="form-control search" placeholder="Search">
                    </li>
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" src="img/avatar1_small.jpg">
                            <span class="username">

                                <!--session user name-->

                            </span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li><a href="#"><i class=" icon-suitcase"></i>پروفایل</a></li>
                            <li><a href="#"><i class="icon-cog"></i>تنظیمات</a></li>
                            <li><a href="#"><i class="icon-bell-alt"></i>اعلام ها</a></li>
                            <li><a href="login.html"><i class="icon-key"></i>خروج</a></li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!--search & user info end-->
            </div>
        </header>
        <!--header end-->
        <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu">
                    <li class="active">
                        <a class="" href="dashboard.php?m=index&p=index">
                            <i class="icon-dashboard"></i>
                            <span>صفحه اصلی</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="dashboard.php?m=settings&p=edit" class="">
                            <i class="las la-cog"></i>
                            <span>تنظیمات</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:" class="">
                            <i class="las la-bars"></i>
                            <span>مدیریت صفحه ها</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub">
                            <li><a class="" href="dashboard.php?m=page&p=list">لیست صفحه ها</a></li>
                            <li><a class="" href="dashboard.php?m=page&p=add">افزودن صفحه جدید</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:" class="">
                            <i class="las la-bars"></i>
                            <span>مدیریت منو ها</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub">
                            <li><a class="" href="dashboard.php?m=menu&p=list">لیست منو ها</a></li>
                            <li><a class="" href="dashboard.php?m=menu&p=add">افزودن منو جدید</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:" class="">
                            <i class="las la-layer-group"></i>
                            <span>مدیریت دسته بندی ها</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub">
                            <li><a class="" href="dashboard.php?m=product_cat&p=list">لیست دسته بندی ها</a></li>
                            <li><a class="" href="dashboard.php?m=product_cat&p=add">افزودن دسته بندی جدید</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:" class="">
                            <i class="las la-store"></i>
                            <span>مدیریت محصولات</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub">
                            <li><a class="" href="dashboard.php?m=product&p=list">لیست محصولات</a></li>
                            <li><a class="" href="dashboard.php?m=product&p=add">افزودن محصول جدید</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:" class="">
                            <i class="las la-object-ungroup"></i>
                            <span>دسته بندی خبرها</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub">
                            <li><a class="" href="dashboard.php?m=news_cat&p=list">لیست دسته بندی ها</a></li>
                            <li><a class="" href="dashboard.php?m=news_cat&p=add">افزودن دسته بندی جدید</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:" class="">
                            <i class="lar la-newspaper"></i>
                            <span>مدیریت اخبار</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub">
                            <li><a class="" href="dashboard.php?m=news&p=list">لیست اخبار</a></li>
                            <li><a class="" href="dashboard.php?m=news&p=add">افزودن خبر جدید</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:" class="">
                            <i class="las la-box"></i>
                            <span>تماس ها</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub">
                            <li><a class="" href="dashboard.php?m=contact&p=list">لیست تماس ها</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:" class="">
                            <i class="lar la-newspaper"></i>
                            <span>ویجت های زیر اسلاید</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub">
                            <li><a class="" href="dashboard.php?m=widget&p=list">لیست ویجت ها</a></li>
                            <li><a class="" href="dashboard.php?m=widget&p=add">افزودن ویجت جدید</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:" class="">
                            <i class="las la-bars"></i>
                            <span>مدیریت فایل ها</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub">
                            <li><a class="" href="dashboard.php?m=uploader&p=list">لیست فایل ها</a></li>
                            <li><a class="" href="dashboard.php?m=uploader&p=add">افزودن فایل جدید</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <!--sidebar end-->
        <!--main content start-->
        <section id="main-content">
            <div class="wrapper">
                <?php
                    @$m=$_GET["m"]?$m=$_GET["m"]:"index";
                    @$p=$_GET["p"]?$p=$_GET["p"]:"index";
                    include_once "$m/$p.php";
                ?>
            </div>
        </section>
        <!--main content end-->
    </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>

    <!-- BEGIN:File Upload Plugin JS files-->
    <script src="assets/jquery-file-upload/js/vendor/jquery.ui.widget.js"></script>
    <!-- The Templates plugin is included to render the upload/download listings -->
    <script src="assets/jquery-file-upload/js/vendor/tmpl.min.js"></script>
    <!-- The Load Image plugin is included for the preview images and image resizing functionality -->
    <script src="assets/jquery-file-upload/js/vendor/load-image.min.js"></script>
    <!-- The Canvas to Blob plugin is included for image resizing functionality -->
    <script src="assets/jquery-file-upload/js/vendor/canvas-to-blob.min.js"></script>
    <!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
    <script src="assets/jquery-file-upload/js/jquery.iframe-transport.js"></script>
    <!-- The basic File Upload plugin -->
    <script src="assets/jquery-file-upload/js/jquery.fileupload.js"></script>
    <!-- The File Upload file processing plugin -->
    <script src="assets/jquery-file-upload/js/jquery.fileupload-fp.js"></script>
    <!-- The File Upload user interface plugin -->
    <script src="assets/jquery-file-upload/js/jquery.fileupload-ui.js"></script>
    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>
</body>
</html>