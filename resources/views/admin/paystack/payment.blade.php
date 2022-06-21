@extends('admin.layout.layout')

@section('content')
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
                            <input class="form-control" type="email" id="email" value="{{ Auth::guard('admin')->user()->email }}" required />
                        </div>
                        <div class="form-group">
                            <label for="amount">Amount</label>
                            <input class="form-control" type="tel" id="amount" required />
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input class="form-control" type="text" id="name" value="{{ Auth::guard('admin')->user()->name }}" />
                        </div>
                        <div class="form-submit">
                            <button type="submit" class="btn btn-primary mr-2" onclick="payWithPaystack(event)">Pay Now</button>
                            <button class="btn btn-light">Cancel</button>
                        </div>
                    </form>
                    <script src="https://js.paystack.co/v1/inline.js"></script> 
                    <script>
                        const paymentForm = document.getElementById('paymentForm');
                        paymentForm.addEventListener("submit", payWithPaystack, false);
                        function payWithPaystack(e) {
                        e.preventDefault();
                        let handler = PaystackPop.setup({
                            key: 'pk_test_2d58ef590a91520695d32e7dea6d363936737c68', // Replace with your public key
                            email: document.getElementById("email").value,
                            amount: document.getElementById("amount").value * 100,
                            ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
                            // label: "Optional string that replaces customer email"
                            onClose: function(){
                            alert('Window closed.');
                            },
                            callback: function(response){
                                
                                // let message = 'Payment complete! Reference: ' + response.reference;
                                // alert(message);
                                //For simple payment requests, the above two steps will suffice. But for our level, we need to verify the payment before confirmation

                                let reference = response.reference;
                                
                                //Verify Payment
                                // console.log(reference);
                                $.ajax({
                                    type: "GET",
                                    url: "{{URL::to('/admin/paystack/verify-payment')}}/"+reference,
                                    success: function(response){
                                        // console.log(response);
                                        if(response.status == true){
                                            $('form').prepend(`
                                                <h4 style="color:green">${response.message}</h4>
                                            `);
                                            window.location.assign('confirmed');
                                        }
                                        else {
                                            $('form').prepend(`
                                                <h4 style="color:red">Payment Verification Failed!</h4>
                                            `);
                                        }
                                    },
                                    error: function() {
                                        alert("Error");
                                    }
                                });
                            }
                        });
                        handler.openIframe();
                        }
                    </script>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                @include('admin.layout.footer')       
                <!-- partial -->
            </div


@endsection