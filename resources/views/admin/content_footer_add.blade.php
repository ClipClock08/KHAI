<div class="wrapper content-fluid">

    {!! Form::open(['url'=>route('footerAdd'),'class'=>'form-horizontal','method'=>'POST', 'enctype'=>'multipart/form-data']) !!}

    <div class="form-group">
        {!! Form::label('copy_write', 'Copy write info', ['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::text('copy_write', old('copy_write'),['class'=>'form-control', 'placeholder'=>'&#xa9;']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('event_head', 'Event Head', ['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::text('event_head', old('event_head'),['class'=>'form-control', 'placeholder'=>'Event head']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('event_title', 'Event title', ['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::text('event_title', old('event_title'),['class'=>'form-control', 'placeholder'=>'Event title']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('footer', 'Last line info ', ['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::text('footer', old('footer'),['class'=>'form-control', 'placeholder'=>'Kharkiv 2019']) !!}
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
