@extends('layouts.admin')

@section('main')
    <h3>Winnings Images Table</h3>



    <a href="{{route('admin.winnings.create')}}" class="btn btn-info"> New Winning</a>
    <table class="table table-bordered table-striped datatable" id="table-2">
        <thead>
        <tr>
            <th>
                <div class="checkbox checkbox-replace">
                    <input type="checkbox" id="chk-1">
                </div>
            </th>
            {{--<th class=" text-center">Name </th>--}}
            <th class=" text-center col-md-5">Photo </th>
            <th class=" text-center col-md-2">user </th>
            <th class=" text-center col-md-2">Date </th>
            {{--<th class=" text-center">tags </th>--}}

            <th>Actions </th>
        </tr>
        </thead>

        <tbody>
        @if(isset($winnings))
            @foreach($winnings as $winning)
                <tr>
                    <td>
                        <div class="checkbox checkbox-replace">
                            <input type="checkbox" id="chk-1">
                        </div>
                    </td>

                    <td class="text-center"><img src="{{asset('storage/image/winnings')}}/{{$winning->image}}" style="width: 100px; height: 70px;"></td>
                    {{--<td class="text-center">{{$product->tags}}</td>--}}

                    <td class="text-center"> @if($winning->user) {{$winning->user->first_name}}  {{$winning->user->last_name}} @endif</td>
                    <td class="text-center">{{ \Carbon\Carbon::parse($winning->create_at)->format('d/m/Y h:i:s')}}</td>

                    <td>
                        <a href="{{route('admin.winnings.show',$winning->id)}}" class="btn btn-info btn-sm btn-icon icon-left">
                        <i class="entypo-info"></i>
                        Show
                        </a>

                        <a href="{{route('admin.winnings.edit',$winning->id)}}" class="btn btn-default btn-sm btn-icon icon-left">
                            <i class="entypo-pencil"></i>
                            Edit
                        </a>
                        <form  style="display:inline-block" action="{{route('admin.winnings.destroy',$winning->id)}}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger btn-sm btn-icon icon-left">
                                <i class="entypo-cancel"></i>
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
        @endforeach
        @endif

    </table>


@endsection