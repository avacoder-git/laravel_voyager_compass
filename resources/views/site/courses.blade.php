@extends('layouts.app')


@section('content')

    <div class="p-100">
        <div class="main-header">@lang('site.select_course')</div>

        <div class="container-fluid p-0">
            <div class="row">
                @foreach($courses as $course)
                    <div class="col-lg-4 col-6" data-aos="fade-up">
                        <div class="course mt-lg-5 mt-3 ">
                            <div class="course-img">
                                <img src="{{imagePath($course->thumbnail)}}" alt="">
                            </div>
                            <div class="main-text mt-4  px-2 main-color">
                                {{$course->name}}
                            </div>
                            <div class="container-fluid lg-view main-color px-2 p-0">
                                <div class="row mt-2">
                                    <div class="col-4 p ">@lang('site.week')</div>
                                    <div class="col-4 p ">| {{$course->weekly}} @lang('site.ta')</div>
                                    <div class="col-4 p ">{{$course->sum}}</div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-4 p ">@lang('site.lesson')</div>
                                    <div class="col-4 p ">| {{$course->hours}} @lang('site.hours')</div>
                                    <div class="col-4 p ">@lang('site.sum')</div>
                                </div>
                            </div>
                            <div class="d-lg-none px-2 mt-2 d-sm-block main-color">
                                <div class="p">
                                    @lang('site.week') {{$course->weekly}} kun <br>
                                    {{$course->hours}} @lang('site.hours') @lang('site.lesson')
                                </div>
                                <div class="main-text mt-2">
                                    {{$course->sum}} @lang('site.sum')
                                </div>
                            </div>
                            <div class="text mt-3 lg-view px-2">
                                {{$course->description}}
                            </div>
                            <div class="p-2">
                                <button class="add course-{{$course->id}}" data-id="{{$course->id}}">@lang('site.add') +</button>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>


        </div>

        <div class="paginations">
            {{ $courses->links() }}
        </div>
    </div>

    <form action="{{route('register')}}" method="get">
        @csrf
        <input type="hidden" name="items" id="items">
        <button type="submit" class="register fill mainBtn">@lang('site.register') <span class="reg-count"></span></button>

    </form>


@endsection


@section('script')

    <script>
        var storedArray = JSON.parse(sessionStorage.getItem("items"))??[0];//no brackets
        for (i = 0; i < storedArray.length; i++) {
            @foreach($courses as $course)
            if ($(".course-{{$course->id}}").data("id") == storedArray[i]){
                toggleAdd(".course-{{$course->id}}")
            }
            @endforeach
        }
        count(storedArray)
        $(".add").click(function (){
            var id = $(this).data("id")

            storedArray = JSON.parse(sessionStorage.getItem("items"))??[0]//no brackets

            if ( !storedArray.includes(id)){
                storedArray.push(id)
            }else{
                storedArray = storedArray.filter(data => data != id);
            }
            sessionStorage.setItem("items", JSON.stringify(storedArray));
            $('#items').val(JSON.stringify(storedArray))
            count(storedArray)

        })



        function toggleAdd(className){
            var text = '@lang('site.added') <i class="fas fa-check"></i>'
            $(className).toggleClass('added')
            if (!$(className).hasClass("added")){
                $(className).html("@lang('site.add') +")
            }else {
                $(className).html(text)
            }
        }

        function count(arr){
            if (arr.length==1){
                var text = "";
            }else {
                var text = "("+(storedArray.length-1) + ")";
            }
            $('.reg-count').text(text);
        }
        $('#items').val(JSON.stringify(storedArray))


    </script>


@endsection
