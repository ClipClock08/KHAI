<div class="wrapper content-fluid">

    {!! Form::open(['url'=>route('introEdit',array('intro'=>$data['id'])),'class'=>'form-horizontal','method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
    {{--Это для отправки формой с файлами(картинка например)--}}
    {{--{!! Form::open(['url'=>route('introEdit',array('intro'=>$data['id'])),'class'=>'form-horizontal','method'=>'POST', 'enctype'=>'multipart/form-data']) !!}--}}

    <div class="form-group">
        {!! Form::hidden('id', $data['id']) !!}
        {!! Form::label('head', 'Header event', ['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::text('head', $data['head'],['class'=>'form-control', 'placeholder'=>'Event head']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('event', 'Event', ['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::text('event', $data['event'],['class'=>'form-control', 'placeholder'=>'Event']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('place', 'Event place', ['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::text('place', $data['place'],['class'=>'form-control', 'placeholder'=>'Event head']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('text', 'Event text', ['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::textarea('text', $data['text'],['id'=>'editor','class'=>'form-control', 'placeholder'=>'Event description']) !!}
        </div>
    </div>

    {{--<div class="form-group">
        {!! Form::label('old_images', 'Image', ['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Html::image('assets/img/'.$data['images'],,['class'=>'img-control']!!}
            {!! Form::hidden('old_images',$data['images]) !!}
        </div>
    </div>


    <div class="form-group">
        {!! Form::label('images', 'Image', ['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::file('images',['class'=>'filestyle', 'data-buttonText'=>'Choose image', 'data-buttonName'=>'btn-primary','data-placeholder'=>'File except']) !!}
        </div>
    </div>--}}
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
