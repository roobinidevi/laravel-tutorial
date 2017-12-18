@extends('layouts.app')

@section('content')

<div class="container">
    <h3>Edit User</h3>

    @if(Session::has('success'))
       <div class="alert alert-success">
             {{ Session::get('success') }}
           </div>
    @endif

    {!! Form::open(['method' => 'post','route' => ['user.update',$user->id],'style'=>'display:inline']) !!}
    {{ method_field('PUT') }}{{ csrf_field() }}
    <div class="form-group">
        <label for="username" class="col-sm-2 control-label">User Name</label>
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <div class="col-sm-4">
                {!! Form::text('name',$user->name, array('class' => 'form-control','id' => 'name')) !!}
                @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="form-group">
        <label for="email" class="col-sm-2 control-label">Email</label>
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <div class="col-sm-4">
                {!! Form::text('email',$user->email, array('class' => 'form-control','id' => 'email')) !!}
                @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="form-group">
        <label for="role" class="col-sm-2 control-label">Role</label>
        <div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
            <div class="col-sm-4">
                {!! Form::select('role[]',$roles,$selected, array('class' => 'form-control','multiple'=> true)) !!}
            </div>   
        </div>
    </div>

    <div class="clearfix"></div>
    <div class="row">
        <div class="col-xs-4">
            {!! Form::submit('Edit', ['class' => 'btn btn-primary']) !!}
        </div>
    </div>
    {!! Form::close() !!}
</div>
@endsection
