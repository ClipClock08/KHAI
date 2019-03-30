<div style="margin: 0 50px">
    @if($papers)
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Head</th>
                <th>Event</th>
                <th>Place</th>
                <th>Create date</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($papers as $k=>$paper)
                <tr>
                    <td>{{$paper->id}}</td>
                    <td>{!! Html::link(route('paperEdit',['paper'=>$paper->id]),$paper->title,['alt'=>$paper->title]) !!}</td>
                    <td>{{$paper->text}}</td>
                    <td>{{$paper->button_name}}</td>
                    <td>{{$paper->created_at}}</td>
                    <td>
                        {!! Form::open(['url'=>route('paperEdit',['paper'=>$paper->id]),'class'=>'form-horizontal','method'=>'POST']) !!}

                        {{method_field('DELETE')}}
                        {!! Form::button('Delete', ['class'=>'btn btn-danger', 'type'=>'submit']) !!}

                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif

    {!! Html::link(route('paperAdd'),'New block') !!}

</div>
