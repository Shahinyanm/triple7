@extends('layouts.user')

@section('content')
    <div class="content-wrapper" style="min-height: 420px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                @lang('text.faq_forum')     </h1>
        </section>
        <!-- Main content -->
        <section class="content">


            <div class="col-lg-12 col-md-12">
                <div class="box direct-chat">
                    <div class="box-header with-border bg-gold">
                        <h3 class="box-title"><i class="fa fa-comment"></i>  @lang('text.topics') </h3>            </div>

                    <div class="box-body">
                        <!-- Conversations are loaded here -->
                        <div id="chat-app" class="direct-chat-messages chat-app">

                            @if($topic)
                                @foreach($topic->posts as $post)
                                    <div class="direct-chat-msg mb-30">
                                        <div class="clearfix mb-15">
                                            <span class="direct-chat-name">{{$post->user->first_name}} {{$post->user->last_name}}</span>
                                            <span class="direct-chat-timestamp pull-right">{{ \Carbon\Carbon::parse($post->created_at)->format('d/m/Y h:i:s')}}</span>
                                        </div>
                                        <div class="direct-chat-text">
                                            {{$post->text}}
                                        </div>
                                    </div>
                                @endforeach
                            @endif

                        </div>
                        <div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 455.696px;"></div>
                        <div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
                        <!--/.direct-chat-messages-->
                    </div>
                    <!-- /.box-body -->
                    <form action="{{route('user.send_message')}}" method="post">
                        @csrf
                        <div class="box-footer">
                            <div class="forum-post">
                                <div tabindex="-1" class="foruminput">
                                    <div tabindex="-1" class="text-holder">
                                        {{--<div class="text-place" style="visibility: visible;"></div>--}}
                                        <input type="hidden" value="{{$topic->id}}" name="topic_id">
                                        <input type="text"  id="title" name="text" class="text-input copyable-text selectable-text" style="border:none">
                                        <div class="text-input copyable-text selectable-text" contenteditable="true" data-tab="1" dir="ltr" spellcheck="true"></div>
                                    </div>
                                </div>
                                <button type="button" class="text-buton send-post" onClick="if(document.getElementById('title').value != ''){submit();}else {alert('Don\'t send empty message');}" style="background:transparent; border:none"> <span><i class="fa fa-send fa-2x"></i></span></button>
                            </div>
                        </div>
                    </form>
                    <!-- /.box-footer-->
                </div>
                <!-- /. box -->
            </div>

        </section>
        <!-- /.content -->
    </div>
    <script>

       </script>
@endsection
