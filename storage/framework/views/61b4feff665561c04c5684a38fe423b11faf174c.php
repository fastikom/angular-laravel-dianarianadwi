<html lang="en">
<head>
	<title>Laravel 5.2</title>
	<?php /* Bootstrap */ ?>	
	<link rel="stylesheet" href="<?php echo e(URL::asset('/css/bootstrap.min.css')); ?>">	
</head>
<body ng-app="ArsipTI-App">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="www.arsipti.com" class="navbar-brand" >L 5.2 Arsipti.com</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="/">Beranda</a></li>
					<li><a href="#/taglist">Tag List</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		<ng-view></ng-view> <?php /*menampilkan laman dinamis*/ ?>
	</div>
	<script src="<?php echo e(URL::asset('/js/jquery.min.js')); ?>"></script>
	<script src="<?php echo e(URL::asset('/js/bootstrap.min.js')); ?>"></script>
	<?php /* Angular JS */ ?>
	<script src="<?php echo e(URL::asset('/js/angular.min.js')); ?>"></script>  
	<script src="<?php echo e(URL::asset('/js/angular-route.min.js')); ?>"></script>
	<?php /* App */ ?>
	<script src="<?php echo e(URL::asset('/app/routes.js')); ?>"></script>	
	<script src="<?php echo e(URL::asset('/app/packages/dirPagination.js')); ?>"></script>
	<script src="<?php echo e(URL::asset('/app/services/myServices.js')); ?>"></script>
	<script src="<?php echo e(URL::asset('/app/helper/myHelper.js')); ?>"></script>
	<?php /* App Controller */ ?>
	<script src="<?php echo e(URL::asset('/app/controllers/TagController.js')); ?>"></script>
</body>
</html>