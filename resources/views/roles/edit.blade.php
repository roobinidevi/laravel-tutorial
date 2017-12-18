@extends('layouts.app')

@section('content')

<div class="container">
    <h3>Edit Role</h3>

    @if(Session::has('success'))
       <div class="alert alert-success">
             {{ Session::get('success') }}
           </div>
    @endif

    <form method="post" action="{{ route('role.update',$role->id) }}">
        {{ method_field('PUT') }}{{ csrf_field() }}
        <div class="col-xs-6">
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <input id="name" type="text" class="form-control" name="name" placeholder="Role name" value="{{ $role->name }}" required autofocus>

                @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
            </div>
        </div>

        <div class="clearfix"></div>
        <div class="row">
            <div class="col-xs-4">
                <button type="submit" class="btn btn-primary">
                    Edit
                </button>
            </div>
        </div>
    </form>
</div>
@endsection
