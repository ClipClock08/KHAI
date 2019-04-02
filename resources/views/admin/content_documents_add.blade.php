<div class="wrapper content-fluid">

    {!! Form::open(['url'=>route('documentsAdd'),'class'=>'form-horizontal','method'=>'POST', 'enctype'=>'multipart/form-data']) !!}

    <div class="form-group">
        {!! Form::label('icon', 'Icon', ['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::file('icon',['class'=>'filestyle', 'data-buttonText'=>'Choose image', 'data-buttonName'=>'btn-primary','data-placeholder'=>'File except']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('title', 'Title', ['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::text('title', old('title'),['class'=>'form-control', 'placeholder'=>'Call for papers(.pdf)']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('file', 'File', ['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::file('file',['class'=>'filestyle', 'data-buttonName'=>'btn-primary','data-placeholder'=>'File except']) !!}
        </div>
    </div>

    <div class="form-group">
        <div class="col-xs-offset-2 col-xs-10">
            {!! Form::button('Save',['class'=>'btn btn-primary', 'type'=>'submit'] ) !!}
        </div>
    </div>
    {!! Form::close() !!}

</div>
