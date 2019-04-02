<div class="wrapper content-fluid">
    {!! Form::open(['url'=>route('organizingEdit',array('organizing'=>$data['id'])),'class'=>'form-horizontal','method'=>'POST', 'enctype'=>'multipart/form-data']) !!}

    <div class="form-group">
        {!! Form::hidden('id', $data['id']) !!}
        {!! Form::label('degree', 'Academic degree', ['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::text('degree', $data['degree'],['class'=>'form-control']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('fio', 'Fio', ['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::text('fio', $data['fio'],['class'=>'form-control']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('info', 'General info', ['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::text('info', $data['info'],['class'=>'form-control']) !!}
        </div>
    </div>



    <div class="form-group">
        <div class="col-xs-offset-2 col-xs-10">
            {!! Form::button('Save',['class'=>'btn btn-primary', 'type'=>'submit'] ) !!}
        </div>
    </div>
    {!! Form::close() !!}

</div>
