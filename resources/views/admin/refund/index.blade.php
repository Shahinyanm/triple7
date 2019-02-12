@extends('layouts.admin')

@section('main')
    <h3>Forums Table</h3>



    {{--<a href="{{route('admin.forums.create')}}" class="btn btn-info"> New Forum</a>--}}
    <table class="table table-bordered table-striped datatable" id="table-2">
        <thead>
        <tr>
            <th>
                <div class="checkbox checkbox-replace">
                    <input type="checkbox" id="chk-1">
                </div>
            </th>
            {{--<th class=" text-center">Name </th>--}}
            <th class=" text-center col-md-2">Trick </th>
            <th class=" text-center col-md-2">User </th>
            <th class=" text-center col">Amount </th>
            <th class=" text-center col">Image </th>
            <th class=" text-center col">Date</th>
            <th class=" text-center col">Status</th>
            <th class=" text-center col-md-3">Actions </th>
        </tr>
        </thead>

        <tbody>
        @if(isset($refunds))
            @foreach($refunds as $refund)
                <tr>
                    <td>
                        <div class="checkbox checkbox-replace">
                            <input type="checkbox" id="chk-1">
                        </div>
                    </td>


                    {{--<td class="text-center">{{$product->tags}}</td>--}}
                    <td class="text-center"> <a href="{{route('admin.tricks.index')}}">Trick id:  {{$refund->trick->id}}</a></td>
                    <td class="text-center">{{$refund->user->first_name}}</td>
                    <td class="text-center">{{$refund->amount}}</td>
                    <td class="text-center"><img src="{{asset('storage/image/refunds/'.$refund->image)}}" width="100"></td>
                    <td class="text-center">{{ \Carbon\Carbon::parse($refund->created_at)->format('d M Y h:i:s')}}</td>
                    <td class="text-center">@if($refund->approve) <span class="badge badge-success">Approve</span> @elseif($refund->approve 0) <span class="badge badge-danger">Disapprove</span>@else   <span class="badge badge-danger">Chose action</span> @endif</td>

                    <td>

                        <form  style="display:inline-block" action="{{route('admin.refunds.approve',$refund->id)}}" method="post">
                            @method('PUT')
                            @csrf
                            <button class="btn btn-info btn-sm btn-icon icon-left">
                                <i class="entypo-cancel"></i>
                                Approve
                            </button>
                        </form>

                        <form  style="display:inline-block" action="{{route('admin.refunds.disapprove',$refund->id)}}" method="post">
                            @method('PUT')
                            @csrf
                            <button class="btn btn-danger btn-sm btn-icon icon-left">
                                <i class="entypo-cancel"></i>
                                Disapprove
                            </button>
                        </form>
                        <form  style="display:inline-block" action="{{route('admin.refunds.destroy',$refund->id)}}" method="post">
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