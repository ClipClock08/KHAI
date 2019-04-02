<div class="wrapper content-fluid">

    {!! Form::open(['url'=>route('organizedByAdd'),'class'=>'form-horizontal','method'=>'POST', 'enctype'=>'multipart/form-data']) !!}

    <div class="form-group">
        {!! Form::label('title', 'Title', ['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::text('title', old('title'),['class'=>'form-control', 'placeholder'=>'Event title']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('address', 'Address', ['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::text('address', old('address'),['class'=>'form-control', 'placeholder'=>'National Aerospace university']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('image', 'Image', ['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::file('image',['class'=>'filestyle', 'data-buttonText'=>'Choose image', 'data-buttonName'=>'btn-primary','data-placeholder'=>'File except']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('google_map', 'Google map iframe code', ['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::textarea('google_map', old('google_map'),['id'=>'editor','class'=>'form-control', 'placeholder'=>'<iframe src = .../iframe>']) !!}
        </div>
    </div>


    <div class="form-group">
        <div class="col-xs-offset-2 col-xs-10">
            {!! Form::button('Save',['class'=>'btn btn-primary', 'type'=>'submit'] ) !!}
        </div>
    </div>
    {!! Form::close() !!}

    <script>
        CKEDITOR.replace('editor');
    </script>
</div>
