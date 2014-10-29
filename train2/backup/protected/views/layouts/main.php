<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/core.css" media="screen, projection" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/principal.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/nav.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/content.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/footer.css" />

        <title><?php echo Yii::app()->request->baseUrl; ?></title>

    </head>

    <body>

        <div class="container" id="page">

            <a href="<?php echo Yii::app()->request->baseUrl; ?>">
                <div id="header">

                </div></a>

            <div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'encodeLabel'=>false,
			'items'=>array(
				array('label'=>'<span style="background-image: url('.Yii::app()->request->baseUrl.'/images/line.png)"></span>', 'url'=>array('/line/index')),
				array('label'=>'<span style="background-image: url('.Yii::app()->request->baseUrl.'/images/station.png)"></span>', 'url'=>array('/station/index')),
				array('label'=>'<span style="background-image: url('.Yii::app()->request->baseUrl.'/images/vehicle.png)"></span>', 'url'=>array('/vehicle/index')),
				array('label'=>'<span style="background-image: url('.Yii::app()->request->baseUrl.'/images/driver.png)"></span>', 'url'=>array('/driver/index')),
				array('label'=>'<span style="background-image: url('.Yii::app()->request->baseUrl.'/images/xml.png)"></span>', 'url'=>array('/xml/index')),
				array('label'=>'<span style="background-image: url('.Yii::app()->request->baseUrl.'/images/user.png)"></span>', 'url'=>array('/userlogin/create')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
			    array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
				
			),
		)); ?>
                <!-- Login / Logout -->
            </div>
			<?php if(isset($this->breadcrumbs)):?>
                <?php $this->widget('zii.widgets.CBreadcrumbs', array(
                    'links'=>$this->breadcrumbs,
                )); ?><!-- breadcrumbs -->
            <?php endif?>			
           	<?php echo $content; ?>
            <!-- content -->
            <div class="clear"></div>

            <div id="footer">
                <ul>
                    <li class="sitemap"><a href="#">Site Map</a></li>
                    <li class="copyr"><a href="#">Copyright &copy; 2013 by LVB</a></li>
                    <li class="allright"><a href="#">All Rights Reserved. <br>By WorldSkills International</a></li>
                </ul>
            </div><!-- footer -->

        </div><!-- page -->

    </body>
</html>
