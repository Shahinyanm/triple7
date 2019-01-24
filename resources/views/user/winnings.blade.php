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
					24.01.2019				</span>
                </li>
                <!-- /.timeline-label -->

                <!-- timeline item -->
                <li>
                    <i class="fa fa-image bg-gold"></i>

                    <div class="timeline-item">
                        <h3 class="timeline-header">24.01.2019</h3>

                        <div class="timeline-body">
                            <img src="casino-win/casino_slot_win_16a5cdae362b8d27a1d8f8c7b78b4330_tumb.jpg" alt="" class="margin thumb bigimg" dataurl="casino_slot_win_16a5cdae362b8d27a1d8f8c7b78b4330.jpg"><img src="casino-win/casino_slot_win_2e907f44e0a9616314cf3d964d4e3c93_tumb.jpg" alt="" class="margin thumb bigimg" dataurl="casino_slot_win_2e907f44e0a9616314cf3d964d4e3c93.jpg"><img src="casino-win/casino_slot_win_75c58d36157505a600e0695ed0b3a22d_tumb.jpg" alt="" class="margin thumb bigimg" dataurl="casino_slot_win_75c58d36157505a600e0695ed0b3a22d.jpg">
                        </div>
                    </div>
                </li>
                <!-- END timeline item -->

            </ul>
            <div class="text-center"><button type="button" class="loadmore btn btn-info btn-lg" dataid="1">Load previous pictures</button></div>
        </section>
        <!-- /.content -->
    </div>
    @endsection