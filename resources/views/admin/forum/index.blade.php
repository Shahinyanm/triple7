@extends('layouts.admin')

@section('main')
    <h3>Forums Table</h3>



    <a href="{{route('admin.forums.create')}}" class="btn btn-info"> New Forum</a>
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
            <th class=" text-center col">Topics </th>
            <th class=" text-center col">Posts </th>
            <th class=" text-center col">Last Update </th>
            <th>Actions </th>
        </tr>
        </thead>

        <tbody>
        @if(isset($forums))
            @foreach($forums as $forum)
                <tr>
                    <td>
                        <div class="checkbox checkbox-replace">
                            <input type="checkbox" id="chk-1">
                        </div>
                    </td>


                    {{--<td class="text-center">{{$product->tags}}</td>--}}
                    <td class="text-center">{{$forum->title}}</td>
                    <td class="text-center">{{$forum->text}}</td>
                    <td class="text-center">{{$forum->topics_count}}</td>
                    <td class="text-center">{{$forum->posts_count}}</td>
                    <td class="text-center">{{ \Carbon\Carbon::parse($forum->updated_at)->format('d/m/Y h:i:s')}}</td>

                    <td>
                        <a href="{{route('admin.forums.show',$forum->id)}}" class="btn btn-info btn-sm btn-icon icon-left">
                        <i class="entypo-info"></i>
                        Show
                        </a>

                        <a href="{{route('admin.forums.edit',$forum->id)}}" class="btn btn-default btn-sm btn-icon icon-left">
                            <i class="entypo-pencil"></i>
                            Edit
                        </a>
                        <form  style="display:inline-block" action="{{route('admin.forums.destroy',$forum->id)}}" method="post">
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