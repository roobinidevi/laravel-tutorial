@extends('layouts.app')

@section('content')

<div class="container">
    <h3>Contact Us</h3>

    @if(Session::has('message'))
    <div class="alert alert-info col-xs-10">
        {{Session::get('message')}}
    </div>
    @endif

    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>

    {!! Form::open(array('url' => 'contactus/', 'class' => 'form')) !!}

    <div class="col-xs-6">
        <div class="form-group">

            {!! Form::text('name', null, 
            array('required', 
            'class'=>'form-control', 
            'placeholder'=>'Your name')) !!}
        </div>
    </div>
    <div class="clearfix "></div>

    <div class="col-xs-6">
        <div class="form-group">

            {!! Form::text('email', null,
            array('required', 
            'class'=>'form-control',
            'placeholder'=>'Your e-mail address')) !!}
        </div>
    </div>
    <div class="clearfix "></div>

    <div class="col-xs-6">
        <div class="form-group">
            {!! Form::textarea('message', null,
            array('required', 
            'class'=>'form-control', 
            'placeholder'=>'Your message')) !!}
        </div>
    </div>
    <div class="clearfix "></div>

    <div class="form-group">
        {!! Form::submit('Contact Us!', 
        array('class'=>'btn btn-primary')) !!}
    </div>
    {!! Form::close() !!}
</div>
@endsection
