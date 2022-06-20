

<?php $__env->startSection('content'); ?>

    <div style="position:relative" class="container-fluid bg-light">
        
        <h4>Canadian Wealth App </h4>
        
        <img src="<?php echo e(asset('admin/images/home.jpg')); ?>">

        <div style="position:absolute; bottom:0"><a href="<?php echo e(url('/admin/login')); ?>"><b><i><small class="text-danger">Admin Login</small></i></b></a></div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.frontlayout.front_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\canadian_wealth_app\resources\views/front/index.blade.php ENDPATH**/ ?>