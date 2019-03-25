<div style="margin: 0 50px">
    @if($important_dates)
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Event Date</th>
                <th>Event Title</th>
                <th>Created at</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($important_dates as $k=>$important_date)
                <tr>
                    <td>{{$important_date->id}}</td>
                    <td>{!! Html::link(route('important_datesEdit',['intro'=>$important_date->id]),$important_date->event_date,['alt'=>$important_date->event_title]) !!}</td>
                    <td>{{$important_date->event_title}}</td>
                    <td>{{$important_date->created_at}}</td>
                    <td>
                        {!! Form::open(['url'=>route('important_datesEdit',['imporant_date'=>$important_date->id]),'class'=>'form-horizontal','method'=>'POST']) !!}

                        {{method_field('DELETE')}}
                        {!! Form::button('Delete', ['class'=>'btn btn-danger', 'type'=>'submit']) !!}

                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif

    {!! Html::link(route('important_datesAdd'),'New important date') !!}

</div>
