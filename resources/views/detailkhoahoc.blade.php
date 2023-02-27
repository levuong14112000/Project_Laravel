@extends('layout.main')
@section("content")
@foreach($ds as $n)

<div id="course-sec" class="container set-pad">
    <div class="col" >
        <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.4s">
            <div class="about-div">
                <h3 class="text-center">{{$n->subject_name}}</h3>
                <hr />
                <p class="text-center content-detail">{{($n->content)}} </p>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection