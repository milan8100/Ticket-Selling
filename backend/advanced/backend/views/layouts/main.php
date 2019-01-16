<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<html lang="<?= Yii::$app->language ?>">
    <head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="stylesheet" href="<?= Yii::$app->request->baseUrl; ?>/css/style.css">
    <link rel="stylesheet" href="<?= Yii::$app->request->baseUrl; ?>/css/colors/main.css" id="colors">

</head>
<body>
<?php $this->beginBody() ?> 

<div class="wrapper">
    
    <header id="header-container" class="fixed fullwidth dashboard">

	<!-- Header -->
	<div id="header" class="not-sticky">
		<div class="container">
			
			<!-- Left Side Content -->
			<div class="left-side">
				
				<!-- Logo -->
				<div id="logo">
					<a href="<?= Yii::$app->request->baseUrl; ?>/site/"><img src="<?= Yii::$app->request->baseUrl; ?>/images/logo.png" alt=""></a>
					<a href="<?= Yii::$app->request->baseUrl; ?>/site/" class="dashboard-logo"><img src="<?= Yii::$app->request->baseUrl; ?>/images/logo2.png" alt=""></a>
				</div>

				<!-- Mobile Navigation -->
				<div class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</div>

			
			<!-- Left Side Content / End -->

			<!-- Right Side Content / End -->
			<div class="right-side">
				<!-- Header Widget -->
				<div class="header-widget">
					
					<!-- User Menu -->
					<div class="user-menu">
                                            <div class="user-name"><?php echo isset(Yii::$app->user->identity->username) ? Yii::$app->user->identity->username : 'Guest'; ?></div>
					
                                              <?php 
    NavBar::begin([
        
        'options' => [
            'class' => 'not-sticky',
        ],
    ]);
    $menuItems = [
        
    ];
    
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
        
    } else {
        $menuItems[
        
        ] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end(); 
    ?>
					</div>

					
				</div>
				<!-- Header Widget / End -->
			</div>
			<!-- Right Side Content / End -->

		</div>
	</div>
	<!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->


    <!-- Header -->



<!--    <div class="container1">-->
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
<!--    </div>-->


<script type="text/javascript" src="<?= Yii::$app->request->baseUrl; ?>/scripts/jquery-2.2.0.min.js"></script>
<script type="text/javascript" src="<?= Yii::$app->request->baseUrl; ?>/scripts/mmenu.min.js"></script>
<script type="text/javascript" src="<?= Yii::$app->request->baseUrl; ?>/scripts/chosen.min.js"></script>
<script type="text/javascript" src="<?= Yii::$app->request->baseUrl; ?>/scripts/slick.min.js"></script>
<script type="text/javascript" src="<?= Yii::$app->request->baseUrl; ?>/scripts/rangeslider.min.js"></script>
<script type="text/javascript" src="<?= Yii::$app->request->baseUrl; ?>/scripts/magnific-popup.min.js"></script>
<script type="text/javascript" src="<?= Yii::$app->request->baseUrl; ?>/scripts/waypoints.min.js"></script>
<script type="text/javascript" src="<?= Yii::$app->request->baseUrl; ?>/scripts/counterup.min.js"></script>
<script type="text/javascript" src="<?= Yii::$app->request->baseUrl; ?>/scripts/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?= Yii::$app->request->baseUrl; ?>/scripts/tooltips.min.js"></script>
<script type="text/javascript" src="<?= Yii::$app->request->baseUrl; ?>/scripts/custom.js"></script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
