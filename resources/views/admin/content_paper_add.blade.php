<div class="wrapper content-fluid">

    {!! Form::open(['url'=>route('paperAdd'),'class'=>'form-horizontal','method'=>'POST', 'enctype'=>'multipart/form-data']) !!}

    <div class="form-group">
        {!! Form::label('title', 'Title', ['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::text('title', old('title'),['class'=>'form-control', 'placeholder'=>'Title']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('text', 'Text', ['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::textarea('text', old('text'),['id'=> 'editor','class'=>'form-control', 'placeholder'=>'lorem ipsum']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('button_name', 'Button name', ['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::text('button_name', old('button_name'),['class'=>'form-control', 'placeholder'=>'120 Euro']) !!}
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
