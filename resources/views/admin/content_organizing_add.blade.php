<div class="wrapper content-fluid">

    {!! Form::open(['url'=>route('organizingAdd'),'class'=>'form-horizontal','method'=>'POST', 'enctype'=>'multipart/form-data']) !!}

    <div class="form-group">
        {!! Form::label('degree', 'Academic degree', ['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::text('degree', old('degree'),['class'=>'form-control', 'placeholder'=>'Prof.']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('fio', 'Fio', ['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::text('fio', old('fio'),['class'=>'form-control', 'placeholder'=>'Ivanov I.I.']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('info', 'General info', ['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::text('info', old('info'),['class'=>'form-control', 'placeholder'=>'Chairman, Khai']) !!}
        </div>
    </div>


    <div class="form-group">
        <div class="col-xs-offset-2 col-xs-10">
            {!! Form::button('Save',['class'=>'btn btn-primary', 'type'=>'submit'] ) !!}
        </div>
    </div>
    {!! Form::close() !!}

</div>
