<footer class="bg-main">

    <div class="p-100" style="padding-top: 30px">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 p-lg-0">
                    <a href=""><img src="{{asset("image/logo-white.svg")}}" alt=""></a>
                    <div class="footer-left">

                        <a href="tel: {{setting('site.phone1')}}" class="p footer-link">{{setting('site.phone1')}}</a>
                        <a href="tel: {{setting('site.phone2')}}" class="p  footer-link">{{setting('site.phone2')}}</a>
                        <a href="" class="p  footer-link">{{setting('site.address1')}}</a>
                        <a href="" class="p  footer-link">{{setting('site.address2')}}</a>
                    </div>
                </div>
                <div class="col-lg-9 p-0">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="footer-header">@lang('site.center')</div>
                                <a href="{{route('about')}}" class="p  footer-link">@lang('site.about')</a>
                                <a href="{{route('about')}}" class="p  footer-link">@lang('site.comments') </a>
                                <a href="{{route('about')}}" class="p  footer-link">@lang('site.students')</a>

                            </div>

                            <div class="col-lg-3">
                                <div class="footer-header">@lang('site.course')</div>
                                <a href="{{route('courses.browse')}}" class="p  footer-link">@lang('site.tutors')</a>
                                <a href="{{route('courses.browse')}}" class="p  footer-link">@lang('site.course') </a>
                                <a href="{{route('courses.browse')}}" class="p  footer-link">@lang('site.president') </a>

                            </div>
                            <div class="col-lg-3">
                                <div class="footer-header">@lang('site.news')</div>
                                <a href="{{route('news.browse')}}" class="p  footer-link">@lang('site.tadbirlar')</a>
                                <a href="{{route('news.browse')}}" class="p  footer-link">@lang('site.results')</a>
                                <a href="{{route('news.browse')}}" class="p  footer-link">@lang('site.actions')</a>

                            </div>
                            <div class="col-lg-3">
                                <div class="footer-header">@lang('site.social_networks')</div>
                                <a href="{{setting('site.telegram')}}" class="p  footer-link"><i class="fab fa-telegram text-white" style="margin-right: 10px"></i>Telegram</a>
                                <a href="{{setting('site.youtube')}}" class="p  footer-link"><img src="{{asset("image/youtube.svg")}}"
                                                                       style="margin-right: 10px" alt="">YouTube</a>
                                <a href="{{setting('site.instagram')}}" class="p  footer-link"><img src="{{asset("image/instagram.svg")}}"
                                                                       style="margin-right: 10px" alt="">Instagram</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</footer>
