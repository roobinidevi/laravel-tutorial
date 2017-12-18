@extends('layouts.app')

@section('content')

<div class="container">
    <h3>Create Role</h3>

    @if(Session::has('success'))
       <div class="alert alert-success">
             {{ Session::get('success') }}
           </div>
    @endif

    <form method="POST" action="{{ url('role/') }}">
        {{ csrf_field() }}
        <div class="col-xs-6">
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <input id="name" type="text" class="form-control" name="name" placeholder="Role name" value="{{ old('name') }}" required autofocus>

                @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
            </div>
        </div>

        <div class="clearfix "></div>
        <div class="row">
            <div class="col-xs-4">
                <button type="submit" class="btn btn-primary">
                    Create
                </button>
            </div>
        </div>
    </form>
</div>
@endsection
