<div style="margin: 0 50px">
    @if($organizing)
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Academic degree</th>
                <th>Fio</th>
                <th>General info</th>
                <th>Create date</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($organizing as $k=>$item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{!! Html::link(route('organizingEdit',['organizing'=>$item->id]),$item->degree,['alt'=>$item->degree]) !!}</td>
                    <td>{{$item->fio}}</td>
                    <td>{{$item->info}}</td>
                    <td>{{$item->created_at}}</td>
                    <td>
                        {!! Form::open(['url'=>route('organizingEdit',['organizing'=>$item->id]),'class'=>'form-horizontal','method'=>'POST']) !!}

                        {{method_field('DELETE')}}
                        {!! Form::button('Delete', ['class'=>'btn btn-danger', 'type'=>'submit']) !!}

                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif

    {!! Html::link(route('organizingAdd'),'New Organizing committee person') !!}

</div>
