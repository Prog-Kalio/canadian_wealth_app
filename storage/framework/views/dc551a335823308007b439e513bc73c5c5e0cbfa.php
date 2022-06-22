<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
        <title>Canadian Wealth Test</title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="<?php echo e(url('admin/vendors/feather/feather.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(url('admin/vendors/ti-icons/css/themify-icons.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(url('admin/vendors/css/vendor.bundle.base.css')); ?>">
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <link rel="stylesheet" href="<?php echo e(url('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(url('admin/vendors/ti-icons/css/themify-icons.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(url('admin/js/select.dataTables.min.css')); ?>">
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="<?php echo e(url('admin/css/vertical-layout-light/style.css')); ?>">
        <!-- endinject -->
        <link rel="stylesheet" href="<?php echo e(url('admin/vendors/mdi/css/materialdesignicons.min.css')); ?>">
        <link rel="shortcut icon" href="<?php echo e(url('admin/images/favicon.png')); ?>" />
        <!-- Data Table CSS -->
        <link rel="stylesheet" href="<?php echo e(url('admin/css/bootstrap.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(url('admin/css/dataTables.bootstrap4.min.css')); ?>">
        <!-- CSS only -->
        <link href="<?php echo e(url('https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css')); ?>" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

        <link rel="stylesheet" href="<?php echo e(url('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css')); ?>">
        <!-- End Data Table CSS -->
    </head>
    <body>
        <div class="container-scroller">
            <!-- partial:partials/_navbar.html -->
            <?php echo $__env->make('front.frontlayout.fronthead', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         
                <?php echo $__env->yieldContent('content'); ?>
                <!-- main-panel ends -->
           
            <!-- page-body-wrapper ends -->
            <?php echo $__env->make('front.frontlayout.front_footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        <!-- JavaScript Bundle with Popper -->
        <script src="<?php echo e(url('https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js')); ?>" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script src="<?php echo e(url('admin/vendors/js/vendor.bundle.base.js')); ?>"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="<?php echo e(url('admin/vendors/chart.js/Chart.min.js')); ?>"></script>
        <script src="<?php echo e(url('admin/vendors/datatables.net/jquery.dataTables.js')); ?>"></script>
        <script src="<?php echo e(url('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js')); ?>"></script>
        <script src="<?php echo e(url('admin/js/dataTables.select.min.js')); ?>"></script>
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="<?php echo e(url('admin/js/off-canvas.js')); ?>"></script>
        <script src="<?php echo e(url('admin/js/hoverable-collapse.js')); ?>"></script>
        <script src="<?php echo e(url('admin/js/template.js')); ?>"></script>
        <script src="<?php echo e(url('admin/js/settings.js')); ?>"></script>
        <script src="<?php echo e(url('admin/js/todolist.js')); ?>"></script>
        <!-- endinject -->
        <!-- Custom js for this page-->
        <script src="<?php echo e(url('admin/js/dashboard.js')); ?>"></script>
        <script src="<?php echo e(url('admin/js/Chart.roundedBarCharts.js')); ?>"></script>
        <!-- End custom js for this page-->
        <!-- Custom Admin js for Admin-->
        <script src="<?php echo e(url('admin/js/custom.js')); ?>"></script>
        <!-- End custom Admin js for Admin-->
        <!-- Data Table js -->
        <script src="<?php echo e(url('admin/js/jquery-3.5.1.js')); ?>"></script>
        <script src="<?php echo e(url('admin/js/jquery.dataTables.min.js')); ?>"></script>
        <script src="<?php echo e(url('admin/js/dataTables.bootstrap4.min.js')); ?>"></script>
        <!-- End Data Table js -->
        <!-- script for sweetalert2-->
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!-- End script for sweetalert2 -->
        
    </body>
</html><?php /**PATH C:\xampp\htdocs\canadian_wealth_app\resources\views/front/frontlayout/front_layout.blade.php ENDPATH**/ ?>