@extends('student.layout.auth')
<style>
    .star-rating {
        line-height:32px;
        font-size:1.25em;
    }
    .y{color: yellow;}
    .o{color: #8c8c8c;}
</style>

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Feedbacks for Teacher : {{$teacher->name}}
                    </div>

                    <div class="panel-body">
                        @foreach($feedbacks as $feedback)
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        <label for="rating" class="col-md-4 control-label">Student  : {{$feedback->name}}</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        <label for="rating" class="col-md-4 control-label">Rating  : </label>
                                        <div class="star-rating">
                                            @for($i=0;$i<$feedback->rating;$i++)
                                                    <span class="fa fa-star y" data-rating="{{$feedback->id +$i}}"></span>
                                                @endfor
                                            @for($i=$feedback->rating;$i<5;$i++)
                                                    <span class="fa fa-star o" data-rating="{{$feedback->id}}"></span>
                                                @endfor
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="feedback" class="col-md-4 control-label">Feedback  : </label>
                                    <div class="col-md-6">
                                        <label for="feedback">{{$feedback->feedback}}</label>
                                    </div>
                                </div>
                            @endforeach
                        @if(sizeof($feedbacks)==0)
                            <h1 style="color: red;"> There is no feedbacks for this teacher.</h1>
                            @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection