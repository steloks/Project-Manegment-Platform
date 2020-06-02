@extends('clientArea.layout')

@section('head-tags')
    <title>Example</title>
@endsection

@section('top-header')
    @include('clientArea.partials.top-header',['page'=>'project-home'])
@endsection

@section('content')
<div class="project-calendar">
<div class="container-fluid">
    <div class="left main-box">

    </div>
    <div class="right main-box">
        <div class="backlog">
            <div class="header">
                <span>Date</span>
                <button class="btn">+ Add Task</button>
            </div>
            <div class="tasks">
                <div class="task">
                    <div class="task-name">
                        <button class="btn"><i class='bx bx-check'></i></button>
                        <span class="name">
                            E-mail after registration so that I can confirm my address
                        </span>
                    </div>
                    <div class="task-to">
                        <img src="{{asset('images/Pic.jpg')}}" class="asign-img">
                        <span class="type">DEVELOPMENT</span>
                    </div>
                </div>
                <div class="task">
                    <div class="task-name">
                        <button class="btn"><i class='bx bx-check'></i></button>
                        <span class="name">
                            E-mail after registration so that I can confirm my address
                        </span>
                    </div>
                    <div class="task-to">
                        <img src="{{asset('images/Pic.jpg')}}" class="asign-img">
                        <span class="type">DEVELOPMENT</span>
                    </div>
                </div>
                <div class="task">
                    <div class="task-name">
                        <button class="btn"><i class='bx bx-check'></i></button>
                        <span class="name">
                            E-mail after registration so that I can confirm my address
                        </span>
                    </div>
                    <div class="task-to">
                        <img src="{{asset('images/Pic.jpg')}}" class="asign-img">
                        <span class="type">DEVELOPMENT</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--        <div class="col-6 leftcol">--}}
{{--            ss--}}
{{--        </div>--}}
{{--        <div class="col-4 rightcol">--}}
{{--            <div class="sec-1">--}}
{{--                <div class="header">--}}
{{--                    <h1>Backlog</h1>--}}
{{--                    <button>+ Add Task</button>--}}
{{--                </div>--}}
{{--                <div class="tasks">--}}
{{--                    <div class="task">--}}
{{--                        <div class="task-name">--}}
{{--                            <button><i class='bx bx-check' ></i></button>--}}
{{--                            <span class="name">--}}
{{--                                E-mail after registration so that I can confirm my address--}}
{{--                            </span>--}}
{{--                        </div>--}}
{{--                        <div class="task-to">--}}
{{--                            <img src="{{asset('images/Pic.jpg')}}" class="asign-img">--}}
{{--                            <span class="type">Development</span>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                    <div class="task">--}}
{{--                        <div class="task-name">--}}
{{--                            <button><i class='bx bx-check' ></i></button>--}}
{{--                            <span class="name">--}}
{{--                                E-mail after registration so that I can confirm my address--}}


{{--                            </span>--}}
{{--                        </div>--}}
{{--                        <div class="task-to">--}}
{{--                            <img src="{{asset('images/Pic.jpg')}}" class="asign-img">--}}
{{--                            <span class="type">Development</span>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                    <div class="task">--}}
{{--                        <div class="task-name">--}}
{{--                            <button><i class='bx bx-check' ></i></button>--}}
{{--                            <span class="name">--}}
{{--                                E-mail after registration so that I can confirm my address--}}
{{--                            </span>--}}
{{--                        </div>--}}
{{--                        <div class="task-to">--}}
{{--                            <img src="{{asset('images/Pic.jpg')}}" class="asign-img">--}}
{{--                            <span class="type">Development</span>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}


</div>
</div>
@endsection

@section("extra-js")
    <script>
        $(function () {

        });
    </script>
@endsection
