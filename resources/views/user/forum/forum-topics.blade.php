@extends('layouts.user')

@section('content')
    <div class="content-wrapper" style="min-height: 420px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                FAQ - Forum      </h1>
        </section>
        <section class="content">
            <div class="col-xl-12 col-12">
                <div class="box">
                    <div class="box-header with-border bg-gold">
                        <h3 class="box-title"><i class="fa fa-plus"></i> Create a new topic</h3>
                    </div>
                    <!-- /.box-header -->
                    <form class="form-group" action="{{route('user.topics.store')}}" method="post">
                        @csrf
                    <div class="box-body ">
                        <div class="forum-post">
                            <div tabindex="-1" class="foruminput">
                                <div tabindex="-1" class="text-holder">
                                    {{--<div class="text-place" style="visibility: visible;">Post a new topic</div>--}}
                                    <input type="hidden" value="{{$forum->id}}" name="forum_id">
                                    <input type="text" name="title" class="text-input copyable-text selectable-text" style="border:none">
                                    {{--<div class="text-input copyable-text selectable-text" contenteditable="true" data-tab="1" dir="ltr" spellcheck="true" name="'title"></div>--}}
                                </div>
                            </div>
                            <button type="submit" class="text-buton send-post"><span><i class="fa fa-send fa-2x"></i></span></button>
                        </div>
                    </div>
                    </form>
                    <!-- /.box-body -->
                </div>
                <hr>
            </div>
        </section>
        <!-- Main content -->
        <section class="content">
            @isset($forum)

            @foreach($forum->topics as $topic)
                    <row>
                        <div class="col-xl-12 col-12">
                            <div class="box">
                                <div class="box-header with-border bg-gold">
                                    <a href="{{route('user.topics.show', $topic->id)}}">
                                        <h3 class="box-title"><i class="fa fa-comments"></i> {{$topic->title}}</h3>
                                    </a>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body ">
                                    <div class="col-xl-12 col-12 no-padding">{{$topic->text}}</div>
                                    <div class="col-xl-12 col-12 no-padding">Created on {{ \Carbon\Carbon::parse($topic->created_at)->format('d/m/Y')}} by  {{$topic->user->first_name}} {{$topic->user->last_name}}</div>
                                    <hr class="mt-10 mb-10">
                                    <div class="col-xl-12 col-12 no-padding small">

                                        <span>Post:
			        						{{$topic->posts->count()}}							</span>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                            </div>
                        </div>
                    </row>
                @endforeach
            @endisset



        </section>
        <!-- /.content -->
    </div>
@endsection
