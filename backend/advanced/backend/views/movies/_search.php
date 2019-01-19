<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\MoviesSearch */
/* @var $form yii\widgets\ActiveForm */
?><div class="dashboard">
	
        <!-- Responsive Navigation Trigger -->
	<a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Movies Navigation</a>
        <div class="dashboard-nav">
            <div class="dashboard-nav-inner">
                <ul data-submenu-title="Main">
                    <li><a href="<?= Yii::$app->request->baseUrl; ?>/site/"><i class="sl sl-icon-settings"></i> <?php

$rows = (new \yii\db\Query())
    ->select(['menuname'])
    ->from('menus')
        
    ->all();
foreach ($rows as $row) {
    $menuname = $row['menuname'];
    if($menuname == 'Dashboard')
    {
        echo " $menuname<br /><br />";
    }
}
?></a></li>
                        <li><a href="<?= Yii::$app->request->baseUrl; ?>/users/"><i class="sl sl-icon-user"></i><?php

$rows = (new \yii\db\Query())
    ->select(['menuname'])
    ->from('menus')
        
    ->all();
foreach ($rows as $row) {
    $menuname = $row['menuname'];
    if($menuname == 'User Managment')
    {
        echo " $menuname<br /><br />";
    }
}
?>
 </a></li>
                        <li><a href="<?= Yii::$app->request->baseUrl; ?>/ticketManagement/"><i class="fa fa-calendar-check-o"></i> Ticket-Bookings</a></li>
<?php

$rows = (new \yii\db\Query())
    ->select(['menuname'])
    ->from('menus')
        
    ->all();
foreach ($rows as $row) {
    $menuname = $row['menuname'];
    if($menuname == 'Ticket Managment')
    {
        echo " $menuname<br /><br />";
    }
}
?>
                    <li class="active"><a href="<?= Yii::$app->request->baseUrl; ?>/movies/"><i class="sl sl-icon-doc"></i> <?php

$rows = (new \yii\db\Query())
    ->select(['menuname'])
    ->from('menus')
        
    ->all();
foreach ($rows as $row) {
    $menuname = $row['menuname'];
    if($menuname == 'Movies Managment')
    {
        echo " $menuname<br /><br />";
    }
}
?></a></li>             
		</ul>
			
		<ul data-submenu-title="Listings">
                    <li><a><i class="sl sl-icon-layers"></i> Events Managment</a>
			<ul>
                            <li><a href="">Artist<span class="nav-tag green">6</span></a></li>
                            <li><a href="">Movies<span class="nav-tag yellow">1</span></a></li>
                            <li><a href="">Events<span class="nav-tag red">2</span></a></li>
			</ul>	
                    </li>
                    <li><a href=""><i class="sl sl-icon-star"></i> Review</a></li>
                    <li><a href=""><i class="sl sl-icon-heart"></i> Bookmarks</a></li>
                    <li><a href=""><i class="sl sl-icon-plus"></i> Add Listing</a></li>
                </ul>	
                <ul data-submenu-title="Account">
                    <li><a href=""><i class="sl sl-icon-user"></i> My Profile</a></li>
                   
                </ul>
			
            </div>
	</div>
 <div class="dashboard-content">



<div class="movies-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'ticket_id') ?>

    <?= $form->field($model, 'artist_id') ?>

    <?= $form->field($model, 'category_id') ?>

    <?= $form->field($model, 'language_id') ?>

    <?php // echo $form->field($model, 'location_id') ?>

    <?php // echo $form->field($model, 'mv_pic') ?>

    <?php // echo $form->field($model, 'mv_category') ?>

    <?php // echo $form->field($model, 'mv_name') ?>

    <?php // echo $form->field($model, 'mv_art_name') ?>

    <?php // echo $form->field($model, 'mv_ticket') ?>

    <?php // echo $form->field($model, 'mv_language') ?>

    <?php // echo $form->field($model, 'mv_location') ?>

    <?php // echo $form->field($model, 'is_active') ?>

    <?php // echo $form->field($model, 'create_at') ?>

    <?php // echo $form->field($model, 'update_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'button border margin-top-10']) ?>
        <?= Html::resetButton('Reset', ['class' => 'button border margin-top-10']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

</div>
 </div>

