<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title'); ?> | <?php echo e(config('app.name')); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('css/fontawesome-free-all.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/ionicons.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/icheck-bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/adminlte.min.css')); ?>">
    <?php echo $__env->yieldContent('custom-css'); ?>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo e(asset('img/favicon.ico') . '?v=' . config('app.versionnumber')); ?>" type="image/x-icon" />
</head>
<body class="hold-transition login-page text-sm" style="background-color: #f9f9f9; background: url(<?php echo e(asset('img/guest-window-bg.jpg') . '?v=' . config('app.versionnumber')); ?>);">
    <div class="login-box bg-primary" style="background-color: #ffffff; border: 1px solid #f0f0f0; box-shadow: 0px 0px 18px rgba(0, 0, 0, 0.09);">
        <div class="login-logo" style="margin: 12px auto; padding: 12px;">
            
        </div>
        <div class="card" style="border: 1px solid #f0f0f0; border-top: 1px solid #c5c5c5;">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>
    <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/adminlte.min.js')); ?>"></script>
    <?php echo $__env->yieldContent('custom-js'); ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\work\pdf viewer\resources\views/layouts/login_register_app.blade.php ENDPATH**/ ?>