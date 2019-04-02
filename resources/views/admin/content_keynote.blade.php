<div style="margin: 0 50px">
    @if($keynotes)
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Image</th>
                <th>Speaker</th>
                <th>City</th>
                <th>Create date</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($keynotes as $k=>$keynote)
                <tr>
                    <td>{{$keynote->id}}</td>
                    <td>{!! Html::link(route('keynoteEdit',['keynote'=>$keynote->id]),$keynote->image,['alt'=>$keynote->image]) !!}</td>
                    <td>{{$keynote->speaker}}</td>
                    <td>{{$keynote->city}}</td>
                    <td>{{$keynote->created_at}}</td>
                    <td>
                        {!! Form::open(['url'=>route('keynoteEdit',['keynote'=>$keynote->id]),'class'=>'form-horizontal','method'=>'POST']) !!}

                        {{method_field('DELETE')}}
                        {!! Form::button('Delete', ['class'=>'btn btn-danger', 'type'=>'submit']) !!}

                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif

    {!! Html::link(route('keynoteAdd'),'New speaker') !!}

</div>
