<div style="margin: 0 50px">
    @if($intros)
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Head</th>
                <th>Event</th>
                <th>Place</th>
                <th>Text</th>
                <th>Create date</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($intros as $k=>$intro)
                <tr>
                    <td>{{$intro->id}}</td>
                    <td>{!! Html::link(route('introEdit',['intro'=>$intro->id]),$intro->head,['alt'=>$intro->head]) !!}</td>
                    <td>{{$intro->event}}</td>
                    <td>{{$intro->place}}</td>
                    <td>{{$intro->text}}</td>
                    <td>{{$intro->created_at}}</td>
                    <td>
                        {!! Form::open(['url'=>route('introEdit',['intro'=>$intro->id]),'class'=>'form-horizontal','method'=>'POST']) !!}

                        {{method_field('DELETE')}}
                        {!! Form::button('Delete', ['class'=>'btn btn-danger', 'type'=>'submit']) !!}

                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif

    {!! Html::link(route('introAdd'),'New event info') !!}

</div>
