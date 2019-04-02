<div style="margin: 0 50px">
    @if($organized_by )
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Address</th>
                <th>Image</th>
                <th>Google map</th>
                <th>Create date</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($organized_by  as $k=>$item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{!! Html::link(route('organizedByEdit',['organizedBy'=>$item->id]),$item->title,['alt'=>$item->title]) !!}</td>
                    <td>{{$item->address}}</td>
                    <td>{{$item->image}}</td>
                    <td>{{$item->google_map}}</td>
                    <td>{{$item->created_at}}</td>
                    <td>
                        {!! Form::open(['url'=>route('organizedByEdit',['organizedBy'=>$item->id]),'class'=>'form-horizontal','method'=>'POST']) !!}

                        {{method_field('DELETE')}}
                        {!! Form::button('Delete', ['class'=>'btn btn-danger', 'type'=>'submit']) !!}

                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif

    {!! Html::link(route('organizedByAdd'),'New Organized By block') !!}

</div>
