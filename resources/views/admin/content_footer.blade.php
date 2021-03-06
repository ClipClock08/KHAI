<div style="margin: 0 50px">
    @if($footer)
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Copy Write</th>
                <th>Event Head</th>
                <th>Event Title</th>
                <th>From</th>
                <th>Create date</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($footer as $k=>$item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{!! Html::link(route('footerEdit',['footer'=>$item->id]),$item->copy_write,['alt'=>$item->copy_write]) !!}</td>
                    <td>{{$item->event_head}}</td>
                    <td>{{$item->event_title}}</td>
                    <td>{{$item->footer}}</td>
                    <td>{{$item->created_at}}</td>
                    <td>
                        {!! Form::open(['url'=>route('footerEdit',['footer'=>$item->id]),'class'=>'form-horizontal','method'=>'POST']) !!}

                        {{method_field('DELETE')}}
                        {!! Form::button('Delete', ['class'=>'btn btn-danger', 'type'=>'submit']) !!}

                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif

    {!! Html::link(route('footerAdd'),'New footer info') !!}

</div>
