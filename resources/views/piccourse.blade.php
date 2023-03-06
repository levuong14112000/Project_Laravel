@extends('detailkhoahoc')
@section("piccourseshow")
@foreach($anhkhoahocid as $a)
<div class="hand"><img class="img-thumbnail" style="height: 208.96px;" src="{{asset('img/khoahoc/'.$a->picture)}}" alt=""></div>
@endforeach
@endsection
