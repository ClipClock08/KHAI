<div class="wrapper content-fluid">

    {!! Form::open(['url'=>route('introAdd'),'class'=>'form-horizontal','method'=>'POST', 'enctype'=>'multipart/form-data']) !!}

    <div class="form-group">
        {!! Form::label('head', 'Header event', ['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::text('head', old('head'),['class'=>'form-control', 'placeholder'=>'Event head']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('event', 'Event', ['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::text('event', old('event'),['class'=>'form-control', 'placeholder'=>'Event']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('place', 'Event place', ['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::text('place', old('place'),['class'=>'form-control', 'placeholder'=>'Event head']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('text', 'Event text', ['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::textarea('text', old('text'),['id'=>'editor','class'=>'form-control', 'placeholder'=>'Event description']) !!}
        </div>
    </div>

    {{--<div class="form-group">
        {!! Form::label('images', 'Image', ['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::file('images',['class'=>'filestyle', 'data-buttonText'=>'Choose image', 'data-buttonName'=>'btn-primary','data-placeholder'=>'File except']) !!}
        </div>
    </div>--}}

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
