<?php
include_once 'include/functions.php';
$settings=show_settings();
?>

<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
<!DOCTYPE HTML>
<html>
<head>
<title><?php echo $settings['title'] ?></title>
<!---css--->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!---css--->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Agrox Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!---js--->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.js"></script>
    <style>
        .dropdown:hover .dropdown-menu {display: block; cursor: pointer}
    </style>

<!---js--->
<!--JS for animate-->
<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
	<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
	<script src="js/wow.min.js"></script>
		<script>
			new WOW().init();
		</script>
	<!--//end-animate-->

<!---webfont--->
<link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>
<body>
	<!---header--->
		<div class="header-section">
			<div class="container">
				<div class="head-bottom">
					<div class="logo  wow fadeInDownBig animated animated" data-wow-delay="0.4s">
						<h1><a href="index.html"><?php echo $settings['title'] ?><span><?php echo $settings['description'] ?></span></a></h1>
					</div>
				</div>
			</div>
		</div>
		<!---header--->
		<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
		<!---banner--->
		<div class="banner">
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <?php
                                $row=listmenudefault();
                                foreach ($row as $val):
                                ?>
                                <li class="dropdown">
                                    <a href="<?php echo $val['url']; ?>" class="wow fadeInDownBig" data-wow-delay=".2s"><?php echo $val['title']; ?></a>
                                    <?php
                                    $rows=list_Sub_Menu_Default($val['id']);
                                    if ($rows):
                                    ?>
                                    <ul class="dropdown-menu">
                                        <?php
                                        foreach ($rows as $value):
                                        ?>
                                        <li>
                                            <a href="<?php echo $value['url']; ?>"><?php echo $value['title']; ?></a>
                                        </li>
                                        <?php
                                        endforeach;
                                        ?>
                                    </ul>
                                    <?php
                                    endif;
                                    ?>
                                </li>
                                <?php
                                endforeach;
                                ?>
                            </ul>
                        </div>





						<div class="navbar-header">
							 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar">test</span>
								<span class="icon-bar">test2</span>
								<span class="icon-bar">test3</span>
							</button>
						</div>


			<!-- Collect the nav links, forms, and other content for toggling -->
						<!--<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li class="active"><a href="index.html" class="wow fadeInDownBig" data-wow-delay=".1s">صفحه اصلی<span class="sr-only">(current)</span></a></li>
								<li><a href="about.html" class="wow fadeInDownBig" data-wow-delay=".2s">درباره ما</a></li>
								<li><a href="services.html" class="wow fadeInDownBig" data-wow-delay=".4s">خدمات</a></li>
								<li><a href="gallery.html" class="wow fadeInDownBig" data-wow-delay=".6s">گالری</a></li>
								<li><a href="codes.html" class="wow fadeInDownBig" data-wow-delay=".7s">نمونه ها</a></li>
								<li><a href="contact.html" class="wow fadeInDownBig" data-wow-delay=".9s">تماس با ما</a></li>
							</ul>
						</div>-->

					</div>
				</nav>
				<div class="banner-center">
					<marquee><h3>
بهترین مزرعه کشاورزی</h3></marquee>
				</div>
				
			</div>
		</div>
<!---banner-->
<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
	<!---welcome-->
	<div class="content">
		<div class="welcome-section">
			<div class="container">
			<div class="banner-bottom">
					<div class="banner-grids">
						<div class="col-md-4 banner-grid wow fadeInRight animated" data-wow-delay=".5s">
							<h4>
محصولات برتر</h4>
							<div class="ban1">
								<div class="ban-images  view fourth-effect">
									<img src="images/b1.jpg" class="img-responsive" alt=""/>
								<div class="mask"></div>
								</div>
								<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد</p>
								<a href="about.html" class="button hvr-wobble-bottom">اطلاعات بیشتر</a>
							</div>
						</div>
						<div class="col-md-4 banner-grid wow fadeInDownBig" data-wow-delay=".4s">
							<h4>دانه کشاورزی</h4>
								<div class="ban1">
									<div class="ban-images  view fourth-effect">
										<img src="images/b2.jpg" class="img-responsive" alt=""/>
									<div class="mask"></div>
									</div>
									<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد</p>
									<a href="about.html" class="button hvr-wobble-bottom">اطلاعات بیشتر</a>
								</div>
							</div>
						<div class="col-md-4 banner-grid wow fadeInLeft animated" data-wow-delay=".5s">
							<h4>فن آوری های ما</h4>
								<div class="ban1">
									<div class="ban-images  view fourth-effect">
										<img src="images/b1.jpg" class="img-responsive" alt=""/>
										<div class="mask"></div>
									</div>
									<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد</p>
									<a href="about.html" class="button hvr-wobble-bottom">اطلاعات بیشتر</a>
								</div>
							</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<h2>خوش آمدید</h2>
				<div class="welcome-grids">
					<div class="col-md-3 welcome-grid wow fadeInRight animated" data-wow-delay=".5s">
						<div class="welcome-text">
							<h4>

لورم ایپسوم </h4>
<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
							<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است</p>
						</div>
						<div class="welcome-icon">
							<img src="images/i1.png">
						</div>
					</div>
					<div class="col-md-3 welcome-grid wow fadeInDownBig animated" data-wow-delay=".5s">
						<div class="welcome-text">
							<h4>

لورم ایپسوم </h4>
							<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است</p>
						</div>
						<div class="welcome-icon">
							<img src="images/i2.png">
						</div>
					</div>
					<div class="col-md-3 welcome-grid wow fadeInUpBig animated" data-wow-delay=".5s">
						<div class="welcome-text">
							<h4>

