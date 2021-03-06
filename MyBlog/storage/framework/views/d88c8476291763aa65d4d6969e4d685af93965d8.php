<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title><?php echo $__env->yieldContent('title','首页'); ?></title>
    <link type="text/css" rel="stylesheet" href="<?php echo e(url('css/app.css')); ?>">
    <script src="<?php echo e(asset('js/jquery-3.3.1.min.js')); ?>"></script>
    <script src="<?php echo e(url('js/app.js')); ?>"></script>
</head>
<body id="page-index">
<?php echo $__env->make('Index.layouts._header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->yieldContent('content'); ?>
<?php echo $__env->make('Index.layouts._top', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('Index.layouts._search', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('Index.layouts._footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>
</html>