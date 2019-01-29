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
            {{dd($topic)}}

            <div class="col-lg-12 col-md-12">
                <div class="box direct-chat">
                    <div class="box-header with-border bg-gold">
                        <h3 class="box-title"><i class="fa fa-comment"></i> asdadad</h3>            </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <!-- Conversations are loaded here -->
                        <div id="chat-app" class="direct-chat-messages chat-app">
                            <!-- Message. Default to the left -->
                            {{--@foreach()--}}
                            <div class="direct-chat-msg mb-30">
                                <div class="clearfix mb-15">
                                    <span class="direct-chat-name">Asdadsa A.</span>
                                    <span class="direct-chat-timestamp pull-right">29.01.2019 10:12:06</span>
                                </div>
                                <!-- /.direct-chat-info -->
                                <div class="direct-chat-text">
                                    asdadad
                                </div>

                                <!-- /.direct-chat-text -->
                            </div>
                            <!-- /.direct-chat-msg -->
                            <div class="direct-chat-msg mb-30"><div class="clearfix mb-15"><span class="direct-chat-name">Asdadsa A.</span><span class="direct-chat-timestamp pull-right">29.01.2019 11:05:06</span></div><!-- /.direct-chat-info --><div class="direct-chat-text">asdadad</div><!-- /.direct-chat-text --></div></div><div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 455.696px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
                        <!--/.direct-chat-messages-->
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <div class="forum-post">
                            <div tabindex="-1" class="foruminput">
                                <div tabindex="-1" class="text-holder">
                                    <div class="text-place" style="visibility: visible;"></div>
                                    <div class="text-input copyable-text selectable-text" contenteditable="true" data-tab="1" dir="ltr" spellcheck="true"></div>
                                </div>
                            </div>
                            <div class="text-buton send-post"><span><i class="fa fa-send fa-2x"></i></span></div>
                        </div>
                    </div>
                    <!-- /.box-footer-->
                </div>
                <!-- /. box -->
            </div>

        </section>
        <!-- /.content -->
    </div>
@endsection
