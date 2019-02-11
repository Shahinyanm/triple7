@extends('layouts.admin')

@section('main')
    <h3>Trick Images Table</h3>



    <a href="{{route('admin.tricks.index')}}" class="btn btn-info"> Back to Trick</a>
    <table class="table table-bordered table-striped datatable" id="table-2">
        <thead>
        <tr>
            <th>
                <div class="checkbox checkbox-replace">
                    <input type="checkbox" id="chk-1">
                </div>
            </th>
            {{--<th class=" text-center">Name </th>--}}
            <th class=" text-center col-md-2">Images</th>
            <th>Actions </th>
        </tr>
        </thead>

        <tbody>
        @if(isset($images))
            @foreach($images as $image)
                <tr>
                    <td>
                        <div class="checkbox checkbox-replace">
                            <input type="checkbox" id="chk-1">
                        </div>
                    </td>


                    {{--<td class="text-center">{{$product->tags}}</td>--}}
                    <td class="text-center col-md-10 "><img src="{{asset('storage')}}/{{$image->src}}" style="width:400px; "></td>


                    <td>

                        <form  style="display:inline-block" action="{{route('admin.destroy',$image->id)}}" method="post">
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