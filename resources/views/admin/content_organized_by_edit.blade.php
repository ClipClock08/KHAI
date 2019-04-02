<div class="wrapper content-fluid">
    {!! Form::open(['url'=>route('organizedByEdit',array('organizedBy'=>$data['id'])),'class'=>'form-horizontal','method'=>'POST', 'enctype'=>'multipart/form-data']) !!}

    <div class="form-group">
        {!! Form::hidden('id', $data['id']) !!}
        {!! Form::label('title', 'Title', ['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::text('title', $data['title'],['class'=>'form-control']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('address', 'Address', ['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::text('address', $data['address'],['class'=>'form-control']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('old_image', 'Old image ', ['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-offset-2 col-xs-10">
            {!! Html::image('assets/img/'.$data['image'],'',['class' => 'img-responsive', 'width' => '200px'])!!}
            {!! Form::hidden('old_image',$data['image']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('image', 'Image', ['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::file('image',['class'=>'filestyle', 'data-buttonText'=>'Choose image', 'data-buttonName'=>'btn-primary','data-placeholder'=>'File except']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('google_map', 'Google map iframe code', ['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::textarea('google_map', $data['google_map'],['id'=>'editor','class'=>'form-control']) !!}
        </div>
    </div>

    <div class="form-group">
        <div class="col-xs-offset-2 col-xs-10">
            {!! Form::button('Save',['class'=>'btn btn-primary', 'type'=>'submit'] ) !!}
        </div>
    </div>
    {!! Form::close() !!}

</div>
