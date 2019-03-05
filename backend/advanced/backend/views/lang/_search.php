<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\LangSearch */
/* @var $form yii\widgets\ActiveForm */
?>


<div class="dashboard">
	
        <!-- Responsive Navigation Trigger -->
	<a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Language Navigation</a>
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
    if($menuname == 'User Management')
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
    if($menuname == 'Ticket Management')
    {
        echo " $menuname<br /><br />";
    }
}
?>
                    <li><a href="<?= Yii::$app->request->baseUrl; ?>/movies/"><i class="sl sl-icon-film"></i> <?php

$rows = (new \yii\db\Query())
    ->select(['menuname'])
    ->from('menus')
        
    ->all();
foreach ($rows as $row) {
    $menuname = $row['menuname'];
    if($menuname == 'Movies Management')
    {
        echo " $menuname<br /><br />";
    }
}
?></a></li>     
                    <li><a href="<?= Yii::$app->request->baseUrl; ?>/artist/"><i class="sl sl-icon-user-follow"></i>
 <?php
 
$rows = (new \yii\db\Query())
    ->select(['menuname'])
    ->from('menus')
        
    ->all();
foreach ($rows as $row) {
    $menuname = $row['menuname'];
    if($menuname == 'Artist Management')
    {
        echo " $menuname<br /><br />";
    }
}
?></a></li>             
                    <li><a href="<?= Yii::$app->request->baseUrl; ?>/category/"><i class="sl sl-icon-doc"></i>
 <?php
 
$rows = (new \yii\db\Query())
    ->select(['menuname'])
    ->from('menus')
        
    ->all();
foreach ($rows as $row) {
    $menuname = $row['menuname'];
    if($menuname == 'Category Management')
    {
        echo " $menuname<br /><br />";
    }
}
?></a></li>                  
                    
                     <li class="active"><a href="<?= Yii::$app->request->baseUrl; ?>/lang/"><i class="sl sl-icon-note"></i> <?php

$rows = (new \yii\db\Query())
    ->select(['menuname'])
    ->from('menus')
        
    ->all();
foreach ($rows as $row) {
    $menuname = $row['menuname'];
    if($menuname == 'Languages')
    {
        echo " $menuname<br /><br />";
    }
}
?></a></li>
                   
                     
                     
               <li><a href="<?= Yii::$app->request->baseUrl; ?>/venues/"><i class="sl sl-icon-location"></i> <?php

$rows = (new \yii\db\Query())
    ->select(['menuname'])
    ->from('menus')
        
    ->all();
foreach ($rows as $row) {
    $menuname = $row['menuname'];
    if($menuname == 'Venues Management')
    {
        echo " $menuname<br /><br />";
    }
}
?></a></li>         
                    
                    
		</ul>
			
		
                <ul data-submenu-title="Account">
                    <li><a href=""><i class="sl sl-icon-user"></i> My Profile</a></li>
                   
                </ul>
			
            </div>
	</div>
 <div class="dashboard-content">


<div class="lang-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'artist_id') ?>

    <?= $form->field($model, 'movie_id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'is_active') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'button border margin-top-10']) ?>
        <?= Html::resetButton('Reset', ['class' => 'button border margin-top-10']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
 </div>
</div>
