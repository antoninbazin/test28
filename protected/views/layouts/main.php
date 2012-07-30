<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Soirée du ../08/2012</title>
 	<meta charset="utf-8">
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/reset.css" type="text/css" media="all">
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/layout.css" type="text/css" media="all">
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" type="text/css" media="all">
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" type="text/css" media="all">
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.6.js" ></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/cufon-yui.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/cufon-replace.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/NewsGoth_BT_400.font.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/NewsGoth_BT_700.font.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jcarousellite.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.mousewheel.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/atooltip.jquery.js"></script>


  <!--[if lt IE 9]>
  	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/html5.js"></script>
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" type="text/css" media="all">
  <![endif]-->
	<!--[if lt IE 7]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0"  alt="" /></a>
		</div>
	<![endif]-->
</head>

<body id="page1">
	<div class="bg1">
		<div class="main">
			<!--header -->
			<header>
				<nav>
					<ul id="menu">
						<li class="active"><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/index">Club</a></li>
						<li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/guest/index">Parties</a></li>
						<li><a href="Gallery.html">Gallery</a></li>
						<li><a href="Residents.html">Residents</a></li>
						<li><a href="News.html">News</a></li>
						<li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/contact">Contacts</a></li>
					</ul>
				</nav>
				<h1><a href="index.html" id="logo">night club feel the rhythm</a></h1>
			</header>
			<!--header end-->
			<div class="box">
				<div id="mainmenu">
					<?php $this->widget('zii.widgets.CMenu',array(
						'items'=>array(
							array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
							array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
						),
					)); ?>
				</div><!-- mainmenu -->
				<?php if(isset($this->breadcrumbs)):?>
					<?php $this->widget('zii.widgets.CBreadcrumbs', array(
						'links'=>$this->breadcrumbs,
					)); ?><!-- breadcrumbs -->
				<?php endif?>
				<?php echo $content; ?>
				<div class="clear"></div>
				<footer>
					<div class="line1">
						<div class="line2 wrapper">
							<div class="icons">
								<h4>Connect With Us</h4>
								<ul id="icons">
									<li><a href="#" class="normaltip" title="Reddit"><img src="images/icon1.jpg" alt=""></a></li>
									<li><a href="#" class="normaltip" title="Flickr"><img src="images/icon2.jpg" alt=""></a></li>
									<li><a href="#" class="normaltip" title="Twitter"><img src="images/icon3.jpg" alt=""></a></li>
									<li><a href="#" class="normaltip" title="Facebook"><img src="images/icon4.jpg" alt=""></a></li>
									<li><a href="#" class="normaltip" title="Rss"><img src="images/icon5.jpg" alt=""></a></li>
								</ul>
							<!-- {%FOOTER_LINK} -->
							</div>
							<div class="info">
								<h4>About Us</h4>
								<ul>
									<li><a href="#">Club Info</a></li>
									<li><a href="#">Music</a></li>
									<li><a href="#">DJ Sets</a></li>
									<li><a href="#">News</a></li>
								</ul>
							</div>
							<div class="info">
								<h4>Join In</h4>
								<ul>
									<li><a href="#">Sign In</a></li>
									<li><a href="#">Forums</a></li>
									<li><a href="#">Promotions</a></li>
								</ul>
							</div>
							<div class="phone">
								<h4>Order Tickets</h4>
								<p>Free Phone<span>01.02.03.04.05</span></p>
							</div>
						</div>
					</div>
				</footer>
			</div>
		</div>
	</div>
<script>
$(document).ready(function(){
	//gallery
	$("#gallery1").jCarouselLite({
			btnNext: ".next",
		 	btnPrev: ".prev",
       		mouseWheel: true,
			vertical: true,
			circular: true,
			visible: 2,
			speed: 600,
			easing: 'easeOutCirc'
	});
	Cufon.now();
})
</script>
</body>
</html>