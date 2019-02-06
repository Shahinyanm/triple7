<li>
    <i class="fa fa-image bg-gold" ></i>

    <div class="timeline-item">
        <h3 class="timeline-header">{{ \Carbon\Carbon::parse($winnings['0']->created_at)->format('d.m.Y')}}</h3>

        <div class="timeline-body">
            @foreach($winnings as $wining)
                <img src="{{asset('storage')}}/{{$wining->image}}" alt="" class="margin thumb bigimg" dataurl="casino_slot_win_98c39996bf1543e974747a2549b3107c.jpg">
            @endforeach
        </div>
    </div>
</li>