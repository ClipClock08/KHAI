<div class="wrapper content-fluid">

    {!! Form::open(['url'=>route('keynoteAdd'),'class'=>'form-horizontal','method'=>'POST', 'enctype'=>'multipart/form-data']) !!}

    <div class="form-group">
        {!! Form::label('image', 'Image', ['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::file('image',['class'=>'filestyle', 'data-buttonText'=>'Choose image', 'data-buttonName'=>'btn-primary','data-placeholder'=>'File except']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('speaker', 'Speaker', ['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::text('speaker', old('speaker'),['class'=>'form-control', 'placeholder'=>'Dr. Garry Potter']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('city', 'City', ['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::text('city', old('city'),['class'=>'form-control', 'placeholder'=>'Gdansk, Poland']) !!}
        </div>
    </div>

    <div class="form-group">
        <div class="col-xs-offset-2 col-xs-10">
            {!! Form::button('Save',['class'=>'btn btn-primary', 'type'=>'submit'] ) !!}
        </div>
    </div>
    {!! Form::close() !!}

</div>
