<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster">
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/prettyPhoto/css/prettyPhoto.css">
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/flexslider.css">
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/font-awesome.css">
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css">
        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ico/apple-touch-icon-57-precomposed.png">
</head>

<body>
<div class="container">
            <div class="header row">
                <div class="span12">
                    <div class="navbar">
                        <div class="navbar-inner">
                            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </a>
                            <h1>
                                <?php echo CHtml::link('Andia - a super cool design agency...', '/', array('class'=>'brand'))  ?>
                                
                            </h1>
                            <div class="nav-collapse collapse">
		<?php $this->widget('zii.widgets.CMenu',array(
                        'htmlOptions'=>array('class'=>'nav pull-right'),
                        'encodeLabel'=>false,
			'items'=>array(
				array('label'=>'<i class="icon-home"></i><br>Home', 'url'=>array('site/index')),
				array('label'=>'<i class="icon-camera"></i><br>Portfolio', 'url'=>array('/site/page')),
				array('label'=>'<i class="icon-comments"></i><br>Blog', 'url'=>array('/site/blog')),
                                array('label'=>'<i class="icon-tasks"></i><br>Services', 'url'=>array('/site/services')), 
                                array('label'=>'<i class="icon-user"></i><br>About', 'url'=>array('/site/about')), 
                                array('label'=>'<i class="icon-envelope-alt"></i><br>Contact', 'url'=>array('/site/contact')), 
				
			),
		)); ?>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
	

	<?php echo $content; ?>

	<div class="clear"></div>

	<footer>
            <div class="container">
                <div class="row">
                    <div class="widget span3">
                        <h4>About Us</h4>
                        <?php echo PageModel::getShirtDesc('about'); ?>
                        <p><?php echo CHtml::link('Read more...','/about'); ?></p>
                    </div>
                    <div class="widget span3">
                       <?php echo PageModel::getFullDesc('contact'); ?>
                    </div>
                </div>
                <div class="footer-border"></div>
                <div class="row">
                    <div class="copyright span4">
                        <p>Copyright 2012 Andia - All rights reserved.</p>
                    </div>
                    <div class="social span8">
                        <a class="facebook" href=""></a>
                        <a class="dribbble" href=""></a>
                        <a class="twitter" href=""></a>
                        <a class="pinterest" href=""></a>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Javascript -->
        
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.flexslider.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.quicksand.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/css/prettyPhoto/js/jquery.prettyPhoto.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/scripts.js"></script><!-- footer -->

</div><!-- page -->

</body>
</html>
