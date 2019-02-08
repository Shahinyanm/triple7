@extends('layouts.admin')

@section('main')
    <h3>Reports Table</h3>



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
            <th class=" text-center col">Wins </th>
            <th class=" text-center col">Image </th>
            <th class=" text-center col">Date</th>
            {{--<th class=" text-center col">Status</th>--}}
            <th class=" text-center col-md-2">Actions </th>
        </tr>
        </thead>

        <tbody>
        @if(isset($reports))
            @foreach($reports as $report)
                <tr>
                    <td>
                        <div class="checkbox checkbox-replace">
                            <input type="checkbox" id="chk-1">
                        </div>
                    </td>

                    {{--<td class="text-center">{{$product->tags}}</td>--}}
                    <td class="text-center"> <a href="{{route('admin.tricks.index')}}">Trick id:  {{$report->trick->id}}</a></td>
                    <td class="text-center">{{$report->user->first_name}}</td>
                    <td class="text-center">{{$report->wins}} €</td>
                    <td class="text-center"><img src="{{asset('storage/image/winnings/'.$report->winning->image)}}" width="100"></td>
                    <td class="text-center">{{ \Carbon\Carbon::parse($report->created_at)->format('d M Y h:i:s')}}</td>
                    {{--<td class="text-center">@if($refund->approve) <span class="badge badge-success">Approve</span> @else <span class="badge badge-danger">Disapprove</span> @endif</td>--}}

                    <td>

                        <form  style="display:inline-block" action="{{route('admin.reports.destroy',$report->id)}}" method="post">
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