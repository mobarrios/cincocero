@extends('index')
    @section('css')
        <link rel="stylesheet" href="assets/inspinia/css/style2.css">
    @endsection
    @section('content')

        <div class="" id="ibox-content">

            <div id="vertical-timeline" class="vertical-container light-timeline">
                @foreach($history as $h)
                    <div class="vertical-timeline-block">
                        <div class="vertical-timeline-icon yellow-bg">
                            <i class="fa fa-phone"></i>
                        </div>

                        <div class="vertical-timeline-content">
                            <h2>{!! $h->Users->full_name !!}</h2>
                            {!! $h->message !!}
                            <span class="vertical-date">{!! $h->dateForHuman() !!}<br><small>{!! $h->created_at !!}</small></span>
                        </div>
                    </div>
                @endforeach
                {{--<div class="vertical-timeline-block">--}}
                    {{--<div class="vertical-timeline-icon lazur-bg">--}}
                        {{--<i class="fa fa-user-md"></i>--}}
                    {{--</div>--}}

                    {{--<div class="vertical-timeline-content">--}}
                        {{--<h2>Go to the doctor dr Smith</h2>--}}
                        {{--<p>Find some issue and go to doctor. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. </p>--}}
                        {{--<span class="vertical-date">Yesterday <br><small>Dec 23</small></span>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="vertical-timeline-block">--}}
                    {{--<div class="vertical-timeline-icon navy-bg">--}}
                        {{--<i class="fa fa-comments"></i>--}}
                    {{--</div>--}}

                    {{--<div class="vertical-timeline-content">--}}
                        {{--<h2>Chat with Monica and Sandra</h2>--}}
                        {{--<p>Web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). </p>--}}
                        {{--<span class="vertical-date">Yesterday <br><small>Dec 23</small></span>--}}
                    {{--</div>--}}
                {{--</div>--}}

            </div>

        </div>



    @endsection

@stop

