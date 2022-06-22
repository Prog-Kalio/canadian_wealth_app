

<?php $__env->startSection('content'); ?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Payment</h4>

                        <?php if(Session::has('success_message')): ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Success: </strong> <?php echo e(Session::get('success_message')); ?>

                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        <?php endif; ?>
                        <div class="table-responsive pt-3">
                            <table id="payments" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>
                                            ID
                                        </th>
                                        <th>
                                            Email
                                        </th>
                                        <th>
                                            Amount
                                        </th>
                                        <th>
                                            Reference
                                        </th>
                                        <th>
                                            Name
                                        </th>
                                        <th>
                                            Status
                                        </th>
                                        <th>
                                            Actions
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php $__currentLoopData = $payments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>
                                            <?php echo e($payment['id']); ?>

                                        </td>
                                        <td>
                                            <?php echo e($payment['email']); ?>

                                        </td>
                                        <td>
                                            <?php echo e($payment['amount']); ?>

                                        </td>
                                        <td>
                                            <?php echo e($payment['reference']); ?>

                                        </td>
                                        <td>
                                            <?php echo e($payment['name']); ?>

                                        </td>
                                        <td>
                                            <?php echo e($payment['status']); ?>

                                        </td>
                                        <td>
                                              <a href="<?php echo e(url('admin/paystack/add-edit-payment/'.$payment['id'])); ?>"><i style="font-size:25px; color: #215123;" class="mdi mdi-pencil-box"></i></a>
                                            
                                              <a href="javascript:void(0)" class="confirmDelete" module="payment" moduleid="<?php echo e($payment['id']); ?>"><i style="font-size:25px; color: #e0240a;" class="mdi mdi-file-excel-box"></i></a>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>;
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->
    <?php echo $__env->make('admin.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>   
    <!-- partial -->
</div>
<!-- main-panel ends -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\canadian_wealth_app\resources\views/admin/paystack/view-payment.blade.php ENDPATH**/ ?>