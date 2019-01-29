@extends('layouts.user')

@section('content')
    <div class="content-wrapper" style="min-height: 420px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                FAQ - Forum      </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            @isset($forums)
                @foreach($forums as $forum)
                    <row>
                        <div class="col-xl-12 col-12">
                            <div class="box">
                                <div class="box-header with-border bg-gold">
                                    <a href="{{route('user.forums.show', $forum->id)}}">
                                        <h3 class="box-title"><i class="fa fa-comments"></i> {{$forum->title}}</h3>
                                    </a>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body ">
                                    <div class="col-xl-12 col-12 no-padding">{{$forum->text}}</div>
                                    <hr class="mt-10 mb-10">
                                    <div class="col-xl-12 col-12 no-padding small">
			        					<span class="mr-10">
			        						Topics:
			        						{{$forum->topics_count}}						</span>
                                        <span>Post:
			        						{{$forum->posts_count}}							</span>
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
