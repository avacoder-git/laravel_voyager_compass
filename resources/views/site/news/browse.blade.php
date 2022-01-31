@extends("layouts.app")

@section("content")

    <div class="p-100">
        <div class="main-header" data-aos="fade-up">@lang('site.news')</div>


        <div class="container-fluid p-lg-0">
            <div class="row">
                @foreach($news as $new)
                    <div class="col-12"  data-aos="fade-up">
                        <a href="{{route("news.index", $new)}}" class="d-block">
                            <div class="news row">
                                <div class="new-img col-lg-4 p-0"><img src="{{asset("storage/$new->thumbnail")}}" alt=""></div>
                                <div class="news-body col-lg-8">
                                    <div class="news-header">{{$new->title}}</div>
                                    <div class="news-text" >
                                        {!! Str::limit($new->body, 200) !!}
                                    </div>

                                    <div class="news-footer">
                                        <div class="main-text batafsil third-color">@lang('site.more')</div>
                                        <div class="p third-color">
                                            {{changeDateFormate($new->created_at)}}
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </a>
                    </div>
                @endforeach

            </div>
        </div>


    </div>



@endsection
