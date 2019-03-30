<div class="wrapper content-fluid">

    {!! Form::open(['url'=>route('pricesEdit',array('prices'=>$data['id'])),'class'=>'form-horizontal','method'=>'POST', 'enctype'=>'multipart/form-data']) !!}

    <div class="form-group">
        {!! Form::hidden('id', $data['id']) !!}
        {!! Form::label('title', 'Title', ['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::text('title', $data['title'],['class'=>'form-control']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('first_price', 'First price', ['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::text('first_price', $data['first_price'],['class'=>'form-control']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('second_price', 'Second price', ['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::text('second_price', $data['second_price'],['class'=>'form-control']) !!}
        </div>
    </div>

    <div class="form-group">
        <div class="col-xs-offset-2 col-xs-10">
            {!! Form::button('Save',['class'=>'btn btn-primary', 'type'=>'submit'] ) !!}
        </div>
    </div>
    {!! Form::close() !!}

</div>
