@extends('layouts.admin')

@section('main')
    <h3>Users Table</h3>



    <a href="{{route('admin.users.create')}}" class="btn btn-info"> New User</a>
    <table class="table table-bordered table-striped datatable" id="table-2">
        <thead>
        <tr>
            <th>
                <div class="checkbox checkbox-replace">
                    <input type="checkbox" id="chk-1">
                </div>
            </th>
            {{--<th class=" text-center">Name </th>--}}
            <th class=" text-center col-md-2">First Name</th>
            <th class=" text-center col-md-2">Last Name</th>
            <th class=" text-center col-md-2">Title</th>
            <th class=" text-center col-md-2">E-Mail</th>
            <th class=" text-center col-md-2">When registered</th>

            <th>Actions </th>
        </tr>
        </thead>

        <tbody>
        @if(isset($users))
            @foreach($users as $user)
                <tr>
                    <td>
                        <div class="checkbox checkbox-replace">
                            <input type="checkbox" id="chk-1">
                        </div>
                    </td>


                    {{--<td class="text-center">{{$product->tags}}</td>--}}
                    <td class="text-center">{{$user->first_name}}</td>
                    <td class="text-center">{{$user->last_name}}</td>
                    <td class="text-center">{{$user->title}}</td>
                    <td class="text-center">{{$user->email}}</td>
                    <td class="text-center">{{\Carbon\Carbon::parse($user->created_at)->format('d.m.Y')}}</td>
                    <td>

                        <a href="{{route('admin.users.edit',$user->id)}}" class="btn btn-default btn-sm btn-icon icon-left">
                            <i class="entypo-pencil"></i>
                            Edit
                        </a>
                        <form  style="display:inline-block" action="{{route('admin.users.destroy',$user->id)}}" method="post">
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