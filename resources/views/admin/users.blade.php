@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

@section('content')
<div class="box">
    <div class="box-header with-border">
    <h3 class="box-title">Users</h3>
    <div class="box-tools pull-right">
        <!-- Buttons, labels, and many other things can be placed here! -->
        <!-- Here is a label for example -->
        <a class="btn btn-primary" href="#">Add User</a>
    </div>
    <!-- /.box-tools -->
    </div>
    <!-- /.box-header -->
    <div class="box-body">
    <table class="table">
        <thead>
        <tr>
            <td>#</td>
            <td>Name</td>
            <td>Email</td>
        </tr>
        </thead>
        @if(count($users) > 0)
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                </tr>
            @endforeach
            @endif
    </div>
    <!-- /.box-body -->

</div>
<!-- /.box -->

@stop
