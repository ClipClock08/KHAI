<div class="wrapper content-fluid">

    {!! Form::open(['url'=>route('pricesAdd'),'class'=>'form-horizontal','method'=>'POST', 'enctype'=>'multipart/form-data']) !!}

    <div class="form-group">
        {!! Form::label('title', 'Title', ['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::text('title', old('title'),['class'=>'form-control', 'placeholder'=>'Title']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('first_price', 'First price', ['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::text('first_price', old('first_price'),['class'=>'form-control', 'placeholder'=>'100 Euro']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('second_price', 'Second price', ['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::text('second_price', old('second_price'),['class'=>'form-control', 'placeholder'=>'120 Euro']) !!}
        </div>
    </div>

    <div class="form-group">
        <div class="col-xs-offset-2 col-xs-10">
            {!! Form::button('Save',['class'=>'btn btn-primary', 'type'=>'submit'] ) !!}
        </div>
    </div>
    {!! Form::close() !!}

</div>
