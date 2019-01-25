@extends('layouts.admin')

@section('main')
    <h3>Topics Table</h3>



    <a href="{{route('admin.topics.create')}}" class="btn btn-info"> New Topic</a>
    <table class="table table-bordered table-striped datatable" id="table-2">
        <thead>
        <tr>
            <th>
                <div class="checkbox checkbox-replace">
                    <input type="checkbox" id="chk-1">
                </div>
            </th>
            {{--<th class=" text-center">Name </th>--}}
            <th class=" text-center col-md-2">Title </th>
            <th class=" text-center col-md-4">Description </th>
            <th class=" text-center col">Forum </th>
            <th class=" text-center col">Posts </th>
            <th class=" text-center col">Last Update </th>
            <th>Actions </th>
        </tr>
        </thead>

        <tbody>
        @if(isset($topics))
            @foreach($topics as $topic)
                <tr>
                    <td>
                        <div class="checkbox checkbox-replace">
                            <input type="checkbox" id="chk-1">
                        </div>
                    </td>


                    {{--<td class="text-center">{{$product->tags}}</td>--}}
                    <td class="text-center">{{$topic->title}}</td>
                    <td class="text-center">{{$topic->text}}</td>
                    <td class="text-center">{{$topic->forum->title}}</td>
                    <td class="text-center">{{$topic->posts->count()}}</td>
                    <td class="text-center">{{ \Carbon\Carbon::parse($topic->updated_at)->format('d/m/Y h:i:s')}}</td>

                    <td>
                        <a href="{{route('admin.topics.show',$topic->id)}}" class="btn btn-info btn-sm btn-icon icon-left">
                        <i class="entypo-info"></i>
                        Show
                        </a>

                        <a href="{{route('admin.topics.edit',$topic->id)}}" class="btn btn-default btn-sm btn-icon icon-left">
                            <i class="entypo-pencil"></i>
                            Edit
                        </a>
                        <form  style="display:inline-block" action="{{route('admin.topics.destroy',$topic->id)}}" method="post">
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