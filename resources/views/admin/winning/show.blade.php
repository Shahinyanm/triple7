@extends('layouts.admin')

@section('main')

    <a href="{{route('admin.winnings.index')}}" class="btn btn-info btn-sm btn-icon icon-left">
        <i class="fas fa-arrow-left"></i>
        Back
    </a>

    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3 ">
        <div class="row">
            <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden ">
                <div class="my-3 py-3 ">

                    <img src="{{asset('images/winnings')}}/{{$winning->image}}" class="img-responsive center-block" style="width:600px; height: 400px;" >
                </div>
                {{--<div class="bg-light box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>--}}
            </div>
            <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                <div class="my-3 p-3">
                    <h2 class="display-5">{{$winning->user->first_name}}  {{$winning->user->last_name}}</h2>
                    <p class="lead">{{ \Carbon\Carbon::parse($winning->create_at)->format('d/m/Y h:i:s')}}.</p>

                </div>
            </div>
            <div class="bg-dark box-shadow mx-auto text-center" style="width: 98%; height: 300px; border-radius: 21px 21px 0 0;">


                <a href="{{route('admin.winnings.edit',$winning->id)}}" class="btn btn-success btn-sm btn-icon icon-left">
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

            </div>

        </div>
    </div>







@endsection