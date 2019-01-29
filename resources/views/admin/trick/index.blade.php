@extends('layouts.admin')

@section('main')
    <h3>Tricks Table</h3>



    <a href="{{route('admin.tricks.create')}}" class="btn btn-info"> New Trick</a>
    <table class="table table-bordered table-striped datatable" id="table-2">
        <thead>
        <tr>
            <th>
                <div class="checkbox checkbox-replace">
                    <input type="checkbox" id="chk-1">
                </div>
            </th>
            {{--<th class=" text-center">Name </th>--}}
            <th class=" text-center col-md-2">Description 1</th>
            <th class=" text-center col-md-2">Description 2</th>
            <th class=" text-center col-md-2">Description 3</th>
            <th class=" text-center col-md-2">Description 4</th>
            <th class=" text-center col-md-4">Images </th>
            <th class=" text-center col">Rating </th>
            <th class=" text-center col">Amount </th>
            <th class=" text-center col">Link </th>
            <th class=" text-center col">Status </th>
            <th>Actions </th>
        </tr>
        </thead>

        <tbody>
        @if(isset($tricks))
            @foreach($tricks as $trick)
                <tr>
                    <td>
                        <div class="checkbox checkbox-replace">
                            <input type="checkbox" id="chk-1">
                        </div>
                    </td>


                    {{--<td class="text-center">{{$product->tags}}</td>--}}
                    <td class="text-center">{{$trick->description1}}</td>
                    <td class="text-center">{{$trick->description2}}</td>
                    <td class="text-center">{{$trick->description3}}</td>
                    <td class="text-center">{{$trick->description4}}</td>
                    <td class="text-center"><a href="{{route('admin.images', $trick->id)}}" >
                        @foreach($trick->images as $image)
                            <img src="{{asset('images/tricks')}}/{{$image->src}}" style="width:50px; height: 50px;">
                            @endforeach
                        </a>
                    </td>
                    <td class="text-center">{{$trick->procent}} %</td>
                    <td class="text-center">{{$trick->amount}}</td>
                    <td class="text-center"><a href="{{$trick->link}}">Click Here</a></td>
                    <td class="text-center">
                        @if($trick->activated == 1)
                            <span class="badge badge-success">Active</span>
                        @else
                            <span class="badge badge-danger">Deactive</span>
                        @endif

                    </td>

                    <td>


                        <a href="{{route('admin.tricks.edit',$trick->id)}}" class="btn btn-default btn-sm btn-icon icon-left">
                            <i class="entypo-pencil"></i>
                            Edit
                        </a>
                        <form  style="display:inline-block" action="{{route('admin.tricks.destroy',$trick->id)}}" method="post">
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