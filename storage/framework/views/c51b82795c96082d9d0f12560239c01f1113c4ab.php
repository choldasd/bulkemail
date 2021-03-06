<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('public/js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('public/css/app.css')); ?>" rel="stylesheet">
	
	<link rel="stylesheet" href="<?php echo e(url('public/assets/font-awesome/css/font-awesome.min.css')); ?>">
	
	<link rel="stylesheet" href="<?php echo e(url('public/assets/sweet/sweetalert.min.css')); ?>">
	
	<style>
		.cust_error{ color:red;}
		.preview{ height: 70px; width: 70px;}
	</style>
	
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    <?php echo e(config('app.name', 'Laravel')); ?>

                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>">Login</a>
                            </li>
							<?php /*
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                                </li>
                            @endif
							*/ ?>
                        <?php else: ?>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo e(route('home')); ?>">Dashboard
                                </a>
							</li>						
							<li class="nav-item">
								<a class="nav-link" href="<?php echo e(route('sendemail')); ?>">Bulk Email
                                </a>
							</li>	
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
									
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
		
		<script src="<?php echo e(url('public/assets/jquery/jquery-3.3.1.min.js')); ?>"  crossorigin="anonymous"></script>
		
		<script src="<?php echo e(url('public/assets/sweet/sweetalert.min.js')); ?>"></script>
		
		<script>
			var BASE_URL = "<?php echo BASE_URL; ?>";
			var ADMIN_URL = "<?php echo ADMIN_URL; ?>";
		</script>
						
		<?php echo $__env->yieldPushContent('scripts'); ?>
		
    </div>
</body>
</html>
<?php /**PATH D:\xampp\htdocs\bulkemail\resources\views/layouts/app.blade.php ENDPATH**/ ?>