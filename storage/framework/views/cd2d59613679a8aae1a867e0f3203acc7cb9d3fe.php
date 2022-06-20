<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Canadian Wealth Test</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo e(url('admin/vendors/feather/feather.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(url('admin/vendors/ti-icons/css/themify-icons.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(url('admin/vendors/css/vendor.bundle.base.css')); ?>">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo e(url('admin/css/vertical-layout-light/style.css')); ?>">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo e(url('admin/images/favicon.png')); ?>" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo" style="text-align:center">
                <img src="<?php echo e(url('admin/images/logo.svg')); ?>" alt="logo">
              </div>
              <h4 style="text-align:center">Canadian Wealth Test</h4><br>
              <h6 class="font-weight-light">Sign in to continue. <span style="color:red">(ADMINS Only!)</span></h6>
              <?php if(Session::has('error_message')): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>Error: </strong> <?php echo e(Session::get('error_message')); ?>

                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              <?php endif; ?>

              <?php if($errors->any()): ?>
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
              <?php endif; ?>

              <form class="forms-sample" action="<?php echo e(url('admin/register')); ?>" method="post" name="registerAdminForm" id="registerAdminForm" enctype="multipart/form-data"><?php echo csrf_field(); ?>
                    <div class="form-group">
                      <label>Admin Email</label>
                      <input class="form-control" name="email" id="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                      <label>Admin Type</label>
                      <select class="form-control" name="type" id="type" required>
                        <option value="">Choose type</option>
                        <option value="admin">Admin</option>
                        <option value="paid_user">Paid</option>
                        <option value="free_user">Free</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="admin_name">Name</label>
                      <input type="text" class="form-control" id="admin_name" name="admin_name" placeholder="Enter Name" required>
                    </div>
                    <div class="form-group">
                      <label for="admin_mobile">Mobile</label>
                      <input type="text" class="form-control" id="admin_mobile" name="admin_mobile" placeholder="Enter Mobile" required maxlength="11" minlength="11">
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required><i class="fa fa-lock"></i>
                    </div>
                    <div class="form-group">
                      <label for="admin_image">Image</label>
                      <input type="file" class="form-control" id="admin_image" name="admin_image">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </form>

            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?php echo e(url('admin/vendors/js/vendor.bundle.base.js')); ?>"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?php echo e(url('admin/js/off-canvas.js')); ?>"></script>
  <script src="<?php echo e(url('admin/js/hoverable-collapse.js')); ?>"></script>
  <script src="<?php echo e(url('admin/js/template.js')); ?>"></script>
  <script src="<?php echo e(url('admin/js/settings.js')); ?>"></script>
  <script src="<?php echo e(url('admin/js/todolist.js')); ?>"></script>
  <!-- endinject -->
</body>

</html>
<?php /**PATH C:\xampp\htdocs\canadian_wealth_app\resources\views/admin/register.blade.php ENDPATH**/ ?>