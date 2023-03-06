@extends('layout.main')
@section("content")
<div class="container">
    <div class="row">
        @foreach($ds as $n)
        <div class="col-lg-4">
            <div class="about-div">
                <a href="{{route('lsshow',[$n->course_id,$n->subject_id])}}">
                    <h3 class="text-center">{{$n->subject_name}}</h3>
                </a>
                <p class="text-center content-detail">{{($n->content)}} </p>
            </div>
        </div>
        @endforeach
    </div>
    <hr>
    <div class="row">
        <div class="col-8">
            <div id="course-sec" class="container set-lessions">

                <!-- @yield('piccourseshow') -->
                @yield('lessionsview')

            </div>
        </div>
    </div>



</div>

@endsection