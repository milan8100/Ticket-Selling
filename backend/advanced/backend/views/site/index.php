<?php use common\models\Menus; 
      use common\models\Ticket;
      use common\models\TicketManagment;
      use common\models\Movies;
      use yii\data\ActiveDataProvider;
      use yii\db\Query;
      
 $this->title = 'Dashboard';     
?>
<!-- Header Container
================================================== -->


    <!-- Dashboard -->
    <div id="dashboard">
            
        <!-- Navigation
	================================================== -->
        <!-- Responsive Navigation Trigger -->
	<a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Dashboard Navigation</a>
        <div class="dashboard-nav">
            <div class="dashboard-nav-inner">
                <ul data-submenu-title="Main">
                    <li class="active"><a href=""><i class="sl sl-icon-settings"></i> <?php

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
                        <li><a href="<?= Yii::$app->request->baseUrl; ?>/users/"><i class="sl sl-icon-user"></i> 
<?php

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
?>
  </a></li>
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
                 
                     <li><a href="<?= Yii::$app->request->baseUrl; ?>/lang/"><i class="sl sl-icon-note"></i> <?php

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
        <!-- Content
	================================================== -->
	<div class="dashboard-content">
            <!-- Titlebar -->
		<div id="titlebar">
                    <div class="row">   
			<div class="col-md-12">
                            <h2>Hellow, <?= Yii::$app->user->identity->first_name ?> </h2>
				<!-- Breadcrumbs -->
				<nav id="breadcrumbs">
                                    <ul>
					<li><a href="#">Home</a></li>
                                            <li>Dashboard</li>
                                    </ul>
				</nav>
			</div>
                    </div>
		</div>

		<!-- Notice -->
		

		<!-- Content -->
		<div class="row">
                    <!-- Item -->
                    <div class="col-lg-3 col-md-6">
                        <div class="dashboard-stat color-1">
                                    <div class="dashboard-stat-content"><h4>
                                                              
    <?php  
                      
$count = (new \yii\db\Query())
->select('count(*)')
->from('user')
->scalar();
echo $count;
                  ?>
    
                                               
                                </h4> <span>Total Users</span></div>
                                   <div class="dashboard-stat-icon"><i class="im im-icon-Add-UserStar"></i></div>
                        </div>
                    </div>
                    <!-- Item -->
                    <div class="col-lg-3 col-md-6">
                        <div class="dashboard-stat color-2">
                                    <div class="dashboard-stat-content"><h4>
      
                     <?php
$count = (new \yii\db\Query())
->select('count(*)')
->from('venues')
->scalar();
echo $count;
                  ?>
    
    
                                            
                                </h4> <span>Total Venues</span></div>
                                <div class="dashboard-stat-icon"><i class="im im-icon-Location-2    "></i></div>
                        </div>
                    </div>
                    <!-- Item -->
			<div class="col-lg-3 col-md-6">
				<div class="dashboard-stat color-3">
                                            <div class="dashboard-stat-content"><h4>
      
                      <?php
$count = (new \yii\db\Query())
->select('count(*)')
->from('artist')
->scalar();
echo $count;
                  ?>
    
                                                    
                                        </h4> <span>Total Artist</span></div>
					<div class="dashboard-stat-icon"><i class="im im-icon-User"></i></div>
				</div>
			</div>

			<!-- Item -->
			<div class="col-lg-3 col-md-6">
				<div class="dashboard-stat color-4">
                                    <div class="dashboard-stat-content"><h4>
      
                      <?php
$count = (new \yii\db\Query())
->select('count(*)')
->from('movies')
->scalar();
echo $count;
                  ?>
    
            
                                            
                                        </h4> <span> Total Movies</span></div>
					<div class="dashboard-stat-icon"><i class="im im-icon-Movie"></i></div>
				</div>
			</div>
		</div>

		<div class="row">
			
			<!-- Recent Activity -->
			<div class="col-lg-6 col-md-12">
				<div class="dashboard-list-box with-icons margin-top-20">
					<h4>Important Shortcuts</h4>
					<ul>
                                                    <li>
                                                            <a href="<?= Yii::$app->request->baseUrl; ?>/users/create/" ><i class="list-box-icon sl sl-icon-user"></i> Add New User 
                                                            </a>
                                                    </li>

                                                    <li>
							<a href="<?= Yii::$app->request->baseUrl; ?>/movies/create/" ><i class="list-box-icon sl sl-icon-film"></i> Add New Movies
                                                        </a>
                                                </li>
                                                <li>
							<a href="<?= Yii::$app->request->baseUrl; ?>/ticketmanagment/create/" ><i class="list-box-icon fa fa-calendar-check-o"></i> Add New Tickets
                                                        </a>
                                                </li>
                                                <li>
							<a href="<?= Yii::$app->request->baseUrl; ?>/venues/create/" ><i class="list-box-icon sl sl-icon-location"></i> Add New Venues
                                                        </a>
                                                </li>
        
					</ul>
				</div>
			</div>
			
			<!-- Invoices -->
			
<div class="col-lg-3 col-md-6">
                        <div class="dashboard-stat color-2">
                                    <div class="dashboard-stat-content"><h4>
                                                              
    <?php  
                      
$count = (new \yii\db\Query())
->select('count(*)')
->from('lang')
->scalar();
echo $count;
                  ?>
    
                                               
                                </h4> <span>Total Languages</span></div>
                                   <div class="dashboard-stat-icon"><i class="sl sl-icon-note"></i></div>
                        </div>
                    </div>
                        			
<div class="col-lg-3 col-md-6">
                        <div class="dashboard-stat color-3">
                                    <div class="dashboard-stat-content"><h4>
                                                              
    <?php  
                      
$count = (new \yii\db\Query())
->select('count(*)')
->from('category')
->scalar();
echo $count;
                  ?>
    
                                               
                                </h4> <span>Total Movies Categories</span></div>
                                   <div class="dashboard-stat-icon"><i class="im im-icon-Film-Strip"></i></div>
                        </div>
                    </div>
    
                        

			<!-- Copyrights -->
			<div class="col-md-12">
				<div class="copyrights">© 2019 Ticket Selling Market Place. All Rights Reserved.</div>
			</div>
                    </div>

            </div>
            <!-- Content / End -->
        </div>
    <!-- Dashboard / End -->
<!--<script type="text/javascript" src="scripts/jquery-2.2.0.min.js"></script>
<script type="text/javascript" src="scripts/mmenu.min.js"></script>
<script type="text/javascript" src="scripts/chosen.min.js"></script>
<script type="text/javascript" src="scripts/slick.min.js"></script>
<script type="text/javascript" src="scripts/rangeslider.min.js"></script>
<script type="text/javascript" src="scripts/magnific-popup.min.js"></script>
<script type="text/javascript" src="scripts/waypoints.min.js"></script>
<script type="text/javascript" src="scripts/counterup.min.js"></script>
<script type="text/javascript" src="scripts/jquery-ui.min.js"></script>
<script type="text/javascript" src="scripts/tooltips.min.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>-->

    