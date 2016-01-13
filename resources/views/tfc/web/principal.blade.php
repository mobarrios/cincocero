@extends('tfc/web/template')
    @section("content")
        <div class="clear"></div>

        @include('tfc/web/leftbar/leftbar')

        @include('tfc/web/includes/noticias')

        @include('tfc/web/sidebar/sidebar')

        <div class="clear"></div>
        <!-- widget-area-6 -->

    @endsection()