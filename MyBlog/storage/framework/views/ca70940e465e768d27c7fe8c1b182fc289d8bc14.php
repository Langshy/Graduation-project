<?php $__env->startSection('title','主页'); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-md-12 home">
        
        <div class="bg-image">
            <img src="<?php echo e(asset('images/bg/922bc262a48857ac982c0b067cc94b57.jpg')); ?>" width="100%">


            <div class="wrap-hello">
                <div class="warp-image">
                    <a href="#">
                        <img src="<?php echo e(asset('images/bg/26144a7639f5500f7b642e90943fe349 (1).jpeg')); ?>">
                    </a>
                </div>
                <div class="warp-type">
                    <p>每天写作一点点！</p>
                </div>
            </div>
        </div>


        <div class="row">
            
            <div class="hot col-md-10 offset-md-1">
                <div class="hot_type">
                   <div class="top_image_1"></div>
                </div>
            </div>

            推荐文章
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Index.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>