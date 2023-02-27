<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
@foreach($ds as $n)
    @if($n->course_id == 3)
        <div class="col" >
            <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.4s">
                <div class="about-div">
                    <h3 class="text-center">{{$n->subject_name}}</h3>
                    <hr />
                    <p class="text-center ">{{($n->content)}} </p>
                </div>
            </div>
        </div>
        </div>
    @endif
@endforeach
