

<?php $__env->startSection('content'); ?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Payment</h3>
                        <span id="check_payment"></span>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Upgrade Membership</h4>

                  <form class="forms-sample" id="paymentForm">
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input class="form-control" type="email" id="email" name="email" value="<?php echo e(Auth::guard('admin')->user()->email); ?>" required/>
                        </div>
                        <div class="form-group">
                            <label for="amount">Amount</label>
                            <input class="form-control" type="tel" id="amount" name="amount" required />
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input class="form-control" type="text" id="name" name="name" value="<?php echo e(Auth::guard('admin')->user()->name); ?>" required/>
                        </div>
                        <div class="form-group">
                            <label for="reference">Reference</label>
                            <input class="form-control" type="text" id="reference" name="reference" required/>
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <input class="form-control" type="text" id="status" name="status" required/>
                        </div>
                        <div class="form-submit">
                            <button type="submit" class="btn btn-primary mr-2">Save</button>
                            <button class="btn btn-light">Cancel</button>
                        </div>
                    </form>
                    <!-- <script src="https://js.paystack.co/v1/inline.js"></script>  -->
                    <script>
                        
                    </script>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <?php echo $__env->make('admin.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>       
                <!-- partial -->
            </div


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\canadian_wealth_app\resources\views/admin/paystack/add-edit-payment.blade.php ENDPATH**/ ?>