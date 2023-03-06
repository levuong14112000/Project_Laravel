@extends('detailkhoahoc')
@section("lessionsview")
<div class="d-flex flex-column">
    <div style="display: flex; justify-content: center;"">
        @foreach($vd as $v)
        <img class="img-thumbnail" style="height: 208.96px;" src="{{asset('img/sub/'.$v->picture)}}" alt="">
        @endforeach
    </div>
        @foreach($ls as $l)
        <li>{{$l->lession_name}}</li>
        @endforeach
    </div>
</div>

@endsection