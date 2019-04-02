<div class="wrapper content-fluid">

    {!! Form::open(['url'=>route('paperEdit',array('paper'=>$data['id'])),'class'=>'form-horizontal','method'=>'POST', 'enctype'=>'multipart/form-data']) !!}

    <div class="form-group">
        {!! Form::hidden('id', $data['id']) !!}
        {!! Form::label('title', 'Title', ['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::text('title', $data['title'],['class'=>'form-control']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('text', 'Text', ['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::textarea('text', $data['text'],['id'=> 'editor','class'=>'form-control']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('button_name', 'Button name', ['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::text('button_name', $data['button_name'],['class'=>'form-control', 'placeholder'=>'120 Euro']) !!}
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
