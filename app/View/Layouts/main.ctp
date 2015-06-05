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
		echo $this->Html->script('metisMenu/dist/metisMenu.min.js');
		echo $this->Html->script('raphael/raphael-min.js');
		echo $this->Html->script('morrisjs/morris.min.js');
?>
</head>
<body>
	<body>

    <div id="wrapper">
    	<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SB Admin v2.0</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
            	<li>
            		<span>Login </span> | <span>Sign Up</span>
            	</li>
				<li class="dropdown">
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
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
			<div class="row">
				<?php echo $this->fetch('content'); ?>	
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
