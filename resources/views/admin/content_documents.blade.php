<div style="margin: 0 50px">
    @if($documents)
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Icon</th>
                <th>title</th>
                <th>file</th>
                <th>Create date</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($documents as $k=>$document)
                <tr>
                    <td>{{$document->id}}</td>
                    <td>{!! Html::link(route('documentsEdit',['documents'=>$document->id]),$document->icon,['alt'=>$document->icon]) !!}</td>
                    <td>{{$document->title}}</td>
                    <td>{{$document->file}}</td>
                    <td>{{$document->created_at}}</td>
                    <td>
                        {!! Form::open(['url'=>route('documentsEdit',['documents'=>$document->id]),'class'=>'form-horizontal','method'=>'POST']) !!}

                        {{method_field('DELETE')}}
                        {!! Form::button('Delete', ['class'=>'btn btn-danger', 'type'=>'submit']) !!}

                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif

    {!! Html::link(route('documentsAdd'),'New document') !!}

</div>
