@extends('layouts.app')

@section('content')

<div class="container">
    <h3>Edit Role</h3>

    @if(Session::has('success'))
       <div class="alert alert-success">
             {{ Session::get('success') }}
           </div>
    @endif

     {!! Form::open(array('route' => ['role.update',$role->id],'class' => 'form','method' => 'post')) !!}
    {{ method_field('PUT') }}{{ csrf_field() }}

    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Role Name</label>
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <div class="col-sm-4">
                {!! Form::text('name',$role->name, array('class' => 'form-control','id' => 'name')) !!}
                @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
            </div>
        </div>
    </div>
    <div class="clearfix "></div>
    <div class="form-group">
        {!! Form::submit('Edit', 
        array('class'=>'btn btn-primary')) !!}
    </div>
    {!! Form::close() !!}
</div>
@endsection
