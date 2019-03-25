<div class="wrapper content-fluid">

    {!! Form::open(['url'=>route('important_datesEdit',array('important_dates'=>$data['id'])),'class'=>'form-horizontal','method'=>'POST', 'enctype'=>'multipart/form-data']) !!}

    <div class="form-group">
        {!! Form::hidden('id', $data['id']) !!}
        {!! Form::label('event_date', 'Event date', ['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::date('event_date', $data['event_date'],['class'=>'form-control']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('event_title', 'Event title', ['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::text('event_title', $data['event_title'],['class'=>'form-control', 'placeholder'=>'Event title']) !!}
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
