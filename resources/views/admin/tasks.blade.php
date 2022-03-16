@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

@section('content')
<div class="box">
    <div class="box-header with-border">
    <h3 class="box-title">tasks</h3>
    <div class="box-tools pull-right">
        <!-- Buttons, labels, and many other things can be placed here! -->
        <!-- Here is a label for example -->
        <a class="btn btn-primary" href="{{route('tasks.create')}}">Add task</a>
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
            <td>details</td>
        </tr>
        </thead>
        @if(count($tasks) > 0)
            @foreach($tasks as $task)
                <tr>
                    <td>{{$task->id}}</td>
                    <td>{{$task->name}}</td>
                    <td>{{$task->details}}</td>
                </tr>
            @endforeach
            @endif
    </div>
    <!-- /.box-body -->

</div>
<!-- /.box -->

@stop
