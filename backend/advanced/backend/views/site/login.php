<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>
<html lang="en">
<head>
        <base href="http://localhost/Ticket-Selling/backend/advanced/backend/web/">
	<title>Login</title>
	
        <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= Yii::$app->request->baseUrl; ?>/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= Yii::$app->request->baseUrl; ?>/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= Yii::$app->request->baseUrl; ?>/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= Yii::$app->request->baseUrl; ?>/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= Yii::$app->request->baseUrl; ?>/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= Yii::$app->request->baseUrl; ?>/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= Yii::$app->request->baseUrl; ?>/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= Yii::$app->request->baseUrl; ?>/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= Yii::$app->request->baseUrl; ?>/css/main.css">
<!--===============================================================================================-->

        <base href="/" />
</head>
	<div class="limiter" >
		<div class="wrap-login100" >
				<span class="login100-form-title p-b-26" >
						Administrator Login
				</span>
					<span class="login100-form-title p-b-">
						
				</span><br><br>
				<?php $form = ActiveForm::begin(['id' => 'login-form']); ?><br>
                                
                                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?><br>
				
				
                                        <?= $form->field($model, 'password')->passwordInput() ?>
                                
                                 <?= $form->field($model, 'rememberMe')->checkbox() ?><br>
				<div class="container-login100-form-btn"><br>
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="login-button">
								Login
							</button>
						</div>
				</div>
                                
				<?php ActiveForm::end(); ?>
		</div>
	</div>
	
				