<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\LangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Langs';

?>


<div id="dashboard">
     
               <!-- Navigation
	================================================== -->
        <!-- Responsive Navigation Trigger -->
	<a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Language Navigation</a>
        <div class="dashboard-nav">
            <div class="dashboard-nav-inner">
                <ul data-submenu-title="Main">
                    <li><a href="<?= Yii::$app->request->baseUrl; ?>/site/"><i class="sl sl-icon-settings"></i>  
                    
<?php

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
?>
 </a></li>
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
                        <li><a href="<?= Yii::$app->request->baseUrl; ?>/ticketmanagment/"><i class="fa fa-calendar-check-o"></i>                       
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
	<!-- Navigation / End -->
        
   <div class="dashboard-content">
       <div id="titlebar">
                 <div class="row">      
			<div class="col-md-12">
                            <h1>Language Management</h1>
				<!-- Breadcrumbs -->
				<nav id="breadcrumbs">
                                    <ul>
					<li><a href="#">Language Management</a></li>
                                            <li>Language</li>
                                            
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


<div class="lang-index">

    
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Add Language', ['create'], ['class' => 'button border margin-top-10']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
          

            'id',
            'artist_id',
            'movie_id',
            'name',
            'created_at',
            //'updated_at',
            //'is_active',

            ['class' => 'yii\grid\ActionColumn','header' => "Action"],
        ],
    ]); ?>
</div>

                                                </div>
                            </div>
                        </div>
       </div>
        </div>