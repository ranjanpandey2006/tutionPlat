@extends('student.layout.auth')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Feedback</div>

                    <div class="panel-body">
                        <h1 style="color: red">OOPS! Feedback failed, You might have already given a feedback</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
