@extends('layouts.admin')

@section('main')
    <h3>Posts Table</h3>



    <a href="{{route('admin.forums.create')}}" class="btn btn-info"> New Post</a>
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
            <th class=" text-center col">Topic </th>
            <th class=" text-center col">Forum </th>
            <th class=" text-center col">Date </th>
            <th>Actions </th>
        </tr>
        </thead>

        <tbody>
        @if(isset($posts))
            @foreach($posts as $post)
                <tr>
                    <td>
                        <div class="checkbox checkbox-replace">
                            <input type="checkbox" id="chk-1">
                        </div>
                    </td>


                    {{--<td class="text-center">{{$product->tags}}</td>--}}
                    <td class="text-center">{{$post->title}}</td>
                    <td class="text-center">{{$post->text}}</td>
                    <td class="text-center">{{$post->topic_name}}</td>
                    <td class="text-center">{{$post->forum_name}}</td>
                    <td class="text-center">{{ \Carbon\Carbon::parse($post->created_at)->format('d/m/Y h:i:s')}}</td>

                    <td>
                        {{--<a href="{{route('admin.posts.show',$post->id)}}" class="btn btn-info btn-sm btn-icon icon-left">--}}
                        {{--<i class="entypo-info"></i>--}}
                        {{--Show--}}
                        {{--</a>--}}

                        {{--<a href="{{route('admin.posts.edit',$post->id)}}" class="btn btn-default btn-sm btn-icon icon-left">--}}
                            {{--<i class="entypo-pencil"></i>--}}
                            {{--Edit--}}
                        {{--</a>--}}
                        <form  style="display:inline-block" action="{{route('admin.posts.destroy',$post->id)}}" method="post">
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