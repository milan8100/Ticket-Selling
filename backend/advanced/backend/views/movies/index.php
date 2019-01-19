<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\MoviesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

?>

 <div id="dashboard">
     
               <!-- Navigation
	================================================== -->
        <!-- Responsive Navigation Trigger -->
	<a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Movies Navigation</a>
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
    if($menuname == 'User Managment')
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
    if($menuname == 'Ticket Managment')
    {
        echo " $menuname<br /><br />";
    }
}
?></a></li>
     

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
	<!-- Navigation / End -->
        
   <div class="dashboard-content">
       <div id="titlebar">
                 <div class="row">      
			<div class="col-md-12">
                            <h1>Movies Managment</h1>
				<!-- Breadcr    umbs -->
				<nav id="breadcrumbs">
                                    <ul>
					<li><a href="#">Movies Managment</a></li>
                                            <li>Movies</li>
                                            
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

<div class="movies-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Add Movies', ['create'], ['class' => 'button border margin-top-10']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel, 
        'columns' => [
         
            //'id',
            //'ticket_id',
            //'artist_id',
            //'category_id',
            //'language_id',
            //'location_id',
            'mv_pic',
            'mv_category',
            'mv_name',
            'mv_art_name',
            'mv_ticket',
            'mv_language',
            //'mv_location',
            //'is_active',
            //'create_at',
            //'update_at',

            ['class' => 'yii\grid\ActionColumn', 'header'=> 'Actions'],
        ],
    ]); ?>
</div>
                                                </div>
                        </div>
       </div>
   </div>
 </div>
