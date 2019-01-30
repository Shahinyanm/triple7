@extends('layouts.user')

@section('content')
    <div class="content-wrapper" style="min-height: 574px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Winnings      </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <ul class="timeline">

                <!-- timeline time label -->
                <li class="time-label">
				<span class="bg-gold">
					{{ \Carbon\Carbon::now()->format('d.m.Y')}}			</span>
                </li>
                <!-- /.timeline-label -->
                <!-- timeline item -->
                <li>
                    <i class="fa fa-image bg-gold"></i>

                    <div class="timeline-item">
                        <h3 class="timeline-header">{{ \Carbon\Carbon::parse($winnings['0']->created_at)->format('d.m.Y')}}</h3>

                        <div class="timeline-body">
                            @foreach($winnings as $wining)
                            <img src="{{asset('images/winnings')}}/{{$wining->image}}" alt="" class="margin thumb bigimg" dataurl="casino_slot_win_98c39996bf1543e974747a2549b3107c.jpg">
                            @endforeach
                        </div>
                    </div>
                </li>
            </ul>
            <div class="text-center"><button type="button" class="loadmore btn btn-info btn-lg" dataid="1" data-date="{{ \Carbon\Carbon::parse($winnings['0']->created_at)->format('d.m.Y')}}">Load previous pictures</button></div>
        </section>        <!-- /.content -->
    </div>
    @endsection

@push('js')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).on("click",".loadmore",function() {
            var dataid	= $(this).attr("dataid");
            var date = $(this).data("date");

            console.log(date)
            var $timeline 	= $(".timeline");
            $.ajax({
                type: "POST",
                url: "user/load_more",
                data: {date:date},
                success: function(msg) {

                    $timeline.append(msg.html);
                    // $(".loadmore").attr("dataid",Number(dataid)+1);
                    $(".loadmore").data("date",msg.date);
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    $timeline.append('Timeout contacting server..');
                }
            });
        });

        $(document).on("click",".bigimg",function() {
            var dataurl		= $(this).attr("dataurl");

            $.magnificPopup.open({
                type: 'image',
                items: {
                    src: 'casino-win/'+dataurl
                },
                closeOnContentClick: true,
                closeBtnInside: false,
                fixedContentPos: true,
                mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
                image: {
                    verticalFit: true
                }
            });

        });

    </script>
    @endpush