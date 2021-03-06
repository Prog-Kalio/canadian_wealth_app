@extends('admin.layout.layout')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Welcome {{ Auth::guard('admin')->user()->name }}</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin transparent">
                <div class="row">
                    <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                        <div class="card card-light-blue">
                        @if(Auth::guard('admin')->user()->type=="admin")
                            <div class="card-body">
                                <h4 class="mb-4">All Users</h4>
                                <div><a href="{{ url('/admin/admins')}}"><b><i><small class="text-danger">View All</small></i></b></a></div>
                            </div>
                        @elseif(Auth::guard('admin')->user()->type=="paid_user")
                            <div class="card-body">
                                <h4 class="mb-4">Paid User</h4>
                                <p class="mb-4">Yes, I am a Paid User</p>
                            </div>
                        @else
                            <div class="card-body">
                                <h4 class="mb-4">Free User</h4>
                                <p class="mb-4">I am a Free User and would love to upgrade</p>
                                <div><a href="{{ url('/admin/paystack/payment')}}"><button class="btn btn-success">UPGRADE</button></a></div>
                            </div>
                        @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    @include('admin.layout.footer')
    <!-- partial -->
</div>
@endsection