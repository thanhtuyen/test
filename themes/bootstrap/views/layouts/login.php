
<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="language" content="en" />

  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/login.css" />

  <title><?php echo CHtml::encode($this->pageTitle); ?></title>

  <?php Yii::app()->bootstrap->register(); ?>
</head>

<body>

<div class="container" id="page">

  <div id="login-form">
    <?php echo $content; ?>
  </div><!-- login-fom -->

  <div class="clear"></div>

  <div id="footer">
    Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
    All Rights Reserved.<br/>
    <?php echo Yii::powered(); ?>
  </div><!-- footer -->

</div><!-- page -->

</body>
</html>
