@extends('detailkhoahoc')
@section("lessionsview")
<div>
@foreach($ls as $s)
<h3>{{$s->lession_name}}</h3>
@endforeach
</div>
@endsection