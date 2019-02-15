<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Artist */

$this->title = $model->name;
\yii\web\YiiAsset::register($this);
?>

 <div id="dashboard">
               <!-- Navigation
	================================================== -->
        <!-- Responsive Navigation Trigger -->
	<a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Artist Navigation</a>
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
                        <li><a href="<?= Yii::$app->request->baseUrl; ?>/users/"><i class="sl sl-icon-user"></i> <?php

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
                        <li><a href="<?= Yii::$app->request->baseUrl; ?>/ticketmanagment/"><i class="fa fa-calendar-check-o"></i> <?php

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
?></a></li>
                        
                        
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
	
                    <li class="active"><a href="<?= Yii::$app->request->baseUrl; ?>/artist/"><i class="sl sl-icon-user-follow"></i>
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
                    
                     <li><a href="<?= Yii::$app->request->baseUrl; ?>/language/"><i class="sl sl-icon-note"></i> <?php

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
	<!-- Navigation / End -->
   <div class="dashboard-content">


<div class="user-view">
<div id="titlebar">
                       <div class="row">
			<div class="col-md-12">
                            <h1>Views</h1>
				<!-- Breadcr    umbs -->
				<nav id="breadcrumbs">
                                    <ul>
					<li><a href="#">Artist Management</a></li>
                                            <li>View</li>
                                    </ul>
				</nav>
			</div>
                       </div>
		</div>
           <div class="row">
			
			<!-- Listings -->
			<div class="col-lg-12 col-md-12">
				<div class="dashboard-list-box margin-top-0">
				
					<ul>

                                            <li>

<div class="artist-view">



    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'button border margin-top-10']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'button border margin-top-10',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>   
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'category_id',
            'language_id',
            'location_id',
            'movie_id',
            'name',
            'pic',
            'is_active',
            'create_at',
            'update_at',
        ],
    ]) ?>

</div>
                                            </li>
                                        </ul>
                                    </div>
                        </div>
           </div>
</div>
   </div>
 </div>