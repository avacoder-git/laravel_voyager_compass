@extends('layouts.app')

@section('style')

    <style>
        .emoji-smile{
            width: 250px;
            margin: 0 auto;
        }
    </style>

@endsection


@section('content')

    <div class="p-100">
        <div class="emoji-smile">
            <img src="{{asset('image/emoji-smile.svg')}}" alt="">
        </div>
        <div class="mt-5">

            <div class="main-header text-center">
                @lang("site.success")
            </div>
        </div>
        <div class=" mt-5 mx-auto text-center">
            <a href="/" class="mainBtn fill">@lang('site.main')</a>
        </div>
    </div>

@endsection
