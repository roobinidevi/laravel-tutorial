@extends('layouts.app')
@section('content')
<div class="container">
    <h3>Change password</h3>
    @if (session('error'))
    <div class="alert alert-danger col-xs-10">
        {{ session('error') }}
    </div>
    @endif
    @if (session('success'))
    <div class="alert alert-success col-xs-10">
        {{ session('success') }}
    </div>
    @endif
    
    <div class="clearfix "></div>
    {!! Form::open(array('url' => 'changepassword', 'class' => 'form')) !!}
    <div class="form-group">
        <label for="current-password" class="col-sm-2 control-label">Current Password</label>
        <div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
            <div class="col-sm-4">
                {!! Form::password('current-password',null, array('class' => 'form-control','id' => 'current-password')) !!}
                @if ($errors->has('current-password'))
                <span class="help-block">
                    <strong>{{ $errors->first('current-password') }}</strong>
                </span>
                @endif
            </div>
        </div>
    </div>
    <div class="clearfix "></div>

    <div class="form-group">
        <label for="new-password" class="col-sm-2 control-label">New Password</label>
        <div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
            <div class="col-sm-4">
                {!! Form::password('new-password',null, array('class' => 'form-control','id' => 'new-password')) !!}
                @if ($errors->has('new-password'))
                <span class="help-block">
                    <strong>{{ $errors->first('new-password') }}</strong>
                </span>
                @endif
            </div>
        </div>
    </div>
    <div class="clearfix "></div>

    <div class="form-group">
        <label for="confirm-password" class="col-sm-2 control-label">Confirm Password</label>
        <div class="form-group{{ $errors->has('confirm-password') ? ' has-error' : '' }}">
            <div class="col-sm-4">
                {!! Form::password('confirm-password',null, array('class' => 'form-control','id' => 'confirm-password')) !!}
                @if ($errors->has('confirm-password'))
                <span class="help-block">
                    <strong>{{ $errors->first('confirm-password') }}</strong>
                </span>
                @endif
            </div>
        </div>
    </div>
    <div class="clearfix "></div>

    <div class="form-group">
        {!! Form::submit('Change Password', 
        array('class'=>'btn btn-primary')) !!}
    </div>
    {!! Form::close() !!}
</div>
@endsection
