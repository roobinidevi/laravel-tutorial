@extends('layouts.app')

@section('content')

<div class="container">
    <h3>Create Article</h3>

    @if(Session::has('success'))
       <div class="alert alert-success">
             {{ Session::get('success') }}
           </div>
    @endif

    {!! Form::open(array('url' => 'article', 'class' => 'form','method' => 'post')) !!}
    {{ csrf_field() }}
    <div class="clearfix"></div>
    <div class="form-group">
        <label for="title" class="col-sm-2 control-label">Title</label>
        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
            <div class="col-sm-4">
                {!! Form::text('title',null, array('class' => 'form-control','id' => 'title')) !!}
                @if ($errors->has('title'))
                <span class="help-block">
                    <strong>{{ $errors->first('title') }}</strong>
                </span>
                @endif
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="form-group">
        <label for="description" class="col-sm-2 control-label">Description</label>
        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
            <div class="col-sm-4">
                {!! Form::textArea('description',null, array('class' => 'form-control','id' => 'description')) !!}
                @if ($errors->has('description'))
                <span class="help-block">
                    <strong>{{ $errors->first('description') }}</strong>
                </span>
                @endif
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="form-group">
        <label for="short_des" class="col-sm-2 control-label">Short Description</label>
        <div class="form-group{{ $errors->has('short_des') ? ' has-error' : '' }}">
            <div class="col-sm-4">
                {!! Form::text('short_des',null, array('class' => 'form-control','id' => 'short_des')) !!}
                @if ($errors->has('short_des'))
                <span class="help-block">
                    <strong>{{ $errors->first('short_des') }}</strong>
                </span>
                @endif
            </div>
        </div>
    </div>
    <div class="clearfix "></div>
    <div class="form-group">
        {!! Form::submit('Create', 
        array('class'=>'btn btn-primary')) !!}
    </div>
    {!! Form::close() !!}
</div>
@endsection
