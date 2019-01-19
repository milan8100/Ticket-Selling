<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TicketManagment */

$this->params['breadcrumbs'][] = ['label' => 'Ticket Managments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dashboard">
	
        <!-- Responsive Navigation Trigger -->
	<a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Dashboard Navigation</a>
        <div class="dashboard-nav">
            <div class="dashboard-nav-inner">
                <ul data-submenu-title="Main">
                    <li><a href="<?= Yii::$app->request->baseUrl; ?>/site/"><i class="sl sl-icon-settings"></i> Dashboard</a></li>
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
                        <li class="active"><a href="<?= Yii::$app->request->baseUrl; ?>/ticketmanagment/"><i class="fa fa-calendar-check-o"></i><?php

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
?> </a></li>
                           <li><a href="<?= Yii::$app->request->baseUrl; ?>/movies/"><i class="sl sl-icon-doc"></i> <?php

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
      

    <div class="user-create">
        <div id="titlebar">
                    <div class="row">
			<div class="col-md-12">
                            <h1>Add Tickets</h1>
				<!-- Breadcr    umbs -->
				<nav id="breadcrumbs">
                                    <ul>
					<li><a href="#">Ticket Managment</a></li>
                                            <li>Add Tickets</li>
                                    </ul>
				</nav>
			</div>
                    </div>
        </div>


<div class="ticket-managment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div>

												
					
				



						</li>

					</ul>
				</div>
			</div>
