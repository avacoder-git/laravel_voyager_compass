@extends("layouts.app")

@section("content")


    <div class="pt-lg-5 pt-3">
        <div class="container ">
            <div class="main-header text-center">@lang('site.register')</div>

            <div class="pt-lg-5">
                <div class="d-lg-flex">
                    @foreach($courses  as $course)
                        <form action="{{route('register')}}" method="get">
                            @csrf
                            <input type="hidden" name="items" value="{{del_element_from_array($course->id, $courses)}}">
                            <button class="fan fan-{{$course->id}}" data-id="{{$course->id}}">
                                {{$course->name}} <img src="{{asset('image/x-circle.svg')}}" alt="">
                            </button>
                        </form>
                    @endforeach
                    <a href="{{route('courses.browse')}}" class="add-fan">@lang('site.add_subject')</a>
                </div>
            </div>

            <form action="{{route("register.post")}}" method="post" class="register-form">
                @csrf
                <input type="hidden" name="items" value="{{del_element_from_array('', $courses)}}">
                <div class="">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="name" class="main-text main-color d-block">@lang('site.name')*</label>
                                <input type="text" id="name" required name="name">
                            </div>
                            <div class="col-lg-6">
                                <label for="lastname" class="main-text main-color d-block">@lang('site.lastname')*</label>
                                <input type="text" required id="lastname" name="lastname">
                            </div>
                            <div class="col-lg-6">
                                <label for="phone" class="main-text main-color d-block">@lang('site.phone')*</label>
                                <input type="text" required id="phone" name="phone" placeholder="+998 (90) 123-45-67">
                            </div>
                            <div class="col-lg-6">
                                <label for="address" class="main-text main-color d-block">@lang('site.address')*</label>
                                <input type="text" required id="address" name="address" placeholder="14 Daha">
                            </div>
                            <div class="col-lg-12">
                                <label for="info" class="main-text main-color d-block">@lang('site.info_yourself')</label>
                                <textarea
                                    placeholder="@lang('site.yourself_placeholder')"
                                    name="description" id="info" cols="30" rows="5"></textarea>
                            </div>

                            <div class="mt-60 w-100 mb-5 row justify-content-center">
                                <a href="{{route('register')}}" style="text-decoration: underline"
                                   class="d-block my-auto ml-auto mr-5 main-text text-danger">@lang('site.cancel')</a>
                                <button type="submit" class="mainBtn fill ml-5 mr-auto d-block">@lang('site.send')</button>

                            </div>
                        </div>
                    </div>
                </div>

            </form>

        </div>
    </div>


@endsection

@section('script')

    <script>
        $('.fan').click(function (){
            var storedArray =[0];//no brackets
            storedArray = storedArray.concat(JSON.parse(sessionStorage.getItem("items"))??[0]);//no brackets
            var id = $(this).data('id')
            storedArray = del_element_from_array(id, storedArray)
            sessionStorage.setItem("items", JSON.stringify(storedArray))
        })

        function del_element_from_array(id, arr){
            var index = arr.indexOf(id)
            var arr1 = [0]
            arr2 = arr.splice(index)
            return arr1.concat(arr2)
        }
    </script>


@endsection
