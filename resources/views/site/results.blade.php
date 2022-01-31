@extends("layouts.app")

@section('content')

    <div class="p-100">
        <div class="main-header">@lang('site.student_result')</div>

        <div class="dropdown result-year">
            <button class="btn main-text shadow-none main-color dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                {{$year}} @lang('site.result')
            </button>
            <div class="dropdown-menu bg-main" aria-labelledby="dropdownMenu2">
                @foreach($years as $item)
                    <form action="{{route('results.browse')}}" method="get">
                        @csrf
                        <input type="hidden" name="year" value="{{$item}}">
                        <button class="dropdown-item bg-main color-yellow main-text" type="submit">{{$item  }}</button>
                    </form>
                @endforeach
            </div>
        </div>
        <div class="main-text m-4 main-color">{{($page-1)*9+1}}-{{($page-1)*9 + count($students)}} / {{count($all)}}</div>
        <div class="container-fluid p-lg-0">
            <div class="row">
                @forelse($students as $student)
                    <div class="col-12" data-aos="fade-up">
                        <div class="student-result">
                            <div class="container-fluid">
                                <div class="row justify-content-between">
                                    <div class="col-lg-3 col-6">
                                        <div class="student-img"><img src="{{imagePath($student->image)}}" alt=""></div>
                                    </div>
                                    <div class="col-lg-4 col-6">
                                        <div class="owl-carousel student-tests owl-theme">
                                            @foreach(json_decode($student->results) as $test)
                                                <div class="item">
                                                    <a href="{{imagePath($test)}}" download  class="d-block">
                                                        <div class="test-sheet">
                                                            <span class="title-hover"><i class="fa fa-download" aria-hidden="true"></i></span>

                                                            <img src="{{imagePath($test)}}" alt="">
                                                        </div>
                                                    </a>
                                                </div>

                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col-lg-5 ">

                                        <div class="result-info">
                                            <div class="student-name">{{$student->fullname}}</div>
                                            <div class="student-university">
                                                {{$student->universitet}}
                                            </div>
                                            <div class="student-text p">
                                                {{$student->comment}}
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="main-text main-color container text-center mt-5">@lang('site.nothing')</div>

                @endforelse

            </div>
        </div>

        <div class="paginations">
            {{ $students->appends(['year' => $year])->links() }}
        </div>
    </div>


@endsection