لورم ایپسوم </h4>
							<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است</p>
						</div>
						<div class="welcome-icon">
							<img src="images/i3.png">
						</div>
					</div>
					<div class="col-md-3 welcome-grid wow fadeInLeft animated" data-wow-delay=".5s">
						<div class="welcome-text">
							<h4>

لورم ایپسوم </h4>
							<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است</p>
						</div>
						<div class="welcome-icon">
							<img src="images/i4.png">
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<!---welcome-->
		<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
		<!---product-->
		<div class="product-section">
			<div class="container">
				<h3>
محصولات محبوب</h3>
                <div class="product-grids">
                <?php
                    @$products=listProDefault();
                    if (isset($products)){
                    foreach ($products as $value):
                ?>
					<div class="col-md-6 product-grid wow fadeInRight animated" data-wow-delay=".5s">
						<div class="product1-right">
                            <h4><?php echo $value['title']?></h4>
                            <p><?php echo $value['text']?></p>
                            <a href="gallery.html"><i class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></i></a>
                        </div>
						<div class="product1-left">
                            <img src="admin/<?php echo $value['img']?>" class="img-responsive" alt=""/>
                        </div>
						<div class="clearfix"></div>
					</div>
                    <?php
                    endforeach;
                    }else{
                        echo "<span style='font-size: 25px;'>محصولی یافت نشد!</span>";
                    }
                    ?>
					<div class="clearfix"></div>
				</div>

		<!---product-->
		<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
		<!---news--->
		<div class="news-section">


			<div class="container">
				<h3>آخرین اخبار</h3>
                <?php
                $news=listnewsdefault();
                foreach ($news as $value):
                ?>
				<div class="news-grids wow fadeInLeft animated" data-wow-delay=".5s">
					<div class="col-md-4 new-grid">
						<div id="box" class="burst-circle teal">
							<div class="caption"></div>
							<img src="admin/<?php echo $value['img'] ?>" width="200" height="200" class="img-responsive" />
							<h4> طرح‌نما </h4>
						</div>
					</div>
					<div class="col-md-8 new-grid1 hvr-bounce-to-left">
						<h5><i class="glyphicon glyphicon-calendar" aria-hidden="true"></i> <?php echo $value['date'] ?> </h5>
						<h4><?php echo $value['title'] ?></h4>
						<p><?php echo $value['text'] ?></p>
					</div>
					<div class="clearfix"></div>
				</div>
                <?php
                endforeach;
                ?>
			</div>



		</div>
			<!---news--->
			<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
		<!---Testimonials--->
		<div class="testimonials-section">
			<div class="container">
				<h3>گواهی نامه</h3>
				<div class="testimonials-grids">
					<div class="col-md-2 testimonials-grid1 wow fadeInLeft animated" data-wow-delay=".5s">
						<img src="images/t1.png" class="img-responsive" alt=""/>
					</div>
					<div class="col-md-10 testimonials-grid wow fadeInRight animated" data-wow-delay=".5s">
						<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد</p>
						<h5>ایمان مدائنی</h5>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<!---Testimonials--->
	</div>
	<!---footer--->
	<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
		<div class="footer-section">
			<div class="container">
			<div class="footer-grids">
				<div class="col-md-3 footer-grid wow fadeInLeft animated" data-wow-delay=".5s">
					<h4>درباره ما</h4>
					<ul>
						<li>
تمرکز بر مشتری</li>						
						<li>

لورم ایپسوم یا طرح‌نما </li>
						<li>

لورم ایپسوم یا طرح‌نما </li>
						<li>عملکردها</li>
						<li>نوآوری</li>
						<li>
مسئوليت ها</li>
					</ul>
				</div>
				<div class="col-md-3 footer-grid wow fadeInDownBig animated" data-wow-delay=".5s">
					<h4>راه حل ها</h4>
					<ul>
						<li>
مرکز تماس</li>
						<li>پشتیبانی مشتریان</li>
						<li>

لورم ایپسوم یا طرح‌نما </li>
						<li>طرح‌نما </li>
						<li>
وب سلف سرویس</li>
						<li>معیارهای عملکرد</li>
					</ul>
				</div>
				<div class="col-md-3 footer-grid wow fadeInUpBig animated" data-wow-delay=".5s">
				<h4>کارها</h4>
					<ul>
						<li>
پشتیبانی مشتریان</li>
						<li>
پشتیبانی پلاتین</li>
						<li>پشتیبانی طلا</li>
						<li>آموزش</li>
						<li>کارگاه های آموزشی</li>
						<li>
آموزش آنلاین</li>
					</ul>
				</div>
				<div class="col-md-3 footer-grid wow fadeInLeft animated" data-wow-delay=".5s">
					<h4>تماس با ما</h4>
					<p>آدرس: <?php echo $settings['address'] ?></p>
					<p>تلفن: <?php echo $settings['tel'] ?></p>
					<p>فکس: <?php echo $settings['fax'] ?></p>
					<a href="mailto:<?php echo $settings['email'] ?>">ایمیل: <?php echo $settings['email'] ?></a>
				</div>
				<div class="clearfix"></div>
			</div>
			</div>
		</div>	
	<!---footer--->
	<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
	<!--copy-->
        <div class="copy-section wow fadeInLeft animated" data-wow-delay=".5s" >
            <div class="container" style="display: flex;flex-wrap: wrap;flex-direction: column;align-content: center;align-items: center;">
                <div class="social-icons">
                    <a href="<?php echo $settings['facebook']; ?>"><i class="icon"></i></a>
                    <a href="<?php echo $settings['twitter']; ?>"><i class="icon1"></i></a>
                    <a href="<?php echo $settings['instagram']; ?>"><i class="icon3"></i></a>
                </div>
                <p><?php echo $settings['copyright'] ?></p>
            </div>
        </div>
	<!--copy-->
</body>
<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
</html>