<!-- This is NAVBAR here!-->
<nav  class="navbar  navbar-expand-lg navbar-dark">
    <button class="navbar-toggler collapsed border-0" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true"
            aria-label="Toggle navigation">
        <span class="icon-bar top-bar"></span>
        <span class="icon-bar middle-bar"></span>
        <span class="icon-bar bottom-bar"></span>
    </button>
    <a class="navbar-brand" data-aos="fade-right"
       data-aos-easing="ease-in-sine"  href="/"><img height="90" src="{{asset('image/Logo.png')}}" alt=""></a>
    <a class="contactBtnSm fill" href="{{route('register')}}">@lang('site.contact')</a>


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item {{set_active('about')}}"  data-aos="fade-right"
                data-aos-easing="ease-in-sine"  data-aos-delay="100">
                <a class="nav-link"  href="{{route("about")}}">@lang('site.about')</a>
            </li>
            <li class="nav-item {{set_active('news')}}"  data-aos="fade-right"
                data-aos-easing="ease-in-sine"  data-aos-delay="150">
                <a class="nav-link" href="{{route("news.browse")}}">@lang('site.news')</a>
            </li>
            <li class="nav-item {{set_active('courses')}}"  data-aos="fade-right"
                data-aos-easing="ease-in-sine"  data-aos-delay="200">
                <a class="nav-link" href="{{route("courses.browse")}}">@lang('site.course')</a>
            </li>
            <li class="nav-item {{set_active('results')}}"  data-aos="fade-right"
                data-aos-easing="ease-in-sine"  data-aos-delay="250">
                <a class="nav-link" href="{{route("results.browse")}}">@lang('site.results')</a>
            </li>

            <li class="nav-item dropdown lang"  data-aos="fade-right"
                data-aos-easing="ease-in-sine" data-aos-delay="300" >
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-expanded="false">
                    {{app()->getLocale()}}
                </a>
                <div class="dropdown-menu border-white shadow bg-main" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item bg-main text-white" href="{{changeLang('uz')}}">Uzb</a>
                    <a class="dropdown-item bg-main text-white" href="{{changeLang('ru')}}">Rus</a>
                </div>
            </li>
            <li class="nav-item contactBtnLg"  data-aos-delay="350" data-aos="fade-right"
                data-aos-easing="ease-in-sine" >
                <a href="{{route('register')}}" class="nav-link fill mainBtn">@lang('site.contact')</a>
            </li>
        </ul>
    </div>
</nav>
<!-- This is the end of the NAVBAR here!-->
