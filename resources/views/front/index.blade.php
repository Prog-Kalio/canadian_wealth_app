@extends('front.frontlayout.front_layout')

@section('content')

    <div style="position:relative" class="container-fluid bg-light">
        
        <h4>Canadian Wealth App </h4>
        
        <img src="{{ asset('admin/images/home.jpg') }}">

        <div style="position:absolute; bottom:0"><a href="{{ url('/admin/login')}}"><b><i><small class="text-danger">Admin Login</small></i></b></a></div>
    </div>

@endsection