<header class="navbar fixed-top navbar-inverse">
    <div class="col-md-12">
            <a href="<?php echo e(route('home')); ?>" id="logo"><?php echo e($webSet->title); ?></a>
            <nav class="navbar navbar-expand-sm float-right">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="<?php echo e(route('home')); ?>" class="nav-link text-white">首页</a></li>
                    <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="nav-item">
                            <a href="<?php echo e(route('Tag.show',$tag->tag_name)); ?>" class="nav-link text-white"><?php echo e($tag->tag_name); ?></a>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </nav>
            <div class="search">
                <img src="<?php echo e(asset('images/header/search.png')); ?>" width="24px">
            </div>
        </div>
</header>