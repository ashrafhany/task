@extends('adminlte::page')

@section('title', 'Add Task')

@section('content')
<div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Add new task</h3>
      <div class="box-tools pull-right">
        <!-- Buttons, labels, and many other things can be placed here! -->
        <!-- Here is a label for example -->
       <a class="btn btn-primary" href="{{route('tasks.index')}}">View All tasks</a>
      </div>
      <!-- /.box-tools -->
    </div>
<div class="box-body">
    <form action="{{route('task.store')}}" method="post">
        {{csrf_field()}}

        <div class="form-group">
            <textarea name="info" class="form-control" id="info" placeholder="task details"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" name="add" class="btn btn-primary btn-block">Add</button>
        </div>
    </form>
</div>
<div class="box-footer">
<form action="{{route('tasks.delivery_date')}}" method="get">
        <div class="field-body">
            <div class="field">
                <p class="control">
                <input class="datepick" type="text" name="dateform" placeholder="select date">
                </p>
                </div>
            </div>
</form>
</div>
<form action="{{route('tasks.getDetails')}}" method="get">
        $('#docNO').change(function(){
            var id =$(this).val();
            var url = "{{route('getDetails',":id")}}";
            url = url.replace(':id',id);
            $.ajax({
                url:url,
                type:"get",
                dataType:"json",
                success:function(response){
                if =(response !=null){
                    $('#rev').val(response.rev_no);
                    $('title').val(response.title);
                }
                }
            });
        });

        </form>
        </div>














@stop

