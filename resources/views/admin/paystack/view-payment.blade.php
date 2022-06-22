@extends('admin.layout.layout')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Payment</h4>

                        @if(Session::has('success_message'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Success: </strong> {{ Session::get('success_message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        @endif
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
                                  @foreach($payments as $payment)
                                    <tr>
                                        <td>
                                            {{ $payment['id'] }}
                                        </td>
                                        <td>
                                            {{ $payment['email'] }}
                                        </td>
                                        <td>
                                            {{ $payment['amount'] }}
                                        </td>
                                        <td>
                                            {{ $payment['reference'] }}
                                        </td>
                                        <td>
                                            {{ $payment['name'] }}
                                        </td>
                                        <td>
                                            {{ $payment['status'] }}
                                        </td>
                                        <td>
                                              <a href="{{ url('admin/paystack/add-edit-payment/'.$payment['id']) }}"><i style="font-size:25px; color: #215123;" class="mdi mdi-pencil-box"></i></a>
                                            
                                              <a href="javascript:void(0)" class="confirmDelete" module="payment" moduleid="{{ $payment['id'] }}"><i style="font-size:25px; color: #e0240a;" class="mdi mdi-file-excel-box"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach;
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
    @include('admin.layout.footer')   
    <!-- partial -->
</div>
<!-- main-panel ends -->
@endsection