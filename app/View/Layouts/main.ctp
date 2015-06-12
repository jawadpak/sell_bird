<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $this->Html->charset(); ?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Sell Bird's</title>

	<?php
	echo $this->Html->css('/js/bootstrap/dist/css/bootstrap.min');
	echo $this->Html->css('/js/metisMenu/dist/metisMenu.min');
	echo $this->Html->css('timeline');
	echo $this->Html->css('sb-admin-2');
	echo $this->Html->css('/js/font-awesome/css/font-awesome.min');
	echo $this->Html->css('/js/morrisjs/morris.css');
		//echo $this->Html->meta('icon');
	echo $this->Html->script('jquery/dist/jquery.min.js');
	echo $this->Html->script('bootstrap/dist/js/bootstrap.min.js');
		//echo $this->Html->script('metisMenu/dist/metisMenu.min.js');
		//echo $this->Html->script('raphael/raphael-min.js');
		//echo $this->Html->script('morrisjs/morris.min.js');
	echo $this->Html->script('angular/angular.js');
	echo $this->Html->script('angular/angular-resource.js');
	echo $this->Html->script('angular/angular-route.js');
	echo $this->Html->script('angular/angular-animate.js');
	echo $this->Html->script('angular/angular-sanitize.js');

	echo $this->Html->script('angular/angular-cookies.js');
	
		//echo $this->Html->script('angular/angular-translate.js');
		//echo $this->Html->script('angular/angular-translate-loader-url.js');		        

	
		//echo $this->Html->script('select2/select2.js');
		//echo $this->Html->script('select2/ui_select2.js');
		//echo $this->Html->script('angular/angular/angular-ui-bootstrap.js');
		//echo $this->Html->script('angular/taggedInfiniteScroll.min.js');
		//echo $this->Html->script('angular/bsDropdown.min.js');

	echo $this->Html->script('angular/ocLazyLoad.min.js');
	echo $this->Html->script('angular/angular-ui-router.min.js');
	echo $this->Html->script('angular/statehelper.min.js');
		//echo $this->Html->script('angular/ng-infinite-scroll.js');

	echo $this->Html->script('underscore/underscore.js');
		//echo $this->Html->script('ladda-spin/spin.min.js');
	
	echo $this->Html->script('ladda-spin/spin.min.js');
	echo $this->Html->script('angularspinner/angularspinner.min.js');
	//echo $this->Html->script('angular/angular-loading.min.js');

	echo $this->Html->script('app/app.js');
	echo $this->Html->script('app/router.js');
	echo $this->Html->script('app/app.constant');
	echo $this->Html->script('app/app.factory');
		/*echo $this->Html->script('app/app.run.js');
		echo $this->Html->script('app/app.directive.js');
		echo $this->Html->script('app/app.filter.js');
		echo $this->Html->script('app/app.factory.js');
		echo $this->Html->script('app/app.constant.js');
		echo $this->Html->script('app/app.tilesDirective.js');
		echo $this->Html->script('app/app.lfs_object.js');
		echo $this->Html->script('app/app.directive.js');*/


		


		

		

		?>
	</head>
	<body ng-app="sellBird">
    
<div class="container">
<div class="row">
<div class="col-lg-12">
    <div class="navbar-header">
      <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="../" class="navbar-brand">Sell</a>
    </div>
    <nav class="collapse navbar-collapse bs-navbar-collapse">
      <ul class="nav navbar-nav">
      
					<li>
						 <a href="#javascript:;">HOME</a>
					</li>
                    <li>
						 <a href="#javascript:;">SALE</a>
					</li>
                    <li>
						<a href="#signup">SIGN UP</a>
					</li>
                    <li>
						 <a href="#javascript:;">EVENTS</a>
					</li>
                    <li>
						 <a href="#javascript:;">LINKS</a>
					</li>
                    
					<!--<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">
							<i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
						</a>
						<ul class="dropdown-menu dropdown-user">
							<li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
							</li>
							<li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
							</li>
							<li class="divider"></li>
							<li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
							</li>
						</ul>
						
					</li>-->
					<!-- /.dropdown -->
				
      </ul>
      
    </nav>
    </div>
</div>
</div>
	<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<?php echo $this->fetch('content'); ?>
					</div>
				</div>
			</div>
</div>
    	<!--
    	<div class="row">
    		<?php //echo $this->element('sql_dump'); ?>
    	</div>
    -->

</body>
</html>
