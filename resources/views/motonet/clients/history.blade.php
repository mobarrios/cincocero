
<div class="col-xs-6">
    <div id="vertical-timeline" class="vertical-container light-timeline">
        @foreach($history as $h)
            <div class="vertical-timeline-block">
                <div class="vertical-timeline-icon yellow-bg">
                    <i class="fa fa-phone"></i>
                </div>

                <div class="vertical-timeline-content">
                    <h2>{!! $h->users->fullName !!}</h2>
                    {!! $h->message !!}
                    <span class="vertical-date">{!! $h->dateForHuman() !!}<br><small>{!! $h->created_at !!}</small></span>
                </div>
            </div>
        @endforeach
    </div>
</div>

