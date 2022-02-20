@extends("layouts.app")

@section("style")
    <link rel="stylesheet" href="{{asset("css/news.css")}}">
@endsection


@section("content")






    <div class="p-100">

        <div class="main-header" data-aos="fade-up">Yangiliklar</div>

        <div class="pt-80">
            <div class="subject-name second-color">{{$news->getTranslatedAttribute('title')}}
            </div>
        </div>

        <div class="content">
            {!! $news->getTranslatedAttribute('body') !!}

        </div>


        <div class="pt-80 ml-auto text-right main-text second-color">
            {{changeDateFormat($news->created_at)}}
        </div>

        <div class="container-fluid p-lg-0">
            <div class="row">
                @foreach($all as $new)
                    <div class="col-12" data-aos="fade-up">
                        <a href="{{route("news.index", $new)}}" class="d-block">
                            <div class="news row">
                                <div class="new-img col-lg-4 p-0"><img src="{{asset("storage/$new->thumbnail")}}"
                                                                       alt=""></div>
                                <div class="news-body col-lg-8">
                                    <div class="news-header">{{$new->title}}</div>
                                    <div class="news-text">
                                        {!! Str::limit($new->body, 200) !!}
                                    </div>

                                    <div class="news-footer">
                                        <div class="main-text batafsil third-color">Batafsil</div>
                                        <div class="p third-color">
                                            {{changeDateFormat($new->created_at)}}
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
@section('script')

    <script>
        if ($(window).width() < 600) {
            $('.content img').attr("width", "100%")
            $('.content img').attr("height", "")
        }


    </script>

@endsection
