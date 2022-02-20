@extends("layouts.app")


@section("content")


    <div class="container-fluid header">
        <div class="row">
            <div class="col-lg-6 part-1 p-0" style="">
                <div class="container-fluid">
                    <div class="col-12 p-0">
                        <div class="header-text header-anim" data-aos="zoom-out-right">
                            @lang('site.main_text')
                        </div>
                    </div>
                    <div class="col-12 part-2 mt-5 px-0">
                        <div class="main-text second-color description-anim" data-aos="zoom-out-right"
                             data-aos-delay="300">
                            @lang('site.description')
                        </div>
                        <div class="container-fluid">
                            <div class="row" style="margin-top: 54px">
                                <a href="{{route('courses.browse')}}" class="mainBtn fill">@lang('site.write_course')</a>
                                <a href="{{route('register')}}" class="mainBtn main-color bg-second fill2 ml-3">@lang('site.contact')</a>
                            </div>
                        </div>

                        <div class="container-fluid" data-aos="zoom-out-right" data-aos-delay="400">
                            <div class="row w-50 justify-content-around">
                                <a href="" class="main-text mt-3 second-color"><img src="{{asset("image/location1.svg")}}"
                                                                               alt=""> {{setting('site.address3')}}</a>
                                <a href="" class="main-text mt-3 second-color"><img src="{{asset("image/location1.svg")}}"
                                                                               alt=""> {{setting("site.address4")}}</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="{{asset("image/main%20photo.png")}}" data-aos="fade-up" style="width: 100%" alt="">
            </div>
            <div class="col-12 part-3 mt-5">
                <div class="main-text second-color">
                    @lang('site.description')
                </div>
                <div class="container-fluid">
                    <div class="row  justify-content-around" style="margin-top: 54px">
                        <a href="{{route('courses.browse')}}" class="mainBtn fill">@lang('site.write_course')</a>
                        <a href="{{route('register')}}" class="mainBtn main-color bg-second fill2 ml-lg-3">@lang('site.contact')</a>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row w-lg-50 mt-3 justify-content-around">
                        <a href="" class="main-text second-color"><img src="{{asset("image/location1.svg")}}"
                                                                       alt="">{{setting('site.address3')}}</a>
                        <a href="" class="main-text second-color"><img src="{{asset("image/location1.svg")}}"
                                                                       alt="">{{setting("site.address4")}}</a>
                    </div>

                </div>
            </div>

        </div>
    </div>


    <div class="container-fluid">

        <div class="row my-5 justify-content-center align-items-center">
            <div class="col-lg-2 col-6">
                <div class="sat">SAT</div>
            </div>
            <div class="col-lg-2 col-6">
                <div class="sat">IELTS</div>
            </div>
            <div class="col-lg-2 col-6">
                <div class="sat">ITPARK</div>
            </div>
            <div class="col-lg-2 col-6">
                <div class="sat">@lang('site.president')</div>
            </div>
            <div class="col-lg-2 col-6 mr-auto mr-lg-0">
                <div class="sat">DTM</div>
            </div>
        </div>


    </div>


    <div class="container about">

        <div class="row my-5 py-lg-5 justify-content-around">
            <div class="col-lg-6 about-inner-lg">
                <div class="content1 position-relative">
                    <img src="{{asset("image/Asset%201%201.png")}}" style="width: 100%" alt="">

                    <div class="content1-inner row justify-content-between">
                        <div class="counter">
                            <div class="h-100"
                                 style="display: flex; align-items: center;height: 100vh;justify-content: center;flex-direction: column;">
                                <p class="main-color main-text mb-0 mt-auto text-center">{{setting('site.bitiruvchilar')}}</p>
                                <p class="main-color text-center t-mini mt-0 mb-auto" style="font-size: 18px">
                                    @lang('site.bitiruvchi')</p>
                            </div>
                        </div>
                        <div class="counter">
                            <div class="h-100"
                                 style="display: flex; align-items: center;height: 100vh;justify-content: center;flex-direction: column;">
                                <p class="main-color main-text mb-0 mt-auto text-center">{{setting('site.student')}}</p>
                                <p class="main-color text-center t-mini mt-0 mb-auto"
                                   style="font-size: 18px">@lang('site.bestudent')</p>
                            </div>
                        </div>
                        <div class="counter">
                            <div class="h-100"
                                 style="display: flex; align-items: center;height: 100vh;justify-content: center;flex-direction: column;">
                                <p class="main-color main-text mb-0 mt-auto text-center">{{setting('site.ball')}}</p>
                                <p class="main-color text-center t-mini mt-0 mb-auto"
                                   style="font-size: 18px">@lang('site.ball')</p>
                            </div>
                        </div>
                        <div class="counter">
                            <div class="h-100"
                                 style="display: flex; align-items: center;height: 100vh;justify-content: center;flex-direction: column;">
                                <p class="main-color main-text mb-0 mt-auto text-center">{{setting('site.foreginer')}}</p>
                                <p class="main-color text-center t-mini mt-0 mb-auto"
                                   style="font-size: 18px">@lang('site.foreigners')</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 slide">
                <div class="main-header header-anim" data-aos="fade-up">@lang('site.about')</div>
                <div class="main-body mt-5 is-splited quote-anim" data-aos="fade-up">
                    @lang('site.main1')<br>
                    @lang('site.main2')

                </div>
                <div class="about-inner-sm">
                    <div class="content1 position-relative">
                        <img src="{{asset("image/Asset%201%201.png")}}" style="width: 100%" alt="">

                        <div class="content1-inner row justify-content-between">
                            <div class="counter">
                                <div class="h-100"
                                     style="display: flex; align-items: center;height: 100vh;justify-content: center;flex-direction: column;">
                                    <p class="main-color main-text mb-0 mt-auto text-center">{{setting('site.bitiruvchilar')}}</p>
                                    <p class="main-color text-center t-mini mt-0 mb-auto" style="font-size: 18px">
                                        @lang('site.bitiruvchi')</p>
                                </div>
                            </div>
                            <div class="counter">
                                <div class="h-100"
                                     style="display: flex; align-items: center;height: 100vh;justify-content: center;flex-direction: column;">
                                    <p class="main-color main-text mb-0 mt-auto text-center">{{setting('site.student')}}</p>
                                    <p class="main-color text-center t-mini mt-0 mb-auto"
                                       style="font-size: 18px">@lang('site.bestudent')</p>
                                </div>
                            </div>
                            <div class="counter">
                                <div class="h-100"
                                     style="display: flex; align-items: center;height: 100vh;justify-content: center;flex-direction: column;">
                                    <p class="main-color main-text mb-0 mt-auto text-center">{{setting('site.ball')}}</p>
                                    <p class="main-color text-center t-mini mt-0 mb-auto"
                                       style="font-size: 18px">@lang('site.ball')</p>
                                </div>
                            </div>
                            <div class="counter">
                                <div class="h-100"
                                     style="display: flex; align-items: center;height: 100vh;justify-content: center;flex-direction: column;">
                                    <p class="main-color main-text mb-0 mt-auto text-center">{{setting('site.foreginer')}}</p>
                                    <p class="main-color text-center t-mini mt-0 mb-auto" style="font-size: 18px">
                                        @lang('site.foreigner')</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="main-footer mt-5">
                    <a href="{{route('about')}}" class="mainBtn fill mt-3">@lang('site.more')</a>
                </div>
            </div>
        </div>


    </div>


    <div class="container-fluid p-100">
        <div class="main-header d-flex" data-aos="fade-up">
            @lang('site.select_course')
            <a href="{{route('courses.browse')}}" class="main-color all-lg mt-auto ml-auto"
               style="font-size: 36px; font-family: Inter">@lang('site.all')</a>
        </div>

        <div class="row mt-1">

            @foreach(\App\Models\Course::latest()->take(6)->get() as $item)
                <div class="col-lg-4  col-6">
                    <div class="subject-card">
                        <div class="d-flex">
                            <div class="subject-img overflow-hidden"><img src="{{imagePath($item->thumbnail)}}"
                                                                          height="100%" style="width: initial" alt="">
                            </div>
                            <div class="subject-content">
                                <div class="subject-header">{{$item->getTranslatedAttribute('name')}}</div>
                                <div
                                    class="subject-info">@lang('site.week') {{$item->weekly}} @lang('site.day') {{$item->hours}} @lang('site.hours') @lang('site.lesson')</div>
                                <div class="subject-body">
                                    100 dan ortiq o’quvchilar 6+ ball olishgan
                                </div>
                                <div class="subject-footer">
                                    {{$item->sum}} @lang('site.sum')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-12">
                <div class="main-color all-sm text-center my-5"
                     style="font-size: 14px; font-family: Inter">@lang('site.all')
                </div>
            </div>
        </div>


    </div>


    <section class="bg-main">
        <div class="p-100">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="main-header text-white header-sm header-anim"
                         data-aos="fade-up">@lang('site.join')</div>

                    <div>
                        <div
                            style="display: flex; flex-wrap: wrap; flex-direction: row; margin-left: -15px; margin-right: -15px; padding: 0 10px">

                            <div class="property col">
                                <div class="circle">
                                    <img src="{{asset("image/rocket.svg")}}" alt="">
                                </div>
                                <div class="main-text text-center main-color">
                                    @lang('site.beforeigner')
                                </div>
                            </div>
                            <div class="property col">
                                <div class="circle">
                                    <img src="{{asset("image/portfolio.svg")}}" alt="">
                                </div>
                                <div class="main-text text-center main-color">
                                    @lang("site.portfolio")
                                </div>
                            </div>
                        </div>
                        <div
                            style="display: flex; flex-wrap: wrap; flex-direction: row; margin-left: -15px; margin-right: -15px; padding: 0 10px">

                            <div class="property col">
                                <div class="circle">
                                    <img src="{{asset("image/clock-fill.svg")}}" alt="">
                                </div>
                                <div class="main-text text-center main-color">
                                    @lang('site.want')
                                </div>
                            </div>
                            <div class="property col">
                                <div class="circle">
                                    <img src="{{asset("image/quest.svg")}}" alt="">
                                </div>
                                <div class="main-text text-center main-color">
                                    @lang('site.select_university')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="main-header text-white header-lg header-anim"
                         data-aos="fade-up">@lang('site.join')</div>
                    <p class="p second-color mt-5 " data-aos-delay="200" data-aos="zoom-out">
                        @lang('site.mehmon')
                    </p>

                    <div class="mt-5">
                        <a href="{{route('courses.browse')}}" class="mainBtn fill">@lang('site.write_course')</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="p-100 mt-5" style="padding-right: 15px">

        <div class="row">
            <div class="col-lg-5">
                <div class="main-header header-anim" data-aos="fade-up">@lang('site.student_result')</div>
                <div class="main-body" style="margin-top: 25px" data-aos="fade-up">
                    @lang('site.after')
                </div>
            </div>
            <div class="col-lg-7 mt-4">
                <div class="owl-carousel student-home  owl-theme">

                    @foreach(\App\Models\Student::latest()->take(6)->get()  as $item)

                        <div class="item p-lg-5">
                            <div class="student" data-aos="fade-up">
                                <div class="d-flex">
                                    <div class="student-avatar">
                                        <img src="{{imagePath($item->image)}}" alt="">
                                    </div>
                                    <div style="margin-left: 20px">
                                        <div class="student-name">{{$item->getTranslatedAttribute('fullname')}}</div>
                                        <div class="main-text t-mini main-color">{{$item->getTranslatedAttribute('universitet')}}</div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between" style="margin-top: 36px">
                                    <div class="student-subject">IELTS <b>{{$item->ielts}}</b></div>
                                    <div class="student-subject">{{$item->main_subject}} <b>{{$item->main_subject_ball}}
                                            /30</b></div>
                                    <div class="student-subject">DTM<b>{{$item->dtm}} ball</b></div>
                                </div>
                                <div class="text" style="margin-top: 25px">
                                    {{$item->getTranslatedAttribute('comment')}}
                                </div>
                            </div>
                        </div>

                    @endforeach
                </div>

                <div class="mt-80 mb-3" style="margin-left: 60px;">
                    <a href="{{route('results.browse')}}" class="mainBtn fill">@lang('site.more')</a>
                </div>
            </div>
        </div>


    </div>


    <div class="p-100" style="padding-top: 0">

        <div class="mega-header text-center" data-aos="fade-up">@lang('site.ready')</div>

        <div class="row">

            @foreach(\App\Models\Subject::latest()->take(3)->get() as $item)

                <div class="col-lg-4" data-aos="fade-up">
                    <div class="subject-1">
                        <div class="main-text text-uppercase main-color text-center">{{$item->getTranslatedAttribute('name')}}</div>
                        <div class="subject-name">{{$item->sum}} SUM <span style="opacity: 0.7; font-size: 26px">/oy</span>
                        </div>
                        @if($item->property1)
                        <div class="var"><img src="{{asset("image/check-circle.svg")}}" alt="">
                            <div class="var-text">{{$item->getTranslatedAttribute('property1')}}</div>
                        </div>
                        @endif
                        @if($item->property2)
                            <div class="var"><img src="{{asset("image/check-circle.svg")}}" alt="">
                                <div class="var-text">{{$item->getTranslatedAttribute('property2')}}</div>
                            </div>
                        @endif
                        @if($item->property3)
                            <div class="var"><img src="{{asset("image/check-circle.svg")}}" alt="">
                                <div class="var-text">{{$item->getTranslatedAttribute('property3')}}</div>
                            </div>
                        @endif
                        @if($item->property4)
                            <div class="var"><img src="{{asset("image/check-circle.svg")}}" alt="">
                                <div class="var-text">{{$item->getTranslatedAttribute('property4')}}</div>
                            </div>
                        @endif
                        @if($item->property5)
                            <div class="var"><img src="{{asset("image/check-circle.svg")}}" alt="">
                                <div class="var-text">{{$item->getTranslatedAttribute('property5')}}</div>
                            </div>
                        @endif

                    </div>
                </div>
            @endforeach
            <div class="col-12">
                <div class="text-center mt-80 mb-4">
                    <a href="{{route('courses.browse')}}" class="mainBtn fill">@lang('site.write_course')</a>

                </div>
            </div>
        </div>


    </div>




@endsection
