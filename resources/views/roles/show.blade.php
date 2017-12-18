@extends('layouts.app')

@section('content')

<div class="container">

    <h3>View {{ $role_show->id }}</h3>

    <div class="clearfix">
        <p>
            <strong>Role Name:</strong> {{ $role_show->name }}
        </p>
    </div>

</div>
@endsection