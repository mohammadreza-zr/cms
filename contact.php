<?php
include_once 'include/functions.php';
$settings=show_settings();
if(isset($_POST['btn'])){
    $data=$_POST['frm'];
    addContact($data);
}
?>
<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
<!DOCTYPE HTML>
<html lang="fa">
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
<!---js--->
<!--JS for animate-->
	<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
	<script src="js/wow.min.js"></script>
		<script>
			new WOW().init();
		</script>
	<!--//end-animate-->
<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
<!---webfont--->
<link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!---webfont--->
</head>
<body>
	<!---header--->
		<div class="header-section">
			<div class="container">
				<div class="head-bottom">
					<div class="logo  wow fadeInDownBig animated animated" data-wow-delay="0.4s">
						<h1><a href="index.html"><?php echo $settings['title'] ?><span><?php echo $settings['logotype'] ?></span></a></h1>
					</div>
				</div>
			</div>
		</div>
		<!---header--->
		<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
		<!---banner--->
		<div class="banner banner1">
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
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
					</div>
				</nav>
			</div>
		</div>
<!---banner-->
<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
	<!---welcome-->
	<div class="content">
	<div class="mail">
		<div class="container">
			<h2>تماس با ما</h2>
			<div class="mail-grids">
				<div class="col-md-6 mail-right wow fadeInLeft animated" data-wow-delay=".5s">
					<h4>اطلاعات تماس</h4>
					<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ </p>
					<ul>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>تلفن<span><?php echo $settings['tel'] ?></span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>ایمیل<a href="mailto:<?php echo $settings['email'] ?>"><?php echo $settings['email'] ?></a></li>
					</ul>
					<ul>
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>آدرس<span><?php echo $settings['address'] ?></span></li>
					</ul>
				</div>
				<div class="col-md-6 mail-right wow fadeInRight animated" data-wow-delay=".5s">
					<h4>ارسال پیام</h4>
					<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ </p>
					<form method="post">
						<input name="frm[name]" type="text" placeholder="نام" required=" ">
						<input name="frm[email]" type="email" placeholder="ایمیل" required=" ">
						<div class="clearfix"> </div>
						<input name="frm[subject]" type="text" placeholder="موضوع" required=" ">
						<textarea name="frm[text]" placeholder="
نوع متن خود را در اینجا ...." required=" "></textarea>
                        <span class="text-success"><?php
                            if (@$_GET['send']=='ok'){
                                echo 'پیام شما با موفقیت ارسال شد.';
                            }
                            ?></span><br><br>
						<input name="btn" type="submit" value="ارسال">
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
	<div class="map wow fadeInDownBig animated" data-wow-delay=".5s">
		<div class="container">
			<h4>مکان بر روی نقشه</h4>
		</div>
		<iframe src="https://maps.google.com/maps?q=Tabriz&t=&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	
	</div>
	<!---footer--->
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
					<p><?php echo $settings['address'] ?></p>
					<p>تلفن: <?php echo $settings['tel'] ?></p>
					<p>فکس: <?php echo $settings['fax'] ?></p>
					<a href="mailto:<?php echo $settings['email'] ?>"> <?php echo $settings['email'] ?></a>
				</div>
				<div class="clearfix"></div>
			</div>
			</div>
		</div>	
	<!---footer--->
	<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
	<!--copy-->
	<div class="copy-section wow fadeInLeft animated" data-wow-delay=".5s"">
		<div class="container">
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
