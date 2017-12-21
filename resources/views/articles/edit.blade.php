@extends('layouts.app')

@section('content')

<div class="container">
    <h3>Edit Article</h3>

    @if(Session::has('success'))
       <div class="alert alert-success">
             {{ Session::get('success') }}
           </div>
    @endif

    {!! Form::open(array('route' => ['article.update',$article->id],'class' => 'form','method' => 'post','files'=>true,'enctype'=>'multipart/form-data')) !!}
    {{ method_field('PUT') }}{{ csrf_field() }}

    <div class="form-group">
        <label for="title" class="col-sm-2 control-label">Title</label>
        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
            <div class="col-sm-4">
                {!! Form::text('title',$article->title, array('class' => 'form-control','id' => 'title')) !!}
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
                {!! Form::textArea('description',$article->description, array('class' => 'form-control','id' => 'description')) !!}
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
                {!! Form::text('short_des',$article->short_des, array('class' => 'form-control','id' => 'short_des')) !!}
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
        <label for="file" class="col-sm-2 control-label">Image Upload</label>
        <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
            <div class="col-sm-4">
                <div id="image-upload" class="dropzone" name="file[]">
                    {{ csrf_field() }}
                    @if ($errors->has('file'))
                    <span class="help-block">
                        <strong>{{ $errors->first('file') }}</strong>
                    </span>
                    @endif
                </div>
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

@push('push_scripts')

<script type="text/javascript">
    Dropzone.autoDiscover = false;
    var myDropzone = new Dropzone("div#image-upload", {url: "{{route('article.update',$article->id)}}"});
    Dropzone.options.imageUpload = {
        method: 'POST',
        maxFilesize: 1,
        acceptedFiles: ".jpeg,.jpg,.png,.gif",
    };
    myDropzone.on("sending", function(file, xhr, formData) {

    // Now, find your CSRF token
    var token = $("input[name='_token']").val();

    // Append the token to the formData Dropzone is going to POST
    formData.append('_token', token);

});

</script>
@endpush

