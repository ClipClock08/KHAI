<div class="wrapper content-fluid">
    {!! Form::open(['url'=>route('documentsEdit',array('documents'=>$data['id'])),'class'=>'form-horizontal','method'=>'POST', 'enctype'=>'multipart/form-data']) !!}

    <div class="form-group">
        {!! Form::hidden('id', $data['id']) !!}

        <div class="form-group">
            {!! Form::label('old_icon', 'Old icon', ['class'=>'col-xs-2 control-label']) !!}
            <div class="col-xs-offset-2 col-xs-10">
                {!! Html::image('assets/img/'.$data['icon'],'',['class' => 'img-responsive', 'width' => '200px'])!!}
                {!! Form::hidden('old_icon',$data['icon']) !!}
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('icon', 'icon', ['class'=>'col-xs-2 control-label']) !!}
            <div class="col-xs-8">
                {!! Form::file('icon',['class'=>'filestyle', 'data-buttonText'=>'Choose image', 'data-buttonName'=>'btn-primary','data-placeholder'=>'File except']) !!}
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('title', 'Title', ['class'=>'col-xs-2 control-label']) !!}
            <div class="col-xs-8">
                {!! Form::text('title', $data['title'],['class'=>'form-control']) !!}
            </div>
        </div>

        <div class="form-group">
            <div class="col-xs-offset-2 col-xs-10">
                {!! Form::hidden('old_file',$data['file']) !!}
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('file', 'File', ['class'=>'col-xs-2 control-label']) !!}
            <div class="col-xs-8">
                {!! Form::file('file',['class'=>'filestyle', 'data-buttonName'=>'btn-primary','data-placeholder'=>'File except']) !!}
            </div>
        </div>

        <div class="form-group">
            <div class="col-xs-offset-2 col-xs-10">
                {!! Form::button('Save',['class'=>'btn btn-primary', 'type'=>'submit'] ) !!}
            </div>
        </div>
        {!! Form::close() !!}

    </div>
