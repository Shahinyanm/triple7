@extends('layouts.user')

@section('content')
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Overview      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xl-4 col-md-12 col" id="help_found_tricks">
                <a class="info-box-link" href="tricks.blade.php">
                    <div class="info-box">
                        <span class="info-box-icon bg-info"><i class="fa fa-search"></i></span>

                        <div class="info-box-content">
				  <span class="info-box-number">
				  50				  </span>
                            <span class="info-box-text">Unveiled tricks</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </a>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-xl-4 col-md-12 col" id="help_active_tricks">
                <a class="info-box-link" href="tricks.blade.php">
                    <div class="info-box">
                        <span class="info-box-icon bg-info"><i class="fa fa-check"></i></span>

                        <div class="info-box-content">
				  <span class="info-box-number">
				  0				  </span>
                            <span class="info-box-text">Active tricks</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </a>
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

            <div class="col-xl-4 col-md-12 col" id="help_used_tricks">
                <a class="info-box-link" href="tricks.blade.php">
                    <div class="info-box">
                        <span class="info-box-icon bg-info"><i class="fa fa-gamepad"></i></span>

                        <div class="info-box-content">
				  <span class="info-box-number">
				  0				  </span>
                            <span class="info-box-text">Tricks taken part in</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </a>
            </div>
            <!-- /.col -->

        </div>

        <div class="row">
            <div class="col-xl-4 col-12">
                <div class="box box-inverse box-carousel slide" data-ride="carousel" style="background-color: #212121">
                    <div class="box-header no-border">
                        <span class="fa fa-trophy font-size-30"></span>
                        <div class="box-tools pull-right">
                            <h5 class="box-title box-title-bold">Latest winners</h5>
                        </div>
                    </div>

                    <div class="carousel-inner">


                    </div>

                    <div class="carousel-link text-center">
                        <a href="tricks.blade.php"><span><i class="fa fa-gamepad"></i> Show all tricks</span></a>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-12">
                <div class="box box-inverse" style="background-color: #212121">
                    <div class="box-header no-border">
                        <span class="fa fa-comments font-size-30"></span>
                        <div class="box-tools pull-right">
                            <h5 class="box-title box-title-bold">FAQ - Forum</h5>
                        </div>
                    </div>

                    <blockquote class="blockquote blockquote-inverse no-border m-0 py-15">
                        <p class="text-justify">If you have any questions, this is your first contact point. Contact the community. Here you will find many answered questions, and you can also ask questions yourself. These will then be answered either by us as a team or by other users.</p>
                        <div class="text-center">
                            <a href="forum.php"><span><i class="fa fa-comments"></i> FAQ - Forum</span></a>
                        </div>
                    </blockquote>
                </div>
            </div>

            <div class="col-xl-4 col-12">
                <div class="box box-inverse" style="background-color: #212121">
                    <div class="box-header no-border">
                        <span class="fa fa-whatsapp font-size-30"></span>
                        <div class="box-tools pull-right">
                            <h5 class="box-title box-title-bold">Whatsapp support</h5>
                        </div>
                    </div>

                    <blockquote class="blockquote blockquote-inverse no-border m-0 py-15">
                        <p class="text-justify">If you have very specific questions, you can also contact our team directly via WhatsApp. We are glad to help you individually and will be of assistance with any queries you may have. Don&#39;t be afraid or shy! We look forward to your enquiry!</p>
                        <div class="text-center">
                            <a href="https://wa.me/447501980397" target="_blank"><span><i class="fa fa-phone-square"></i> +44 7501 98 03 97</span></a>
                        </div>
                    </blockquote>
                </div>
            </div>

        </div>


    </section>
    <!-- /.content -->
</div>

    @endsection
