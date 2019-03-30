<div style="margin: 0 50px">
    @if($prices)
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
            @foreach($prices as $k=>$price)
                <tr>
                    <td>{{$price->id}}</td>
                    <td>{!! Html::link(route('pricesEdit',['prices'=>$price->id]),$price->title,['alt'=>$price->title]) !!}</td>
                    <td>{{$price->first_price}}</td>
                    <td>{{$price->second_price}}</td>
                    <td>{{$price->created_at}}</td>
                    <td>
                        {!! Form::open(['url'=>route('pricesEdit',['prices'=>$price->id]),'class'=>'form-horizontal','method'=>'POST']) !!}

                        {{method_field('DELETE')}}
                        {!! Form::button('Delete', ['class'=>'btn btn-danger', 'type'=>'submit']) !!}

                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif

    {!! Html::link(route('pricesAdd'),'New conference fee info') !!}

</div>
