@extends("layouts.app")

@section("content")

    <div class="p-100">

        <div class="row justify-content-around">
            <div class="col-lg-3 col-6">
                <div class="info">
                    <div class="h-100"
                         style="display: flex; align-items: center;height: 100vh;justify-content: center;flex-direction: column;">
                        <p class="quantity main-color main-text mb-0 mt-auto text-center">{{setting('site.bitiruvchilar')}}</p>
                        <p class="main-color text-center t-mini mt-0 mb-auto" style="font-size: 18px">
                            @lang('site.bitiruvchi')</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="info">
                    <div class="h-100"
                         style="display: flex; align-items: center;height: 100vh;justify-content: center;flex-direction: column;">
                        <p class="quantity main-color main-text mb-0 mt-auto text-center">{{setting('site.student')}}</p>
                        <p class="main-color text-center t-mini mt-0 mb-auto" style="font-size: 18px">
                            @lang('site.bestudent')</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="info">
                    <div class="h-100"
                         style="display: flex; align-items: center;height: 100vh;justify-content: center;flex-direction: column;">
                        <p class="quantity main-color main-text mb-0 mt-auto text-center">{{setting('site.ball')}}</p>
                        <p class="main-color text-center t-mini mt-0 mb-auto" style="font-size: 18px">
                            @lang('site.ball')</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="info">
                    <div class="h-100"
                         style="display: flex; align-items: center;height: 100vh;justify-content: center;flex-direction: column;">
                        <p class="quantity main-color main-text mb-0 mt-auto text-center">{{setting('site.foreginer')}}</p>
                        <p class="main-color text-center t-mini mt-0 mb-auto" style="font-size: 18px">
                            @lang('site.foreigner')</p>
                    </div>
                </div>
            </div>


        </div>


        <div class="main-header pt ">@lang('site.about')</div>

        <div class="aboutus">

            <div class="container-fluid p-lg-0">
                <div class="row pt">
                    <div class="col-lg-6">
                        <img src="{{asset("image/group.jpg")}}" alt="">
                    </div>
                    <div class="col-lg-6">
                        <div class="main-text third-color">
                           @lang('site.section1')
                        </div>
                    </div>
                </div>
                <div class="row pt">
                    <div class="col-lg-6">
                        <div class="main-text third-color">
                            @lang('site.section2')
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img src="{{asset("image/group2.jpg")}}" alt="">
                    </div>
                </div>
            </div>
        </div>


    </div>

    <div class="pt">

        <div class="keng-img">
            <img src="{{asset("image/group3.jpg")}}" alt="">
        </div>


    </div>

    <div class="p-100 mb-5" >
        <div class="container-fluid aboutus p-lg-0">
            <div class="row">

                <div class="col-lg-12">
                    <div class="main-text third-color">
                        @lang('site.section3')
                    </div>
                </div>
            </div>
            <div class="row pt">

                <div class="col-lg-6">
                    <div class="main-text third-color">
                        @lang('site.section4')
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{asset("image/group4.jpg")}}" alt="">
                </div>
            </div>
        </div>

    </div>


@endsection
