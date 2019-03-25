<div class="wrapper content-fluid">

    {!! Form::open(['url'=>route('footerEdit',array('footer'=>$data['id'])),'class'=>'form-horizontal','method'=>'POST', 'enctype'=>'multipart/form-data']) !!}

    <div class="form-group">
        {!! Form::hidden('id', $data['id']) !!}
        {!! Form::label('copy_write', 'Copy write field', ['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::text('copy_write', $data['copy_write'],['class'=>'form-control', 'placeholder'=>'First line in footer']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('event_head', 'Event head', ['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::text('event_head', $data['event_head'],['class'=>'form-control', 'placeholder'=>'Event head']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('event_title', 'Event title', ['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::text('event_title', $data['event_title'],['class'=>'form-control', 'placeholder'=>'bla bla bla']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('footer', 'Last line in footer', ['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::text('footer', $data['footer'],['class'=>'form-control', 'placeholder'=>'Kharkiv, 2019']) !!}
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
